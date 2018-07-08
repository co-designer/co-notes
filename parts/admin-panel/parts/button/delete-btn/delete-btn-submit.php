<?php 
	

	if(isset($_POST['id'])){
		$id=$_POST['id'];
		define('access',TRUE);
    	include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');
    	$mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());    
    	$stmt  = $mysqli->prepare('DELETE FROM login WHERE email=?');
    	$stmt->bind_param("s",$id);
    	if($stmt->execute()){
    		echo "sucess";
    	}
    	else{
    		echo "error";
    	}


	}

	if(isset($_POST['unid'])){
		$id=$_POST['unid'];
		define('access',TRUE);
    	include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');
    	$mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());    
    	$stmt  = $mysqli->prepare('DELETE FROM register_verify WHERE email=?');
    	$stmt->bind_param("s",$id);
    	if($stmt->execute()){
    		echo "sucess";
    	}
    	else{
    		echo "error";
    	}


	}


?>
