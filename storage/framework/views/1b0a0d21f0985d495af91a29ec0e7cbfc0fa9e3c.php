<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary card-outline card-tabs">
				
					
					<div class="card-body">
						<ul>
							<li>Status: <?php echo e($order->status); ?> </li>
							<li>Created at: <?php echo e($order->created_at); ?></li>
							<li>Customer name: <?php echo e($order->name); ?></li>
							<li>Customer phone #1: <?php echo e($order->phone1); ?></li>
							<li>Customer phone #2: <?php echo e($order->phone2); ?></li>
							<li>Customer address: <?php echo e($order->address); ?></li>
						</ul>	
						<!-- /.card -->
					</div>
					


				
			</div>
			<h3 class='m-10'>Products in Order</h3>
			<div class="card card-primary card-outline card-tabs">
				
					<div class="card-body">
						<table class="table">
							<thead>
								<td>Product Pic</td>
								<td>Product Id</td>
								<td>Product Title</td>
								<td>Quantity</td>
								<td>Cost</td>
							</thead>
							<tbody>
								<?$total=0;?>
								<?php foreach ($prset as $item): ?>
									<tr>
										
										<td>
											<img src='<?php echo e(route("img",
						                        ["master_table"=>"product",
						                         "master_id"=>"$item->product_id",
						                         "name"=>"$item->path"  
						                        ]
						                      )); ?>'
						                    alt="category icon"
						                    style="width: 140px"
						                    >
										</td>
										<td><?php echo e($item->product_id); ?></td>
										<td><?php echo e(json_decode($item->title, true)['uz']); ?></td>
										<td><?php echo e($item->quantity); ?></td>
										<td><?php echo e($item->prise*$item->quantity); ?> so'm</td>
									</tr>
									<?$total=$total +$item->prise*$item->quantity?>
								<?php endforeach ?>
							</tbody>
						</table>
						Total: <?php echo e($total); ?> so'm
						<!-- /.card -->
					
					


				</div>
			</div>
			<h3 class='m-10'>Activity</h3>
			<div class="card card-primary card-outline card-tabs">
				<div class="card-body">
				<?if($order->status!='finished'&&$order->status!='todeliver'){?>
					<a 
						href="<?php echo e(route('change_orders_status',[
									'id'=>$order->id,
									'newstatus'=>'cancelled'
								])); ?>" 
						class="btn btn-danger">
						Cancel Order
					</a>

					<?if($order->status=='readytodeliver'){?>
						<a href="<?php echo e(route('change_orders_status',[
									'id'=>$order->id,
									'newstatus'=>'finished'
								])); ?>" 
							class="btn btn-success">
						Finish order
					</a>
					<?}else{?>
						<a href="<?php echo e(route('change_orders_status',[
									'id'=>$order->id,
									'newstatus'=>'todeliver'
								])); ?>"
							class="btn btn-warning">
						Proceed to warehouse
					</a>
					<?}?>
				<?}else{?>
					<?if(Auth::user()->role=='warehouse keeper'){?>
					<a href="<?php echo e(route('change_orders_status',[
									'id'=>$order->id,
									'newstatus'=>'readytodeliver'
								])); ?>"
							class="btn btn-warning">
						Ready to deliver
					</a>
					<?}else{?>
						<h5>This order is <?php echo e($order->status); ?></h5>
					<?}?>
				<?}?>
				</div>
			</div>
		</div>
	</div>
</div><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/orders_manager/one.blade.php ENDPATH**/ ?>