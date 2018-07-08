<?php
  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        header('location:../../404.php');
    }

?>


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
              <img alt="" class="" width="200" src="img/login-icons/checkmark.png">
            </p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">
              Verification link has been sent to your email confirm within 2 Days else your account will be deleted.
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