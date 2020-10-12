<link rel="stylesheet" href="/trz/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/trz/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">

					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<?foreach($fields as $key =>$value ):?>
									<?if($value['listed']??false):?>
										<th>
											{{$key}}
										</th>
									<?endif?>
								<?endforeach?>
								<th>Edit</th>
								<th>Delte</th>
							</tr>
						</thead>
						<tbody>
							<?foreach($iterable as $item):?>
							<tr>
								<?foreach($fields as $key =>$value ):?>
								<?if($value['listed']??false):?>
								<td>
									<?=$value['json']??false?
									json_decode($item->$key)->{$langs[0]}
									:$item->$key
									?>
								</td>
								<?endif?>
								<?endforeach?>
								<td><button class="btn btn-warning" onclick="edit(<?=$item->id?>)">edit</button></td>
								<td><button class="btn btn-danger" onclick="deleteMe(<?=$item->id?>)">delete</button></td>
							</tr>
							<?endforeach?>
						</tbody>
						<tfoot>
							<tr>
								<?foreach($fields as $key =>$value ):?>
									<?if($value['listed']??false):?>
										<th>
											{{$key}}
										</th>
									<?endif?>
								<?endforeach?>
								<th>Edit</th>
								<th>Delte</th>
							</tr>
						</tfoot>
					</table>
					<div style="margin-top:15px;">
						<a class="btn btn-success " href="<?=route("$entity"."_init")?>">Create</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/trz/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/trz/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/trz/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/trz/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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

<a >Create New</a>

<script>
	function edit(id){
		window.location.assign(
			window.location.href+'/id/'+id
			)
	}
	function deleteMe(id){
		window.location.assign(
			window.location.href+'/id/'+id+"/delete"
			)
	}
</script>