<?php
session_start();
if(!defined('access')) {
   header('location:../404.php');
}

?>



        <!--START search container
<div class="nicdark_display_table nicdark_transition_all_08_ease nicdark_navigation_3_search_content nicdark_bg_greydark_alpha_9 nicdark_position_fixed nicdark_width_100_percentage nicdark_height_100_percentage nicdark_z_index_1_negative nicdark_opacity_0">

    
    <div class="nicdark_cursor_zoom_out nicdark_navigation_3_close_search_content nicdark_width_100_percentage nicdark_height_100_percentage nicdark_position_absolute nicdark_z_index_1_negative"></div>


    <div class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_text_align_center">
        <div class="nicdark_width_700 nicdark_width_250_all_iphone nicdark_display_inline_block">
            <div class="nicdark_width_80_percentage nicdark_padding_5 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                <input class="nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0 nicdark_first_font nicdark_color_white nicdark_placeholder_color_white nicdark_font_size_30 nicdark_line_height_30" type="text" placeholder="Search">
            </div>
            <div class="nicdark_width_20_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                <a class="nicdark_width_55 nicdark_height_55 nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_bg_green nicdark_padding_15 nicdark_border_radius_3 " href="courses.php">
                    <img alt="" width="25" src="img/icons/icon-search-white.svg">
                </a>   
            </div>
        </div>
    </div>
            


</div>
END search container-->




<!--START menu responsive-->
<div class="nicdark_navigation_3_sidebar_content nicdark_padding_40 nicdark_box_sizing_border_box nicdark_overflow_hidden nicdark_overflow_y_auto nicdark_transition_all_08_ease nicdark_bg_green nicdark_height_100_percentage nicdark_position_fixed nicdark_width_300 nicdark_right_300_negative nicdark_z_index_9">

    <img alt="" width="25" class="nicdark_close_navigation_3_sidebar_content nicdark_cursor_pointer nicdark_right_20 nicdark_top_20 nicdark_position_absolute" src="img/icons/icon-close-white.svg">



    <div class="nicdark_navigation_3_sidebar">
        <ul>
            <li>
                <a href="index.php">HOME</a>
            </li>
        </ul>
        <ul>    
            <li>
                <a href="index.php">COURSES</a>
                <ul class="nicdark_sub_menu">
                    <li><a href="school.php">School</a></li> 
                    <li><a href="bachelor.php">Bachelor's</a></li>
                    <li><a href="entrance.php">Entrance</a></li>
                    <li><a href="master.php">Master's</a></li>
                </ul>

            </li>
        </ul>
        <ul>
            <li>
                <a href="post-result.php?category=Posts">POSTS</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="post-result.php?category=school_ncert">NCERT SOLUTIONS</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="post-result.php?category=Results">RESULTS</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="contact.php">CONTACT</a>
            </li>
            
        </ul>

    </div>



</div>
<!--END menu responsive-->





<div class="nicdark_section">

    <div class="nicdark_section nicdark_bg_green">

        


        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_6 nicdark_padding_botttom_10 nicdark_padding_top_10 nicdark_text_align_center_responsive">

              
                <div class="nicdark_navigation_top_header_3">
                    <ul>
                        
                        <li>
                            
                            <img alt="" class="nicdark_margin_right_10" width="15" src="img/icons/icon-share-white.svg">
                            <a class=" nicdark_line_height_18 nicdark_color_white" href="#">OUR SOCIAL</a>

                            <ul class="nicdark_sub_menu">
                                <li><a target="_blank" href="https://www.facebook.com/Notes24x7-336782176777669/">Facebook</a></li>
                                <li><a target="_blank" href="https://in.pinterest.com/notes24x7">Pinterest</a></li>
                                <li><a target="_blank" href="https://twitter.com/notes24x7">Twitter</a></li>
                                <li><a target="_blank" href="https://www.instagram.com/notes24x7/">Instagram</a></li>
                                <li><a target="_blank" href="https://www.behance.net/notes24x7d34d">Behance</a></li>
                                <li><a target="_blank" href="https://www.youtube.com/channel/UCPWJfguERdydrOQDZ-iNqsA">Youtube</a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/notes-forever-2a0aa8147/">Linkedin</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                

            </div>


            <div class="grid grid_6 nicdark_text_align_right nicdark_border_top_1_solid_greendark_responsive nicdark_text_align_center_responsive nicdark_padding_botttom_10 nicdark_padding_top_10">

              
                <div class="nicdark_navigation_top_header_3">
                    <ul>
                        
                        <li>
                        <?php
                            if(isset($_SESSION['username'])){ ?>
                            <img alt="" class="nicdark_margin_right_10 nicdark_float_left" width="15" src="img/icons/icon-user-white.svg">
                            <a class="nicdark_color_white">Welcome User</a>
                            <ul class="nicdark_sub_menu">
                                <li><a target="_self" href="">Edit Profile</a></li>
                                <li><a target="_self" href=""></a></li>
                                <li><a target="_self" href="parts/login-parts/logout.php">Logout</a></li>
                            </ul>


                        <?php  
                        }
                        else{
                        ?>
                           <!-- <a class="nicdark_color_white" href="login.php">LOGIN/REGISTER</a>-->
                        <?php } ?>
                            
                        </li>
                    </ul>

                </div>
                

            </div>


        </div>
        <!--end container-->

    </div>

