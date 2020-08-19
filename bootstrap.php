<?php
require'database/connection.php';
require'database/queryBuilder.php';
$config= require'config.php';
return new queryBuilder(

Connection::make($config['database'])

);
?>