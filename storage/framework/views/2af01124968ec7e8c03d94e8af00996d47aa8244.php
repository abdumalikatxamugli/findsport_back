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
                <th>Title</th>
                <th>Discount(%)</th>
                <th>Start</th>
                <th>End</th>
                <th>Discount</th>
                <th>Clear</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $item): ?>
                <tr>
                  <td><?php echo e(json_decode($item->title,true)['uz']); ?></td>
                  <td>
                    <?php echo e($item->dis==null?'No discount':$item->percent); ?>

                  </td>
                  <td>
                    <?php echo e($item->dis==null?'No discount':$item->start); ?>

                  </td>
                  <td>
                    <?php echo e($item->dis==null?'No discount':$item->till); ?>

                  </td>
                  <td>
                      <a href="<?php echo e(route('create_discount',['type'=>$type,'pid'=>$item->id])); ?>" 
                         class="btn btn-warning">
                            <?=$item->dis!=null?"Edit Discount"
                                    :"New Discount"?>
                      </a>
                  </td>
                  <td>
                    <a href="<?=$item->dis!=null?
                    route('delete_discount',['type'=>$type,'id'=>$item->dis])
                    :"#"?>"
                       class="btn btn-danger">
                        <?=$item->dis!=null?"Clear":"Already Clear"?>
                    </a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Title</th>
                <th>Discount</th>
                <th>Start</th>
                <th>End</th>
                <th>Discount</th>
                <th>Clear</th>
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
  
</script><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/discount/index.blade.php ENDPATH**/ ?>