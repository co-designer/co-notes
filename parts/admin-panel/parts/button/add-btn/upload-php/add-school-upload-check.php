<?php
define('access',TRUE);
include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');

if(isset($_POST["type"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    $course = $_POST['course'];
    $subject = $_POST['subject'];
    
    $statement = $mysqli->prepare("SELECT chapters FROM s_subjects_chapters WHERE c_name=? AND subject=?");
    $statement->bind_param('ss', $course,$subject);
    $statement->execute();
    $statement->bind_result($chapters);
    if(!$statement->fetch())
    {
        die('wrong');
    }
    $chapter = explode('//',$chapters);
    foreach ($chapter as $key => $value) {
            $chap[] = $value;
    }

    echo json_encode($chap);
}

?>