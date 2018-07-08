<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->


<head>

    <meta charset="utf-8">

    <title>NOTES24X7 | Courses</title> <!--insert your title here-->
    <meta name="description" content="NOTES24X7 - Courses"> <!--insert your description here-->
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




                <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center" style="background-image:url(img/parallax/img17.jpg);">

                    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">


                        <!--start nicdark_container-->
                        <div class="nicdark_container nicdark_clearfix">


                            <div class="nicdark_section nicdark_height_200"></div>

                            <div class="grid grid_12">
                                <strong class="nicdark_color_white nicdark_font_size_60 nicdark_first_font">Courses</strong>
                            </div>

                            <div class="nicdark_section nicdark_height_20"></div>


                        </div>
                        <!--end container-->

                    </div>

                </div>






                <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">

                    <!--start nicdark_container-->
                    <div class="nicdark_container nicdark_clearfix">

                        <div class="grid grid_12">

                            <a href="#">Home</a>
                            <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="img/icons/icon-next-grey.svg">
                            <a href="#">Courses</a>
                            <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="img/icons/icon-next-grey.svg">
                            <a href="#">Courses</a>

                        </div>

                    </div>
                    <!--end container-->

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



                            <!--START results-->
                            <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
                                <div class="nicdark_section nicdark_box_sizing_border_box ">

                                    <div class="nicdark_width_100_percentage nicdark_float_left">
                                        <h2><strong>Showing 1-9 of 18 results</strong></h2>
                                    </div>


                                    <div class="nicdark_section nicdark_height_10"></div>


                                    <div class="nicdark_width_70_percentage nicdark_float_left nicdark_width_100_percentage_all_iphone">

                                        <div class="nicdark_section nicdark_height_20"></div>

                                        <div class="nicdark_width_50_percentage nicdark_float_left">
                                            <div class="nicdark_section nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative nicdark_padding_right_20">
                                                <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_5" width="15" src="img/icons/icon-pen.svg">
                                                <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Keyword">
                                            </div>
                                        </div>
                                        <div class="nicdark_width_50_percentage nicdark_float_left">
                                            <div class="nicdark_float_left nicdark_width_100_percentage_all_iphone">
                                                <a class="nicdark_bg_white_hover nicdark_color_green_hover nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " href="courses.php">SEARCH</a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="nicdark_width_30_percentage nicdark_float_left nicdark_text_align_right nicdark_width_100_percentage_all_iphone">

                                        <div class="nicdark_section nicdark_height_20"></div>

                                        <div class="nicdark_display_inline_block nicdark_bg_yellow nicdark_border_1_solid_blue nicdark_padding_8 nicdark_margin_right_10 nicdark_border_radius_3">
                                            <a class="nicdark_tooltip_jquery" title="Advanced Settings" href="#"><img alt="" class="nicdark_float_left" width="23" src="img/icons/icon-settings-white.svg"></a>
                                        </div>

                                        <div class="nicdark_display_inline_block nicdark_bg_green nicdark_border_1_solid_green nicdark_padding_8 nicdark_margin_right_10 nicdark_border_radius_3">
                                            <a class="nicdark_tooltip_jquery" title="List View" href="#"><img alt="" class="nicdark_float_left" width="23" src="img/icons/icon-list-white.svg"></a>
                                        </div>

                                        <div class="nicdark_display_inline_block nicdark_border_1_solid_grey_2 nicdark_padding_8 nicdark_border_radius_3">
                                            <a class="nicdark_tooltip_jquery" title="Grid View" href="#"><img alt="" class="nicdark_float_left" width="23" src="img/icons/icon-grid-grey.svg"></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--END results-->



                            <div class="nicdark_width_100_percentage">


    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">

                <!--image-->
                <div class="nicdark_section nicdark_position_relative">

                    <img alt="" class="nicdark_section" src="img/courses/img1.jpg">

                    <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Favorities" href="account.php#tabs-3">
                            <img alt="" class="nicdark_margin_right_60" width="25" src="img/icons/icon-heart-white.svg">
                        </a>

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Compare" href="compare.php">
                            <img alt="" class="nicdark_margin_right_20 nicdark_right_0" width="25" src="img/icons/icon-compare-white.svg">
                        </a>

                        <div class="nicdark_position_absolute nicdark_bottom_20">
                            <div class="nicdark_display_table nicdark_float_left">
                                <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-calendar.svg">
                                <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">21/12/2017</p>
                                <img alt="" class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-clock.svg">
                                <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">8 Hours</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--image-->


                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3><a class="nicdark_color_greydark nicdark_first_font" href="single-course.php">e-Commerce Course</a></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p><a class="" href="single-course.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula. Nullam augue augue.</a></p>

                </div>

                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_top_1_solid_grey">

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_display_none_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage" width="25" src="img/avatar/avatar-chef-1.jpg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-teacher.php">John</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="23" src="img/icons/icon-availability.svg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-course.php">70 Seats</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left nicdark_text_align_right">
                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="single-course.php">FREE</a>
                    </div>

                </div>



            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->




    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">

                <!--image-->
                <div class="nicdark_section nicdark_position_relative">

                    <img alt="" class="nicdark_section" src="img/courses/img4.jpg">

                    <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Favorities" href="account.php#tabs-3">
                            <img alt="" class="nicdark_margin_right_60" width="25" src="img/icons/icon-heart-white.svg">
                        </a>

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Compare" href="compare.php">
                            <img alt="" class="nicdark_margin_right_20 nicdark_right_0" width="25" src="img/icons/icon-compare-white.svg">
                        </a>

                        <div class="nicdark_position_absolute nicdark_bottom_20">
                            <div class="nicdark_display_table nicdark_float_left">
                                <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-calendar.svg">
                                <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">21/12/2017</p>
                                <img alt="" class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-clock.svg">
                                <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">8 Hours</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--image-->


                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3><a class="nicdark_color_greydark nicdark_first_font" href="single-course.php">HTML Course</a></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p><a class="" href="single-course.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula. Nullam augue augue.</a></p>

                </div>

                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_top_1_solid_grey">

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_display_none_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage" width="25" src="img/avatar/avatar-chef-2.jpg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-teacher.php">Jane</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="23" src="img/icons/icon-availability.svg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-course.php">0 Seats</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left nicdark_text_align_right">
                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_orange nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="single-course.php">COMPLETED</a>
                    </div>

                </div>



            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->


    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">

                <!--image-->
                <div class="nicdark_section nicdark_position_relative">

                    <img alt="" class="nicdark_section" src="img/courses/img3.jpg">

                    <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Favorities" href="account.php#tabs-3">
                            <img alt="" class="nicdark_margin_right_60" width="25" src="img/icons/icon-heart-white.svg">
                        </a>

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Compare" href="compare.php">
                            <img alt="" class="nicdark_margin_right_20 nicdark_right_0" width="25" src="img/icons/icon-compare-white.svg">
                        </a>

                        <div class="nicdark_position_absolute nicdark_bottom_20">
                            <div class="nicdark_display_table nicdark_float_left">
                                <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-calendar.svg">
                                <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">21/12/2017</p>
                                <img alt="" class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-clock.svg">
                                <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">8 Hours</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--image-->


                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3><a class="nicdark_color_greydark nicdark_first_font" href="single-course.php">App Development</a></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p><a class="" href="single-course.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula. Nullam augue augue.</a></p>

                </div>

                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_top_1_solid_grey">

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_display_none_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage" width="25" src="img/avatar/avatar-chef-3.jpg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-teacher.php">Susy</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="23" src="img/icons/icon-availability.svg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-course.php">45 Seats</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left nicdark_text_align_right">
                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="single-course.php">USD 100</a>
                    </div>

                </div>



            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->




    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">

                <!--image-->
                <div class="nicdark_section nicdark_position_relative">

                    <img alt="" class="nicdark_section" src="img/courses/img20.jpg">

                    <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Favorities" href="account.php#tabs-3">
                            <img alt="" class="nicdark_margin_right_60" width="25" src="img/icons/icon-heart-white.svg">
                        </a>

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Compare" href="compare.php">
                            <img alt="" class="nicdark_margin_right_20 nicdark_right_0" width="25" src="img/icons/icon-compare-white.svg">
                        </a>

                        <div class="nicdark_position_absolute nicdark_bottom_20">
                            <div class="nicdark_display_table nicdark_float_left">
                                <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-calendar.svg">
                                <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">21/12/2017</p>
                                <img alt="" class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-clock.svg">
                                <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">8 Hours</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--image-->


                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3><a class="nicdark_color_greydark nicdark_first_font" href="single-course.php">Web Design Course</a></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p><a class="" href="single-course.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula. Nullam augue augue.</a></p>

                </div>

                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_top_1_solid_grey">

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_display_none_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage" width="25" src="img/avatar/avatar-chef-4.jpg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-teacher.php">Lisa</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="23" src="img/icons/icon-availability.svg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-course.php">221 Seats</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left nicdark_text_align_right">
                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="single-course.php">FREE</a>
                    </div>

                </div>



            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->




    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">

                <!--image-->
                <div class="nicdark_section nicdark_position_relative">

                    <img alt="" class="nicdark_section" src="img/courses/img2.jpg">

                    <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Favorities" href="account.php#tabs-3">
                            <img alt="" class="nicdark_margin_right_60" width="25" src="img/icons/icon-heart-white.svg">
                        </a>

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Compare" href="compare.php">
                            <img alt="" class="nicdark_margin_right_20 nicdark_right_0" width="25" src="img/icons/icon-compare-white.svg">
                        </a>

                        <div class="nicdark_position_absolute nicdark_bottom_20">
                            <div class="nicdark_display_table nicdark_float_left">
                                <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-calendar.svg">
                                <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">21/12/2017</p>
                                <img alt="" class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-clock.svg">
                                <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">8 Hours</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--image-->


                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3><a class="nicdark_color_greydark nicdark_first_font" href="single-course.php">Photoshop Course</a></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p><a class="" href="single-course.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula. Nullam augue augue.</a></p>

                </div>

                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_top_1_solid_grey">

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_display_none_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage" width="25" src="img/avatar/avatar-chef-5.jpg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-teacher.php">Mark</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="23" src="img/icons/icon-availability.svg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-course.php">67 Seats</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left nicdark_text_align_right">
                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="single-course.php">USD 70</a>
                    </div>

                </div>



            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->




    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">

                <!--image-->
                <div class="nicdark_section nicdark_position_relative">

                    <img alt="" class="nicdark_section" src="img/courses/img29.jpg">

                    <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Favorities" href="account.php#tabs-3">
                            <img alt="" class="nicdark_margin_right_60" width="25" src="img/icons/icon-heart-white.svg">
                        </a>

                        <a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Compare" href="compare.php">
                            <img alt="" class="nicdark_margin_right_20 nicdark_right_0" width="25" src="img/icons/icon-compare-white.svg">
                        </a>

                        <div class="nicdark_position_absolute nicdark_bottom_20">
                            <div class="nicdark_display_table nicdark_float_left">
                                <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-calendar.svg">
                                <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">21/12/2017</p>
                                <img alt="" class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="img/icons/icon-clock.svg">
                                <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">8 Hours</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--image-->


                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3><a class="nicdark_color_greydark nicdark_first_font" href="single-course.php">Social Media Course</a></h3>
                    <div class="nicdark_section nicdark_height_20"></div>
                    <p><a class="" href="single-course.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula. Nullam augue augue.</a></p>

                </div>

                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_top_1_solid_grey">

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_display_none_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage" width="25" src="img/avatar/avatar-chef-6.jpg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-teacher.php">Mary</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">
                        <div class="nicdark_display_table nicdark_float_left">
                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="23" src="img/icons/icon-availability.svg">
                            <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-course.php">31 Seats</a></p>
                        </div>
                    </div>

                    <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left nicdark_text_align_right">
                        <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="single-course.php">FREE</a>
                    </div>

                </div>



            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->


</div>





                            <div class="nicdark_section nicdark_height_50"></div>


                            <div class="nicdark_section nicdark_text_align_center">
                                <a class="nicdark_display_inline_block nicdark_color_greydark nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>1</strong></a>
                                <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>2</strong></a>
                                <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>3</strong></a>
                                <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>4</strong></a>
                                <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>5</strong></a>
                            </div>


                        </div>


                    </div>
                    <!--end container-->

                </div>

    				<?php include("./parts/footer.php"); ?>




                <!--js-->
        <script async src="js/nicdark_plugins.min.js" type="text/javascript"></script>

        



    </body>


</html>
