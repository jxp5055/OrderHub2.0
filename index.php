<?php
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
    <title>Dashboard</title>
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
        <li class="sidebar-item active"><a class="sidebar-link" href="index.php">
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
        <li class="sidebar-item"><a class="sidebar-link" href="shipToStore.php">
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
      <!-- Counts Section -->
      <section class="py-5">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#list-details-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">BOPIS</h3>
                  <p class="text-gray-500 small">Last 7 days</p>
                  <p class="display-6 mb-0">2</p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#paper-stack-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">SFS</h3>
                  <p class="text-gray-500 small">Last 7 days</p>
                  <p class="display-6 mb-0">6</p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#user-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">ROBIS</h3>
                  <p class="text-gray-500 small">Last 7 days</p>
                  <p class="display-6 mb-0">1</p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#survey-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Ship2Store</h3>
                  <p class="text-gray-500 small">Last 7 days</p>
                  <p><span class="display-6 mb-0">3 </span><span class="text-gray-500 small" style="padding-left:5px;"> Incoming</span></p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#survey-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Ship2Store</h3>
                  <p class="text-gray-500 small">Last 7 days</p>
                  <p><span class="display-6 mb-0">2 </span><span class="text-gray-500 small" style="padding-left:5px;"> Received</span></p>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
              <div class="d-flex">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
                  <use xlink:href="#portfolio-grid-1"> </use>
                </svg>
                <div class="ms-2">
                  <h3 class="h4 text-dark text-uppercase fw-normal">Remote</h3>
                  <p class="text-gray-500 small">Last 7 days</p>
                  <p class="display-6 mb-0">5</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Header Section-->
      <section class="bg-white py-5">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12">
              <div class="card shadow-0">
                <h2 class="h3 fw-normal">Sales marketing report</h2>
                <p class="text-sm text-muted">Online Quarterly Report: <span style="font-weight:bold">Third Quarter</span></p>
                <canvas id="lineCahrt"></canvas>
              </div>
            </div>
            <!-- To Do List-->
            <div class="col-lg-6 col-md-12">
              <div class="card shadow-0">
                <div class="card-body p-0">
                  <h2 class="h3 fw-normal">To do List</h2>
                  <p class="text-sm text-muted">Daily Tasks for
                    <span style="font-weight:bold">
                      <script>
                        var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0');
                        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                        var yyyy = today.getFullYear();

                        today = mm + '/' + dd + '/' + yyyy;
                        document.write(today);
                      </script>
                    </span>
                  </p>
                  <form>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list1">
                      <label class="form-check-label text-sm" for="list1">Finish any outstanding BOPIS orders</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list2">
                      <label class="form-check-label text-sm" for="list2">Finish any outstanding SFS orders</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list3">
                      <label class="form-check-label text-sm" for="list3">Finish any outstanding ROBIS orders</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list4">
                      <label class="form-check-label text-sm" for="list4">Finish any outstanding Remote Orders</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list5">
                      <label class="form-check-label text-sm" for="list5">Check for any incoming orders on Ship2Store</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list6">
                      <label class="form-check-label text-sm" for="list6">Clean out any expired orders on the Ship2Store form</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list7">
                      <label class="form-check-label text-sm" for="list7">Notify clients on order updates</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="list8">
                      <label class="form-check-label text-sm" for="list8">Clear out any store requests</label>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Updates Section -->
      <section class="mb-5" style="padding-top: 50px;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <!-- Recent Updates Widget          -->
              <div class="card">
                <div class="card-header border-bottom">
                  <h2 class="h5 fw-normal mb-0"><a class="card-collapse-link text-dark d-block" data-bs-toggle="collapse" href="#updates-box" aria-expanded="true">News Updates</a></h2>
                </div>
                <div class="card-body p-0">
                  <div class="collapse show" id="updates-box" role="tabpanel">
                    <ul class="list-unstyled">
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Incoming Order!</h5>
                            <p class="mb-0 text-xs text-gray-500">We just got in a new BOPIS order!</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between bg-light">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Expired Order</h5>
                            <p class="mb-0 text-xs text-gray-500">Robbie Daymond's order pickup has expired. Send back to DC.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Incoming Order!</h5>
                            <p class="mb-0 text-xs text-gray-500">New order on Ship2Store.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between bg-light">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Incoming Order!</h5>
                            <p class="mb-0 text-xs text-gray-500">We just got in a new ROBIS order!</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Incoming Order!</h5>
                            <p class="mb-0 text-xs text-gray-500">We just got in a new SFS order!</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between bg-light">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Incoming Order!</h5>
                            <p class="mb-0 text-xs text-gray-500">New Remote Order from Store #250.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Incoming Order!</h5>
                            <p class="mb-0 text-xs text-gray-500">We just got in a new SFS order!</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Recent Updates Widget End-->
            </div>
            <div class="col-lg-6 col-md-12">
              <!-- Daily Feed Widget-->
              <div class="card">
                <div class="card-header border-bottom">
                  <h2 class="h5 fw-normal mb-0"><a class="card-collapse-link text-dark d-block" data-bs-toggle="collapse" href="#feeds-box" aria-expanded="true">Messages
                      <div class="badge bg-primary position-absolute end-0 me-4">10 messages</div></a></h2>
                </div>
                <div class="card-body-0">
                  <div class="collapse show" id="feeds-box" role="tabpanel">
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/timberlandLogo.png" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Store #180</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Sent you a message</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/timberlandLogo.png" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Store #250</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Sent you a message</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/timberlandLogo.png" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Store #161</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Sent you a message</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/timberlandLogo.png" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Store #260</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Sent you a message</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                      <div class="mt-3 ms-5 ps-3">
                        <div class="bg-light p-3 shadow-sm"><small class="text-gray-600">Hey guys! Do you have a size 10m in the 10061, 6in. Premium Wheat Boots? If so, can you put it aside for a customer order. We'll send the information in a bit. Thank you!</small></div>
                        <div class="text-end mt-2"><a class="btn btn-xs btn-dark py-1" href="#!"></i>Message</a></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/timberlandLogo.png" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Store #175</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Sent you a message</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Daily Feed Widget End-->
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
    <script src="js/charts-home.js"></script>
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
