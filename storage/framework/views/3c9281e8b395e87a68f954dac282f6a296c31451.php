<?php
  use App\Sport;
?>

<?php $__env->startSection('title'); ?>
Findsport.uz
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/inner.3f453493.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main style="margin-top:120px;">
  <div class="container">
    <div class="title"> <a href="assets#"> <i class="fas fa-arrow-left"></i> </a>
      <h1><?php echo e(json_decode($place->title)->$l); ?></h1>
    </div>
    <div class="details">
      <div class="detail"> 
        <i class="fas fa-map-marker-alt"></i> 
        <span><?php echo e(json_decode($place->address)->$l); ?></span> 
      </div>
      <div class="detail"> <i class="far fa-clock"></i> 
        <span>
          с <?php echo e(json_decode($place->open_time)->start); ?> 
          до <?php echo e(json_decode($place->open_time)->finish); ?> 
        </span> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="slider-wrapper">
          <div class="inner-slider">
            <div> <img src="<?php echo e(asset('assets/pitch.78265cba.jpg')); ?>" alt=""> </div>
            <div> <img src="<?php echo e(asset('assets/volleyball.5368c7b2.jpg')); ?>" alt=""> </div>
            <div> <img src="<?php echo e(asset('assets/football.feeb18a4.jpg')); ?>" alt=""> </div>
          </div>
          <div class="controls">
            <div class="inner-slider-left"> <i class="fas fa-arrow-left"></i> </div>
            <div class="inner-slider-right"> <i class="fas fa-arrow-right"></i> </div>
          </div>
          <div class="stars"> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="params">
          <div class="param"> 
            <span> 
            <?php echo e(json_decode($place->params)->height); ?>

            × 
            <?php echo e(json_decode($place->params)->width); ?>

            × 
            <?php echo e(json_decode($place->params)->length); ?>

            </span> 
          </div>
          <div class="param"> 
            <span>
              <?php echo e(json_decode($place->cover)->$l); ?>

            </span> 
          </div>
          <div class="param"> <span>|</span> </div>
          <div class="param">
            <span>
              <?php echo e(json_decode($place->type)->$l); ?>

            </span> 
          </div>
        </div>
        <div class="capacity"> Вмещает игроков — <?php echo e($place->capacity); ?> </div>
        <hr>
        <div class="sport-tags">
          <?php $__currentLoopData = Sport::find($place->sports())->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span>
              <?php echo e(json_decode($val->title)->$l); ?>

            </span>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <hr>
        <ul class="attrs">
          <?php $__currentLoopData = json_decode($place->attributes, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
              <span><?php echo e($attr[$l]); ?></span>
              <i class="fa fa-check"></i>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="payment">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo e(asset('assets/motivation-comission.e0eb7666.svg')); ?>" alt="">
            </div>
            <div class="col-md-9"> <span> Не платите лишнего </span>
              <p> Мы не берем комиссию и не завышаем цены. Все цены на FindSport.ru формируются администрацией площадок. </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo e(asset('assets/motivation-payment.ebbcf073.svg')); ?>" alt="">
            </div>
            <div class="col-md-9"> <span> Не платите лишнего </span>
              <p> Оплачивайте как вам удобно - банковской картой - наличными на площадке - счетом для юридических лиц </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <?php echo e(json_decode($place->description)->$l); ?>

    </div>
  </div>
</main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('assets/inner.809837ad.js')); ?>"></script>
<script src="<?php echo e(asset('assets/main.1a031342.js')); ?>"></script>
<?php $__env->stopSection(); ?><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/frontend/place_inner.blade.php ENDPATH**/ ?>