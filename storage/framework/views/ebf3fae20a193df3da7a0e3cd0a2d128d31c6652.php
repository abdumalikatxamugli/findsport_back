<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <section class="sidebar">
        <div class="title">
          <h2>Tovarlar</h2>
          <div><i class="fas fa-angle-double-right"></i></div>
        </div>
        <div class="links">
          <? foreach($menu as $item):?>
          <div class="btn-group dropright">
            <a type="button" class="btn " 
            
            href="<?php echo e(route('category',[
                'l'=>$l,
                'category_id'=>$item->id,
                'type'=>$item->type
              ])); ?>"
            >
            <?if($item->path){?>
                <img src='<?php echo e(route("img",
                        ["master_table"=>"menu",
                         "master_id"=>"$item->id",
                         "name"=>"$item->path"  
                        ]
                      )); ?>'
                    alt="category icon"
                    style="max-width: 20px;margin-right:10px"
                    >
                <?}else{?>
                  <img src='<?php echo e(route("img",
                        ["master_table"=>"defaults",
                         "master_id"=>"product",
                         "name"=>"product_default.png"  
                        ]
                      )); ?>'
                    alt="category icon"
                    style="max-width: 20px;margin-right:10px"
                    >
                <?}?>
            
            <?php echo e(json_decode($item->title,true)[$l]); ?>

            </a>
          </div>
        <?endforeach?>
      </section>
      </div>
      <div class="col-lg-9">
        <div class="main-slider">
          <div>
            <img src="/maxs/v2/public/frontend_assets/img/main-slider.jpg" alt="main-slider">
          </div>
          <div>
            <img src="/maxs/v2/public/frontend_assets/img/main-slider.jpg" alt="main-slider">
          </div>
          <div>
            <img src="/maxs/v2/public/frontend_assets/img/main-slider.jpg" alt="main-slider">
          </div>
        </div>
        <section class="products">
          <div class="title">
            <h2>Yangi tovarlar</h2>
            <span>+<?php echo e(count($new_products)); ?></span>
          </div>

          <div class="mini-slider">
            <? foreach($new_products as $item):?>
              <?$newprice=false;?>
              <?if($item->percent){
                $newprice=$item->price*((100 - $item->percent)/100);
              }?>
            <div class='product'>
              <a class="img" href="<?php echo e(route('product_inner',['id'=>$item->id, 'l'=>$l])); ?>">
                <?if($item->path){?>
                <img src='<?php echo e(route("img",
                        ["master_table"=>"product",
                         "master_id"=>"$item->id",
                         "name"=>"$item->path"  
                        ]
                      )); ?>'
                    alt="category icon"
                    >
                <?}else{?>
                  <img src='<?php echo e(route("img",
                        ["master_table"=>"defaults",
                         "master_id"=>"product",
                         "name"=>"product_default.png"  
                        ]
                      )); ?>'
                    alt="category icon"
                    >
                <?}?>
              </a>
              <div class="middle">
                <a href="#" class="category">
                  <?php echo e(json_decode($item->title, true)[$l]); ?>

                </a>
                <div class="cart" onclick="to_basket(this)" 
                data-id='<?php echo e($item->id); ?>'
                data-type="<?php echo e($item->type); ?>"
                data-title='<?php echo e(json_decode($item->title, true)[$l]); ?>'
                <?if($newprice){?>
                  data-price="<?php echo e($newprice); ?>"
                  data-discounted="true"
                <?}else{?>
                  data-price='<?php echo e($item->price); ?>'
                  data-discounted="false"
                <?}?>
                <?if($item->path){?>
                  data-path="<?php echo e($item->path); ?>"
                <?}else{?> 
                  data-path="product_default.png"
                <?}?>
                >
                <img src="/maxs/v2/public/frontend_assets/img/icons/cart.svg" alt="cart">
                </div>
              </div>
              <div class="price">
                <?if($newprice){?>
                  <s><?php echo e($item->price); ?> so'm</s><br>
                  <?php echo e($newprice); ?> so'm
                <?}else{?>
                  <?php echo e($item->price); ?> so'm
                <?}?>
              </div>
            </div>
            <?endforeach?>
          </div>
        </section>

        <section class="products">
          <div class="title">
            <h2>Popular Products</h2>
            <span>+<?php echo e(count($popular_products)); ?></span>
          </div>

          <div class="mini-slider">
            <? foreach($popular_products as $item):?>
              <?$newprice=false;?>
              <?if($item->percent){
                $newprice=$item->price*((100 - $item->percent)/100);
              }?>
                    <div class='product'>
                      <a class="img" href="<?php echo e(route('product_inner',['id'=>$item->id, 'l'=>$l])); ?>">
                <?if($item->path){?>
                <img src='<?php echo e(route("img",
                        ["master_table"=>"product",
                         "master_id"=>"$item->id",
                         "name"=>"$item->path"  
                        ]
                      )); ?>'
                    alt="category icon"
                    >
                <?}else{?>
                  <img src='<?php echo e(route("img",
                        ["master_table"=>"defaults",
                         "master_id"=>"product",
                         "name"=>"product_default.png"  
                        ]
                      )); ?>'
                    alt="category icon"
                    >
                <?}?>
              </a>
                      <div class="middle">
                        <a href="#" class="category">
                          <?php echo e(json_decode($item->title, true)[$l]); ?>

                        </a>
                        <div class="cart" onclick="to_basket(this)" 
                        data-id='<?php echo e($item->id); ?>'
                        data-type="<?php echo e($item->type); ?>"
                        data-title='<?php echo e(json_decode($item->title, true)[$l]); ?>'
                        <?if($newprice){?>
                          data-price="<?php echo e($newprice); ?>"
                          data-discounted="true"
                        <?}else{?>
                          data-price='<?php echo e($item->price); ?>'
                          data-discounted="false"
                        <?}?>
                        <?if($item->path){?>
                          data-path="<?php echo e($item->path); ?>"
                        <?}else{?> 
                          data-path="product_default.png"
                        <?}?>
                        
                        >
                        <img src="/maxs/v2/public/frontend_assets/img/icons/cart.svg" alt="cart">
                        </div>
                      </div>
                      <div class="price">
                        <?if($newprice){?>
                          <s><?php echo e($item->price); ?> so'm</s><br>
                          <?php echo e($newprice); ?> so'm
                        <?}else{?>
                          <?php echo e($item->price); ?> so'm
                        <?}?>
                      </div>
                    </div>
                    <?endforeach?>
          </div>
        </section>

