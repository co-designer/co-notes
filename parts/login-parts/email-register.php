<?php
	require 'PHPMailer-master/PHPMailerAutoload.php';

  	session_start();
    if(isset($_SESSION['username'])){
    	header('location:../../404.php');
  	}

  	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        header('location:../../404.php');
    }

  	include('db.php');

 	if( $_POST) {
           
     	$KEY = "iSz0Js5lQ0jRdcIPkmSMOVAacOCqqjko"; // Account API Key
		$email = $_POST['userid']; // Email To Verify
		$fraudCheck = true; // Check if email belongs to a temporarily email account or has been reported for SPAM/abuse. Setting this option to "false" will only validate that the email exists.

		$result = file_get_contents('http://www.ipqualityscore.com/api/verify_email.php?KEY='.$KEY.'&email='.$email.'&fraudCheck='.$fraudCheck);

		if($result>0) {
			// valid email
			  
    		$mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());


    		
    		$pass  = hash('sha256', $_POST['pass']);
    		$mob   = $_POST['mobile'];
    		$date  = date('Y-m-d');
    		$string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $string_shuffled = str_shuffle($string);
            $code = substr($string_shuffled, 1, 100);
    		$stmt  = $mysqli->prepare('INSERT INTO register_verify (email,pass,mobile,code,date_add) Values (? , ? , ? , ? , ?) ');
        	$stmt->bind_param('ssdss',$email,$pass,$mob,$code,$date);
       	 	if($stmt->execute()===false){
       	 		die('error');
       	 	} 
        	$stmt->close();
    		
            /*Mail Code*/

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'notes24x7@gmail.com';                 // SMTP username
$mail->Password = 'notes24@123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress($email, 'User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Confirm your registration - NOTES 24x7';
$mail->Body    = $code;
$mail->AltBody = '';

$mail->send();



            /*Mail Code End*/
            
            die('valid');
      
  		}
	else 
	{
  		echo "spam";
		// invalid email
		// notify user to use a real email
	} }

?>