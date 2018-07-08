<?php

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        header('location:../../404.php');
    }

?>
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" name="" method="post" id="loginForm">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/logos/logo-elearning-color.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text"></p>
          </div>
        </div>
        <div>
          <p id="error-msg"></p>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input class="validate" id="username" type="email" name="username" maxlength="40" required>
            <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
          </div>
          <div>
            <div style="padding-left: 10px;"><p id="user-result"></p></div>
          </div>
          
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="pass" type="password" name="pass" pattern=".{8,}" title="8-20 characters only" maxlength="20" required>
            <label for="password">Password</label>
          </div>
        </div>
       <!--<div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div> -->
        <div class="row">
          <div class="input-field col s12">
            <button name="login" id="loginbtn" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s5 m5 16">
            <p class="margin medium-small"><a href="" id="reg-click">Register Now!</a></p>
          </div>
          <div class="input-field col s2 m2 16">
            <a class="nicdark_tooltip_jquery" title="Home" href="index.php"><img alt="" class="" width="33" src="img/icons/icon-home.png"></a>
          </div>
          <div class="input-field col s5 m5 16">
              <p class="margin right-align medium-small"><a href="" id="forgot-click">Forgot password?</a></p>
          </div>          
        </div>

      </form>
    </div>