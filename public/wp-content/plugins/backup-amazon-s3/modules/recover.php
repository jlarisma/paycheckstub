<?php
class recover extends module_as3b {
    
    private $files = array();

    public function run()
    {
        try {
            main::log(lang::get('Start Restore process', false)); 
            if (isset($this->params['name']) && isset($this->params['type'])) {
                if ($this->params['type'] == 'local') {
                    $this->local();
                } elseif ($this->params['type'] == 's3') {
                    $this->s3();
                }
                main::log(lang::get('End Restore process', false)); 
            } else {
                $this->setError( lang::get('Erroneous data, does not exists name or type Backup!', false) ); 
            }
        } catch (Exception $e) {
            $this->setError($e->message);
        }

    }


    private function s3()
    {
        $amazon_option = get_option(PREFIX_AS3B . 'setting');
        if ($amazon_option) {
            require_once main::getPluginDir() . '/libs/classes/aws-autoloader.php';
            try {
                $dir = BACKUP_DIR . '/' . $this->params['name'] ;
                $credentials = new Aws\Common\Credentials\Credentials($amazon_option['access_key_id'], $amazon_option['secret_access_key']);
                $client = Aws\S3\S3Client::factory(array( 'credentials' => $credentials ) );
                main::log( lang::get( "Get Files for Resore Backup", false) );
                $keys = $client->listObjects(array('Bucket' => $amazon_option['bucket'], 'Prefix' => $this->params['name'] ))->getIterator();//->getPath('Contents/*/Key');
                if (isset($keys['Contents'])) {
                    $n = count($keys['Contents']);
                    main::mkdir($dir);
                    main::log( lang::get( "Start Download files with Amazon S3", false) );
                    for($i = 0; $i < $n; $i++) {
                        $path = explode("/", $keys['Contents'][$i]['Key']);
                        if(isset($path[0]) && isset($path[1]) && !empty($path[1])) {
                            $result = $client->getObject(array(
                            'Bucket' => $amazon_option['bucket'],
                            'Key'    => $keys['Contents'][$i]['Key'],
                            'SaveAs' => BACKUP_DIR . '/' . $keys['Contents'][$i]['Key']
                            ));
                            main::log(str_replace("%s", $keys['Contents'][$i]['Key'],  lang::get( "Download file - %s", false)) );
                        }
                    }
                    main::log( lang::get( "End downloads files with Amazon S3", false ) );
                    $this->local();
                    if (is_dir($dir)) {
                        main::remove($dir);
                    }
                } else {
                    $this->setError(lang::get("Error, in downloads with Amazon S3", false));
                }

            } catch (Exception $e) {
                $this->setError($e->getMessage());
            } catch(S3Exception $e) {
                $this->setError($e->getMessage());
            }
        } else {
            $this->setError( lang::get( 'Error: Data is not exist for send backup files to Amazon S3. Please type your Data in the Settings form', false) );
        }
    }

    private function local()
    {
        $this->files = readDirectrory(BACKUP_DIR . '/' . $this->params['name'], array('.zip'));
        include main::getPluginDir() . '/libs/pclzip.lib.php';
        
        if ( ($n = count($this->files)) > 0) {
            for($i = 0; $i< $n; $i ++) {
                main::log( str_replace('%s', basename($this->files[$i]), lang::get("Data decompression: %s", false)) );
                $this->archive = new PclZip($this->files[$i]);
                $file_in_zip = $this->archive->extract(PCLZIP_OPT_PATH, ABSPATH, PCLZIP_OPT_REPLACE_NEWER);
            }        
            if (file_exists(BACKUP_DIR . '/' . $this->params['name'] . '/mysqldump.sql')) {
                main::log(  lang::get("Run process restore Database", false) );

                $mysql = $this->incMysql();
                $mysql->restore(BACKUP_DIR . '/' . $this->params['name'] . '/mysqldump.sql');
                main::log( lang::get("Stopped process restore Database", false) );
                main::remove(BACKUP_DIR . '/' . $this->params['name'] . '/mysqldump.sql');
            }
        }
    }


}