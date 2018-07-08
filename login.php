<?php
    session_start();
	if(isset($_SESSION['username'])){
		header('location:404.php');
	}




	else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>

  <!--FAVICONS-->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->

  <!-- CORE CSS-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}

#dimScreen
{
    position:fixed;
    padding:0;
    margin:0;
    vertical-align: middle;
    top:0;
    left:0;
    z-index: 100000;
    width: 100%;
    height: 100%;
    background:rgba(255, 255,255,1);
    pointer-events: none;
    display:none;
}

#dimScreen img {
  margin: auto;
  padding-top: 20%;
  display: block;

}



</style>
<?php
        include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-head.php");
    ?>




</head>

<body bgcolor="#49C4AF">
	<?php
			include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-body.php");
		?>

  <div id="dimScreen">
      <img id="loading" src="img/login-icons/loading.gif" align="middle" width="100"/>
  </div>
  <div id="login-page" class="row">

  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript"  src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Login Ajax -->
<script  src="js/login.js"></script>


  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    



</body>

</html>
<?php
}
?>
