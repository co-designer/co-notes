<?php

define('access',TRUE);
include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');

if(isset($_GET['code_no']) AND isset($_GET['category']))
{
    $code_no=$_GET['code_no'];
    $category=$_GET['category'];
}
else
{
    header("location:index.php");
}

$conn = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());

if($category=='bachelor')
{
    $datatable ='b_materials';
    $sql = "SELECT * FROM ".$datatable." WHERE code_no='".$code_no."'";
}
elseif($category=='entrance')
{
    $datatable ='e_materials';
    $sql = "SELECT * FROM ".$datatable." WHERE code_no='".$code_no."'";
}
elseif($category=='school')
{
    $datatable ='s_materials';
    $sql = "SELECT * FROM ".$datatable." WHERE code_no='".$code_no."'";
}
elseif($category=='ncert-school')
{
	$c1='ncert-school';
	$category='school';
    $datatable ='s_ncert_materials';
    $sql = "SELECT * FROM ".$datatable." WHERE code_no='".$code_no."'";
}
elseif($category=='master')
{
    $datatable ='m_materials';
    $sql = "SELECT * FROM ".$datatable." WHERE code_no='".$code_no."'";
}
else
{
    header('location:index.php');
}

if(!$rs_result = $conn->query($sql))
{
    header('location:index.php');
}

