<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
  
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
  <title>Thompson Student</title>
</head>
<body class="login">
  <div class="bg-image"></div>
  <main>  
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="logo">
              <img src="/v2/public/logo-white.png" alt="">
            </div>
          </div>
          <div class="col-6 right">
           
            <img src="images/Menu.png" alt="" class="menu">
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row col-md-12">
        <div class="form">
          <form method="POST" action="<?php echo e(route('sauth')); ?>">
            <?php echo csrf_field(); ?>
            <img src="images/circle-cropped.png" alt="I">
            <label for="login">Login: </label>
            <input type="text" name="username">
            <label for="login">Password: </label>
            <input type="text" name="password">
            <button type="submit">LOG IN</button>
          </form>
        </div>
      </div>
    </div>
    <div class="img">
      <img src="images/signin.png" alt="">
    </div>
  </main>
  <footer>  
    <div class="container foot"> 
      <div class="copy"> 
        &copy All rights reserved
      </div>
      <div class="social">  
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i> 
        <i class="fab fa-telegram-plane"></i>
        <i class="fab fa-youtube"></i>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/login/login.blade.php ENDPATH**/ ?>