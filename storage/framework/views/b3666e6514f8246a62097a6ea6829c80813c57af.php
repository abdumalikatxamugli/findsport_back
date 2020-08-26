<link rel="stylesheet" href="/maxs/v2/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/maxs/v2/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <button class="btn btn-success" style="margin-bottom:15px"
                  onclick="export_to_excel()">
            Export to Excel
          </button>
          <table id="table" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Brand name</th>
                <th>Type</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $item): ?>
                <tr>
                  <td><?php echo e(json_decode($item->title,true)['uz']); ?></td>
                  <td><?php echo e(json_decode($item->description,true)['uz']); ?></td>
                  <td><?php echo e($item->brand_name); ?></td>
                  <td><?php echo e($item->type=="tosell"?"Selling":"Lending"); ?></td>
                  <td><?php echo e($item->count); ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Brand name</th>
                <th>Type</th>
                <th>Quantity</th>
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
<script src="/maxs/v2/public/jslibs/xlsx.min.js"></script>
<script>

  $(function () {

    $('#table').DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  function export_to_excel(){
    var workbook = XLSX.utils.book_new();

    /* convert table 'table1' to worksheet named "Sheet1" */
    var ws1 = XLSX.utils.table_to_sheet(document.getElementById('table'));
    XLSX.utils.book_append_sheet(workbook, ws1, "Sheet1");
    console.log(workbook);
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    XLSX.writeFile(workbook, "prospective"+date+".xls");
  }

</script><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/warehouse/index.blade.php ENDPATH**/ ?>