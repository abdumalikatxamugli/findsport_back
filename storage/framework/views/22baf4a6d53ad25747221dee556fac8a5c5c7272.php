<link rel="stylesheet" href="/maxs/v2/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/maxs/v2/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Order Id</th>
                <th>Status</th>
                <th>Manager</th>
                <th>Warehouser</th>
                <th>Quantity</th>
                <th>Total Price</th>
                
              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $item): ?>
                <tr>
                  <td><?php echo e($item->id); ?></td>
                  <td><?php echo e($item->status); ?></td>
                  <td><?php echo e($item->mname?:'no one'); ?></td>
                  <td><?php echo e($item->wname?:'no one'); ?></td>
                  <td><?php echo e($item->product_count?:'0'); ?></td>
                  <td><?php echo e($item->total_prise?:0); ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Order Id</th>
                <th>Status</th>
                <th>Manager</th>
                <th>Warehouser</th>
                <th>Quantity</th>
                <th>Total Price</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/maxs/v2/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/maxs/v2/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/maxs/v2/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/maxs/v2/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>

  $(function () {
   
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  
</script><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/orders/index.blade.php ENDPATH**/ ?>