<?php $__env->startSection('title'); ?>
    Findsport.uz
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(asset('assets/arenas.c6790daf.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <main class="item-list">
        <div class="items">
            <form action="">
                <div class="dropdown" id="sportTypes"> <a href="#" class="dropdown-active">Выберите вид спорта</a>
                    <div class="dropdown-items"> <a href="#">Футбол</a> <a href="#">Баскетбол</a> <a href="#">Волейбол</a> <a href="#">Теннис</a> <a href="#">Сквош</a> </div>
                </div>
                <div class="filter"> <a href="#" class="dropdown-active"><i class="fas fa-list"></i>&nbsp;Фильтры</a>
                    <div class="dropdown-items filter-items">
                        <div class="inputs">
                            <div class="radio">
                                <div> <input type="radio" value="open" name="radio" id="radio1"> <label for="radio1">Открытая</label> </div>
                                <div> <input type="radio" value="close" name="radio" id="radio2"> <label for="radio2">Крытая</label> </div>
                            </div>
                            <div class="cost">
                                <div> <label for="minPirce">Цена за час от</label> <input type="text" id="minPrice" placeholder="UZS"> </div>
                                <div> <label for="maxPirce">до</label> <input type="text" id="maxPrice" placeholder="UZS"> </div>
                            </div>
                            <div class="metro"> <label for="metro"><img src="<?php echo e(asset('assets/metro.29e1953a.svg')); ?>" alt="metro"></label> <input type="text" id="metro"> </div>
                            <div class="district">
                                <div class="dropdown" id="district"> <a href="#" class="dropdown-active">Выберите вид спорта</a>
                                    <div class="dropdown-items"> <a href="#">Футбол</a> <a href="#">Баскетбол</a> <a href="#">Волейбол</a> <a href="#">Теннис</a> <a href="#">Сквош</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="buttons"> <button id="clear" class="btn">clear</button> <button type="submit" class="btn">Submit</button> </div>
                    </div>
                </div>
            </form>
            <?php $__currentLoopData = $iterable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#" class="item">
                <div class="img"> 
                    <img 
                        src="<?php echo e(route('unimg')."?path=".urlencode($place->path)); ?>" 
                        alt=""
                    > 
                   
                </div>
                <div class="content">
                    <div>
                        <h6><?php echo e(json_decode($place->title)->$l); ?></h6> 
                        <span> 
                            <img src="<?php echo e(asset('assets/location.19cb9090.svg')); ?>" alt="location" title="Icon made by Freepik from www.flaticon.com">
                            <?php echo e(json_decode($place->address)->$l); ?>

                        </span> 
                       
                        <span> 
                            <img src="<?php echo e(asset('assets/metro.29e1953a.svg')); ?>" alt="metro" title="Icon made by Freepik from www.flaticon.com"> 
                            <?php echo e(json_decode($place->metro)->$l); ?>

                        </span>
                    </div>
                    <?php if($index<10): ?>
                        <div class="new">
                            <div>new</div>
                        </div>
                    <?php endif; ?>
                </div>
            </a> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div style="position:relative;overflow:hidden;" class="map"><a href="https://yandex.uz/maps/10335/tashkent/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0;">Ташкент</a><a href="https://yandex.uz/maps/10335/tashkent/?ll=69.228364%2C41.274239&utm_medium=mapframe&utm_source=maps&z=14.83" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс.Карты — поиск мест и адресов, городской транспорт</a><iframe src="assetshttps://yandex.uz/map-widget/v1/-/CCQ3mWXYOD/?lang=en_US&ll=32.810152,39.889847&size=450,450&z=10&l=map&pt=32.810152,39.889847,pm2rdl1~32.870152,39.869847,pm2rdl99" width="100%" height="400" frameborder="1" allowfullscreen style="position:relative;"></iframe> </div>
 </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
 <script src="{{asset('assets/filter.3ec0f301.js"></script>
<?php $__env->stopSection(); ?>
    
<?php /**PATH C:\xampp\htdocs\findsport_back\resources\views/frontend/clubs.blade.php ENDPATH**/ ?>