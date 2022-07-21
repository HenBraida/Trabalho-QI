<?php
function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST . ';port=' . PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASS);  
    return $PDO;
}
?>