<?php
$app= [];
$app['config']= require 'config.php';
require 'core/database/connection.php';
require 'core/database/queryBuilder.php';
require 'core/router.php';
require 'core/Request.php';


$app['database']=new queryBuilder(
connection::make($app['config']['database'])
);
?>