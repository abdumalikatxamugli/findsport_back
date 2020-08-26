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
  <link rel="stylesheet" href="css/style.css">
  <title>Thompson Student</title>
</head>
<body class="register">
  <div class="bg-image"></div>
  <img src="images/Register.png" alt="" class="man">
  <img src="images/linesright.png" alt="" class="fuckingLine">
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
      <div class="row">
        
        <div class="col-lg-6">
          
        </div>
        <div class="col-lg-6">
          <div class="registrationForm">
            <form method="POST" action="<?php echo e(route('sreg')); ?>">
              <?php echo csrf_field(); ?>

              <div class="input">
                <img src="images/circle-cropped.png" alt="I">
                <label for="name">Your Full Name:</label>
                <input type="text" name="name">
              </div>
             <!--  <div class="input">
                <img src="images/loc.png" alt="I">
                <label for="name">Where are you from:</label>
                <select name="location" id="">
                  <option value="Tashkent">Tashkent</option>
                  <option value="Sirdaryo">Sirdaryo</option>
                  <option value="Andijan">Andijan</option>
                  <option value="Bukhara">Bukhara</option>
                  <option value="Jizzakh">Jizzakh</option>
                  <option value="Kashkadarya">Kashkadarya</option>
                  <option value="Navoi">Navoi</option>
                  <option value="Namangan">Namangan</option>
                  <option value="Samarkand">Samarkand</option>
                  <option value="Surkhandarya">Surkhandarya</option>
                  <option value="Fergana">Fergana</option>
                  <option value="Khorezm">Khorezm</option>
                  <option value="Karakalpakstan">Karakalpakstan</option> 
                </select>
                
              </div> -->
              <div class="input">
                <img src="images/phone.png" alt="I">
                <label for="name">Phone Number:</label>
                <input type="text" name="phone1">
              </div>
              <!-- <div class="input">
                <img src="images/phone.png" alt="I">
                <label for="name">Phone Number 2:</label>
                <input type="text" name="phone2">
              </div> -->
              <!-- <div class="input">
                <img src="images/loc.png" alt="I">
                <label for="name">Learning Center</label>
                <select name="LC" id="">
                  <option value="Tashkent">Thompson LC</option>
                </select>
                
              </div> -->
              <!-- <div class="input">
                <img src="images/book.png" alt="I">
                <label for="name">Course:</label>
                <select name="category" id="">
                  <?//foreach($cat as $item):?>
                  <option value=""></option>
                  
                  <?//endforeach?>  
                </select>
              </div> -->
               <div class="input">
                <img src="images/book.png" alt="I">
                <label for="name">Course:</label>
                <select name="want" id="want">
                  <option value="Beginner">Intensive English</option>
                  <!-- <option value="Elementary">Elementary</option>
                  <option value="Pre-Intermediate">Pre-Intermediate </option> -->
                  <option value="IELTS 6+">IELTS 6+</option>
                  <option value="IELTS 7+">IELTS 7+</option>
                </select>
              </div>
              <div class="button">
              <button type="submit">REGISTER</button>
              </div>
            </form>
          </div>
        </div>
      </div>
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
</html><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/login/registration.blade.php ENDPATH**/ ?>