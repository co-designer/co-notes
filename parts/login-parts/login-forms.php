<?php

  session_start();
  if(isset($_SESSION['username'])){
    header('location:../../404.php');
  }

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        header('location:../../404.php');
    }

  include('db.php');
  include('way2sms-api.php');
  
    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());


    $name = $_POST['username'];
    $pass = $_POST['pass'];

    if ($stmt = $mysqli->prepare("SELECT pass,mobile,type FROM login WHERE email=?")) {
 
    // Bind a variable to the parameter as a string. 
    $stmt->bind_param("s",$name);
    

    // Execute the statement.
    $stmt->execute();
    
    $stmt->bind_result($passw,$m,$type);
    
 
    // Fetch the data.
    $stmt->fetch();

    $stmt->close();

    

    if(hash('sha256', $pass)==$passw){
      $login_date=date('Y-m-d');

      $stmt = $mysqli->prepare("UPDATE login_date SET last_login_date=?  WHERE email=?");

      // Bind a variable to the parameter as a string. 
      $stmt->bind_param("ss",$login_date,$name);
    

      // Execute the statement.
      $stmt->execute();

      $stmt->close();

        if($type=='A'){
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 6);
            $_SESSION['otp']=$otp;
            $_SESSION['tmp_id']=$name;
            sendWay2SMS ( '8800244720' , 'notes123' , $m , 'Your One Time Password is : ' . $otp);

            /*Mail Code*/


            /*Mail Code End*/
            
            die('verify');
        }
        else{
            $_SESSION['username']=$name;
            $_SESSION['timeout']=time();
            $_SESSION['type']='U';
            die('user');

        }
      
    }

    else{
        
      die('error');

    }
 
    // Close the prepared statement.
    }

/*
if(isset($_GET['error']))
  {
    ?>

              <!-- Alert Boxes -->
            

              <div class="row">
                <div class="alert alert-danger fade in alert-dismissible" role="alert">
                  <strong>Error!</strong> Username Or Password Wrong.
                </div>
              </div>
         
    <?php
  }

  /*if(isset($_GET['otperror']))
  {
    ?>

              <!-- Alert Boxes -->
            

              <div class="row">
                <div class="alert alert-danger fade in alert-dismissible" role="alert">
                  <strong>Error!</strong> You entered wrong OTP.
                </div>
              </div>
         
    <?php
  }*/

?>