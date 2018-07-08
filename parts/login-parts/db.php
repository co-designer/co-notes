<?php

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        header('location:../../404.php');
    }


$host="localhost";
$database_user="admin_n24x7";
$database_pass="Hellomyfriends@2017";
$database_name="admin_n24x7";
?>