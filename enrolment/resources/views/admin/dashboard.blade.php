<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Salt Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('public/node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('public/bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/images/favicon.html')}}" />
</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
        <div class="color-tiles">
          <div class="tiles primary" id="primary-theme"></div>
          <div class="tiles success" id="success-theme"></div>
          <div class="tiles warning" id="warning-theme"></div>
          <div class="tiles danger" id="danger-theme"></div>
          <div class="tiles pink" id="pink-theme"></div>
          <div class="tiles info" id="info-theme"></div>
          <div class="tiles dark" id="dark-theme"></div>
          <div class="tiles light" id="light-theme"></div>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sidebar Mode
          </button>
          <div class="dropdown-menu" aria-labelledby="sidebar-color">
            <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
            <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
          </div>
        </div>
        <div class="dropdown d-none d-md-block">
          <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layouts
          </button>
          <div class="dropdown-menu" aria-labelledby="Layouts-type">
            <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
            <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
            <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
            <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
            <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
            <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
          </div>
        </div>
      </div>
      <!-- layout section tabends -->
      <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
        <ul class="chat-list">
          <li class="list active">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
        </ul>
      </div>
      <!-- chat section tabends -->
    </div>
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/salt_logo.svg" alt="Logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count bg-warning">7</span>
            </a>
            <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
              <a class="dropdown-item" href="#">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text">Today is John's birthday</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-phone text-danger fa-fw"></i>
                <span class="notification-text">Call John Doe</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-handshake-o text-primary fa-fw"></i>
                <span class="notification-text">Meeting Alisa</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-exclamation-triangle text-danger fa-fw"></i>
                <span class="notification-text">Server space almost full</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-bell text-warning fa-fw"></i>
                <span class="notification-text">Payment Due</span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">4</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">John Doe</p>
                  <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Leanne Jones</p>
                  <p class="Sender-message">Can we schedule a call this afternoon?</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-primary">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Stella</p>
                  <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-warning">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">James Brown</p>
                  <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                </div>
              </a>
              <a href="#" class="dropdown-item view-all">View all</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">Dave Mattew</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Student</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/widgets.html">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add Student</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Student Information</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/boxed-layout.html">Tution fee</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/rtl-layout.html">Result</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Course</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/compact-menu.html">CSE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/sidebar-collapsed.html">ICE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/sidebar-hidden.html">APEE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">EEE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
            
            <!-- ui end -->
            
            <!--forms start-->
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                <i class="mdi mdi-repeat menu-icon"></i>
                <span class="menu-title">Teacher</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="advancedSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-addons.html">Form addons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-picker.html">Form Picker</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/bt-select-splitter.html">Splitter</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/icheck.html">Icheck</a>
                  </li>
                </ul>
              </div>
            </li>
           </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Orders</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Market Growth</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Stock Price</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 revenue-card grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Website Traffic</h2>
                  <ul class="ct-legend mt-5"></ul>
                  <div id="dashboard-chartist-simple"></div>
                  <div class="row mx-1 mt-5 d-none d-sm-flex">
                    <div class="col-12">
                      <hr class="mt-1">
                    </div>
                    <div class="col-12 col-sm-4 revenue-details text-center text-sm-left">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                    <div class="col-12 col-sm-4 d-flex justifiy-content-center flex-column text-center revenue-details">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                    <div class="col-12 col-sm-4 text-center text-sm-right revenue-details">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 stock-price grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Stock Price</h2>
                  <div class="amount-column-wrapper wrapper">
                    <p class="total-performance">$ 9856</p>
                    <div class="row">
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-up-thick text-success"></i>
                          <p class="progess mb-0">58.8%</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-up-thick text-success"></i>
                          <p class="progess mb-0">+32</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                      <div class="col-12"><hr></div>
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-down-thick text-danger"></i>
                          <p class="progess mb-0">18.2%</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-up-thick text-success"></i>
                          <p class="progess mb-0">+89</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 d-flex flex-row align-items-center mt-4">
                        <p class="mb-0 mr-3">Sources: </p>
                        <a href="#" class="btn btn-rounded bg-google btn-social mr-2"><i class="mdi mdi-google"></i></a>
                        <a href="#" class="btn btn-rounded bg-facebook btn-social mr-2"><i class="mdi mdi-facebook"></i></a>
                        <a href="#" class="btn btn-rounded bg-twitter btn-social"><i class="mdi mdi-twitter"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><i class="mdi mdi-facebook"></i><p class="mb-0">Post to facebook</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"><i class="mdi mdi-twitter"></i><p class="mb-0">Tweet this job</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><i class="mdi mdi-google"></i><p class="mb-0">Post in Google+</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-linkedin"><i class="mdi mdi-linkedin"></i><p class="mb-0">Post to Linkedin</p></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body px-3" style="height:333px">
                      <div class="d-flex align-items-center justify-content-between">
                        <h2 class="card-title">Invites</h2>
                        <p class="mb-2 text-muted">This month</p>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-danger"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-success"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-warning"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="card task-list w-100">
                <div class="card-body">
                  <h2 class="card-title">Task List</h2>
                  <div class="task-cards selected">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Shiply Order</p>
                        <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
                      </div>
                      <p class="ticket-number ml-auto">#1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Shiply Order</p>
                        <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
                      </div>
                      <p class="ticket-number ml-auto">#1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Shiply Order</p>
                        <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
                      </div>
                      <p class="ticket-number ml-auto">#1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card user-visits w-100">
                    <div class="card-body">
                      <h2 class="card-title">User Visits</h2>
                      <div class="row mt-5">
                        <div class="col-6">
                          <p class="views text-muted">Views</p>
                          <p class="section">6080 sessions</p>
                          <a href="#" class="btn btn-secondary btn-sm">More Details</a>
                        </div>
                        <div class="col-6">
                          <div id="sparkline-line-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 global-card">
                  <div class="card bg-warning w-100">
                    <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                      <h2>Batchly is a global</h2>
                      <p>We began with intensive and in-depth session to collate the needs of stakeholders</p>
                      <a href="#" class="btn btn-outline-secondary">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-4 grid-margin d-flex align-items-stretch">
              <div class="card image-card w-100">
                <div class="wrapper image-container">
                  <div class="wrapper controls d-flex align-items-center justify-content-between px-3">
                    <p class="mb-0 text-white">Collection</p>
                    <a href="#" class="btn btn-rounded bg-primary btn-icon"><i class="mdi mdi-arrow-up text-white"></i></a>
                  </div>
                </div>
                <div class="wrapper text-wrapper py-4 px-3">
                  <p class="text-center card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo</p>
                  <div class="wrapper text-center mb-1"><a class="btn btn-primary btn-rounded btn-sm" href="#">Follow</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Timeline Archive</h2>
                  <table class="table mb-0">
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-success">31/50</div></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-primary">23/45</div></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill badge-warning">16/25</div></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-success">17/54</div></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-danger">23/25</div></td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-primary">23/25</div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin d-flex align-items-stretch">
              <div class="card profile-card w-100">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center">
                    <img class="profile-img profile-img-lg" src="http://via.placeholder.com/47x47" alt="">
                    <div class="wrapper d-flex flex-column">
                      <h3 class="mb-0 bold ml-4">Smijth John</h3>
                      <small class="ml-4 text-muted">Developer</small>
                    </div>
                  </div>
                  <p class="mt-3 text-muted" style="height:83px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum recusandae iusto minus, libero tempora sapiente optio.iusto minus, libero tempora sapiente optio.</p>
                  <div class="table-responsive">
                    <table class="table mt-3 mb-0">
                      <tbody>
                        <tr>
                          <td><i class="mdi mdi-calendar-blank mdi-18px"></i></td>
                          <td>06.02.1987</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><i class="mdi mdi-cellphone-android mdi-18px"></i></td>
                          <td>097 00 000 00 00</td>
                          <td><a href="#" class="badge badge-success">SMS</a></td>
                        </tr>
                        <tr>
                          <td><i class="mdi mdi-email-outline mdi-18px"></i></td>
                          <td>smijith@gmail.com</td>
                          <td><a href="#" class="badge badge-warning">Email</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Salt Admin</a> &copy; 2017
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('public/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('public/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('public/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('public/node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('public/node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('public/node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('public/node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('public/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('public/node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('public/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('public/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('public/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('public/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('public/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/js/misc.js')}}"></script>
  <script src="{{asset('public/js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('public/js/dashboard_1.js')}}"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
