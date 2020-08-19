<?php
require'database/connection.php';
require'database/queryBuilder.php';

return new queryBuilder(

Connection::make()

);
?>