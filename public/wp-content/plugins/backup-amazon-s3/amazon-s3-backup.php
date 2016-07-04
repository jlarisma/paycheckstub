<?php
/*
Plugin Name: Amazon S3 Backup
Description: Amazon S3 Backup Plugin to create Amazon S3 Full Backup (Files + Database)
Version: 1.0.6
*/

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . "main.php";

main::setPluginDir(dirname(__FILE__));  
main::setPluginName('amazon-s3-backup');
main::init();
add_action('init', array('main', 'run') );

add_action('admin_print_scripts', array('main', 'include_admins_script' ));
