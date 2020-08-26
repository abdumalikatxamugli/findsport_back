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
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img src="/maxs/v2/public/frontend_assets/img/icons/drill.svg" alt="links"></i>&nbsp;
            <?php echo e(json_decode($item->title,true)[$l]); ?>

            </button>
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
              <a class="img" href="#">
                <?if($item->path){?>
                <img src='<?php echo e(route("img",
                        ["master_table"=>"product",
                         "master_id"=>"$item->id",
                         "name"=>"$item->path"  
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
                <?if($newprice){?>
                  data-price="<?php echo e($newprice); ?>"
                <?}else{?>
                  data-price='<?php echo e($item->price); ?>'
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
                      <a class="img" href="#">
                        <?if($item->path){?>
                        <img src='<?php echo e(route("img",
                                ["master_table"=>"product",
                                 "master_id"=>"$item->id",
                                 "name"=>"$item->path"  
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
                        <?if($newprice){?>
                          data-price="<?php echo e($newprice); ?>"
                        <?}else{?>
                          data-price='<?php echo e($item->price); ?>'
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
              <a class="img" href="#">
                <?if($item->path){?>
                <img src='<?php echo e(route("img",
                        ["master_table"=>"product",
                         "master_id"=>"$item->id",
                         "name"=>"$item->path"  
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
                <?if($newprice){?>
                  data-price="<?php echo e($newprice); ?>"
                <?}else{?>
                  data-price='<?php echo e($item->price); ?>'
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
  <script>
  function calcBasket(basket){
    var len=0
    for(let i=0; i<basket.length; i++){
      len=len+ basket[i].quantity;
    }
    return len;
  }
  if(localStorage.basket==undefined){
    localStorage.setItem('basket','[]');
  }else{
    document.getElementById('basket').innerHTML=calcBasket(JSON.parse(localStorage.basket));
  }
  function to_basket(elem){
    var basket=JSON.parse(localStorage.basket);
    var id=elem.dataset.id;
    var isNew=true;
    for(let i=0;i<basket.length;i++){
      if(basket[i].id==id){
        isNew=false;
        basket[i].quantity++;
      }
    }
    if(isNew){
      var product={
        id:elem.dataset.id,
        title:elem.dataset.title,
        price:elem.dataset.price,
        quantity:1
      }
      basket.push(product);
    }
    localStorage.setItem('basket',JSON.stringify(basket));
    document.getElementById('basket').innerHTML=calcBasket(JSON.parse(localStorage.basket));
    console.log(localStorage.basket);
  }
  function clearBascet(){
    localStorage.setItem("basket",JSON.stringify([]));
    document.getElementById('basket').innerHTML=calcBasket(JSON.parse(localStorage.basket));
  }
  clearBascet();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/home.blade.php ENDPATH**/ ?>