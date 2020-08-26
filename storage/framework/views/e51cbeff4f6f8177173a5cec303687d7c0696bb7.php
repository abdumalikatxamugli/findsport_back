
<link rel="stylesheet" href="/maxs/v2/public/frontend_assets/css/product_inner.css">

<div class="container product_inner">
	<div class="row">
		<div class="col-md-5">
			<div class="thumbnail-container">
				<?if($post->path){?>
                <img src='<?php echo e(route("img",
                        ["master_table"=>"product",
                         "master_id"=>"$post->id",
                         "name"=>"$post->path"  
                        ]
                      )); ?>'
                    data-zoom='<?php echo e(route("img",
                        ["master_table"=>"product",
                         "master_id"=>"$post->id",
                         "name"=>"$post->path"  
                        ]
                      )); ?>'
                    style="max-width:100%"
                    class="drift-demo-trigger"
                    alt="category icon"
                    >
                <?}else{?>
                  <img src='<?php echo e(route("img",
                        ["master_table"=>"defaults",
                         "master_id"=>"product",
                         "name"=>"product_default.png"  
                        ]
                      )); ?>'
                    data-zoom='<?php echo e(route("img",
                        ["master_table"=>"defaults",
                         "master_id"=>"product",
                         "name"=>"product_default.png"  
                        ]
                      )); ?>'
                    style="max-width:100%"
                    class="drift-demo-trigger"
                    alt="category icon"
                    >
                <?}?>
				
			</div>
		</div>
		<div class="col-md-7">
			<div class="details">
				<h1><?php echo e(json_decode($post->title,true)[$l]); ?></h1>
			    <?$newprice=false;?>
	              <?if($post->percent){
	                $newprice=$post->price*((100 - $post->percent)/100);
	             }?>
				<p class="price">
					<?if($newprice){?>
	                  <?php echo e($newprice); ?>

	                <?}else{?>
	                	<?php echo e($post->price); ?>

	                <?}?>
	                so'm
				</p>
				<p class="description"><?php echo e(json_decode($post->description,true)[$l]); ?></p>


				<button class="btn btn-success" onclick="to_basket(this)" 
                data-id='<?php echo e($post->id); ?>'
                data-type="<?php echo e($post->type); ?>"
                data-title='<?php echo e(json_decode($post->title, true)[$l]); ?>'
                <?if($newprice){?>
                  data-price="<?php echo e($newprice); ?>"
                  data-discounted="true"
                <?}else{?>
                  data-price='<?php echo e($post->price); ?>'
                  data-discounted="false"
                <?}?>
                <?if($post->path){?>
                  data-path="<?php echo e($post->path); ?>"
                <?}else{?> 
                  data-path="product_default.png"
                <?}?>
                >
					<i class="fa fa-cart-plus"></i>
					Add to Cart
				</button>

			</div>
		</div>
	</div>

</div>


<script src="/maxs/v2/public/frontend_assets/js/drift.min.js"></script>
<script src="/maxs/v2/public/frontend_assets/js/basket.js"></script>
<script>
	new Drift(document.querySelector('.drift-demo-trigger'), {
		paneContainer: document.querySelector('.thumbnail-container'),
		inlinePane: 769,
		inlineOffsetY: -85,
		containInline: true,
		hoverBoundingBox: true
	});
</script><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/frontend/product_inner.blade.php ENDPATH**/ ?>