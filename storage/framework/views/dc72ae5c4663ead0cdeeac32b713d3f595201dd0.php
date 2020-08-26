<!doctype html>
<html lang="uz">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/maxs/v2/public/frontend_assets/css/main.css">
  <title>Maxbazar.uz | online magazin</title>
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
            <a href='#' class="active">
              O'zbek
            </a>
            <a href='#'>
              Русский
            </a>
          </div>
          <a href="#" class="cart">
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
                <a href="#">Products</a>
              </li>
              <li>
                <a href="#">Renting</a>
              </li>
              <li>
                <a href="#">About us</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <li>
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Element
                </button>
                
              </div>
            </li>
            <li>
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Element
              </button>
              
            </div>
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
        <a href="#">Products</a>
        <a href="#">Renting</a>
        <a href="#">About us</a>
        <a href="#">Contact</a>
      </div>

      <div class="right">
        <div>
          <span><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Ташкентская область, Зангиотинский район, Хонобод КФИ, ул Янги
          турмуш, пр 2 дом 17</span>
        </div>
        <a href="tel:+998998261301"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;+(998) 99 826-13-01</a>
        <a href="mailto:info@unkown"><i class="fas fa-envelope"></i>&nbsp;&nbsp;info@unkown</a>
      </div>

    </div>
  </div>
  <div class="bottom">
    <p>©2020 Все права защищены</p>
  </div>
</footer>

<script src="/maxs/v2/public/frontend_assets/js/main.js"></script>

</body>

</html><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/layouts/app.blade.php ENDPATH**/ ?>