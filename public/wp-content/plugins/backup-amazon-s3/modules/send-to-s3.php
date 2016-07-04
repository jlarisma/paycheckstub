<?php

if (!class_exists('send_to_s3')) {
    class send_to_s3 extends module_as3b {

        public function run()
        {
            include main::getPluginDir() . '/libs/classes/aws-autoloader.php';

            $ad = $this->params['access_details'];
            main::log( lang::get('Start copy files to Amazon S3', false) );
            $files = $this->params['files'];
            $dir = (isset($ad['dir'])) ? $ad['dir'] : '/';  

            $credentials = new Aws\Common\Credentials\Credentials($ad['AccessKeyId'], $ad['SecretAccessKey']);
            $client = Aws\S3\S3Client::factory(array( 'credentials' => $credentials, 'signature' => 'v4', 'region' => $ad['region'] ) );
            try {  
                $n = count($files);
                for($i=0; $i < $n; $i++) {
                    $filePath = preg_replace('#[/\\\\]+#', '/', BACKUP_DIR . '/' . $dir . '/' . $files[$i]);
                    $key = ($dir) ? $dir .'/'. basename($filePath) : basename($filePath);
                    $key = ltrim( preg_replace('#[/\\\\]+#', '/', $key), '/' );//if first will be '/', file not will be uploaded, but result will be ok
                    $putRes = $client->putObject(array("Bucket" => $ad['bucket'], 'Key' => $key, 'Body' => fopen($filePath, 'r+')));
                    if ( isset($putRes['RequestId']) && !empty($putRes['RequestId'])) {
                        main::log( str_replace('%s', basename($filePath) , lang::get("File(%s) Upload successfully to Amazon S3", false ) ) ) ;
                    }
                }
                main::log( lang::get('End copy files to Amazon S3', false) );
            } catch (Exception $e) {
                main::log('Error send to Amazon s3: ' . $e->getMessage());
                $this->setError($e->getMessage());
                return false;
            } catch(S3Exception $e) {
                main::log('Error send to Amazon s3: ' . $e->getMessage());
                $this->setError($e->getMessage());
                return false;
            } catch(InvalidArgumentException $e) {
                main::log('Error send to Amazon s3: ' . $e->getMessage());
                $this->setError($e->getMessage());
                return false;
            }
            return true;

        }




    }
}