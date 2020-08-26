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
                <th>Name</th>
                <th>Email(Login)</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $item): ?>
                <tr>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>
                      <a href="{{route('edit_emp',['type'=>$type,'id'=>$item->id])}}" 
                         class="btn btn-warning">
                            Edit
                      </a>
                  </td>
                  <td>
                    <a href="{{route('delete_emp',['type'=>$type,'id'=>$item->id])}}"
                       class="btn btn-danger">
                        Delete
                    </a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Email(Login)</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </tfoot>
          </table>
          <div style="margin-top:15px;">
            <a class="btn btn-success " href="{{route('create_emp',$type)}}">New {{$type}}</a>
          </div>
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
  
</script>