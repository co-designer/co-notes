<?php
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        header('location:../../404.php');
    }

?>    



    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/logos/logo-elearning-color.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text"></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="username" type="email" name="forgot-username" maxlength="40" required>
            <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
          </div>
          <div>
            <div style="padding-left: 10px;"><p id="user-result"></p></div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button name="forgot" id="loginbtn" class="btn waves-effect waves-light col s12">Recover my Password</button>
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
              <p class="margin right-align medium-small"><a href="" id="login-click">Login</a></p>
          </div>          
        </div>

      </form>
    </div>