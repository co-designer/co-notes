<?php
define('access',TRUE);
include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');

if(isset($_POST["link"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }


    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    $title = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    $date_upload = date("Y-m-d");
    $source = $_SERVER['DOCUMENT_ROOT'].'/parts/admin-panel/uploads/';
    if($title==null || $description==null || $link==null)
    {
        die('wrong');
    }
    $code_1 = $title.'-'.rand(10000,1000000);
    $code = str_replace(' ', '-', $code_1);
    $statement = $mysqli->prepare("INSERT INTO results(code_no,title,description,link,date_upload) VALUES(?,?,?,?,?)");
    $statement->bind_param('ssssss',$code,$title,$description,$link,$date_upload);
    if(!$statement->execute())
    {
        die('wrong');
    }
    $statement->close();
    die('sucess');
}


?>