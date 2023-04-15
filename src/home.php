<?php
// active records
require_once './Library/php-activerecord/ActiveRecord.php';
error_reporting(0);
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('Models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:secret@mysql-server/db_log'
    ));
});
$user=User::find(1);
echo $user->name;
?>