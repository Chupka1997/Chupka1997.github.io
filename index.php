<!DOCTYPE html>
<html>
<head>
<title>ЧайковскийТеатр</title>
<!--for-mobile-apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--//for-mobile-apps-->

<!-- Custom-Theme-Files -->
    <!-- Bootstrap-CSS --> 	 		<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Index-Page-Styling --> 	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
									<script src="js/jquery.min.js"></script>
									<script src="js/responsiveslides.min.js"></script>
  <!-- google fonts --> 
<link href='//fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        manualControls: '#slider3-pager',
      });
    });
  </script>

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling ending-->

<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

</head>


<body>

<!-- header start hear -->
	<div class="header" id="home">
		<div class="container">
			<!-- navigation start hear -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						 </button>
							<a class="navbar-brand" href="#">ЧайковскийТеатр</a>
					</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="#home" class="active scroll">ГЛАВНАЯ</a></li>
								<li><a href="#about" class="scroll">О НАС</a></li>
								<li><a href="#travel" class="scroll">СОБЫТИЯ</a></li>
								<li><a href="#map" class="scroll">МЫ НА КАРТЕ</a></li>
								<li><a href="#sayhello" class="scroll">СВЯЗАТЬСЯ С НАМИ</a></li>
								<li class="active"><a href="index.php" target="_self">Вход</a></li>
							</ul>
						</div>
				</div>
			</nav>
		</div>
	</div>
<!-- header end hear -->


<!-- banner start hear -->
	<div class="banner">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<img src="images/banner.jpg" alt="">
						<div class="caption">
							<h3>АЛЫЕ ПАРУСА Легендарный мюзикл о вере в чудо любви!С 11 ноября</h3>
						</div>
					</li>
					<li>
						<img src="images/banner1.jpg" alt="">
						<div class="caption">
						<h3>Золотой ключик. Любимые герои нашего детства!</h3>
						</div>
					</li>
					<li>
						<img src="images/banner3.jpg" alt="">
						<div class="caption">
							<h3>ОКТЯБРЬСКИЙ ПЕРЕВОРОТ</h3>
						</div>
					</li>
				</ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
<!-- banner end hear -->


