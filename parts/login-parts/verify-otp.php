<?php
  session_start();
  if(isset($_SESSION['username'])){
    header('location:../../404.php');
  }

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        header('location:../../404.php');
    }


  if($_POST){
      if($_SESSION['otp']==$_POST['code']){
        $_SESSION['username']=$_SESSION['tmp_id'];
        $_SESSION['timeout']=time();
        $_SESSION['type']='A';
        die('verified');
      }
      else{
        unset($_SESSION);
        session_unset();
        session_destroy();
        die('wrong');
      }
    }
?>


