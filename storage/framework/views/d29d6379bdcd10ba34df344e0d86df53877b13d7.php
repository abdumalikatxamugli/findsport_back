<?

$student=$student[0];

?>
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
	

	<link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />
	<link
	href="https://unpkg.com/@videojs/themes@1/dist/city/index.css"
	rel="stylesheet"
	/>

	<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
	<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>


	<link rel="stylesheet" href="/v2/public/css/style.css">

	<title>Thompson Student</title>
	<style>
		body{
			width: 100%;
			overflow-x: hidden;
		}
		#templates{
			display: none;
		}
		.wrapper{
			display: flex;
			align-items: center;

		}

		.mc input, .options p{
			height: 30px;
			margin: 0;
			display: flex;
			align-items: center;
		}
		.mc input{
			margin-right: 10px;
		}
		.navCar{
			margin:20px;
			margin-left: 0;

		}
		.owl-carousel .owl-item img{
			display: block;
			margin:10px auto;
			width:auto;
			height: auto;
		}
		.video-js {
			width: 450px;
			height: 288px;
			margin: 0 auto;
		}
		.video-js .vjs-big-play-button{
			top: 40%;
			left: 40%;
		}

	</style>
	<style>
		
		h1{
			color:#EE0000;
		}
		h3{
			color:#EE0000;
			margin:30px 0;

		}
		h4{
			color:#EE0000;
			margin:20px 0;
			width:70%;
		}
		hr{
			background-color: #EE0000;
		}
	</style>
	<style>
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
</head>
<body style="background-color:white;background-image: none;" oncontextmenu="return false">
	<div class="menuMob">
		<a href="<?php echo e(route('slogout')); ?>">Logout</a>
	</div>
	<div>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="logo">
							<img src="/v2/public/images/thompson_logo_301118-07.png" alt="">
						</div>
					</div>
					<div class="col-6 right">
						<!-- <img src="/v2/public/images/speedup.png" alt="" class="cat"> -->
						<img src="/v2/public/images/Menu.png" alt="" class="menu"  onclick="openMenu(event)">
					</div>
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
				</div>
			</div>
		</nav>
		<main>
			<div class="container">
				<br><br><br>
				<h5>Hi, <?php echo e($student->name); ?></h5>
				<p>You can pay for the course here, you have two options</p>
				<h6>If you are registered to CLICK payment system, click here</h6>
				<button style="background-color: green;border-radius: 10px;">
					<a style=" color:white;display:block;padding:10px 30px; " href="https://my.click.uz/services/pay?service_id=16251&merchant_id=11699&merchant_user_id=17021&amount=1000&transaction_param=<?php echo e($student->id); ?>&return_url=http://ieltsonline.uz/paid/<?php echo e($student->id); ?>" target="blank">Pay with Click</a>

				</button>
				<br><br><br>
				<h6>If you want to pay just with your card then click here</h6>
				<form method="post" action="http://ieltsonline.uz/paid/<?php echo e($student->id); ?>">
					<script src="https://my.click.uz/pay/checkout.js"
					class="uzcard_payment_button"
					data-service-id="16251"
					data-merchant-id="11699"
					data-transaction-param="<?php echo e($student->id); ?>"
					data-merchant-user-id="17021"
					data-amount="1000"

					data-label="Pay" 
					></script>

				</form>	
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
	
	<script src="https://vjs.zencdn.net/7.8.3/video.js"></script>
</body>
</html><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/payment.blade.php ENDPATH**/ ?>