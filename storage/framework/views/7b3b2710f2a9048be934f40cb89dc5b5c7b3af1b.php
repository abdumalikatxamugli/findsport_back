<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maxbazar | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/maxs/v2/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/maxs/v2/public/dist/css/adminlte.min.css">
  <!-- jQuery -->
  <script src="/maxs/v2/public/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/maxs/v2/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/maxs/v2/public/dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
       
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Site Settings</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="/maxs/v2/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/maxs/v2/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-poll"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales by Managers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales by Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product views</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link" style="display: flex;align-items:center">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate report on <br>individual manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link" style="display: flex;align-items:center">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate report on <br>individual warehouser</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ad"></i>
              <p>
                Advertisement
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Places</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banners</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill-alt"></i>
              <p>
                Discounts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="<?php echo e(route('index_discount','tosell')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('index_discount','tolend')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lending</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="<?php echo e(route('index_category','menu')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('index_category','submenu')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subcategory</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('index_product','tosell')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products for sale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('index_product','tolend')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products for lending</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="<?php echo e(route('index_emp','manager')); ?>" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Managers                
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?php echo e(route('index_emp','warehouse keeper')); ?>" class="nav-link">
              <i class="nav-icon fas fa-dolly"></i>
              <p>
                Warehouses keepers                
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Warehouse
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="<?php echo e(route('index_warehouse')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inventarization</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('addition_warehouse')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prixod</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('subtraction_warehouse')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Spisanie</p>
                </a>
              </li>
            </ul>
          </li>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="<?php echo e(route('index_orders','tosell')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('index_orders','tolend')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lending</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  

  <?php echo $__env->yieldContent('content'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
  </form>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script>

  var menu=document.getElementsByClassName('nav-link');
  for(let i=0;i<menu.length;i++){
    if(window.location.href.split("#")[0]==menu[i].href){
      menu[i].classList.add('active');
      if(menu[i].parentNode.parentNode.classList.contains('nav-treeview')){
        menu[i].parentNode.parentNode.parentNode.classList.add('menu-open');
      }
    }
  }
</script>

</body>
</html>
<?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/layouts/admin.blade.php ENDPATH**/ ?>