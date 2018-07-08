<?php

if(isset($_POST["full_name"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }
    $name=$_POST['full_name'];
    $subject=$_POST['full_subject'];
    $email="From : ".$_POST['full_email'];
    $message=$_POST['full_message'];
    mail("admin@notes24x7.com",$subject,$message,$email);
    die('sucess');
}



?>