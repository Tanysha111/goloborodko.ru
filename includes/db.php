<?php
// Параметры подключения к БД
$db_conn = pg_connect("host=127.0.0.1 dbname=goloborodko user=postgres password=password")
    or die("Connection error: " . pg_last_error());
?>
