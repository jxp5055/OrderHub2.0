<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page d-flex align-items-center bg-gray-100">
      <div class="container mb-3">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card">
              <div class="card-body p-5">
                <header class="text-center mb-5">
                  <h1 class="text-xxl text-gray-400 text-uppercase">Distributed Order Management<strong class="text-primary">System</strong></h1>
                  <h4 class="text-m text-primary text-uppercase">Orderhub<strong class="text-gray-400">2.0</strong></h4></p>
                </header>
                <form method="POST" action="">
                  <div class="row">
                    <div class="col-lg-8 mx-auto">
                      <div class="input-material-group mb-3">
                        <input class="input-material" type="text" name="registerUsername">
                        <label class="label-material" for="register-username">Username                </label>
                      </div>
                      <div class="input-material-group mb-3">
                        <input class="input-material" type="email" name="registerEmail">
                        <label class="label-material">Email Address</label>
                      </div>
                      <div class="input-material-group mb-4">
                        <input class="input-material" type="password" name="registerPassword" required data-validate-field="registerPassword">
                        <label class="label-material">Password</label>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <input type="submit" name="submit" value="submit" class="btn btn-primary">
                    </div>
                  </div>
                </form>
                <br>
                          <span
                              class="text-xs text-gray-500">Already have an account?
                          </span>
                        <a class="text-xs text-paleBlue ms-1" href="login.php">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center position-absolute bottom-0 start-0 w-100 z-index-20">
        <p class="text-gray-500">Design by <a class="external" href="https://bootstrapious.com/p/admin-template">Bootstrapious</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)                      -->
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite -
      //   see more here
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');


    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>

<?php
    if(isset($_POST["submit"]))
    {
      $username = $_POST['registerUsername'];
      $email = $_POST['registerEmail'];
      $password = md5($_POST  ['registerPassword']);

      $sql = "INSERT INTO tbl_admin SET
          username='$username',
          email='$email',
          password='$password'
      ";

      $res = mysqli_query($conn, $sql) or die(mysqli_error());
      echo '<script type="text/javascript"> window.location = "login.php" </script>';
    }
?>