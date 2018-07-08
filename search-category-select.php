<?php 
    
    die('hello');
    define('access',TRUE);
    include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');

	if(isset($_POST['cid'])){
		$cid=$_POST['cid'];
    	$mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());    
    	$stmt  = $mysqli->prepare('SELECT c_name FROM courses WHERE type=?')or die($mysqli->errorno());;
        $stmt->bind_param("s",$cid);
    	$stmt->execute();
        $result = $stmt->get_result();
        while ($data = $result->fetch_assoc())
        {
            $level[] = $data;
        }
        $stmt->close();
        echo json_encode($level);
	}

    if(isset($_POST['lid'])){
        $lid=$_POST['lid'];
        $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());    
        $stmt  = $mysqli->prepare('SELECT subjects FROM s_subjects WHERE c_name=?');
        $stmt->bind_param("s",$lid);
        $stmt->execute();
        $stmt->bind_result($result);
        $stmt->fetch();
        $stmt->close();
        $sub=explode("//",$result);
        echo json_encode($sub);
    }

?>
