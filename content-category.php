<?php
if(isset($_GET['category']) AND isset($_GET['course_name']) AND isset($_GET['subject_name']))
{
    $category=$_GET['category'];
    $course_name=$_GET['course_name'];
    $subject_name=$_GET['subject_name'];
}
else
{
    header("location:index.php");
}
?>



<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<head>

    <meta charset="utf-8">

    <title><?php echo $course_name; ?> Subjects | NOTES24X7</title> <!--insert your title here-->
    <meta name="description" content="NOTES24X7 - <?php echo $course_name; ?> Subjects"> <!--insert your description here-->
    <meta name="author" content="notes24x7"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

    <!--START CSS-->
    <link rel="stylesheet" href="css/nicdark_style.min.css" media="none" onload="if(media!='all')media='all'"> <!--style-->

    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' media="none" onload="if(media!='all')media='all'">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css' media="none" onload="if(media!='all')media='all'">

    <!--[if lt IE 9]>
    <script async src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--FAVICONS-->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->
	<?php
        include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-head.php");
    ?>
    <style type="text/css">
    	#relate{
    		
    	}

        #relate:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: #c8e6c9;
        }
    </style>

</head>
    <body id="start_nicdark_framework">
		<?php
			include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-body.php");
		?>



        <!--START nicdark_site-->
        <div class="nicdark_site">

            <!--START nicdark_site_fullwidth-->
            <div class="nicdark_site_fullwidth nicdark_site_fullwidth_boxed nicdark_clearfix">


               <?php
                define('access', TRUE);
                include("./parts/header.php");
            ?>




                <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center" style="background-image:url(img/courses/categories.jpg);">

                    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">


                        <!--start nicdark_container-->
                        <div class="nicdark_container nicdark_clearfix">


                            <div class="nicdark_section nicdark_height_200"></div>

                            <div class="grid grid_12">
                                <strong class="nicdark_color_white nicdark_font_size_60 nicdark_first_font">Categories</strong>
                            </div>

                            <div class="nicdark_section nicdark_height_20"></div>


                        </div>
                        <!--end container-->

                    </div>

                </div>




                <div class="nicdark_section nicdark_height_50"></div>




                <div class="nicdark_section ">

                    <!--start nicdark_container-->
                    <div class="nicdark_container nicdark_clearfix">


                        <!--<div class="nicdark_width_100_percentage">

                            <div class="nicdark_section nicdark_box_sizing_border_box nicdark_padding_15">
                                <h2><strong>Find Your Course</strong></h2>
                                <div class="nicdark_section nicdark_height_20"></div>
                            </div>


                            <div class="nicdark_section nicdark_box_sizing_border_box">
                                <div class="nicdark_section">

                                    <div class="nicdark_section">
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-pen.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Keyword">
                                        </div>
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-list.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Food Courses">
                                        </div>
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-star.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Premium">
                                        </div>
                                    </div>
                                    <div class="nicdark_section">
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-level.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Medium Level">
                                        </div>
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-clock-grey.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="8 Hours">
                                        </div>

                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " href="#">SEARCH</a>
                                        </div>

                                    </div>

                                </div>


                            </div>


                        </div>-->








                            <div class="nicdark_width_100_percentage">
<?php if($category=='school'){ ?>

<a class="nicdark_color_greydark nicdark_first_font" href="list-chapters.php?category=<?php echo $category;?>&amp;course_name=<?php echo $course_name;?>&amp;subject=<?php echo $subject_name;?>&amp;category_type=<?php echo 'Ncert Solutions'; ?>">
    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left" id="relate">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">




                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3>Ncert Solutions</h3>
                    <div class="nicdark_section nicdark_height_50"></div>
                    <p>Ncert Solution.</p>

                </div>





            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->
</a>

<a class="nicdark_color_greydark nicdark_first_font" href="list.php?category=<?php echo $category;?>&amp;course_name=<?php echo $course_name;?>&amp;subject=<?php echo$subject_name;?>&amp;category_type=<?php echo 'Books'; ?>">
    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left" id="relate">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">




                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3>Books</h3>
                    <div class="nicdark_section nicdark_height_50"></div>
                    <p>Books.</p>

                </div>





            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->
</a>

<a class="nicdark_color_greydark nicdark_first_font" href="list.php?category=<?php echo $category;?>&amp;course_name=<?php echo $course_name;?>&amp;subject=<?php echo$subject_name;?>&amp;category_type=<?php echo 'Notes'; ?>">
    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left" id="relate">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">




                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3>Notes</h3>
                    <div class="nicdark_section nicdark_height_50"></div>
                    <p>Notes.</p>

                </div>





            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->
</a>

<a class="nicdark_color_greydark nicdark_first_font" href="list.php?category=<?php echo $category;?>&amp;course_name=<?php echo $course_name;?>&amp;subject=<?php echo $subject_name;?>&amp;category_type=<?php echo 'Question Papers'; ?>">
    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left" id="relate">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">




                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3>Question Papers</h3>
                    <div class="nicdark_section nicdark_height_50"></div>
                    <p>Question Papers.</p>

                </div>





            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->
</a>

<?php }
    elseif($category=='master' || $category=='bachelor' || $category=='entrance'){
    ?>

    <a class="nicdark_color_greydark nicdark_first_font" href="list.php?category=<?php echo $category;?>&amp;course_name=<?php echo $course_name;?>&amp;subject=<?php echo $subject_name;?>&amp;category_type=<?php echo 'Books'; ?>">
    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left" id="relate">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">




                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3>Books</h3>
                    <div class="nicdark_section nicdark_height_50"></div>
                    <p>Books.</p>

                </div>





            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->
</a>

<a class="nicdark_color_greydark nicdark_first_font" href="list.php?category=<?php echo $category;?>&amp;course_name=<?php echo $course_name;?>&amp;subject=<?php echo $subject_name;?>&amp;category_type=<?php echo 'Notes';?>">
    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left" id="relate">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">




                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3>Notes</h3>
                    <div class="nicdark_section nicdark_height_50"></div>
                    <p>Notes.</p>

                </div>





            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->
</a>

<a class="nicdark_color_greydark nicdark_first_font" href="list.php?category=<?php echo $category;?>&amp;course_name=<?php echo $course_name;?>&amp;subject=<?php echo $subject_name;?>&amp;category_type=<?php echo 'Question Papers'; ?>">
    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left" id="relate">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">




                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3>Question Papers</h3>
                    <div class="nicdark_section nicdark_height_50"></div>
                    <p>Question Papers.</p>

                </div>





            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->
</a>

<?php } ?>

</div>




                    </div>
                    <!--end container-->

                </div>

    				<?php include("./parts/footer.php"); ?>




                <!--js-->
        <script async src="js/nicdark_plugins.min.js" type="text/javascript"></script>
        
    
    </body>
</html>
