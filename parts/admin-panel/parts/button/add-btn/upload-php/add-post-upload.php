<?php
define('access',TRUE);
include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');

if(isset($_POST["title"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }


    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file_name = $_POST['file_name'];
    $date_upload = date("Y-m-d");
    $source = $_SERVER['DOCUMENT_ROOT'].'/parts/admin-panel/uploads/';
    if($title==null || $description==null)
    {
        die('wrong');
    }
    $code_1 = $title.'-'.rand(10000,1000000);
    $code = str_replace(' ', '-', $code_1);
    $statement = $mysqli->prepare("INSERT INTO post_24x7(code_no,title,description,uploaded_files,date_upload) VALUES(?,?,?,?,?)");
    $statement->bind_param('sssss',$code,$title,$description,$file_name,$date_upload);
    if(!$statement->execute())
    {
        die('wrong');
    }
    $statement->close();
    if($file_name==null)
    {
            die('sucess');   
    }
    else
    {
        $destination = $_SERVER['DOCUMENT_ROOT'].'/parts/files/Posts/';
        copy($source.$file_name, $destination.$file_name);
        unlink($source.$file_name); 
        die('sucess');
    }
}

?>