<?$partition=3;
if($student->category_id=='6'||
    $student->category_id=='7'||
    $student->category_id=='8'||
    $student->category_id=='24'||
    $student->category_id=='9'){
      $partition=6;
  }

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
		.videos{
			margin:50px 0;
		}
		video{
			display: block;
			width:60%;
			margin:0 auto 30px;
		}
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
	<div onclick="closeMenu(event)">
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

			<div class="videos">

				<div class="container">
					<style>
						div.backBtn {
							width: 152px;

							background-color:
							#f4f4f4;
							transition: all 0.4s ease;
							position: relative;
							cursor: pointer;
						}

						span.line {
							bottom: auto;
							right: auto;
							top: auto;
							left: auto;
							background-color:red;
							border-radius: 10px;
							width: 100%;
							left: 0px;
							height: 2px;
							display: block;
							position: absolute;
							transition: width 0.2s ease 0.1s, left 0.2s ease, transform 0.2s ease 0.3s, background-color 0.2s ease;
						}

						span.tLine {
							top: 0px;
						}

						span.mLine {
							top: 13px;
							opacity: 0;
						}

						span.bLine {
							top: 26px;
						}

						.label {
							position: absolute;
							left: 0px;
							top: 4px;
							width: 100%;
							text-align: center;
							transition: all 0.4s ease;
							font-size: 1em;
							color:red;
						}

						div.backBtn:hover span.label {
							left: 25px
						}

						div.backBtn:hover span.line {
							left: -10px;
							height: 5px;
							background-color: #F76060;
						}

						div.backBtn:hover span.tLine {
							width: 25px;
							transform: rotate(-45deg);
							left: -15px;
							top: 6px;
						}

						div.backBtn:hover span.mLine {
							opacity: 1;
							width: 30px;
						}

						div.backBtn:hover span.bLine {
							width: 25px;
							transform: rotate(45deg);
							left: -15px;
							top: 20px;
						}
					</style>
					<div class="row" style="margin-bottom:50px">
						<div class="col-md-12">
							<a href="<?php echo e(route('category',[Session::get('category'),$student->reach])); ?>">
								<div class="backBtn">
									<span class="line tLine"></span>
									<span class="line mLine"></span>
									<span class="label">Back to all weeks</span>
									<span class="line bLine"></span>
								</div>
							</a>
						</div>
					</div>
					<h1>Week <?php echo e($week+1); ?></h1>
					<hr>
					<?$restricted=$student->restrict_lesson?>
					<?for ($i = 0; $i <count($video) ; $i++) {?>
						<?if($i+($week)*$partition<$restricted||$restricted<0){?>
						<div class="video ">
							<h3>Lesson <?php echo e($i+1); ?></h3>

							<h4><?php echo e($video[$i]->name); ?> <small><?php echo e($video[$i]->description); ?></small></h4>
							<div class="material">
								<div class="container">
									<p>
										<video 
										controls 
										preload="none" 
										poster="http://www.ieltsonline.uz/v2/public/images/cover.jpg"
										>
										<source src="<?php echo e($video[$i]->source); ?>">
										</video>
									</p>
									<p>

									</p>

									<div class="question" style="display:<?=intval($student->reach)>=($week+$i)?"":"none"?>">

										<div id="root_<?php echo e($i); ?>" class="owl-carousel"></div>
										
										<button class="cumulativeCheck btn btn-warning" style="margin-top:20px;display:<?=count($question[$i])>0?"":"none"?>" >
										Check</button>
										<p class="cumResult"></p>
										

										<form action="<?php echo e(route('supdate')); ?>" method="POST" style="display: <?=
										intval($student->reach)==($week*$partition+$i)?"":"none"?>">
										<?php echo csrf_field(); ?>
										<input type="hidden" name="step" value="<?php echo e(($week)*$partition+$i); ?>">
										<button class="btn btn-success" type="submit">DONE</button>
									</form>

								</div>
							</div>
						</div>
					</div>

					<hr>
					<?}else{?>
					<h3>Lesson <?php echo e($i+1); ?> is restricted by admin</h3>
					<?}?>	
					<?}?>
				</div>
			</div>

		</main>
		<div id="templates">
			<div class="img">
				<img src="" alt="">
			</div>
			<div class="mc card-body" data-id="mc">
				<p class="question card-title"></p>
				<div class="wrapper">
					<div class="answer">
						<input type="radio" class="with-gap">
						<input type="radio" class="with-gap">
						<input type="radio" class="with-gap">
						<input type="radio" class="with-gap">
					</div>
					<div class="options">
						<p></p>
						<p></p>
						<p></p>
						<p></p>
					</div>

				</div>
				<p class="msg"></p>

				<hr>
			</div>
			<div class="open card-body" data-id="open">
				<p class="question card-title"></p>
				<input type="text" name="answer" placeholder="answer" class="answer form-control">
				<p class="msg"></p>


			</div>
			<button class="check">check</button>
			<span class="result"></span>

			<div class="item card">

			</div>
		</div>

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


		class QSet{
			constructor(qset, elem){
				this.qset=[...qset];
				this.root=elem;
				this.ansSet=[];
				this.collectAnswers=this.collectAnswers.bind(this);
				this.checkAns=this.checkAns.bind(this);
				this.validate=this.validate.bind(this);
				this.result="";
				this.templates=document.getElementById("templates");

			} 


			buildQuest(){
				var options;
				var question;
				var answers;

				for (var i = 0; i < this.qset.length; i++) {
					if(this.qset[i].type=="mc"){
						question=templates.getElementsByClassName("mc")[0].cloneNode(true);
						question.getElementsByClassName("question")[0].innerHTML=this.qset[i].question;
						options=question.getElementsByClassName("options")[0].children;
						for (var j = 0; j < options.length; j++) {
							options[j].innerHTML=this.qset[i].options[j];
						}
						answers=question.getElementsByClassName("answer")[0].children;
						var name=Math.random()*10;
						for (var j = 0; j < answers.length; j++) {
							answers[j].name=name;
						}

					}
					if(this.qset[i].type=="open"){
						question=templates.getElementsByClassName("open")[0].cloneNode(true);
						question.getElementsByClassName("question")[0].innerHTML=this.qset[i].question;
						question.getElementsByClassName("answer")[0].name=this.qset[i].id;
					}
					// if(this.qset[i].type=="img"){
					// 	question=templates.getElementsByClassName("img")[0].cloneNode(true);
					// 	question.children[0].src='http://ieltsonline.uz/v2/public/img/'+this.qset[i].img;

					// }
					this.root.appendChild(question);


				}


				var result=templates.getElementsByClassName("result")[0].cloneNode(true);
				this.root.appendChild(result);
				this.result=result;

			}

			collectAnswers(){
				this.ansSet=[];
				var tests=this.root.children;
				var answer;
				var givens;
				var options;

				for (var i = 0; i < tests.length; i++) {
					if(tests[i].tagName=="BUTTON"||tests[i].tagName=="SPAN"||tests[i].children[0].tagName=="IMG"){
						continue;
					}
					answer={
						id:"",
						answer:"",
						elem:""
					};

					if(tests[i].dataset.id=="mc"){
						answer.elem=tests[i];
						givens=tests[i].getElementsByClassName("answer")[0].children;
						options=tests[i].getElementsByClassName("options")[0].children;

						for (var j = 0; j < givens.length; j++) {
							if(givens[j].checked){
								answer.answer=options[j].innerHTML;
								answer.id=givens[j].name;
							}
						}
					}
					if(tests[i].dataset.id=="open"){
						answer.elem=tests[i];
						answer.answer=tests[i].getElementsByClassName("answer")[0].value;
						answer.id=tests[i].getElementsByClassName("answer")[0].name;
					}

					this.ansSet.push(answer);

				}


			}
			validate(){
				var flag=true;

				for (var i = 0; i < this.ansSet.length; i++) {
					if(this.ansSet[i].answer==""){
						this.ansSet[i].elem.getElementsByClassName("msg")[0].innerHTML="Please answer this question";
						flag=false;
					}else{
						this.ansSet[i].elem.getElementsByClassName("msg")[0].innerHTML="";
					}
				}
				return flag;
			}
			checkAns(){

				this.collectAnswers();
				if(this.validate()){
					var correct=0;
					for (var i = 0; i < this.qset.length; i++) {
						// if(qset[i].type=="img"){
						// 	continue;
						// }
						if(this.qset[i].answer==this.ansSet[i].answer){
							correct++;
						}
					}
					this.result.innerHTML=`Correct answers in this section: ${correct}`;
					return correct

				}else{

					this.result.innerHTML="Answer all questions in this section please";
					return -1;

				}
			}
		}
      // get the dataset 
      var qset=JSON.parse(<?="'".json_encode($question)."'"?>);
      // calculate max page count for each set and write it to array and cumulate options from option1,option2... properties and check for images
      var max_page_count_array=[]; 

      for (var i = 0; i < qset.length; i++) {
      	let max_page_count=0;

      	for (var j = 0; j < qset[i].length; j++) {
      		qset[i][j].options=[
      		qset[i][j].option1,
      		qset[i][j].option2,
      		qset[i][j].option3,
      		qset[i][j].option4
      		]
      		max_page_count=qset[i][j].page>max_page_count?qset[i][j].page:max_page_count;
      	}
      	max_page_count_array.push(max_page_count);
      }
      var templates=document.getElementById("templates");
      // generate carousels and insert questionset into each item
      var pages=[]
      for (var k = 0; k < qset.length; k++) {
      	pages=[];
      	btn="";
      	var imgFlag=false;
      	qset[k].filter((item)=>{
      		if(item.type=="img")imgFlag=true;
      		return true;
      	});
      	for (var i = 0; i < max_page_count_array[k]; i++) {

      		var data=qset[k].filter((item)=>{
      			if(item.type=="img")imgFlag=true;
      			return (parseInt(item.page)-1)==i;
      		});

      		var item=templates.getElementsByClassName('item')[0].cloneNode(true);
      		const q=new QSet(data, item);
      		q.buildQuest();
      		pages.push(q);
      		document.getElementById(`root_${k}`).appendChild(item);

      	};
      	$(`#root_${k}`).owlCarousel({
      		margin:10,
      		nav:true,
      		mouseDrag:false,
      		navText: ["<button class='btn btn-info navCar'>Previous</button>",
      		"<button class='btn btn-info navCar'>Next</button>"
      		],
      		responsive:{
      			0:{
      				items:1
      			}
      		}
      	});
      	if(!imgFlag){
      		var btn=document.getElementById(`root_${k}`).parentNode.getElementsByClassName("cumulativeCheck")[0];
      		function add(btn,pages){
      			btn.addEventListener("click",function(e){

      				cumulativeCheck(e,pages)
      			}   
      			);
      		};
      		add(btn, pages);
      	}else{

      		console.log(k);
      		document.getElementById(`root_${k}`).parentNode.getElementsByClassName("cumulativeCheck")[0].style.display="none";
      	}

      }
      function cumulativeCheck(e,pages){
      	console.log(pages);
      	e.target.parentNode.getElementsByClassName("result")[0].innerHTML="";
      	var cumulativeScore=0;
      	var result=e.target.parentNode.getElementsByClassName("cumResult")[0];
      	var vFlag=true;
      	for (var i = 0; i < pages.length; i++) {
      		if(pages[i].checkAns()<0){

      			vFlag=false;
      		}else{

      			cumulativeScore+=pages[i].checkAns();

      		}       
      	}
      	if(vFlag){
      		result.innerHTML=`Total score = ${cumulativeScore}`;
      	}else{
      		result.innerHTML="Please answer all questions";
      	}
      }

      

      // const elem=document.getElementById("root<?php echo e($i); ?>");
      // const q=new QSet(qset, elem);
      // q.buildQuest();
      
  </script>
  <script src="https://vjs.zencdn.net/7.8.3/video.js"></script>
</body>
</html><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/student/week.blade.php ENDPATH**/ ?>