<!-- content start hear -->
	<div class="content">
		<div class="container">
		
			<div class="about" id="about">
				<section class="wrapper wow fadeInUp animated" data-wow-delay=".8s">
					<h2>О НАС </h2>
					<p>Приветствуем Вас на офицальном сайте Чайковского театра драмы и комедии. Мы рады ещё одной возможности быть рядом со своим зрителем.На страницах сайта Вы сможете узнать все самые последние события нашей жизни,познакомится с коллективом, совершить путешествие по истории театра и, конечно,выбрать спектакль для просмотра.Будем рады, если вы оставите свой отзыв. Нам интересны любые Ваши мысли и пожелания. Мы высоко ценим нашего зрителя и всегда ждем его на наших спектаклях! Добро пожаловать! 
					</p>
				</section>
			</div>
					
			
			<div class="grid" id="travel">
				<h3>СОБЫТИЯ</h3>
				
				<div class="grid1">
				
					<div class="col-md-8 image-6c boot-padding wow fadeInLeft animated" data-wow-delay=".8s">
						<div class="grid-effect">
							<figure class="effect-ruby">
								<img src="images/g1.jpg" alt="g1">
									<figcaption>
										<h5>С 8 <span>Декабря</span></h5>
										<p>Режиссер-постановщик, художник-постановщик – А. Кулагин </p>
										<a href="#">View more</a>
									</figcaption>		
							</figure>
						</div>
					</div>
					
					<div class="col-md-4 info text-padding boot-padding wow fadeInRight animated" data-wow-delay=".5s">
						<h3>Настенька</h3>
						<section class="wrapper wow fadeInUp animated" data-wow-delay=".8s">
							<p>Жили-были две сестры — Настенька и Аленушка. На старшую, Аленушку, родители не нарадуются, хозяйственная, заботливая, веселая. А вот младшая Настенька растет непослушная да балованная. Если Алена за ней не присмотрит, так она весь день неумытой и непричесанной и проходит.</p>
						</section>
					</div>
					
				  <div class="clearfix"></div>
				</div>
				
				
				<div class="grid2">
					<div class="col-md-4 info text-padding boot-padding wow fadeInLeft animated" data-wow-delay=".8s">
						<h3>Цыпленок</h3>
						<section class="wrapper wow fadeInUp animated" data-wow-delay=".8s">
							<p>В этом большом мире, все могут жить дружно «под одним крылом» . Так и в сказке, под крыло мамы – курицы собираются вместе цыплёнок, страусёнок, поросёнок. Главное – это жить дружно, весело, во время прийти друг другу на помощь.


							</p>
						</section>
					</div>
				
					<div class="col-md-8 image-6c boot-padding wow fadeInRight animated" data-wow-delay=".8s">
						<div class="grid-effect">
							<figure class="effect-ruby">
								<img src="images/g2.jpg" alt="g2">
								<figcaption>
									<h5>C 15   <span>Ноября</span></h5>
									<p>Режиссер-постановщик – С. БОРЗЕНКО</p>
									<a href="#">View more</a>
								</figcaption>		
							</figure>
						</div>
					</div>
					
				  <div class="clearfix"></div>
				</div>
				
				
				<div class="grid3">
				
					<div class="col-md-8 image-6c boot-padding wow fadeInLeft animated" data-wow-delay=".8s">
						<div class="grid-effect">
							<figure class="effect-ruby">
								<img src="images/g3.jpg" alt="g3">
								<figcaption>
									<h5>С 20  <span>Ноября</span></h5>
									<p>Режиссер-постановщик – С. ТЕТЕНОВА</p>
									<a href="#">View more</a>
								</figcaption>		
							</figure>
						</div>
					</div>
					
					<div class="col-md-4 image-4c boot-padding wow fadeInRight animated" data-wow-delay=".8s">
						<div class="grid-effect">
							<figure class="effect-ruby">
								<img src="images/g4.jpg" alt="g4">
								<figcaption>
									<h5>C 1    <span>Января</span></h5>
									<p>Режиссер-постановщик – Артем Палкин </p>
									<a href="#">View more</a>
								</figcaption>		
							</figure>
						</div>
					</div>
								
				  <div class="clearfix"> </div>
				</div>
			</div>	
		</div>	
	</div>
	
	
	
	<div class="content-bottom">
		<div class="container">
	
			<div class="grid4 ">
			
				<div class="col-md-8 mdtext info-1 text1-padding boot-padding wow fadeInLeft animated" data-wow-delay=".8s">
					<h3>ПЕППИ ДЛИННЫЙ ЧУЛОК</h3>
					<section class="wrapper wow fadeInUp animated" data-wow-delay=".8s">
						<p>Пеппи — маленькая рыжая веснушчатая девочка, которая живёт одна на вилле «Курица» в небольшом шведском городке вместе со своими животными: мартышкой Господином Нильсоном и лошадью. Пеппи — дочь капитана Эфраима Длинныйчулок, который впоследствии стал вождём чернокожего племени. От своего отца Пеппи унаследовала фантастическую физическую силу, а также чемодан с золотом, позволяющий ей безбедно существовать.
						</p>
					</section>
				</div>
				
				<div class="col-md-4 smtext info-1 text1-padding boot-padding wow fadeInRight animated" data-wow-delay=".8s">
					<h3>ЛОВУШКА</h3>
					<section class="wrapper wow fadeInUp animated" data-wow-delay=".8s">
						<p>Загадочное исчезновение женщины, огромное наследство, и неожиданная развязка - все то за что мы так любим детективы.
						</p>
					</section>
				</div>
			
			  <div class="clearfix"></div>
			</div>
			
			
			<div class="grid5">
			
				<div class="col-md-4 image-4c boot-padding wow fadeInLeft animated" data-wow-delay=".8s">
					<div class="grid-effect">
						<figure class="effect-ruby">
							<img src="images/g5.jpg" alt="g5">
							<figcaption>
								<h5>С 1  <span>Февраля</span></h5>
								<p>Режиссер-постановщик, художник-постановщик – Г. Борисов </p>
								<a href="#">View more</a>
							</figcaption>		
						</figure>
					</div>
				</div>
				
				<div class="col-md-8 image-6c boot-padding wow fadeInRight animated" data-wow-delay=".8s">
					<div class="grid-effect">
						<figure class="effect-ruby">
							<img src="images/g6.jpg" alt="g6">
							<figcaption>
								<h5> С 15  <span>Января</span></h5>
								<p>Режиссер-постановщик, художник-постановщик – А. ОРЛОВ  </p>
								<a href="#">View more</a>
							</figcaption>		
						</figure>
					</div>
				</div>
				
			  <div class="clearfix"></div>
			</div>
			
			<div class="grid6">
				<div class="col-md-4 smtext text1-padding info-1  boot-padding wow fadeInLeft animated" data-wow-delay=".8s">
					<h3>ЭТА ЖИЗНЬ ТАКАЯ СМЕШНАЯ </h3>
					<section class="wrapper wow fadeInUp animated" data-wow-delay=".8s">
						<p>Спектакль состален по мотивам юмористических рассказов А.Аверченко. Легкий юмор "короля смеха", остроумные сюжеты и искрометные диалоги никого не оставят равнодушным. 
						</p>
					</section>
				</div>
				
				<div class="col-md-8 mdtext text1-padding info-1 boot-padding wow fadeInRight animated" data-wow-delay=".8s">
					<h3>ТРИНАДЦАТАЯ ЗВЕЗДА</h3>
					<section class="wrapper wow fadeInUp animated" data-wow-delay=".8s">
						<p>Спектакль «Тринадцатая звезда» по пьесе В. Ольшанского выбран для постановки в силу своей актуальности. Прежде всего, стоит отметить, что рассказы Э. Сетон-Томпсона (британо-канадского писателя) были написаны еще до революции, однако, и во времена Томпсона эта тема была актуальной, и во время написания пьесы В. Ольшанским (СССР), и уж, конечно, в наше оккупационное время. Власть и рабство — такова структура государства, где мы с вами проживаем. В СССР кроличья клетка была только внешней, сейчас и внешняя, и внутренняя.
						</p>
					</section>
				</div>
								
			  <div class="clearfix"></div>
			</div>
								
		</div>
	</div>
			
	<!-- map section -->
