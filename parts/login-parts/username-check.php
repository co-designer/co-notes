<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:/404.php');
  } 
include('db.php');
if(isset($_POST["username"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $mysqli->prepare("SELECT email FROM login_date WHERE email=?");
    $statement->bind_param('s', $username);
    $statement->execute();
    $statement->bind_result($username);
    if($statement->fetch()){
        
        die('404');
    }else{
        die('wrong');
    }
}

if(isset($_POST["uname"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $username = filter_var($_POST["uname"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $mysqli->prepare("SELECT email FROM login WHERE email=?");
    $statement->bind_param('s', $username);
    $statement->execute();
    $statement->bind_result($username);
    if($statement->fetch()){
        
        die('404');
    }else{
        die('wrong');
    }
}

if(isset($_POST["mobile"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $mobile = filter_var($_POST["mobile"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $mysqli->prepare("SELECT mobile FROM register_verify WHERE mobile=? UNION SELECT mobile FROM login WHERE mobile=?");
    $statement->bind_param('ss', $mobile,$mobile);
    $statement->execute();
    $statement->bind_result($mobile);
    if($statement->fetch()){
        
        die();
    }else{
        die('wrong');
    }
}
?>