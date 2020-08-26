<main>
  <div class="container">
    <div class="big-slider">
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

    <div class="categories">
      <!-- Nav pills -->
      <ul class="nav nav-pills" role="tablist">
        <div class="row" style="width:100%">
           <div class="col-lg-2 col-md-4 col-6">
            <div class="nav-item active">
              <a onclick="remove_active(this)" class="nav-link active item" data-toggle="pill" href="#default">
                <img src="/maxs/v2/public/frontend_assets/img/icons/service-1.svg" alt="services">
                <span>Element</span>
              </a>
            </div>
          </div>
          <?php foreach ($submenu as $item): ?>
          <div class="col-lg-2 col-md-4 col-6">
            <div class="nav-item active">
              <a onclick="remove_active(this)" class="nav-link item" data-toggle="pill" href="#category<?php echo e($item->id); ?>">
                 <?if($item->path){?>
                <img src='<?php echo e(route("img",
                        ["master_table"=>"submenu",
                         "master_id"=>"$item->id",
                         "name"=>"$item->path"  
                        ]
                      )); ?>'
                    alt="services"
                    style="max-width:100%"
                    >
                <?}else{?>
                  <img src='<?php echo e(route("img",
                        ["master_table"=>"defaults",
                         "master_id"=>"product",
                         "name"=>"product_default.png"  
                        ]
                      )); ?>'
                    alt="services"
                    style="max-width:100%"
                    >
                <?}?>
                <span><?php echo e(json_decode($item->title, true)[$l]); ?></span>
              </a>
            </div>
          </div>
         <?php endforeach ?>
          
        </div>
      </ul>
    </div>

    <section class="products">
      <!-- Tab panes -->
      <div class="tab-content">
        <div id="default" class="tab-pane active">
          <h2>Popular products</h2>

          <div class="row">
            
              <? foreach($popular_products as $item):?>
            <div class="col-lg-3 col-md-4 col-sm-6">
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
            </div>
            <?endforeach?>
            
          </div>
        </div>
        <?php foreach ($submenu as $sitem): ?>
          
        
        <div id="category<?php echo e($sitem->id); ?>" class="tab-pane fade">
          <h2><?php echo e(json_decode($sitem->title, true)[$l]); ?></h2>
          <div class="row">
             <? foreach($products[$sitem->id] as $item):?>
            <div class="col-lg-3 col-md-4 col-sm-6">
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
            </div>
            <?endforeach?>
            
          </div>
          
        </div>
        <?php endforeach ?>

      </div>
    </section>
  </div>
</main>
<script src="/maxs/v2/public/frontend_assets/js/basket.js"></script>

<script>
  basket_init();
  function remove_active(elem){
    var links=document.getElementsByClassName("nav-link");
    for(let i=0;i<links.length;i++){
      if(links[i].classList.contains("active")&&links[i]!=elem){
        console.log("here");
        links[i].classList.remove("active");
      }
    }
  }
</script>
<?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/frontend/category.blade.php ENDPATH**/ ?>