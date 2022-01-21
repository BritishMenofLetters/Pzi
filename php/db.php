<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'StankovicM';
$DATABASE_PASS = 'PZI_StankovicM1';
$DATABASE_NAME = 'StankovicM';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);



if(!$con) {
    echo "Connection failed!";
}
?>