<section class="map">
	<div class="container-fluid" id="map">
		<div class="row">
			<div class="col-lg-12 slideanim">
				<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2185.940425614907!2d54.12871341634287!3d56.778327880840024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1509617592606" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>	
		</div>
	</div>
</section>
<!-- /map section -->
				
				
	<div class="footer footer-padding" id="sayhello">
		
		 
			<h4><span>Отправь</span> Отзыв</h4>
			
			<div class="wrapper wow fadeInUp animated" data-wow-delay=".8s">
				
				<p>Мы будем рады вашим отзывам и предложениям в любое время!
				</p>
					 
				<div class="login-bottom">
					<form action="#" method="post">
						<input type="text" placeholder="Your Email" >					
						<input type="text" class="text" placeholder="Subject" >
						<textarea name="Message" placeholder="Message"></textarea>
						<input type="submit" value="Отправить">
					</form>
				</div>
				
				<div class="footerf ">
					
						<ul id='services'>
							<li>
								<a href="#">
								<div class='entypo-facebook'></div></a>
							</li>
							<li>
								<a href="#">
							  <div class='entypo-twitter'></div></a>
							</li>
							<li>
								<a href="#">
							  <div class='entypo-gplus'></div></a>
							</li>
							<li>
								<a href="#">
								<div class='entypo-linkedin'></div></a>
							</li>
						</ul>
				</div>	
				
				<div class="copy-right">
				  <p> © 2016 we go . All Rights Reserved | Design by <a href="https://w3layouts.com">W3layouts</a></p>
				</div>
			</div>
		  <div class="clearfix"> </div>
		
	</div>
		
	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"> </a>
    <!-- //Slide-To-Top JavaScript -->
	<!-- Bootstrap-Main --> 	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>		