<?php
    session_start();
	if(isset($_SESSION['username']) || !isset($_GET['id'])){
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
  <title>Login - Verify Email</title>

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
<?php
	define('access', TRUE);
	include('parts/db-for-all.php');
	$vid=$_GET['id'];

	$mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());


    $stmt = $mysqli->prepare("SELECT email,pass,mobile FROM register_verify WHERE code=?");

    // Bind a variable to the parameter as a string.
    $stmt->bind_param("s",$vid);


    // Execute the statement.
    $stmt->execute();

    $stmt->bind_result($email,$pass,$mobile);


    // Fetch the data.
    if($stmt->fetch()){
    	$error='right';

    	$stmt->close();


    	$ptmt = $mysqli->prepare("DELETE FROM register_verify WHERE email=?");

    	$ptmt->bind_param("s",$email);

    	if($ptmt->execute())
    	{
    		$ptmt->close();
    		$type ="U";
    		$ptmt = $mysqli->prepare("INSERT INTO login (email,pass,mobile,type) VALUES(?, ?, ?, ?)");
    		$ptmt->bind_param("ssds", $email, $pass, $mobile, $type);
    		$ptmt->execute();
    		$ptmt->close();
        }

    }
    else{
    	$error='cross';
    }





?>

  <div  class="row">
          <div class="col s12 z-depth-6 card-panel">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/logos/logo-elearning-color.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text"></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">

            <?php
            if($error=='cross')
            	{
            ?>
              <img alt="" class="" width="200" src="img/login-icons/crossmark.png">
            <?php
            	}
            	else{ ?>
            		<img alt="" class="" width="200" src="img/login-icons/checkmark.png">
            <?php
            	}
            ?>

            </p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">
              	<?php
            		if($error=='cross')
            		{
            	?>
              		Email Already Verified.
            	<?php
            		}
            		else{ ?>
						Thank You, Email Verified.
            	<?php
            		}
            	?>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">
              <a class="nicdark_tooltip_jquery" title="Home" href="index.php"><img alt="" class="" width="33" src="img/icons/icon-home.png"></a>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" async src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Login Ajax -->
<script  async src="js/login.js"></script>


  <!--materialize js-->
  <script async src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    



</body>

</html>
<?php
}
?>
