<?php

include('connector.php');
$conector= new DatabaseManager();
$db_name='contacts';
$table_name='info';
$conector->SelectDB($db_name);
$conector->CreateDB($db_name);
$conector->CreateTable($table_name);

?>