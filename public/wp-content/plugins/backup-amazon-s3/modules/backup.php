<?php
class backup extends module_as3b {

    public $name = '';
    public $dirs = array();
    public $size = '';
    private $minus_path = array();
    private $dir_backup = '';
    private $max_size_archive = 900000;  // bytes
   
    public function run()
    {
        try {
            main::log( lang::get( 'Start Backup process...', false ) );
            $this->init();
            $db_param = $this->getDBParams();
            $mysql = $this->incMysql();
            if (isset($this->params['optimize'])) {
                main::log( lang::get('Optimize Database Tables', false));
                $mysql->optimize();
            }
            $mysql->backup($this->db_file);
            if (filesize($this->db_file) == 0) {
                throw new Exception( lang::get('Error in create dump Database: Chance of a lack of rights for the backup.', fale) ); 
            } else {
                $size_dump = round( (filesize($this->db_file) / 1024 / 1024) , 2);
                main::log( str_replace('%s', $size_dump, lang::get( 'Database Dump was successfully created( %s Mb):', false) ) . str_replace( ABSPATH, '', $this->db_file ) );
            }
            $files = $this->createListFiles();
            $files[] = $this->db_file;
            if( ( $n = count($files) ) > 0) {
                include main::getPluginDir() . "/libs/pclzip.lib.php";
                $archive = $this->dir_backup . '/' . $this->getArchive($this->name);  
                $zip = new PclZip($archive);
                main::log( lang::get('Add files to Backup', false) );
                main::log( lang::get('Create part ', false) . basename($archive) );
                for($i = 0; $i < $n; $i++) {
                    if (file_exists($archive) && filesize($archive) > $this->max_size_archive ) {
                        unset($zip);
                        $archive = $this->dir_backup . '/' . $this->getNextArchive( $this->name );
                        main::log( lang::get('Create part ', false) . basename($archive) );
                        $zip = new PclZip($archive); 
                    }
                    $zip->add($files[$i], PCLZIP_OPT_REMOVE_PATH, ABSPATH);
                    $this->saveMd5($files[$i], $archive);
                }
                // delete dump db
                main::log( lang::get('Remove dump Database with folder', false) );
                main::remove($this->db_file);

                $dirs = readDirectrory( $this->dir_backup, array('.zip', '.md5') );
                $size = 0;
                if ( ( $n = count($dirs) ) > 0) {
                    for($i = 0; $i < $n; $i++) {
                        $size += filesize($dirs[$i]);
                        $dirs[$i] = basename($dirs[$i]);
                    }
                }
                $sizeMb = round( $size / 1024 / 1024, 2) ; // MB
                main::log( str_replace('%s', $sizeMb, lang::get( 'Backup created is finish ( %s Mb)', false ) ) ); 
                $this->dirs = $dirs;
                $this->size = $size;
            }
        } catch (Exception $e) {
            $this->setError($e->message);
        }

    }
    private function saveMd5($file, $zip_file)
    {
        if ($this->md5_file) {
            file_put_contents($this->md5_file, $file . "\t" . md5_file($file) . "\t" . basename($zip_file) . "\n", FILE_APPEND);
        }
    }
    public function checkBackup()
    {
        $archives = glob("{$this->dir_backup}");
        if (empty($archives) && count($archives) <= 1) {
            return false;
        }
        $n = count($archives);
        $f = "{$this->name}({$n})";
        return $f;
    }

    private function getArchive($name)
    {
        $archives = glob($this->dir_backup . "/{$name}-*.zip");
        if (empty($archives)) {
            return "{$name}-1.zip";
        }
        $n = count($archives);
        $f = "{$name}-{$n}.zip";
        return $f;
    }

    private function getNextArchive($name)
    {
        $archives = glob($this->dir_backup . "/{$name}-*.zip");
        $n = 1 + count($archives);
        $a = "{$name}-{$n}.zip";
        return $a;
    }
    private function createListFiles() 
    {
        if (!empty($this->params['minus-path'])) {
            $this->minus_path = explode(",", $this->params['minus-path']);
        }

        $files = array(
        ABSPATH . '.htaccess',
        ABSPATH . 'index.php',
        ABSPATH . 'license.txt',
        ABSPATH . 'readme.html',
        ABSPATH . 'wp-activate.php',
        ABSPATH . 'wp-blog-header.php',
        ABSPATH . 'wp-comments-post.php',
        ABSPATH . 'wp-config.php',
        ABSPATH . 'wp-config-sample.php',
        ABSPATH . 'wp-cron.php',
        ABSPATH . 'wp-links-opml.php',
        ABSPATH . 'wp-load.php',
        ABSPATH . 'wp-login.php',
        ABSPATH . 'wp-mail.php',
        ABSPATH . 'wp-settings.php',
        ABSPATH . 'wp-signup.php',
        ABSPATH . 'wp-trackback.php',
        ABSPATH . 'xmlrpc.php',
        );

        $folders = array(
        ABSPATH . 'wp-admin',
        ABSPATH . 'wp-content',
        ABSPATH . 'wp-includes',
        );
        if (!empty($this->params['plus-path'])) {
            $plus_path = explode(",", $this->params['plus-path']);
            foreach($plus_path as $p) {
                if (empty($p)) {
                    continue;
                }
                $p = ABSPATH . $p;
                if (file_exists($p)) {
                    if (is_dir($p)) {
                        $folders[] = $p;
                    } else{
                        $files[] = $p;
                    }
                }
            }
        }
        $f = '';
        foreach($folders as $folder) {
            if (!is_dir($folder)) {
                continue;
            }
            $f = str_replace(ABSPATH, '', $folder);
            if (in_array($f, $this->minus_path)) {
                continue;
            }
            $files = array_merge($files, readDirectrory($folder));
        }
        $ret = array();
        if( ( $n = count($files) ) > 0) {
            $f = '';
            for($i = 0; $i < $n; $i++) {
                $f = str_replace(ABSPATH, '', $files[$i]); 
                if ( !in_array($f, $this->minus_path) || strpos($f, 'cache') === false ) {
                    $ret[] = $files[$i];
                } else {
                    main::log( str_replace('%s', $f, lang::get('Skip file "%s"', false) ) );
                }
            }
        }
        return $files; 
    }


    private function init()
    {
        $time = isset($this->params['time']) ? $this->params['time'] : 0 ;
        $this->time = main::getNameBackup($time, true);
        $this->name = main::getNameBackup($time, false);
        $this->dir_backup = BACKUP_DIR . "/" . $this->name;
        $this->checkBackup();
        if (!is_dir($this->dir_backup)) {
            mkdir($this->dir_backup, 0755);
            main::setIndex($this->dir_backup);
        }
        $this->md5_file = $this->dir_backup . '/' . $this->name . '.md5';
        $this->db_file = $this->dir_backup . '/mysqldump.sql';

    }
}
