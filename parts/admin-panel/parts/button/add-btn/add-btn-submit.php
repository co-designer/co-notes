<?php
define('access',TRUE);
include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');
if(isset($_POST["c_name"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $c_name_1 = strtoupper($_POST['c_name']);
    $c_name = trim($c_name_1);
    $type = $_POST['category'];
    if($type=='school')
    {
        mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/School/".$c_name);
    }
    else if($type=='bachelor')
    {
        mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Bachelor/".$c_name);
    }
    else if($type=='master')
    {
        mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Master/".$c_name);
    }
    else
    {
        mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Entrance/".$c_name);
    }

    if($c_name==''){
        die('wrong');
    }
    
    $statement = $mysqli->prepare("INSERT INTO courses(c_name,type) VALUES( ?, ?)");
    $statement->bind_param('ss', $c_name,$type);
    if($statement->execute()){
        
        die('sucess');
    }
    else{
        die('wrong');
    }
}

if(isset($_POST["sub_name"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }

    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $sub_name_1 = ucwords($_POST['sub_name']);
    $sub_name = trim($sub_name_1);
    $category = $_POST['category_sub'];
    $course_name = $_POST['course_name'];

    if($sub_name==''){
        die('wrong');
    }
    if($category=='school')
    {
        mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/School/".$course_name."/".$sub_name);
        mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/School/".$course_name."/".$sub_name."/Ncert Solutions");
        mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/School/".$course_name."/".$sub_name."/Books");
        mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/School/".$course_name."/".$sub_name."/Notes");
        mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/School/".$course_name."/".$sub_name."/Sample Papers");

        $statement = $mysqli->prepare("SELECT subjects FROM s_subjects WHERE c_name=?");
        $statement->bind_param('s',$course_name);
        $statement->execute();
        $statement->bind_result($subjects);
        $statement->fetch();
        $statement->close();
        if($subjects=='')
        {
            $statement = $mysqli->prepare("UPDATE s_subjects SET subjects=? WHERE c_name=?");
            $statement->bind_param('ss',$sub_name,$course_name);
            $statement->execute();
            $statement->close();
            die('sucess');
        }
        else
        {   
            $new_sub = $subjects.'//'.$sub_name;
            $statement = $mysqli->prepare("UPDATE s_subjects SET subjects=? WHERE c_name=?");
            $statement->bind_param('ss',$new_sub,$course_name);
            $statement->execute();
            $statement->close();
            die('sucess');
        }
    }
    else
    {   
        if($category=='bachelor')
        {
            mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Bachelor/".$course_name."/".$sub_name);
            mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Bachelor/".$course_name."/".$sub_name."/Books");
            mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Bachelor/".$course_name."/".$sub_name."/Notes");
            mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Bachelor/".$course_name."/".$sub_name."/Question Papers");
        }
        else if($category=='master')
        {
            mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Master/".$course_name."/".$sub_name);
            mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Master/".$course_name."/".$sub_name."/Books");
            mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Master/".$course_name."/".$sub_name."/Notes");
            mkdir($_SERVER['DOCUMENT_ROOT']."/parts/files/Courses/Master/".$course_name."/".$sub_name."/Question Papers");
        }
        else
        {
            
        }

        $statement = $mysqli->prepare("SELECT subjects FROM b_m_subjects WHERE c_name=?");
        $statement->bind_param('s',$course_name);
        $statement->execute();
        $statement->bind_result($subjects);
        $statement->fetch();
        $statement->close();
        if($subjects=='')
        {
            $statement = $mysqli->prepare("UPDATE b_m_subjects SET subjects=? WHERE c_name=?");
            $statement->bind_param('ss',$sub_name,$course_name);
            $statement->execute();
            $statement->close();
            die('sucess');
        }
        else
        {   
            $new_sub = $subjects.'//'.$sub_name;
            $statement = $mysqli->prepare("UPDATE b_m_subjects SET subjects=? WHERE c_name=?");
            $statement->bind_param('ss',$new_sub,$course_name);
            $statement->execute();
            $statement->close();
            die('sucess');
        }

    }
    

}

if(isset($_POST["chapter_name"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }
    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    
    $chapter_name_1 = ucwords($_POST['chapter_name']);
    $chapter_name = trim($chapter_name_1);
    $category = $_POST['category_name_chapter'];
    $course_name = $_POST['course_name_chapter'];
    $subject_name_chapter = $_POST['subject_name_chapter'];
    $operation = $_POST['operation'];

    if($chapter_name==''){
        die('wrong');
    }

    if($category=='school')
    {
        if($operation=='not_exist')
        {
            $statement = $mysqli->prepare("INSERT INTO s_subjects_chapters(c_name,subject,chapters) VALUES(?,?,?)");
            $statement->bind_param('sss',$course_name,$subject_name_chapter,$chapter_name);
            $statement->execute();
            $statement->close();
            die('sucess');
        }
        else if($operation=='add')
        {
                $statement = $mysqli->prepare("SELECT chapters FROM s_subjects_chapters WHERE c_name=? AND subject=?");
                $statement->bind_param('ss',$course_name,$subject_name_chapter);
                $statement->execute();
                $statement->bind_result($chapters);
                $statement->fetch();
                $statement->close();
                $new_chapter = $chapters.'//'.$chapter_name;
                $statement = $mysqli->prepare("UPDATE s_subjects_chapters SET chapters=? WHERE c_name=? AND subject=?");
                $statement->bind_param('sss',$new_chapter,$course_name,$subject_name_chapter);
                $statement->execute();
                $statement->close();
                die('sucess');
        }
        else
        {
            die('wrong');
        }
    }
    else
    {
        die('wrong');
    }
    

}


?>