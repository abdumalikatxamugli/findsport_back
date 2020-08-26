<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>🤓 IELTS Online</title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">


	<link href="assets/img/1582319868286_subject-ielts-icon.png" rel="icon">
	<link href="assets/img/1582319868286_subject-ielts-icon.png" rel="apple-touch-icon">


	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.theme.carousel.min.css" rel="stylesheet">

	<link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
	<style>
		#taketest{
			position: fixed;
    right: 0;
    background-color: crimson;
    z-index: 9999;
    color: white;
    display: block;
    top: 45%;
    padding: 10px 20px;
    font-weight: 600;
    letter-spacing: 2px;
    transform: rotateZ(-90deg) translateY(60px);
    transition: 0.5s;
    animation: shake 1s linear infinite;
		}
		#taketest:hover{
			transition: 0.5s;
			background-color: red;
		}
		@keyframes  shake{
			0%{
				transform: rotateZ(-90deg) translateY(60px) translateX(0px);
			}
			50%{
				transform: rotateZ(-90deg) translateY(60px) translateX(5px);
			}
			100%{
				transform: rotateZ(-90deg) translateY(60px) translateX(0px);
			}
		}

	</style>
<a href="/test.html" id="taketest" target="blank">LEVEL CHECK</a>

	<header id="header" class="header-scrolled">
		<div class="container-fluid">

			<div id="logo" class="pull-left">
				<!-- <h1><a href="#intro" class="scrollto">ieltsonline.uz</a></h1> -->
				<h1><a href="<?php echo e(route('home')); ?>" class="scrollto"><img src="white-black.png" alt="logo" style="width:150px"></a></h1>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="#intro">Home</a></li>
					<li><a href="#about">Course Outline</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#skills">Our Expertise</a></li>
					<li><a href="/partnership">Partnership</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="<?php echo e(route('login')); ?>">Login</a></li>
					<li><a href="<?php echo e(route('registration')); ?>">Register</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->
			<div class="phone-email">
				<div id="phone" style="border-bottom:1px solid white">
					<a href="tel:+998712007075">+998 71 200 7075</a>
				</div>
				<div id="email">
					<a href="mailto:info@ieltsonline.uz">info@ieltsonline.uz</a>
				</div>
			</div>
		</div>
	</header><!-- End Header -->

	<!-- ======= Intro Section ======= -->
	<section id="intro">
		<div class="intro-container">
			<div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

				<ol class="carousel-indicators"></ol>

				<div class="carousel-inner" role="listbox">

					<div class="carousel-item active">
						<div class="carousel-background"><img src="assets/img/intro-carousel/1.jpg" alt=""></div>
						<div class="carousel-container">
							<!-- <div class="carousel-content">
                  <h2>We are professionals</h2>
                  <p>Complete preparation to achieve the band score you need</p>
                  <a href="#login" class="btn-get-started scrollto">Get Started</a>
              </div> -->
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-background"><img src="assets/img/intro-carousel/2.jpg" alt=""></div>
						<!-- <div class="carousel-container">
                <div class="carousel-content">
                  <h2>What you will learn?</h2>
                  <p>Discover video lessons showing you how to improve your IELTS skills</p>
                  <a href="#login" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div> -->
					</div>



					<div class="carousel-item">
						<div class="carousel-background"><img src="assets/img/intro-carousel/4.jpg" alt=""></div>
						<div class="carousel-container">
							<!-- <div class="carousel-content">
                  <h2>Prepare for IELTS online</h2>
                  <p>Learn techniques with quailified and experienced Experts that are ready to share their knowledge with you.</p>
                  <a href="#login" class="btn-get-started scrollto">Get Started</a>
              </div> -->
						</div>
					</div>



				</div>

				<a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>
		</div>
	</section><!-- End Intro Section -->

	<main id="main">

		<!-- ======= Featured Services Section Section ======= -->


		<!-- ======= About Us Section ======= -->
		<section id="about">
			<div class="container">

				<header class="section-header">
					<h3>Course outline</h3>
					<p>This program is designed for anyone preparing for IELTS. IELTS teachers will also find it useful. When you complete all courses, you will be more confident and ready to take your exam.</p>
				</header>

				<div class="row about-cols">

					<div class="col-md-4 wow fadeInUp">
						<div class="about-col">
							<div class="img">
								<img src="assets/img/speaking.jpg" alt="" class="img-fluid">

							</div>
							<h2 class="title"><a href="#">Understanding IELTS Speaking</a></h2>
							<p> Find out what you need to know about the IELTS Speaking test and learn how to improve your test performance.
							</p>
						</div>
					</div>

					<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
						<div class="about-col">
							<div class="img">
								<img src="assets/img/reading.jpg" alt="" class="img-fluid">

							</div>
							<h2 class="title"><a href="#">Understanding IELTS Reading</a></h2>
							<p>Find out what you need to know about the IELTS Reading test and learn strategies and techniques to improve your test performance.
							</p>
						</div>
					</div>

					<div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
						<div class="about-col">
							<div class="img">
								<img src="assets/img/writing.jpg" alt="" class="img-fluid">

							</div>
							<h2 class="title"><a href="#">Understanding IELTS Writing</a></h2>
							<p>Find out what you need to know about the IELTS Writing test and learn high scoring essay structures.
							</p>
						</div>
					</div>

					<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
						<div class="about-col">
							<div class="img">
								<img src="assets/img/listening.jpg" alt="" class="img-fluid">

							</div>
							<h2 class="title"><a href="#">Understanding IELTS Listening</a></h2>
							<p>Find out what you need to know about the IELTS Listening test and learn strategies and techniques to improve your test performance.
							</p>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
						<div class="about-col">
							<div class="img">
								<img src="assets/img/practice1.jpg" alt="" class="img-fluid">

							</div>
							<h2 class="title"><a href="#">Practice materials</a></h2>
							<p>Strengthten acquired skills with high quality practice materials suggested by experienced IELTS instructors and experts.
							</p>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
						<div class="about-col">
							<div class="img">
								<img src="assets/img/vocab.jpg" alt="" class="img-fluid">

							</div>
							<h2 class="title"><a href="#">Boost your Lexical Resource</a></h2>
							<p>Work on your vocabulary and start using a wide range of natural collocations and expressions to maximize your IELTS bandscore.
							</p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- ======= Services Section ======= -->
		<section id="services">
			<div class="container">

				<header class="section-header wow fadeInUp">
					<h3>Services</h3>
					<p>Services tailored for the needs of the students taking the current circumstances into consideration</p>
				</header>

				<div class="row">


					<div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
						<div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
						<h4 class="title"><a href="">Online tutorials</a></h4>
						<p class="description">High quality video lessons delivered by experienced IELTS instructors</p>
					</div>
					<div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
						<div class="icon"><i class="ion-ios-barcode-outline"></i></div>
						<h4 class="title"><a href="">Book Delivery</a></h4>
						<p class="description">Customized programs for all levels ranging from IELTS 6.0+ to 8.0+</p>
					</div>
					<div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
						<div class="icon"><i class="ion-ios-people-outline"></i></div>
						<h4 class="title"><a href="">Essay Correction Service</a></h4>
						<p class="description">Detailed feedback from experienced and highly-qualified IELTS instructors with an overall bandscore of 8.5</p>
					</div>

				</div>

			</div>
		</section><!-- End Services Section -->

		<!-- ======= Call To Action Section ======= -->
		<section id="call-to-action" class="wow fadeIn">
			<div class="container text-center">
				<h3>JOIN US</h3>
				<section class="section site-portfolio">
					<div class="container">
						<div class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
							<div class="col-md-6" style="text-align: center;">
								<iframe style="width:100%" height="315" src="https://www.youtube.com/embed/y5jOj_M6f_8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<!--   <a href="https://www.youtube.com/watch?v=y5jOj_M6f_8" class="item-wrap fancybox" style="padding">
              <video width="320" height="240" controls>
  <source src="https://www.youtube.com/watch?v=y5jOj_M6f_8" type="video/mp4">
  </video></a> -->
							</div>
							<div class="col-md-6" style="text-align: center;">
								<iframe style="width:100%" height="315" src="https://www.youtube.com/embed/v9KQryBLOw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

								<!--    <a href="https://www.youtube.com/watch?v=v9KQryBLOw0" class="item-wrap fancybox">
