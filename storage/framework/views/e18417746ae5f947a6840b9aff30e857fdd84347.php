<?switch(Auth::user()->role){
  case('admin'):
    $master='admin.layouts.admin';
    break;
  case('manager'):
    $master='admin.layouts.manager';
    break;
  case('warehouse keeper'):
    $master='admin.layouts.warehouse';
    break;
}?>



<?php $__env->startSection('content'); ?>  
<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?php echo e(ucfirst($page)); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>"><?php echo e(ucfirst(Auth::user()->role)); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e($page); ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <?php echo $__env->make($body, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make($master, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/index.blade.php ENDPATH**/ ?>