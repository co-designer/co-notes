<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>404 Page</title>

  <!--FAVICONS-->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->

  <!-- CORE CSS-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css" media="none" onload="if(media!='all')media='all'">

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



</style>
<?php
        include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-head.php");
    ?>




</head>

<body background="img/error-page/bg1.png">
	<?php
			include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-body.php");
		?>
  <div id="404-page" class="row">
      <div >
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/error-page/error-img.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text"></p>
          </div>
        </div>
        <div>
          <p class="center login-form-text">OPPS, SORRY WE CAN'T FIND THAT PAGE</p>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">
              <a class="nicdark_tooltip_jquery" title="Home" href="index.php"><img alt="" class="" width="33" src="img/icons/icon-home.png"></a>
            </p>
          </div>
        </div>
    </div>

  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" async src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>



  <!--materialize js-->
  <script async src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    



</body>

</html>
