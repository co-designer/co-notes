<?php

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        header('location:../../404.php');
    }

?>


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form method="post" class="login-form" id="otp-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/logos/logo-elearning-color.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text"></p>
          </div>
        </div>
        <div class="row margin" id="userid">
          <div class="input-field col s12">
            <i class="mdi-action-speaker-notes prefix"></i>
            <input class="validate" id="otp" type="number" name="code" required>
            <label for="otp" data-error="wrong" data-success="right" class="center-align">OTP</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button name="otp" class="btn waves-effect waves-light col s12" id="verify">Submit</button>
          </div>
        </div>
        <div class="input-field col s12">
            <p class="margin center medium-small sign-up">
              <a class="nicdark_tooltip_jquery" title="Home" href="index.php"><img alt="" class="" width="33" src="img/icons/icon-home.png"></a>
            </p>
          </div>
      </form>
    </div>
  </div>