<video width="320" height="240" controls>
  <source src="https://www.youtube.com/watch?v=v9KQryBLOw0" type="video/mp4">
  </video>  </a>-->

							</div>
						</div>
					</div>
				</section><!-- End  Works Section -->

				<a class="cta-btn" href="<?php echo e(route('registration')); ?>">Register now</a>
			</div>
		</section><!-- End Call To Action Section -->

		<!-- ======= Skills Section ======= -->
		<section id="skills">
			<div class="container">

				<header class="section-header">
					<h3>Our Expertise</h3>
					<p>The skills set and valuable experience of IELTS instructors at Thompson School proven to be of utmost effectiveness for IELTS exam preparation.</p>
				</header>

				<div class="skills-content">

					<div class="progress">
						<div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
							<span class="skill">Listening <i class="val">100%</i></span>
						</div>
					</div>

					<div class="progress">
						<div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
							<span class="skill">Reading <i class="val">100%</i></span>
						</div>
					</div>

					<div class="progress">
						<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
							<span class="skill">Speaking <i class="val">90%</i></span>
						</div>
					</div>

					<div class="progress">
						<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
							<span class="skill">Writing <i class="val">78%</i></span>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Skills Section -->

		<!-- ======= Facts Section ======= -->
		<section id="facts" class="wow fadeIn">
			<div class="container">

				<header class="section-header">
					<h3>Facts</h3>
					<p>The percentage of students who have completed the course successfully.</p>
				</header>

				<div class="row counters">

					<div class="col-lg-3 col-6 text-center">
						<span style="font-weight:bold">75%</span>
						<p>IELTS Speed Up</p>
					</div>

					<div class="col-lg-3 col-6 text-center">
						<span style="font-weight:bold">94%</span>
						<p>IELTS Achieve</p>
					</div>

					<div class="col-lg-3 col-6 text-center">
						<span style="font-weight:bold">78%</span>
						<p>IELTS 7+</p>
					</div>

					<div class="col-lg-3 col-6 text-center">
						<span style="font-weight:bold">100%</span>
						<p>SAT</p>
					</div>

				</div>

				<div class="facts-img">
					<img src="assets/img/facts-img.png" alt="" class="img-fluid">
				</div>

			</div>
		</section><!-- End Facts Section -->

		<!-- ======= Portfolio Section ======= -->


		<!-- ======= Team Section ======= -->
		<section id="team" class="wow fadeInUp">
			<div class="container">
				<div class="section-header ">
					<h3>Our Partners</h3>
				</div>
				<br><br>
				<div class="row">
					<style>
						.item1 div {
							text-align: center;
							background-color:
								crimson;
							border-radius: 50%;
							width: 250px;
							height: 250px;
							margin-left: auto;
							margin-right: auto;
							cursor: pointer;
						}
						.item img{
							width:auto !important;
							max-width: 100%;
							display: inline !important;
							cursor:pointer;
						}
						.item div{
							text-align: center;
						}
					</style>
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div>
								<a href="/lc/thompson/index.html">
									<img src="thomson-logo.jpeg" width="240px;" height="240px">
								</a>
							</div>

						</div>
						<div class="item">
							<div >
								<a href="/lc/lingua/index.html">
									<img src="lingua.jpg" width="240px;" height="240px">
								</a>
							</div>

						</div>
						<div class="item">
							<div>
								<a href="/lc/british/index.html">
									<img src="british.png" width="240px;" height="240px">
								</a>
							</div>

						</div>


					</div>

					<!-- <div class="col-lg-3 col-md-6 wow fadeInUp">
					<div class="member">
						<img src="assets/img/team-1.jpg" class="img-fluid" alt="">
						<div class="member-info">
							<div class="member-info-content">
								<h4>Harry Thompson</h4>
								<span>Founder</span>

							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					<div class="member">
						<img src="assets/img/team-2.jpg" class="img-fluid" alt="">
						<div class="member-info">
							<div class="member-info-content">
								<h4>Shakhzoda Bakhodirova</h4>
								<span>Chief Executive Officer</span>

							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
					<div class="member">
						<img src="assets/img/team-3.jpg" class="img-fluid" alt="">
						<div class="member-info">
							<div class="member-info-content">
								<h4>Alijon Nomozbaev</h4>
								<span>HR and Quality Control Manager</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
					<div class="member">
						<img src="assets/img/team-4.jpeg" class="img-fluid" alt="">
						<div class="member-info">
							<div class="member-info-content">
								<h4>Muhammad Farmonov</h4>
								<span>Project Manager</span>

							</div>
						</div>
					</div>
				</div> -->

				</div>

			</div>
		</section><!-- End Team Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="section-bg wow fadeInUp">
			<div class="container">

				<div class="section-header">
					<h3>Contact Us</h3>
					<p>You can contact us using the following.</p>
				</div>

				<div class="row contact-info">

					<div class="col-md-4">
						<div class="contact-address">
							<i class="ion-ios-location-outline"></i>
							<h3>Address</h3>
							<address>15/1 Oybek Street, Tashkent 100021, UZB</address>
						</div>
					</div>

					<div class="col-md-4">
						<div class="contact-phone">
							<i class="ion-ios-telephone-outline"></i>
							<h3>Phone Number</h3>
							<p><a href="tel:+998712007075">(998) 71 200 7075</a></p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="contact-email">
							<i class="ion-ios-email-outline"></i>
							<h3>Email</h3>
							<p><a href="mailto:info@example.com">info@ieltsonline.uz</a></p>
						</div>
					</div>

				</div>

				<!-- ======= LogIn ======= -->
				<!-- 
      <section id="login" class="section-bg wow fadeInUp" style="padding-bottom: 2%">
        <div class="container">

          <div class="section-header">
            <h3>Sign In</h3>
          </div>
          <div class="form">
            <div id="errormessage"></div>

            <form action="<?php echo e(route('sauth')); ?>" method="post" role="form" class="backEnd/message/index">
              <?php echo csrf_field(); ?>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" name="username" class="form-control" id="name" placeholder="Login" data-rule="minlen:6"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="Password" name="password" class="form-control" placeholder="Password" data-rule="minlen:4" data-msg="Please enter a valid place" />
                  <div class="validation"></div>
                </div></div>
                <div style="text-align: center;"><button name="SubmitButton" class="text-center" type="submit"  id="submit"
                  style="letter-spacing: 1px;
                  padding: 8px 25px;
                  border-radius: 50px;
                  transition: 0.5s;
                  margin: 10px;
                  color: #fff;
                  background: #18d26e;"> 
                Log in</button></div>
              </form>
            </div>


            <div class="section-header">
              <h3><br> Sign Up</h3>
            </div>
            <div class="form">
              <div id="errormessage"></div>
              <?php if($errors->any()): ?>
              <div class="alert alert-danger">
                <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
              <?php endif; ?>
              <?php if(isset($success)): ?>
              <div class="alert alert-success">
                <ul>
                  You have successfully registered, we will contact you soon.
                </ul>
              </div>
              <?php endif; ?>
              <form action="<?php echo e(route('sreg')); ?>" method="post" role="form" class="backEnd/message/index">
                <?php echo csrf_field(); ?>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your full name" data-rule="minlen:10" data-msg="Please enter your full name" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" name="location" class="form-control" id="place" placeholder="Where are you from?" data-rule="minlen:4" data-msg="Please enter a valid place" />
                    <div class="validation"></div>
                  </div></div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="tel" class="form-control" name="phone1" id="phoneNumber" placeholder="Phone number-1" data-rule="minlen:4" data-msg="Please enter a valid phone number" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="tel" class="form-control" name="phone2" id="phoneNumber" placeholder="Phone number-2" data-rule="minlen:4" data-msg="Please enter a valid phone number" />

                      <div class="validation"></div>
                    </div></div>
                    <div class="form-row">
                      <div class="form-group col-md-12">

                        <select name="category" id="cat" class="form-control">
                          <? foreach ($cats as $cat) : ?>
                          <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                          <? endforeach ?>
                        </select>
                        <div class="validation"></div>
                      </div></div>

                      <div style="text-align: center;"><button class="text-center" name="SubmitButton" type="submit" onclick="myfunction()" id="submit" 
                        style="letter-spacing: 1px;
                        padding: 8px 25px;
                        border-radius: 50px;
                        transition: 0.5s;
                        margin: 10px;
                        color: #fff;
                        background: #18d26e;">Register</button></div>
                      </form>
                    </div>
                  </div>
              </section> -->
				<!-- End Contact Section -->
	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-6 footer-info">
						<h1><a href="<?php echo e(route('home')); ?>" class="scrollto"><img src="white-black.png" alt="logo" style="width:200px"></a></h1>
						<!-- <h3>ieltsonline.uz</h3> -->
						<!-- <img src="assets/img/2020-03-20 16.59.16.jpg" width="240px;" height="240px"> -->
					</div>

					<div class="col-lg-4  col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-contact">
						<h4>Contact Us</h4>
						<p>
							15/1 Oybek Street <br>
							Tashkent, UZB 100021<br>
							Uzbekistan <br>
							<strong>Phone:</strong>(998) 71 200 7075<br>
							<strong>Email:</strong>info@ieltsonline.uz<br>
						</p>



					</div>




				</div>
			</div>

			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong>ieltsonline.uz</strong>. All Rights Reserved
				</div>
				<div class="credits">

					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	<!-- Uncomment below i you want to use a preloader -->
	<!-- <div id="preloader"></div> -->

	<!-- Vendor JS Files -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/wow/wow.min.js"></script>
	<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendor/counterup/counterup.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/superfish/superfish.min.js"></script>
	<script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
	<script src="assets/vendor/jquery-touchswipe/jquery.touchSwipe.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
	<script>
		$('.owl-carousel').owlCarousel({
			loop: false,
			margin: 10,
			nav: false,
			mouseDrag: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 3
				}
			}
		})
	</script>

</body>

</html><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/home.blade.php ENDPATH**/ ?>