<?php

define('access',TRUE);
include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');

$conn = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
$datatable ='s_ncert_materials';
$sql = "SELECT code_no,title,description FROM ".$datatable." WHERE subject <> 'Maths' ORDER BY date_upload DESC LIMIT 5";
$rs_result = $conn->query($sql);

$uri = $_SERVER['REQUEST_URI'];
 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<head>

    <meta charset="utf-8">

    <title>NOTES 24X7 | Every Course Study Material is Here  </title> <!--insert your title here-->
    <meta name="description" content="NOTES 24X7 | Every Course Study Material is Here"> <!--insert your description here-->
    <meta name="author" content="notes24x7"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

    <!--START CSS-->
    <link rel="stylesheet" href="css/nicdark_style.min.css" media="none" onload="if(media!='all')media='all'"> <!--style-->

    <link rel="stylesheet" href="css/nice-select.css" media="none" onload="if(media!='all')media='all'">

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



    <style>
        select{
            width: 100%;
            height: 40px;
        }

        

        .tabs:hover{
        	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: #DCDCDC;
        }


    </style>
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
                include($_SERVER['DOCUMENT_ROOT']."/parts/header.php");
            ?>



        <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center" style="background-image:url(img/parallax/img7.jpg);">

    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_5">


        <div class="nicdark_section nicdark_height_250"></div>

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix ">


            <div class="grid grid_12 nicdark_text_align_center">

                <strong class="nicdark_color_white nicdark_font_size_70 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone nicdark_first_font">Find the Best Notes</strong>
                <div class="nicdark_section nicdark_height_30"></div>
                <h3 class="nicdark_color_white nicdark_second_font">A great place to start.</h3>
                <div class="nicdark_section nicdark_height_60"></div>






                <div class="nicdark_section">
                  <form name="search_course" id="search_course">
                    <div class="nicdark_section">
                        <div class="nicdark_width_33_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">

                            <select class="nicdark_border_radius_3 nicdark_placeholder_color_grey nicdark_color_grey nicdark_font_size_20  nicdark_border_width_2 nicdark_background_bg_white wide" id="category" name="category" required>
                                <option selected disabled>Category</option>
                                <option value="school">School</option>
                                <option value="bachelor">Bachelor</option>
                                <option value="master">Master</option>
                                <option value="entrance">Entrance</option>
                            </select>
                        </div>
                        <div class="nicdark_width_33_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                            <select class="nicdark_border_radius_3 nicdark_placeholder_color_grey nicdark_color_grey nicdark_font_size_20  nicdark_border_width_2 nicdark_background_bg_white wide" id="level" name="level" required="true" disabled>
                                <option selected disabled>Level</option>
                            </select>
                        </div>
                        <div class="nicdark_width_33_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative" id="show_sub">
                            <select class="nicdark_border_radius_3 nicdark_placeholder_color_grey nicdark_color_grey nicdark_font_size_20  nicdark_border_width_2 nicdark_background_bg_white wide" id="subject" name="subject" required="true" disabled>
                                <option selected disabled>Subject</option>
                            </select>
                        </div>
                    </div>

                    <div class="nicdark_section nicdark_height_40"></div>

                    <div class="nicdark_section">

                        <div class="nicdark_width_100_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                            <a type="submit" class="nicdark_background_none_hover nicdark_color_white_hover nicdark_border_2_solid_white_hover nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3" id="search_btn">SEARCH</a>
                        </div>

                    </div>
                    </form>
                </div>



                <div class="nicdark_section nicdark_height_150"></div>



                <div class="nicdark_section">

                    <div class=" nicdark_margin_10 nicdark_bg_orange nicdark_display_inline_block nicdark_border_radius_100_percentage nicdark_padding_20 nicdark_width_33 nicdark_height_33">
                        <a class="nicdark_tooltip_jquery" title="I-XII" href="school.php"><img alt="" class="" width="33" src="img/icons/icon-cloud.png"></a>
                    </div>

                    <div class="nicdark_margin_10 nicdark_bg_green nicdark_display_inline_block nicdark_border_radius_100_percentage nicdark_padding_20 nicdark_width_33 nicdark_height_33">
                        <a class="nicdark_tooltip_jquery" title="Entrance" href="entrance.php"><img alt="" class="" width="33" src="img/icons/icon-entrance.png"></a>
                    </div>

                    <div class="nicdark_margin_10 nicdark_bg_yellow nicdark_display_inline_block nicdark_border_radius_100_percentage nicdark_padding_20 nicdark_width_33 nicdark_height_33">
                        <a class="nicdark_tooltip_jquery" title="Bachelor's" href="bachelor.php"><img alt="" class="" width="33" src="img/icons/icon-browser.png"></a>
                    </div>

                    <div class="nicdark_margin_10 nicdark_bg_blue nicdark_display_inline_block nicdark_border_radius_100_percentage nicdark_padding_20 nicdark_width_33 nicdark_height_33">
                        <a class="nicdark_tooltip_jquery" title="Master's" href="master.php"><img alt="" class="" width="33" src="img/icons/icon-lab.png"></a>
                    </div>

                </div>




            </div>


        </div>
        <!--end container-->


        <div class="nicdark_section nicdark_height_20"></div>


    </div>

