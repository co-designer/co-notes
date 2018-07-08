<?php

if(isset($_POST["category"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }
    $category=$_POST['category'];
    $level=$_POST['level'];
    if($category==null || $level==null)
    {
    	header("location:index.php");
    }
    if($category=='school')
    {
    	$subject=$_POST['subject'];
    	if($subject==null)
    	{
    		header("location:index.php");
    	}
    	die("content-category.php?category=".$category."&course_name=".$level."&subject_name=".$subject);
    }
    else
    {
    	die("subjects.php?category=".$category."&course_name=".$level);
    }
}



?>