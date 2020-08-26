<?$langs=['uz'=>'Uzbek','ru'=>"Russian"]?>
<?$jsonfields=['title','description']?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary card-outline card-tabs">
				<div class="card-header p-0 pt-1 border-bottom-0">
					<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
						<?foreach ($langs as $key => $value) {?>
							<li class="nav-item">
								<a class="nav-link <?=$key=="uz"?"active":""?>" data-toggle="pill" href="#<?php echo e($key); ?>" role="tab" aria-controls="<?php echo e($key); ?>" ><?php echo e($value); ?></a>
							</li>
							<?}?>

						</ul>
					</div>
					<div class="card-body">
						<?php if($errors->any()): ?>
						<div class="alert alert-danger">
							<ul>
								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><?php echo e($error); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
						<?php endif; ?>
						<form enctype="multipart/form-data" 
						action="<?php echo e(route('save_product')); ?>" 
						method="POST" 
						autocomplete="off">
						<?php echo csrf_field(); ?>
						<div class="tab-content" id="custom-tabs-three-tabContent">
							<?foreach ($langs as $key => $value) {?>
								<div class="tab-pane fade <?=$key=="uz"?"show active":""?>" id="<?php echo e($key); ?>" role="tabpanel" aria-labelledby="<?php echo e($key); ?>">
									<?php foreach ($jsonfields as $field): ?>
										<div class="form-group">
											<label for="<?php echo e($field); ?>"><?php echo e(ucfirst($field)); ?></label>
											<input type="text" class="form-control" id="<?php echo e($field); ?>" placeholder="Enter <?php echo e($field); ?> <?php echo e($key); ?>" name="<?php echo e($field); ?>[<?php echo e($key); ?>]">
										</div>
									<?php endforeach ?>
								</div>
								<?}?>
								<div class="form-group">
									<label for="status">Status</label>
									<select class="custom-select" name="status">
										<option value="active">Active</option>
										<option value="inactive">Inactive</option>
									</select>
								</div>
								<div class="form-group">
									<label for="brand_name">Brand name</label>
									<input type="text" class="form-control" id="brand_name" placeholder="Enter brand name" name="brand_name">
								</div>
								<div class="form-group">
									<label for="brand_name">Price</label>
									<input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
								</div>
								<div class="form-group">
									<label for="status">Submenu</label>
									<select class="custom-select" name="submenu_id">
										<?php foreach ($submenu as $item): ?>
											<option value="<?php echo e($item->id); ?>"><?php echo e(json_decode($item->title,true)['uz']); ?></option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Icon Image</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="exampleInputFile" name="media">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
										<div class="input-group-append">
											<span class="input-group-text">Upload</span>
										</div>
									</div>
								</div>
								<input type="hidden" value="<?php echo e($type); ?>" name="type">
								<div class="card-footer">
									<a href="<?php echo e(route('index_emp',$type)); ?>" class="btn btn-danger">Cancel</a>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</form>
						</div>
						<!-- /.card -->
					</div>



				</div>
			</div>
		</div>
		<script src="/maxs/v2/public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
		<script>
			$(function () {
				bsCustomFileInput.init();
			});
		</script><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/product/create.blade.php ENDPATH**/ ?>