<section class="products">
  <div class="title">
    <h2>Discounts</h2>
    <span>+<?php echo e(count($discounts)); ?></span>
  </div>

  <div class="mini-slider">
    <? foreach($discounts as $item):?>
      <?$newprice=false;?>
              <?if($item->percent){
                $newprice=$item->price*((100 - $item->percent)/100);
              }?>
            <div class='product'>
              <a class="img" href="<?php echo e(route('product_inner',['id'=>$item->id, 'l'=>$l])); ?>">
                <?if($item->path){?>
                <img src='<?php echo e(route("img",
                        ["master_table"=>"product",
                         "master_id"=>"$item->id",
                         "name"=>"$item->path"  
                        ]
                      )); ?>'
                    alt="category icon"
                    >
                <?}else{?>
                  <img src='<?php echo e(route("img",
                        ["master_table"=>"defaults",
                         "master_id"=>"product",
                         "name"=>"product_default.png"  
                        ]
                      )); ?>'
                    alt="category icon"
                    >
                <?}?>
              </a>
              <div class="middle">
                <a href="#" class="category">
                  <?php echo e(json_decode($item->title, true)[$l]); ?>

                </a>
                <div class="cart" onclick="to_basket(this)" 
                data-id='<?php echo e($item->id); ?>'
                data-title='<?php echo e(json_decode($item->title, true)[$l]); ?>'
                data-type="<?php echo e($item->type); ?>"
                <?if($newprice){?>
                  data-price="<?php echo e($newprice); ?>"
                  data-discounted="true"
                <?}else{?>
                  data-discounted="false"
                  data-price='<?php echo e($item->price); ?>'
                <?}?>
                <?if($item->path){?>
                  data-path="<?php echo e($item->path); ?>"
                <?}else{?> 
                  data-path="product_default.png"
                <?}?>
                >
                <img src="/maxs/v2/public/frontend_assets/img/icons/cart.svg" alt="cart">
                </div>
              </div>
              <div class="price">
                <?if($newprice){?>
                  <s><?php echo e($item->price); ?> so'm</s><br>
                  <?php echo e($newprice); ?> so'm
                <?}else{?>
                  <?php echo e($item->price); ?> so'm
                <?}?>
              </div>
            </div>
            <?endforeach?>
          </div>
        </section>
      </div>
    </div>
  </div>
  <script src="/maxs/v2/public/frontend_assets/js/basket.js"></script>
  <script>
    <?if(Session::get('zakaz_init')){
      Session::forget('zakaz_init');
    ?>
      alert("Your order has been received, we will contact you soon.");
    <?}?>
    basket_init();
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/frontend/home.blade.php ENDPATH**/ ?>