<?php
if (!defined("PHP_VERSION_DEFAULT")) {
    define("PHP_VERSION_DEFAULT", '5.2.4' );
}
if (!defined("PREFIX_AS3B")) {
    define("PREFIX_AS3B", 'amazone_s3_backup_' );
}
if (!defined("MYSQL_VERSION_DEFAULT")) {
    define("MYSQL_VERSION_DEFAULT", '5.0' );
}
if (!defined('ABACKUP_URL_INDEX')) {
    define('ABACKUP_URL_INDEX', 'http://www.webpage-backup.com/');
}
if (!defined('ABACKUP_URL_SECURE')) {
    define('ABACKUP_URL_SECURE', 'http://secure.webpage-backup.com');
}
if (!defined('RESULT_ERROR')) {
    define('RESULT_ERROR', 'error');
}

if (!defined('RESULT_SUCCESS')) {
    define('RESULT_SUCCESS', 'success');
}
if (!defined('BACKUP_DIR_NAME')) {
    define('BACKUP_DIR_NAME',  'as3b_backups');
}
if (!defined('BACKUP_DIR')) {
    define('BACKUP_DIR',  WP_CONTENT_DIR . '/' . BACKUP_DIR_NAME);
}