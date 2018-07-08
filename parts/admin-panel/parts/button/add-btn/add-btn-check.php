<?php
define('access',TRUE);
include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');
if(isset($_POST["c_name"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $c_name_1 = $_POST['c_name'];

    $c_name = trim($c_name_1);

    $type = $_POST['type'];

    if($c_name==''){
        die('wrong');
    }
    
    $statement = $mysqli->prepare("SELECT c_name FROM courses WHERE c_name=? AND type=?");
    $statement->bind_param('ss', $c_name , $type);
    $statement->execute();
    $statement->bind_result($course);
    if($statement->fetch()){
        
        die('wrong');
    }
    else{
        die('sucess');
    }
}

if(isset($_POST["category_name"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $category_name = $_POST['category_name'];
    
    $statement = $mysqli->prepare("SELECT c_name FROM courses WHERE type=?");
    $statement->bind_param('s', $category_name);
    $statement->execute();
    $result = $statement->get_result();
    while ($data = $result->fetch_assoc())
    {
        $course[] = $data;
    }
    $statement->close();
    if(empty($course))
    {
        die('wrong');
    }
    echo json_encode($course);
}

if(isset($_POST["sub_name"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $sub_name_1 = ucwords($_POST['sub_name']);
    $category = $_POST['category_sub'];
    $course_name = $_POST['course_name'];

    $sub_name = trim($sub_name_1);
    
    if($category=='school')
    {
        $statement = $mysqli->prepare("SELECT subjects FROM s_subjects WHERE c_name=?");
    }
    else
    {
        $statement = $mysqli->prepare("SELECT subjects FROM b_m_subjects WHERE c_name=?");  
    }
    
    $statement->bind_param('s', $course_name);
    $statement->execute();
    $statement->bind_result($subjects);
    $statement->fetch();
    $sub=explode('//',$subjects);
    foreach ($sub as $key => $value) {
        if($value==$sub_name)
        {
            die('wrong');
        }
    }
    die('sucess');



}

if(isset($_POST["chapter_name"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $category_name_chapter = $_POST['category_name_chapter'];
    $course_name_chapter = $_POST['course_name_chapter'];
    $subject_name_chapter = $_POST['subject_name_chapter'];
    $chapter_name_1 = ucwords($_POST['chapter_name']);
    $chapter_name = trim($chapter_name_1);
    $statement = $mysqli->prepare("SELECT chapters FROM s_subjects_chapters WHERE c_name=? AND subject=?");
    $statement->bind_param('ss', $course_name_chapter , $subject_name_chapter);
    $statement->execute();
    
    $statement->bind_result($chapters);
    if(!$statement->fetch())
    {
        die('not exist');
    }
    $sub=explode('//',$chapters);
    foreach ($sub as $key => $value)
    {
        if($value==$chapter_name)
        {
           die('already added');
        }
    }
    die('add');
}





if(isset($_POST["course_name_chapter"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $category_name_chapter = $_POST['category_name_chapter'];
    $course_name_chapter = $_POST['course_name_chapter'];
    
    if($category_name_chapter=='school')
    {
        $statement = $mysqli->prepare("SELECT subjects FROM s_subjects WHERE c_name=?");
    }
    else
    {
        $statement = $mysqli->prepare("SELECT subjects FROM b_m_subjects WHERE c_name=?");  
    }
    
    $statement->bind_param('s', $course_name_chapter);
    $statement->execute();
    $statement->bind_result($subjects);
    $statement->fetch();
    $sub=explode('//',$subjects);
    foreach ($sub as $key => $value) {
            $course[] = $value;
    }

    echo json_encode($course);
}


?>