$row_1 = $rs_result->fetch_array();

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

    <title><?php echo $row_1['title'];?> | NOTES24x7</title> <!--insert your title here-->
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

    <!--share Options Css-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" type="text/css" href="css/share/jssocials.css" media="none" onload="if(media!='all')media='all'" />
    <link rel="stylesheet" type="text/css" href="css/share/jssocials-theme-classic.css" media="none" onload="if(media!='all')media='all'" />

    <link rel="stylesheet" type="text/css" href="css/jquery.dialogbox.css" media="none" onload="if(media!='all')media='all'">

	<?php
        include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-head.php");
    ?>
    <style type="text/css">
    	#related-article{
    		height:150px;
    	}
        #related-article:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: #c8e6c9;
        }
		.pdfobject-container { height: 700px;}
		.pdfobject { border: 1px solid #666; }

    </style>


</head>
    <body id="start_nicdark_framework">
		<?php
			include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-body.php");
		?>

		<!---Facebook Comment Plugin-->
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  				js = d.createElement(s); js.id = id;
  				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

		<!---Facebook Comment Plugin-->

        <!--START nicdark_site-->
        <div class="nicdark_site">

            <!--START nicdark_site_fullwidth-->
            <div class="nicdark_site_fullwidth nicdark_site_fullwidth_boxed nicdark_clearfix">


            <?php
                include("./parts/header.php");
            ?>

            
                    <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">



                    </div>




                    <div class="nicdark_section nicdark_height_5"></div>



                    <div class="nicdark_section">

                        <!--start nicdark_container-->
                        <div class="nicdark_container nicdark_clearfix">

                            <div class="nicdark_width_66_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

                                <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

                                    <h1><strong class="nicdark_font_size_40 nicdark_first_font"><?php echo $row_1['title'];?></strong></h1>
                                    <div class="nicdark_display_table nicdark_float_left">
                                    <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="30" src="img/icons/icon-calendar.png">
                                    <h3 class="nicdark_display_table_cell nicdark_vertical_align_middle"><?php echo $row_1['date_upload'];?></h3>
                                </div>
                                    <div class="nicdark_section nicdark_height_20"></div>


                                    <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">
                                        <div class="nicdark_display_table nicdark_float_left">


                                        </div>
                                    </div>
                                    <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">

                                        <div class="nicdark_section nicdark_height_5"></div>
                                        <div class="nicdark_display_table nicdark_float_left">

                                            <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                <img alt="" class="nicdark_margin_right_10" width="30" src="img/icons/icon-category-grey.svg">
                                            </div>

                                            <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                <p class="nicdark_font_size_13">Category</p>
                                                <div class="nicdark_section nicdark_height_5"></div>
                                                <h5 class=""><?php echo $row_1['type'];?></h5>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="nicdark_width_50_percentage nicdark_display_none_all_iphone nicdark_float_right">

                                        <div class="nicdark_section nicdark_height_5"></div>
                                        <div class="nicdark_section nicdark_height_5"></div>
                                    </div>
                                    <div class="nicdark_section nicdark_height_15"></div>
                                     <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">



                                     </div>
                                     <div class="nicdark_section nicdark_height_15"></div>

                                    <div class="nicdark_section">


                                        <!--START tab-->
                                        <div class="nicdark_tabs">

                                            

                                            <div class="nicdark_section" id="tabs-1">

                                                <h3><strong>Description</strong></h3>
                                                <div class="nicdark_section nicdark_height_20"></div>
                                                <p><?php echo $row_1['description'];?></p>
                                                <div class="nicdark_section nicdark_height_140">
                                                	<div class="nicdark_section nicdark_height_20"></div>
                                                	<p class="nicdark_font_size_13"><b>"If Pdf is not opening please open in other browser or press download button."</b></p>
                                                	<div class="nicdark_section nicdark_height_20"></div>
                                                	<a class="nicdark_bg_white_hover nicdark_color_green_hover nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " 
                                                	href="/parts/files/Courses/<?php echo ucwords($category).'/'.$row_1['c_name'].'/'.$row_1['subject'].'/'.$row_1['type'].'/'.$row_1['uploaded_files']; ?>" download>DOWNLOAD NOW</a>
                                                	<div class="nicdark_section nicdark_height_20"></div>
                                                	
                                                </div>

                                                <!--PDF VIEWER-->
                                                <div class="nicdark_section">

                                                    <div id="example1"></div>
                                                    <div class="nicdark_section nicdark_height_20"></div>
                                                    
                                                    <script src="/js/pdf-jquery/pdfobject.js"></script>
													<script>PDFObject.embed("/parts/files/Courses/<?php echo ucwords($category).'/'.$row_1['c_name'].'/'.$row_1['subject'].'/'.$row_1['type'].'/'.$row_1['uploaded_files'];?>", "#example1");</script>
                                                	
                                                	<div class="nicdark_section nicdark_height_20"></div>
                                                </div>

                                                <div class="nicdark_section nicdark_height_10"></div>

                                                <!--start social--><a class="nicdark_display_inline_block nicdark_padding_8 nicdark_first_font nicdark_margin_right_10 nicdark_color_greydark nicdark_padding_left_0" href="">Share with friends:</a>
                                                <div class="shareRoundIcons"></div>
                                                <!--end-->

                                                <div class="fb-comments" data-href="<?php echo $url ?>" data-numposts="5" width="100%"></div>
                                            </div>


                                        </div>
                                        <!--END tab-->


                                    </div>
                                </div>


                                <div class="nicdark_section nicdark_height_50"></div>


                            </div>
                            <div id="dialog"></div>
                            <div class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">


                                <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">



                                    <div class="nicdark_section nicdark_bg_white nicdark_border_1_solid_grey">

                                          <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">


                                            <h3 class=""><strong>Question</strong></h3>
                                          </div>
                                          <div class="nicdark_section nicdark_padding_10 nicdark_box_sizing_border_box">

                                         <form name="contact_us" id="contact_us">
                                            <div class="nicdark_section">
                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                                    <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Name" name="full_name" required>
                                                </div>

                                            </div>
                                            <div class="nicdark_section">
                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                                    <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="email" placeholder="Email" name="full_email" required>
                                                </div>

                                            </div>
                                            <div class="nicdark_section">
                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                                    <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Subject" name="full_subject" required>
                                                </div>

                                            </div>
                                            <div class="nicdark_section">
                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                                    <textarea rows="4" class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" placeholder="Message" name="full_message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="nicdark_section">
                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                                    <input type="submit" class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " value="SEND NOW" id="send_now">
                                                </div>
                                            </div>
                                        </form>
                                          </div>

                                        </div>


                                </div>



                                <div class="nicdark_section nicdark_height_50"></div>


                            </div>



                        </div>
                        <!--end container-->

                    </div>








                    <!--START related products-->
                    <div class="nicdark_section nicdark_border_top_1_solid_grey">

                        <!--start nicdark_container-->
                        <div class="nicdark_container nicdark_clearfix">

                            <div class="nicdark_section nicdark_height_50"></div>

                            <div class="grid grid_12">
                                <h2><strong>Related Articles</strong></h2>
                            </div>



                             <div class="nicdark_width_100_percentage">
<?php
	if($c1=='ncert-school'){$category='ncert-school';}
	$sql_1 = "SELECT * FROM ".$datatable." WHERE code_no!='".$code_no."' AND c_name='".$row_1['c_name']."' ORDER BY RAND() LIMIT 9";
    $rs_result_1 = $conn->query($sql_1);
    while($row = $rs_result_1->fetch_assoc())
    {
        $related[]=$row;
    }
    if(!empty($related)){
    foreach ($related as $key => $value)
    {

?>
 <a class="nicdark_color_greydark nicdark_first_font" href="data-course.php?code_no=<?php echo $value['code_no'];?>&amp;category=<?php echo $category;?>">
    <!--START preview-->
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey" id="related-article">


                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3><?php echo $value['title'].' ( '.$value['subject'].' , '.$value['c_name'].' )'; ?></h3>
                    

                </div>

            </div>
            <!--start preview-->

        </div>

    </div>
    <!--END preview-->
    </a>
<?php }
    }
 ?>


</div>



                        


                        </div>
                        <!--end container-->

                    </div>
                    <!--END related products-->
              <?php include("./parts/footer.php"); ?>













            </div>
        </div>



                <!--js-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script async src="js/nicdark_plugins.min.js" type="text/javascript"></script>
        <script async src="js/jquery.dialogBox.js"></script>
        <script async src="js/mail.js"></script>
        <script src="css/share/jssocials.js"></script>
        <script type="text/javascript">
                $(".shareRoundIcons").jsSocials({
                    showLabel: false,
                    showCount: false,
                    shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
                });
        </script>

        <script type="text/javascript">
			var infolinks_pid = 3030703;
			var infolinks_wsid = 0;
		</script>
		<script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>


    </body>

</html>
