<?php

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        header('location:../../404.php');
    }
?>


    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" id="register-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/logos/logo-elearning-color.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text"></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-hardware-smartphone prefix"></i>
            <input id="mobile-register" type="text" maxlength="10"  pattern="[0-9]{10}" class="validate" name="mobile" required>
            <label for="mobile" class="center-align">Mobile Number</label>
          </div>
        </div>
        <div>
            <div style="padding-left: 10px;"><p id="mobile-result"></p></div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email-register" type="email" class="validate" name="userid" maxlength="40" required>
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div>
            <div style="padding-left: 10px;"><p id="user-result"></p></div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="validate" name="pass" pattern=".{8,}" title="8-20 characters only" maxlength="20" required>
            <label for="password">Password</label>
          </div>
        </div>
        <div><label for="mobile" class="center-align">8-20 characters only</label></div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="confirm_password" type="password" name="c_password" pattern=".{8,}" title="8-20 characters only" maxlength="20" required>
            <label for="password-again">Re-type password</label>
          </div>
        </div>
        <div style="padding-left: 10px;">
          <p id="message"></p>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button name="register-now" class="btn waves-effect waves-light col s12" id="register">Register Now</a>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">
              <a class="nicdark_tooltip_jquery" title="Home" href="index.php"><img alt="" class="" width="33" src="img/icons/icon-home.png"></a>
            </p>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="" id="login-click">Login</a></p>
          </div>
        </div>
      </form>
    </div>