</div>

<div class="nicdark_section nicdark_position_relative ">

    <div class="nicdark_section nicdark_bg_white">

        


        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix nicdark_position_relative">

            <div class="grid grid_12 nicdark_display_none_all_responsive">

                <div class="nicdark_section nicdark_height_10"></div>

                <!--LOGO-->
                <a href="index.php"><img alt="" class="nicdark_position_absolute nicdark_left_15 nicdark_top_20" width="170" src="img/logos/logo-elearning-color.png"></a>
              

                <!--right icons menu
                <div class="nicdark_float_right nicdark_width_100  nicdark_position_relative nicdark_height_25 nicdark_display_none_all_responsive">
                   

                    <a class="nicdark_navigation_3_open_search_content" href="#"><img alt="" class="nicdark_opacity_05_hover nicdark_transition_all_08_ease nicdark_position_absolute nicdark_top_3_negative nicdark_right_0" width="25" src="img/icons/icon-search-grey.svg"></a>

                </div>
                right icons menu-->


                <div class="nicdark_navigation_3 nicdark_text_align_right nicdark_float_right nicdark_display_none_all_responsive">
                    <ul>
                        <li>
                            <a href="index.php">HOME</a>                            
                        </li>
                        <li>
                            <a href="index.php">COURSES</a>
                            <ul class="nicdark_sub_menu">
                                <li><a href="school.php">SCHOOL</a></li> 
                                <li><a href="bachelor.php">BACHELOR'S</a></li>
                                <li><a href="entrance.php">ENTRANCE</a></li>
                                <li><a href="master.php">MASTER'S</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-result.php?category=Posts">POSTS</a>                            
                        </li>
            			<li>
                			<a href="school-ncert.php?category=school_ncert">NCERT SOLUTIONS</a>
            			</li>
                        <li>
                            <a href="post-result.php?category=Results">RESULTS</a>                            
                        </li>
                        
                        <li>
                            <a href="contact.php">CONTACT</a>
                        </li>
                        
                    </ul>

                </div> 


                

                <div class="nicdark_section nicdark_height_10"></div> 
                
            </div>




            <!--RESPONSIVE-->
            <div class="nicdark_width_50_percentage nicdark_text_align_center_all_iphone nicdark_width_100_percentage_all_iphone nicdark_float_left nicdark_display_none nicdark_display_block_responsive">
                <div class="nicdark_section nicdark_height_20"></div>
                <a href="index.php"><img alt="" width="170" class="" src="img/logos/logo-elearning-color.png"></a>   
            </div>
            <div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_float_left nicdark_display_none nicdark_display_block_responsive">
                <div class="nicdark_section nicdark_height_20"></div>
                <div class="nicdark_float_right nicdark_width_100_percentage nicdark_text_align_right nicdark_text_align_center_all_iphone">
                    
                    
                    <a class="nicdark_open_navigation_3_sidebar_content" href="#">
                        <img alt="" class="nicdark_margin_right_20" width="25" src="img/icons/icon-menu-grey.svg">
                    </a>

                    

                   <!-- <img alt="" class="nicdark_margin_left_20 nicdark_navigation_3_open_search_content" width="25" src="img/icons/icon-search-grey.svg"> -->

                </div>
                <div class="nicdark_section nicdark_height_20"></div>
            </div>
            <!--RESPONSIVE-->





        </div>
        <!--end container-->

    </div>

</div>