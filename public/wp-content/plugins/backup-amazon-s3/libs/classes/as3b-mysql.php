<?php
if (!class_exists('as3b_mysql')) {
    class as3b_mysql {

        public $host = '';
        public $db = '';
        public $user = '';
        public $password = '';
        public $dbh ;
        public $log = array();

        public function connect() {
            main::log("----------------------------------------------------");
            main::log( lang::get('Connecting to MySQL...' , false) );
            if (! class_exists('wpdb')) {
                require_once ABSPATH . '/' . WPINC . '/wp-db.php';
            }
            $this->dbh = new wpdb( $this->user, $this->password, $this->db, $this->host );
            $errors = $this->dbh->last_error;
            if ($errors) {
                $this->setError( lang::get('MySQL Connect failed: ' , false) . $errors);
            }
            return $this->dbh;
        }

        public function optimize() {
            main::log( lang::get('Optimize Database Tables was started' , false) );
            $n = $this->dbh->query('SHOW TABLES');
            $result = $this->dbh->last_result;
            if (!empty( $this->dbh->last_error ) && $n > 0) {
                $this->setError($this->dbh->last_error);
            } else {
                for($i = 0; $i < $n; $i++ ) {
                    $res = array_values( get_object_vars( $result[$i] ) );
                    $this->dbh->query('OPTIMIZE TABLE '. $res[0]);
                    if (!empty( $this->dbh->last_error ) ) {
                        $log = str_replace('%s', $res[0], lang::get('Error to Optimize Table `%s`' , false) );
                        main::log($log);
                    } else {
                        $log = str_replace('%s', $res[0], lang::get('Optimize Table `%s` was successfully' , false) );
                        main::log($log);
                    }
                }
                main::log( lang::get('Optimize Database Tables was Finished' , false) );
            }

        }

        public function backup($filename) {
            main::log( lang::get('MySQL of Dump was started' , false) );
            $tables = array();
            $n = $this->dbh->query('SHOW TABLES');
            $result = $this->dbh->last_result;
            if (!empty( $this->dbh->last_error ) && $n > 0) {
                $this->setError($this->dbh->last_error);
            } 
            for($i = 0; $i < $n; $i++ ) {
                $row = array_values( get_object_vars( $result[$i] ) );
                $tables[] = $row[0];
            }

            $return = '';
            foreach($tables as $table)
            {
                $log = str_replace('%s', $table, lang::get('Add a table "%s" in the database dump' , false) );
                main::log( $log );
                $num_fields = $this->dbh->query('SELECT * FROM ' . $table);
                $result = $this->dbh->last_result;
                if (!empty( $this->dbh->last_error ) && $n > 0) {
                    $this->setError($this->dbh->last_error);
                }
                $return.= 'DROP TABLE ' . $table.';';

                $ress = $this->dbh->query('SHOW CREATE TABLE ' . $table);
                $result2 = $this->dbh->last_result;
                if (!empty( $this->dbh->last_error ) && $n > 0) {
                    $this->setError($this->dbh->last_error);
                }
                $row2 = array_values( get_object_vars( $result2[0]  ) );
                $return.= "\n\n".$row2[1].";\n\n";
                if ($num_fields > 0) {
                    for ($i = 0; $i < $num_fields; $i++)
                    {
                        $row = array_values( get_object_vars( $result[$i] ) );
                        //main::log('row' . print_r($row, 1));
                        $rows_num = count($row);
                        if ($rows_num > 0) {
                            $return.= 'INSERT INTO '.$table.' VALUES(';
                            for($j=0; $j < $rows_num; $j++)
                            {
                                $row[$j] = addslashes($row[$j]);
                                $row[$j] = str_replace("\n","\\n",$row[$j]);
                                if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                                if ($j<($rows_num-1)) { $return.= ','; }
                            }
                            $return.= ");\n";
                        }

                    }
                }
                $return.="\n\n\n";
            }
            unset($this->dbh);
            $handle = fopen($filename,'w+');
            fwrite($handle,$return);
            fclose($handle);
            main::log( lang::get('MySQL of Dump was finished' , false) ); 
            return true;
        }

        private function setError($txt)
        {
            throw new Exception($txt);
        }

        public function restore($file)
        {
            main::log( lang::get('Restore Database was started' , false) );
            $fo = fopen($file, "r");
            if (!$fo) {
                main::log( lang::get('Error in open file dump' , false) );
                $this->setError( lang::get('Error in open file dump' , false) );
                return false;
            }
            $sql = "";
            while(false !== ($char = fgetc($fo))) {
                $sql .= $char;
                if ($char == ";") {
                    $char_new = fgetc($fo);
                    if ($char_new !== false && $char_new != "\n") {
                        $sql .= $char_new;
                    } else {
                        $ress = $this->dbh->query($sql);
                        //$log = $this->parseMysql($sql);
                        if ( !empty( $log['message'] ) ) {
                            main::log( lang::get( str_replace("%s", $log['table'], $log['message'] ), false ) );
                        }
                        if (!empty( $this->dbh->last_error ) && $n > 0) {
                            $this->setError($this->dbh->last_error);
                            main::log(lang::get('MySQL Error: ' , false) . $this->dbh->last_error);
                            break;
                        };
                        $sql = "";
                    }
                }
            }
            main::log(lang::get('Restore Database was finished' , false));  
        }
        function parseMysql($sql)
        {
            $msg = $table = '';
            $res = array();
            if( stripos($sql, "create") ) {
                preg_match("/create table [`]{0,1}([a-zA-Z_]+)[`]{0,1}/i", $sql, $res);
            } elseif( stripos($sql, "drop") ) {
                preg_match("/drop table [`]{0,1}([a-zA-Z_]+)[`]{0,1}/i", $sql, $res);
            } elseif( stripos($sql, "insert") ) {
                preg_match("/insert into [`]{0,1}([a-zA-Z_]+)[`]{0,1}/i", $sql, $res);
            } 
            if (isset($res[1])) {
                $table = $res[1];
            }
            if (!empty($table) && !isset($this->log['create'][$table])) {
                $msg = 'Create to `%s`';
                $this->log['create'][$table] = 1;
            }
            if (!empty($table) && !isset($this->log['drop'][$table])) {
                $msg = 'Drop to `%s`';
                $this->log['drop'][$table] = 1;
            }
            if (!empty($table) && !isset($this->log['insert'][$table])) {
                $msg = 'Insert to `%s`';
                $this->log['insert'][$table] = 1;
            }

            return array('message' => $msg, 'table' => $table);
        }
    }
}

