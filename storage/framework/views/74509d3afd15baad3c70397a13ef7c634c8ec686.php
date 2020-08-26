<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>IELTSONLINE | Admin</title>
    <link rel="stylesheet" href="/imica/public/assets_admin/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/imica/public/assets_admin/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/imica/public/assets_admin/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="/imica/public/assets_admin/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/imica/public/assets_admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="/imica/public/assets_admin/css/style.css" />
    <link rel="shortcut icon" href="/imica/public/assets_admin/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="admin" style="font-size:30px;padding:0.75rem 0 0.25rem 40px;"><!-- <img src="assets/img/logo.jpg" alt="logo" style="width:70px; height:110px"/> --> 
          <?if(Auth::user()->id==2){?>
            IO Registerer
          <?}else{?>
            IO Admin
           <?}?> 
          </a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/img/logo.jpg" alt="I" /></a>
        </div>
        <ul class="nav">
          
          <?if(Auth::user()->id==1){?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin')); ?>">
              <i class="mdi mdi-account-card-details menu-icon"></i>
              <span class="menu-title">New Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('getReg')); ?>">
              <i class="mdi mdi-account-card-details menu-icon"></i>
              <span class="menu-title">Registered Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('videos')); ?>">
              <i class="mdi mdi-account-card-details menu-icon"></i>
              <span class="menu-title">Videos</span>
            </a>
          </li>
          <?}?>
          <?if(Auth::user()->id==2){?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('adminP')); ?>">
              <i class="mdi mdi-account-card-details menu-icon"></i>
              <span class="menu-title">Prospective Users</span>
            </a>
          </li>
          <?}?>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                
                <ul class="mt-4 pl-0">
                  <li  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <span class="profile-name">IELTSONLINE ADMIN</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <!-- <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a> -->
                  <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">>
                                                     <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <?php echo $__env->yieldContent('content'); ?>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/imica/public/assets_admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/imica/public/assets_admin/vendors/chart.js/Chart.min.js"></script>
    <script src="/imica/public/assets_admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/imica/public/assets_admin/vendors/flot/jquery.flot.js"></script>
    <script src="/imica/public/assets_admin/vendors/flot/jquery.flot.resize.js"></script>
    <script src="/imica/public/assets_admin/vendors/flot/jquery.flot.categories.js"></script>
    <script src="/imica/public/assets_admin/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="/imica/public/assets_admin/vendors/flot/jquery.flot.stack.js"></script>
    <script src="/imica/public/assets_admin/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/imica/public/assets_admin/js/off-canvas.js"></script>
    <script src="/imica/public/assets_admin/js/hoverable-collapse.js"></script>
    <script src="/imica/public/assets_admin/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- <script src="/imica/public/assets_admin/js/dashboard.js"></script> -->
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/admin/layout/admin.blade.php ENDPATH**/ ?>