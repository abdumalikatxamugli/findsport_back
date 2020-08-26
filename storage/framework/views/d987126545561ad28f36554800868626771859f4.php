<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="<?php echo e(route('save_emp')); ?>" method="POST" autocomplete="off">
				<?php echo csrf_field(); ?>
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Login</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					</div>
					<input type="hidden" value="<?php echo e($type); ?>" name="role">
				</div>
				<!-- /.card-body -->

				<div class="card-footer">
					<a href="<?php echo e(route('index_emp',$type)); ?>" class="btn btn-danger">Cancel</a>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/employee/create.blade.php ENDPATH**/ ?>