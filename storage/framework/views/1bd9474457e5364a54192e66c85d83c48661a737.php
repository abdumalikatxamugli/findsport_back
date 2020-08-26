<!doctype html>
<html lang="uz">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/maxs/v2/public/frontend_assets/css/main.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <title>Maxbazar.uz | online magazin</title>
  <style>
    .cart{
      cursor:pointer;
    }
    .active-menu{
      color:yellow !important;
    }
  </style>
</head>

<body>
  <header>
    <div class="container">
      <div class="topbar">
        <div class="left">
          <a href="#" class="logo">Logo</a>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="search">
              <label for="search">Search</label>
            </div>
          </form>
        </div>
        <div class="right">
          <div class="lang">
            <a href='#' class="<?=$l=='uz'?'active':''?>" onclick="change_lang('uz')">
              O'zbek
            </a>
            <a href='#' class="<?=$l=='ru'?'active':''?>" onclick="change_lang('ru')">
              Русский
            </a>
          </div>
          <a href="<?php echo e(route('korzinka',$l)); ?>" class="cart">
            <img src="/maxs/v2/public/frontend_assets/img/icons/basket.svg" alt="cart">
            <div id="basket">0</div>
          </a>
        </div>
      </div>
    </div>
    <div class="navigation">
      <div class="container d-flex justify-content-center align-items-center">
        <div class="logo">
          <a href="./index.html">Logo</a>
        </div>
        <div class="nav-wrapper">
          <nav>
            <div class="for-mobile">
              <button><img src="/maxs/v2/public/frontend_assets/img/icons/close-menu.svg" alt="close-menu"></button>
              <div class="mobile-lang">
                <p>Выберите язык</p>
                <a href="#"><span>O'z</span></a>
                <a href="#"><span>Ру</span></a>
              </div>
            </div>
            <ul class="nav-links">
              <li>
                <a class="menu" href="<?php echo e(route('home',['l'=>$l,'type'=>'tosell'])); ?>">Products</a>
              </li>
              <li>
                <a class="menu" href="<?php echo e(route('home',['l'=>$l,'type'=>'tolend'])); ?>">Renting</a>
              </li>
              <li>
                <a class="menu" href="#">About us</a>
              </li>
              <li>
                <a class="menu" href="#">Contact</a>
              </li>
              
            </li>
           
        </ul>
      </nav>
    </div>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <div class="backdrop"></div>
  </div>
</div>
</header>
<main style="margin-bottom:20px">

<?php echo $__env->yieldContent('content'); ?>

</main>
<footer>
  <div class="container">
    <div class="wrapper">
      <div class="left">
        <a href="#" class="logo">Logo</a>
        <p>Обладая более чем 8-летним опытом, нам удалось стать идеальным началом для многих клиентов.</p>
        <div class="social">
          <a href="#">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="#">
            <i class="fab fa-telegram"></i>
          </a>
        </div>

      </div>

      <div class="center">
        <a href="<?php echo e(route('home',['l'=>$l,'type'=>'tolend'])); ?>">Products</a>
        <a href="<?php echo e(route('home',['l'=>$l,'type'=>'tosell'])); ?>">Renting</a>
        <a href="#">About us</a>
        <a href="#">Contact</a>
      </div>
      <div class="right">
        <div>
          <span><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Ташкентская область, Зангиотинский район, Хонобод КФИ, ул Янги
          турмуш, пр 2 дом 17</span>
        </div>
        <a href="tel:+998998261301"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;+(998) 99 826-13-01</a>
        <a href="mailto:info@unkown"><i class="fas fa-envelope"></i>&nbsp;&nbsp;info@maxbazar.uz</a>
      </div>

    </div>
  </div>
  <div class="bottom">
    <p>©2020 Все права защищены</p>
  </div>
</footer>

<script src="/maxs/v2/public/frontend_assets/js/main.js"></script>

<script>

  var menu=document.getElementsByClassName('menu');
  for(let i=0;i<menu.length;i++){
    if(window.location.href.split("#")[0]==menu[i].href){
      menu[i].classList.add('active-menu');
      
    }
  }
  function change_lang(to){
    var current=window.location.href;
    var new_url=current.split("/");
    new_url[3]=to;
    window.location.assign(new_url.join('/'));
  }
</script>

</body>

</html><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/frontend/layouts/app.blade.php ENDPATH**/ ?>