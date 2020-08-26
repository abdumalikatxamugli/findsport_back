<?
  $partition=3;
  if($student->category_id=='6'||
    $student->category_id=='7'||
    $student->category_id=='8'||
    $student->category_id=='24'||
    $student->category_id=='9'){
      $partition=6;
  }
  $all_weeks=ceil($count/$partition);
  $real_reach=$student->reach;
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

  <link rel="stylesheet" href="/v2/public/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/v2/public/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/v2/public/css/style.css">
  <title>Thompson Student</title>
</head>
<style>
  body{
    width: 100%;
    overflow-x: hidden;
  }
  .menuMob{
    position: absolute;
    width: 30%;
    height: 100%;
    background:
    #a00000;
    right: -100%;
    z-index: 99;
    padding: 50px;
  }
  .menuMob a{
    margin-top: 20px;
    display: block;
    color:
    white;
    font-size: 24px;
  }
</style>
<body class="<?=$category->name?>">
  <div class="menuMob">
    <a href="<?php echo e(route('slogout')); ?>">Logout</a>
  </div>
  <div onclick="closeMenu(event)">
    <?if($category->id=='7'){?>
      <img src="/v2/public/images/Beginner.png" alt="" class="man">
      <?}elseif($category->id=='6'){?>
        <img src="/v2/public/images/Elementary.png" alt="" class="man">
        <?}elseif($category->id=='8'){?>
          <img src="/v2/public/images/Intermediate.png" alt="" class="man">
          <?}  else{?>
            <img src="/v2/public/images/man.png" alt="" class="man">
            <?}  ?>
            <img src="/v2/public/images/lines.png" alt="" class="fuckingLine">
            <main>  
              <nav>
                <div class="container">
                  <div class="row">
                    <div class="col-6">
                      <div class="logo">
                        <img src="/v2/public/images/thompson_logo_301118-07.png" alt="">
                      </div>
                    </div>
                    <div class="col-6 right">
                      <?if($category->id==2){?>
                        <img src="/v2/public/images/speedup.png" alt="" class="cat">
                        <?}else{?>  
                          <div class="catName"><?php echo e($category->name); ?></div>
                          <?}?>
                          <img src="/v2/public/images/Menu.png" alt="" class="menu" onclick="openMenu(event)">
                        </div>
                      </div>
                    </div>
                  </nav>
                  <script>
                    function openMenu(e){
                      document.getElementsByClassName("menuMob")[0].style.right=0;
                      e.stopPropagation();
                    }
                    function closeMenu(e){
                      console.log("hey");

                      document.getElementsByClassName("menuMob")[0].style.right="-100%";
                    }
                  </script>
                  <div class="user">
                    <div class="overlay"></div>
                    <div class="container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="img">
                            <div class="over"></div>
                            <img src="/v2/public/images/m.png" alt="">
                          </div>
                        </div>
                        <div class="col-md-10">
                          <div class="informatv2n">
                            <h2><strong>Hey!</strong><?php echo e($student->name); ?></h2>
                            <p class="lesson">Lesson <?php echo e($real_reach-floor($real_reach/$partition)*$partition+1); ?></p>
                            <p class="week">Week 
                            <?php echo e(floor($real_reach/$partition)+1); ?>/<?php echo e($all_weeks); ?>

                          </p>
                            <div class="bar">
                              <?for($i=0;$i<$all_weeks;$i++):?>
                              <div class="rel">
                                <div class="circle"></div>
                                <div class="progress-week">
                                </div>
                                <div class="text">

                                  <?php echo e($i*$partition+1); ?>-<?php echo e(($i+1)==$all_weeks?($count%$partition==0?$i*$partition+$partition:$i*$partition+$count%$partition):$i*$partition+$partition); ?>

                                </div>
                              </div>
                              <?endfor?>

                            </div>

                            <div class="sex">
                              <img src="/v2/public/images/with tick.png" alt="" onclick="changeS(event)">
                              <span>Male</span>
                              <img src="/v2/public/images/without tick.png" alt="" onclick="changeS(event)">
                              <span>Female</span>
                            </div>
                            <script>
                              function changeS(event){
                                var sex=document.getElementsByClassName('sex');
                                elems=sex[0].getElementsByTagName("img");
                                for (var i = elems.length - 1; i >= 0; i--) {
                                  elems[i].src="/v2/public/images/without tick.png";
                                }
                                event.target.src="/v2/public/images/with tick.png";
                              }
                            </script>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="weeks">
                    <div class="container p-4">
                      <p class="alert alert-warning">
                        <?//$real_reach==$count?"Congrats you have completed the course!!!":""?>
                      </p>
                      <div class="row">
                        <div class="col-lg-7 relative">
                          <div class="overrad"></div>
                          <div class="owl-carousel owl-theme carousel">
                            <?for($i=0;$i<$all_weeks;$i++):?>
                            <?
                            $params['id']=Session::get('category');
                            $params['week']=$i+1;
                            ?>
                            <div class="item"  onclick="goWeek(event,'<?=route('week',$params)?>')">
                              <?

                              if($real_reach-($i+1)*$partition>=0){
                                $percentage=100;
                              }
                              if($real_reach-($i+1)*$partition<0){
                                $percentage=0;
                              }
                              if($real_reach-($i+1)*$partition<0&&$real_reach-$i*$partition>0){
                                $percentage=floor(($real_reach-$i*$partition)*100/$partition);

                              }

                              ?>
                              <div class="progress red" data-percentage="<?=$percentage?>">
                                <span class="progress-left">
                                  <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                  <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                  <div>

                                    WEEK <?php echo e($i+1); ?>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <?endfor?>



                          </div>
                        </div>
                        <div class="col-lg-5">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="points">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-3">
                            <img src="/v2/public/images/headphones.png" alt=""><br>
                            <span>My Administrator</span>
                          </div>
                          <div class="col-md-3">
                            <img src="/v2/public/images/guide.png" alt=""><br>
                            <span>My GuideBook</span>
                          </div>
                          <div class="col-md-3">
                            <img src="/v2/public/images/Telegram_Messenger.png" alt=""><br>
                            <span>My Free Learning Materials</span>
                          </div>
                          <div class="col-md-3">
                            <img src="/v2/public/images/video.png" alt=""><br>
                            <span>My Extra Video tutorials</span>
                          </div>

                        </div>
                      </div>
                      <div class="col-md-5"></div>
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
            </div>
            <!-- Optv2nal JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="/v2/public/js/owl.carousel.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script>
              $(document).ready(function(){
                $(".carousel").owlCarousel({
                  margin:10,
                  nav:true,
                  navText:["<img src='/v2/public/images/prev.png' class='ownav'>","<img src='/v2/public/images/next.png' class='ownav'>"],
                  responsive:{
                    0:{
                      items:1
                    },
                    600:{
                      items:2
                    },
                    1000:{
                      items:4
                    }
                  }
                });
              });
              function goWeek(event,src){
    // event.preventDefault();

    var restrict=<?=$student->restrict_lesson?>;
    var reach=<?=$student->reach?>;
    var partition=<?=$partition?>;
    var toWeek=src.split("/").reverse()[0];
    if(restrict<0){
      console.log(src);
      if(toWeek>Math.floor(reach/partition)+1){
        alert("Please watch all lessons from previous and hit done on each of them to unlock the week");
      }else{
        window.location.assign(src);
      }
    }else{

      if(toWeek>=Math.ceil(restrict/partition)+1){
        alert("The week is restricted by admin");
      }else{
        window.location.assign(src);
      }
    }
  }
</script>
</body>
</html><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/student/index.blade.php ENDPATH**/ ?>