<?php
  include('config/constants.php');
  session_start();
  if(!$_SESSION['m_un']){
    header('Location: login.php');
    exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ship2Store</title>
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
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <!-- Sidebar Header    -->
      <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src="img/timberlandLogo.png" alt="person">
          <h2 class="h5 text-white text-uppercase mb-0">VF Corporation</h2>
          <p class="text-sm mb-0 text-muted">Timberland</p>
        </div>
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.php">
          <p class="h1 m-0">VF</p></a>
      </div>
      <!-- Sidebar Navigation Menus--><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
      <ul class="list-unstyled">
        <li class="sidebar-item"><a class="sidebar-link" href="index.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#browser-window-1"> </use>
            </svg>Dashboard </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="onlineOrders.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#imac-screen-1"> </use>
            </svg>Online Orders </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="remoteOrders.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Remote Orders </a></li>
        <li class="sidebar-item active"><a class="sidebar-link" href="shipToStore.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>Ship2Store </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="login.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#disable-1"> </use>
            </svg>Login page </a></li>
      </ul>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between w-100">
              <div class="d-flex align-items-center"><a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                    <use xlink:href="#menu-1"> </use>
                  </svg></a><a class="navbar-brand ms-2" href="index.php">
                  <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs">OrderHub </span><strong class="text-primary text-sm">2.0</strong></div></a></div>
              <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a class="nav-link text-white position-relative" id="notifications" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#chart-1"> </use>
                    </svg><span class="badge bg-warning">6</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="notifications">
                    <li><a class="dropdown-item py-3" href="#!">
                        <div class="d-flex">
                          <div class="icon icon-sm bg-blue">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                              <use xlink:href="#envelope-1"> </use>
                            </svg>
                          </div>
                          <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new messages </span><small class="small text-gray-600">4 minutes ago</small></div>
                        </div></a></li>
                    <li><a class="dropdown-item all-notifications text-center" href="#!"> <strong class="text-xs text-gray-600">view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a class="nav-link text-white position-relative" id="messages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#envelope-1"> </use>
                    </svg><span class="badge bg-info">10</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="messages">
                    <li><a class="dropdown-item d-flex py-3" href="#!"> <img class="img-fluid rounded-circle flex-shrink-0 avatar shadow-0" src="img/timberlandLogo.png" alt="..." width="45">
                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Store #260</span><small class="small text-gray-600"> Sent You Message</small>
                          <p class="mb-0 small text-gray-600">3 days ago at 7:58 pm - 02.15.2022</p>
                        </div></a></li>
                    <li><a class="dropdown-item d-flex py-3" href="#!"> <img class="img-fluid rounded-circle flex-shrink-0 avatar shadow-0" src="img/timberlandLogo.png" alt="..." width="45">
                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Store #180</span><small class="small text-gray-600"> Sent You Message</small>
                          <p class="mb-0 small text-gray-600">2 days ago at 9:02am pm - 02.16.2022</p>
                        </div></a></li>
                    <li><a class="dropdown-item d-flex py-3" href="#!"> <img class="img-fluid rounded-circle flex-shrink-0 avatar shadow-0" src="img/timberlandLogo.png" alt="..." width="45">
                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Store #161</span><small class="small text-gray-600"> Sent You Message</small>
                          <p class="mb-0 small text-gray-600">1 days ago at 4:38 pm - 02.17.2022</p>
                        </div></a></li>
                    <li><a class="dropdown-item text-center" href="#!"> <strong class="text-xs text-gray-600">Read all messages       </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-white text-sm" id="languages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-none d-sm-inline-block ms-2">English</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="languages">
                    <li><a class="dropdown-item" rel="nofollow" href="#!"> <span>German</span></a></li>
                    <li><a class="dropdown-item" rel="nofollow" href="#!"> <span>French                                                         </span></a></li>
                  </ul>
                </li>
                <!-- Log out-->
                <li class="nav-item"><a class="nav-link text-white text-sm ps-0" href="logout.php"> <span class="d-none d-sm-inline-block">Logout</span>
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#security-1"> </use>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="bg-gray-200 text-sm">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 py-3">
              <li class="breadcrumb-item"><a class="fw-light" href="index.php">Home</a></li>
              <li class="breadcrumb-item active fw-light" aria-current="page">Ship2Store  </li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Page Header-->
      <header class="py-4">
        <div class="container-fluid py-2">
          <h1 class="h3 fw-normal mb-0">Order Pickup Form</h1>
        </div>
      </header>
      <section class="tables">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-20">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0">Recently Shipped Orders</h3>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-sm mb-0">
                      <thead>
                        <tr>
                          <th>Order No.</th>
                          <th>Retail Store No.</th>
                          <th>Tracking No.</th>
                          <th>Customer Name</th>
                          <th>Phone No.</th>
                          <th>Email</th>
                          <th>Date Placed</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="customerS.php">27461235</a></td>
                          <td>261</td>
                          <td><a href="https://www.fedex.com/en-us/home.html" target="_blank">45062351785</a></td>
                          <td>Jae Smith</td>
                          <td>571-564-8945</td>
                          <td>jaesmith56@gmail.com</td>
                          <td>1/25/2022</td>
                        </tr>
                        <tr>
                          <td><a href="">27569874</a></td>
                          <td>261</td>
                          <td><a href="https://www.fedex.com/en-us/home.html" target="_blank">54321236542</a></td>
                          <td>John Doe</td>
                          <td>703-564-8975</td>
                          <td>doeenterprise@yahoo.com</td>
                          <td>1/22/2022</td>
                        </tr>
                        <tr>
                          <td><a href="">27542315</a></td>
                          <td>261</td>
                          <td><a href="https://www.fedex.com/en-us/home.html" target="_blank">45234521893</a></td>
                          <td>Maria J. Rodriguez</td>
                          <td>804-023-1122</td>
                          <td>mariarodriguez22@aol.com</td>
                          <td>1/20/2022</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-20">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0">Recently Received Orders (UP TO 14 DAYS)</h3>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-sm mb-0">
                      <thead>
                        <tr>
                          <th>Order No.</th>
                          <th>Retail Store No.</th>
                          <th>Order Status</th>
                          <th>Customer Name</th>
                          <th>Phone No.</th>
                          <th>Email</th>
                          <th>Date Placed</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="">26578521</a></td>
                          <td>261</td>
                          <td>Store Received</td>
                          <td>Rojo Leers</td>
                          <td>571-986-5468</td>
                          <td>leers6708@gmail.com</td>
                          <td>1/15/2022</td>
                        </tr>
                        <tr>
                          <td><a href="">26850002</a></td>
                          <td>261</td>
                          <td>Partially Received</td>
                          <td>Shawn Pattinson</td>
                          <td>703/102-3212</td>
                          <td>spattinson77@gmu.edu</td>
                          <td>1/10/2022</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-20">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0" style="color: red;">Expired Orders (MORE THAN 14 DAYS) - PROCESS CANCELLATION</h3>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-sm mb-0">
                      <thead>
                        <tr>
                          <th>Order No.</th>
                          <th>Retail Store No.</th>
                          <th>Order Status</th>
                          <th>Customer Name</th>
                          <th>Phone No.</th>
                          <th>Email</th>
                          <th>Date Placed</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
        <div class="container-fluid">
          <div class="row text-center gy-3">
            <div class="col-sm-6 text-sm-start">
              <p class="mb-0 text-sm text-gray-600">TeamFusion &copy; 2021-2022</p>
            </div>
            <div class="col-sm-6 text-sm-end">
              <p class="mb-0 text-sm text-gray-600">Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
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