</div>

        <div class="nicdark_section nicdark_height_50"></div>


        <div class="nicdark_section ">


    

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="grid grid_12">

            <h1 class="nicdark_font_size_50"><strong>Latest CBSE NCERT Solutions</strong></h1>
            <div class="nicdark_section nicdark_height_10"></div>

        </div>
<?php
   while($row = $rs_result->fetch_assoc())
    {
        $c[] = $row;
    }
    echo $c['title'];
   foreach($c as $key => $value) {
   		$desc = substr($value['description'], 0, 150);

?>
    <a class="nicdark_color_white nicdark_first_font" href="data-course.php?code_no=<?php echo $value['code_no']; ?>&category=ncert-school">

        <div class="nicdark_width_100_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

            <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
           
                <div class="grid grid_12 tabs" >
                	<h1 class="nicdark_font_size_20"><strong><?php echo $value['title']; ?></strong></h1>
                	<div class="nicdark_section nicdark_height_10"></div>
            		<h4 class="nicdark_font_size_12"><?php echo $desc; ?></h4>
            		

        		</div>


            </div>

        </div>
    </a>
<?php 
	}
?>
    </div>
    <!--end container-->

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="grid grid_12">

            <h1 class="nicdark_font_size_50"><strong>Latest CBSE Question Papers</strong></h1>
            <div class="nicdark_section nicdark_height_10"></div>

        </div>
<?php
unset($c);
$datatable ='s_materials';
$sql = "SELECT code_no,title,description FROM ".$datatable." WHERE type='Question Papers' ORDER BY date_upload DESC LIMIT 5";
$rs_result = $conn->query($sql);

   while($row = $rs_result->fetch_assoc())
    {
        $c[] = $row;
    }
    echo $c['title'];
   foreach($c as $key => $value) {
   		$desc = substr($value['description'], 0, 150);

?>
    <a class="nicdark_color_white nicdark_first_font" href="data-course.php?code_no=<?php echo $value['code_no']; ?>&category=school">

        <div class="nicdark_width_100_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

            <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
           
                <div class="grid grid_12 tabs" >
                	<h1 class="nicdark_font_size_20"><strong><?php echo $value['title']; ?></strong></h1>
                	<div class="nicdark_section nicdark_height_10"></div>
            		<h4 class="nicdark_font_size_12"><?php echo $desc; ?></h4>
            		

        		</div>


            </div>

        </div>
    </a>
<?php 
	}
?>
    </div>
    <!--end container-->

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="grid grid_12">

            <h1 class="nicdark_font_size_50"><strong>Latest CBSE Books</strong></h1>
            <div class="nicdark_section nicdark_height_10"></div>

        </div>
<?php
unset($c);
$datatable ='s_materials';
$sql = "SELECT code_no,title,description FROM ".$datatable." WHERE type='Books' ORDER BY date_upload DESC LIMIT 5";
$rs_result = $conn->query($sql);

   while($row = $rs_result->fetch_assoc())
    {
        $c[] = $row;
    }
    echo $c['title'];
   foreach($c as $key => $value) {
   		$desc = substr($value['description'], 0, 150);

?>
    <a class="nicdark_color_white nicdark_first_font" href="data-course.php?code_no=<?php echo $value['code_no']; ?>&category=school">

        <div class="nicdark_width_100_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

            <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
           
                <div class="grid grid_12 tabs" >
                	<h1 class="nicdark_font_size_20"><strong><?php echo $value['title']; ?></strong></h1>
                	<div class="nicdark_section nicdark_height_10"></div>
            		<h4 class="nicdark_font_size_12"><?php echo $desc; ?></h4>
            		

        		</div>


            </div>

        </div>
    </a>
<?php 
	}
?>
    </div>
    <!--end container-->
    </div>

<div>
        <?php include($_SERVER['DOCUMENT_ROOT']."/parts/footer.php"); ?>

    </div>
</div>



        <!--js-->
        <script src="/js/nicdark_plugins.min.js" type="text/javascript"></script>

        <!-- jQuery Library -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <!-- Search Ajax -->
        <script  src="/js/search.js"></script>

        <script  src="/js/jquery.nice-select.js"></script>

        <script type="text/javascript">
        $(document).ready(function(){
            $(document).on("click","#search_btn",function(){
                 $.ajax({
                    type: "POST",
                    url: "parts/search.php",
                    data: $("#search_course").serialize(), // serializes the form's elements.
                    success: function(data)
                    {
                        window.open(data,'_self');
                    }
                })
             });
        });
       </script>
        

    </body>
</html>
