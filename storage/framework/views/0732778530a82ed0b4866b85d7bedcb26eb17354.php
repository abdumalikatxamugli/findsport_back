<link rel="stylesheet" href="/maxs/v2/public/plugins/daterangepicker/daterangepicker.css">
<?$langs=['uz'=>'Uzbek','ru'=>"Russian"]?>
<?$jsonfields=['title','description']?>
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
						action="<?php echo e(route('save_discount')); ?>" 
						method="POST" 
						autocomplete="off">
						<?php echo csrf_field(); ?>
						<div class="tab-content" id="custom-tabs-three-tabContent">
							<div class="form-group">
								<label for="brand_name">Product</label>
								<input type="text" 
								class="form-control" id="title" 
								value="<?php echo e(json_decode($post->title,true)['uz']); ?>" 
								name="title"
								disabled 
								>
							</div>
							<div class="form-group">
								<label for="percent">
									Discount Percent
								</label>
								<input type="number" class="form-control" id="price" name="percent" step="0.01" required
								value="<?=$discount!=null?$discount->percent:""?>"
								>
							</div>
							<div class="form-group">
			                  <label>From, till</label>

			                  <div class="input-group">
			                    <div class="input-group-prepend">
			                      <span class="input-group-text"><i class="far fa-clock"></i></span>
			                    </div>
			                    <input type="text" class="form-control float-right" id="from_till" name="from_till"
								
			                    >
			                  </div>
			                  <!-- /.input group -->
			                </div>
							<input type="hidden" value="<?php echo e($post->id); ?>" name="product_id">
							<input type="hidden" value="<?php echo e($post->type); ?>" name="type">
							<div class="card-footer">
								<a href="<?php echo e(route('index_discount',$type)); ?>" class="btn btn-danger">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>



			</div>
		</div>
	</div>
	<script src="/maxs/v2/public/plugins/moment/moment.min.js"></script>
	<script src="/maxs/v2/public/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="/maxs/v2/public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	<script>
		$(function () {
			bsCustomFileInput.init();
		});
	
    $('#from_till').daterangepicker({
	      timePicker: true,
	      timePickerIncrement: 30,
	      <?if($discount!=null){?>
	      startDate:"<?=$discount->start?>",
	      endDate:"<?=$discount->till?>",
	      <?}?>
	      locale: {
	        format: 'YYYY-MM-DD hh:mm:ss'
	      }
	    })
		    //Date range as a button
		    
	</script>

<?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/discount/create.blade.php ENDPATH**/ ?>