<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary card-outline card-tabs">
				<div class="card-header p-0 pt-1 border-bottom-0">
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
						<form 
						action="<?php echo e(route($submission_route)); ?>" 
						method="POST" 
						autocomplete="off">
						<?php echo csrf_field(); ?>
						<div class="form-group">
							<label for="id">Product</label>
							<select class="custom-select" 
											name="id" 
											onchange="show_quantity(this)">
								<?php foreach ($products as $item): ?>
									<option value="<?php echo e($item->id); ?>" data-count="<?php echo e($item->count); ?>">
										<?php echo e(json_decode($item->title,true)['uz']); ?>

									</option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<p>Quantity now 
								<span id="count">
									<?php echo e(count($products)>0?$products[0]->count:""); ?>

							</span></p>
						</div>
						<div class="form-group">
							<label for="count">Quantity</label>
							<input type="number" class="form-control" id="count" placeholder="Quantity to <?php echo e($btn_text); ?>" name="count">
						</div>


						<div class="card-footer">
							<a href="<?php echo e(route('index_warehouse')); ?>" class="btn btn-danger">Cancel</a>
							<button type="submit" class="btn btn-primary">
								<?php echo e($btn_text); ?>

							</button>
						</div>
					</form>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</div>
</div>	
</div>
<script>
	function show_quantity(elem){
		document.getElementById("count").innerHTML=elem.selectedOptions[0].dataset.count;
	}
</script><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/warehouse/addition.blade.php ENDPATH**/ ?>