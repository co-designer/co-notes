<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:/404.php');
}

if($_SESSION['type']!='A')
{
    header('location:/404.php');
}
?> 
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | NOTES24x7 Admin </title>
    <!-- Favicon-->
    <link rel="icon" href="/parts/admin-panel/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" media="none" onload="if(media!='all')media='all'">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" media="none" onload="if(media!='all')media='all'">

    <!-- Bootstrap Core Css -->
    <link href="/parts/admin-panel/plugin/bootstrap/css/bootstrap.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

    <!-- Waves Effect Css -->
    <link href="/parts/admin-panel/plugin/node-waves/waves.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'"/>

    <!-- Animation Css -->
    <link href="/parts/admin-panel/plugin/animate-css/animate.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'"/>

    <!-- Bootstrap Select Css -->
    <link href="/parts/admin-panel/plugin/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'"/>

    <!-- JQuery DataTable Css -->
    <link href="/parts/admin-panel/plugin/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

    <!-- Custom Css -->
    <link href="/parts/admin-panel/css/style.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

    <!-- AdminBSB Themes. You can choose a theme from css /themes instead of get all themes -->
    <link href="/parts/admin-panel/css/themes/all-themes.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'"/>

    <link rel="stylesheet" href="/parts/admin-panel/css/table/jquery.dialogbox.css" media="none" onload="if(media!='all')media='all'">

    <link href="/parts/admin-panel/plugin/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

    <!-- Uploader CSS-->

    <link href="/parts/admin-panel/plugin/uploader/jquery.fileuploader.css" media="all" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    
    <link href="/parts/admin-panel/css/uploader/jquery.fileuploader-theme-dragdrop.css" media="all" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

    <style>
            .upload {
                font-family: 'Roboto', sans-serif;
                font-size: 14px;
                line-height: normal;
                color: #47525d;
                background-color: #fff;

                margin: 0;
                padding: 20px;
                
                width: 100%;
            }
    </style>
    
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->


    
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/parts/admin-panel/index.php">ADMIN - NOTES24X7</a>
            </div>
        </div>
        
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/parts/admin-panel/images/user.png" width="70" height="70" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">TOOLS</li>
                    <li class="active" id="add-btn">
                        <a>
                            <i class="material-icons">add_box</i>
                            <span>Add</span>
                        </a>
                    </li>
                    <li id="edit-btn">
                        <a >
                            <i class="material-icons">mode_edit</i>
                            <span>Edit</span>
                        </a>
                    </li>
                    <li id="delete-btn">
                        <a>
                            <i class="material-icons">delete</i>
                            <span>Delete</span>
                        </a>
                        
                    </li>
                    <li id="edit-profile">
                        <a>
                            <i class="material-icons">person</i>
                            <span>Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="/parts/login-parts/logout.php">
                            <i class="material-icons">input</i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="/index.php" target="_blank">NOTES24X7</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid" id="content">
        	<div id="dialog">
        		
        	</div>
            <!-- Advanced Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD RESULTS
                            </h2>
                        </div>
                        <form id="add_results" name="add_results">
                        <div class="body">
                            <div class="row clearfix">

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Title" id="title" name="title" style="text-transform:capitalize;">
                                        </div>
                                        
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <textarea rows="8" class="form-control no-resize" name="description" id="description" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tags Input -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="body">
                                        <div class="form-group demo-tagsinput-area">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Tags" name="tags" data-role="tagsinput" value="School,Class,Study,Bachelor,Entrance,Master">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Link" id="link" name="link" style="text-transform:capitalize;">
                                        </div>
                                        
                                    </div>
                                </div>
               
                                <div class="col-md-3">  
                                    <div>
                                    	<button type="button" class="btn btn-primary m-t-15 waves-effect" name="add_result" id="add_result" >Submit</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Select -->

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="/parts/admin-panel/plugin/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/parts/admin-panel/plugin/bootstrap/js/bootstrap.js"></script>

    <!-- Select /parts/admin-panel/Plugin Js -->
    <script src="/parts/admin-panel/plugin/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll /parts/admin-panel/Plugin Js -->
    <script src="/parts/admin-panel/plugin/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect /parts/admin-panel/Plugin Js -->
    <script src="/parts/admin-panel/plugin/node-waves/waves.js"></script>
    
     <!-- Button Js -->
    <script src="/parts/admin-panel/js/btn/button.js"></script>

    <script src="/parts/admin-panel/js/btn/add-btn.js"></script>

     <!-- Custom Js -->
    <script src="/parts/admin-panel/js/admin.js"></script>

    <!-- Table Ajax -->

    <script src="/parts/admin-panel/js/table/jquery.sortelements.js"></script>

    <script src="/parts/admin-panel/js/table/jquery.bdt.js"></script>

    <script src="/parts/admin-panel/js/table/jquery.dialogBox.js"></script>

    <!-- Tags JS-->
    <script src="/parts/admin-panel/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Uploader -->
    
    <script src="/parts/admin-panel/plugin/uploader/jquery.fileuploader.min.js" type="text/javascript"></script>

    <script src="/parts/admin-panel/js/uploader.js" type="text/javascript"></script>
 

    

</body>

</html>