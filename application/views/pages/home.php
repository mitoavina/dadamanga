<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="<?= base_url() ?>assets/css/all.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
	<link href="<?= base_url() ?>assets/font/montserrat/montserrat.css" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= base_url() ?>assets/css/global.css?v=0.0.1" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/page/home.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/flexslider.css" rel="stylesheet">
	<style>
		#video-container {
			position: absolute;
			z-index: 1;
			height: 100vh;
			width: 100%;
			overflow: hidden;
		}

		#video-container>div {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate3d(-50%, -50%, 0);
		}

		#video-container>div>h1 {
			font-size: 4.5em;
		}

		video {
			height: 100%;
			position: absolute;
			left: 0;
		}

		@media screen and (min-width:992px) {
			video {
				width: 100%;
				height: auto;
			}
		}

	</style>
	<title>Dadamanga | Home</title>
</head>
<?php $this->load->view('components/navbar'); ?>
<?php $this->load->view("components/sidenav"); ?>

<body>
	<div id="jumbotron" class="m-0 flexslider jumbotron homeJumbotron flex-column flex-center">
		<ul class="slides">
			<li>
				<div id="video-container">
					<video autoplay muted loop>
						<source src="<?= base_url("assets/img/home/home.mp4") ?>" type="video/mp4">
					</video>
					<div>
						<h1 class="white-text">WELCOME TO <span class="font-weight-bold">DADAMANGA</span></h1>
					</div>
				</div>
			</li>
			<li style="background-image:url( <?= base_url($image[0]->path) ?>)" class=" jumbotron home-text">
				<h1 class="white-text"> <?= $text[0]->value ?></h1>
				<svg width="48" height="16" viewBox="0 0 48 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M47.7071 8.70711C48.0976 8.31658 48.0976 7.68342 47.7071 7.29289L41.3431 0.928932C40.9526 0.538408 40.3195 0.538408 39.9289 0.928932C39.5384 1.31946 39.5384 1.95262 39.9289 2.34315L45.5858 8L39.9289 13.6569C39.5384 14.0474 39.5384 14.6805 39.9289 15.0711C40.3195 15.4616 40.9526 15.4616 41.3431 15.0711L47.7071 8.70711ZM0 9L47 9V7L0 7L0 9Z"
						fill="white" />
				</svg>
				<div>
					<span id="find_out" class="white-text"><a class="white-link"
							href="<?= base_url("destinations") ?>">find out more</a></span>
				</div>
			</li>
			<li class="home-text jumbotron"
				style='background-image:url( <?= base_url("assets/img/home/adventure-jumbotron.jpg") ?>)'>
				<h1 class="white-text"> <?= $text[1]->value ?></h1>
				<svg width="48" height="16" viewBox="0 0 48 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M47.7071 8.70711C48.0976 8.31658 48.0976 7.68342 47.7071 7.29289L41.3431 0.928932C40.9526 0.538408 40.3195 0.538408 39.9289 0.928932C39.5384 1.31946 39.5384 1.95262 39.9289 2.34315L45.5858 8L39.9289 13.6569C39.5384 14.0474 39.5384 14.6805 39.9289 15.0711C40.3195 15.4616 40.9526 15.4616 41.3431 15.0711L47.7071 8.70711ZM0 9L47 9V7L0 7L0 9Z"
						fill="white" />
				</svg>
				<div>
					<span id="find_out" class="white-text"><a class="white-link"
							href="<?= base_url("adventure") ?>">find out more</a></span>
				</div>
			</li>
			<li class="home-text jumbotron"
				style='background-image:url( <?= base_url("assets/img/home/knowledge.jpg") ?>)'>
				<h1 class="white-text"> <?= $text[2]->value ?></h1>
				<svg width="48" height="16" viewBox="0 0 48 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M47.7071 8.70711C48.0976 8.31658 48.0976 7.68342 47.7071 7.29289L41.3431 0.928932C40.9526 0.538408 40.3195 0.538408 39.9289 0.928932C39.5384 1.31946 39.5384 1.95262 39.9289 2.34315L45.5858 8L39.9289 13.6569C39.5384 14.0474 39.5384 14.6805 39.9289 15.0711C40.3195 15.4616 40.9526 15.4616 41.3431 15.0711L47.7071 8.70711ZM0 9L47 9V7L0 7L0 9Z"
						fill="white" />
				</svg>
				<div>
					<span id="find_out" class="white-text"><a class="white-link"
							href="<?= base_url("knowledges") ?>">find out more</a></span>
				</div>
			</li>
		</ul>
		<div id="homeButtons" class="d-none d-md-flex w-100 row position-absolute justify-content-center">
			<a href=""></a>
			<a href="<?= base_url() . "destinations" ?>" id="destinationButton"
				class="col-md-3 btn mr-1 btn black-marron-btn">
				Destinations
			</a>
			<a href="<?= base_url() . "adventure" ?>" id="adventureButton"
				class="col-md-3 btn mr-1 btn black-marron-btn">
				Create an Adventure
			</a>
			<a href="<?= base_url() . "knowledge" ?>" id="placeButton" class="col-md-3 btn mr-1 btn black-marron-btn">
				Knowledge of the Place
			</a>
		</div>
	</div>

	<nav id="animated-nav" class=" text-center navbar">
		<p>ABOUT | THE TEAM | SOCIAL RESPONSABILITY | REVIEWS</p>
		<a class="navbar-brand bleu" href="<?= base_url() . "home" ?>">
			<img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
		</a>
		<button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span
				class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
	</nav>
	<div class="position-relative container-fluid" style="z-index: 10">
		<div class="row we_organise justify-content-center">
			<div class="col-lg-11">
				<div class="row">
					<div class="col-lg-5 px-5">
						<p class="pb-2">We organise your
							<span class="montserrat-bold">trip</span>
						</p>
						<p id="intro">
							You can study key destinations and create a tour or, choose something “off the shelf”. Have
							a look around, soak up the information, or, just send us a message and we will create your
							perfect tour.
						</p>
						<svg width="48" height="16" viewBox="0 0 48 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M47.7071 8.70711C48.0976 8.31658 48.0976 7.68342 47.7071 7.29289L41.3431 0.928932C40.9526 0.538408 40.3195 0.538408 39.9289 0.928932C39.5384 1.31946 39.5384 1.95262 39.9289 2.34315L45.5858 8L39.9289 13.6569C39.5384 14.0474 39.5384 14.6805 39.9289 15.0711C40.3195 15.4616 40.9526 15.4616 41.3431 15.0711L47.7071 8.70711ZM0 9L47 9V7L0 7L0 9Z"
								fill="#B7986D" />
						</svg>
						<p id="intro-btn" class="montserrat-bold"><a href="<?= base_url() . "destinations" ?>">FIND A
								DESTINATION</a></p>
					</div>
					<div id="intro_icons" class="col-lg-7 text-center">
						<div class="row ">
							<div class="col-6 col-lg-3 icc ">
								<img src="<?= base_url() ?>assets/img/home/creative.png">
								<p class=" mt-3">UNIQUELY<br> TAILORED</p>
							</div>
							<div class="col-6 col-lg-3 icc">
								<img src="<?= base_url() ?>assets/img/home/route.png">
								<p class=" mt-3">YOU CHOOSE THE ROUTE & SCHEDULE</p>
							</div>
							<div class="col-6 col-lg-3 icc">
								<img src="<?= base_url() ?>assets/img/home/airplane.png">
								<p class=" mt-3">USE ANY MEANS <br>OF TRANSPORT</p>
							</div>
							<div class="col-6 col-lg-3 icc">
								<img src="<?= base_url() ?>assets/img/home/mada.png">
								<p class=" mt-3">TRAVEL ANYWHERE<br> IN MADAGASCAR</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-template container-fluid text-center ">
		<div class="pt-5 pb-2 row justify-content-center">
			<div class="col-md-8 pt-5 text1 px-5">
				<p class="px-1 pb-3">Tailor made tours to Madagascar, inspired by you, created by us...</p>

				<p class="pb-3 px-lg-5">We specialise in working with English-speaking clients to design perfect
					Madagascar holidays. No holiday is too simple, no time too short... we will work with you,
					within your budget, to create the holiday that you want.</p>

				<p class="pb-1 px-lg-5">Dadamanga Travel Services is owned by an Australian, resident in Madagascar for
					20 years. We know the language, we know the people, we know the places. We know how to
					make your holiday in Madagascar perfect.</p>
			</div>
		</div>
		<div class="big-text row justify-content-center">
			<div class="col-md-11 pb-lg-5">
				<p>EXPLORE THE WORLD'S MOST FASCINATING CONTINENT ON EARTH WITH REMARKABLE EXPERIENCES AND ADVENTURE.
				</p>
				<br>
				<p>VIEW OUR SAMPLE ITINERARIES AND PLAN YOUR WANDERLUST JOURNEY TODAY.</p>
			</div>
		</div>
		<style>

		</style>
		<div>
			<div id="multi-item-carousel" class="carousel slide">
				<div class="carousel-inner">
					<?php for ($i = 0; $i < count($destinations); $i++) { ?>
					<div class='carousel-item <?= $i == 0 ? "active" : "" ?>'>
						<div class="destination-item">
							<img src="<?= img_destinations_url($destinations[$i]->NAME) ?>" alt="First slide">
							<div class="justify-content-center carousel-caption d-none d-md-block">
								<div class="compass-container"><i class="far fa-compass fa-2x"></i></div>
								<div class="destination-text-container">
									<div class="destination-text"><a class="white-link"
											href="<?= destination_url($destinations[$i]->NAME) ?>"><?= $destinations[$i]->TITLE ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div id="prevContainer" class="d-flex justify-content-center">
					<a href="#multi-item-carousel" data-slide="prev" id="prevButton"></a>
				</div>
				<div id="nextContainer" class="d-flex justify-content-center">
					<div id="nextButton" data-slide="next" href="#multi-item-carousel"></div>
				</div>
			</div>
		</div>
		<div class="mt-5 pt-5 mb-5 pb-5">
			<p class="pb-5" id="madagascar_destination_specialist">MADAGASCAR <span class="montserrat-bold">Destination
					Specialist</span></p>
			<div class="big-text mx-1">
				<p>
					Why us? Find our what makes us different, understand why we are specialists in our field. Our
					tailor-made journeys will provide a safe, well-managed escape on the ultimate adventure in a style
					that suits you and for a price you can understand.
				</p>
				<br>
				<p>CONTACT US AND START PLANNING YOUR AFRICAN WILDERNESS JOURNEY TODAY.</p>
			</div>
		</div>

		<div style="padding-bottom:40px;">
			<p>CLICK ON <a href="<?= base_url("contact") ?>">THIS LINK</a> TO CONTACT US AND EXPLORE YOUR NEXT AFRICAN
				ADVENTURE.</p>
			<p>CALL: +61 459308888</p>
		</div>
	</div>
	<?php $this->load->view("components/followus.php"); ?>
	<?php $this->load->view("components/footer.php"); ?>
	<?php $this->load->view("common-scripts.php");?>
	<script type="text/javascript" src="<?= base_url()?>assets/js/jquery.flexslider.js"></script>
	<script>
		$('.flexslider').flexslider({
			directionNav: false,
			manualControls: "#homeButtons > a",
			slideshow: false
		});

		$(document).ready(() => {
			console.log("ready");
			$("#multi-item-carousel").carousel({
				pause: true,
				interval: true
			});

			$(".carousel-item").each(function () {
				var width = 50;

				var first = $(this).find(".destination-item:nth-child(1)");
				$(first).prepend(
					'<div class="transparent-layer" data-slide="prev" href="#multi-item-carousel"></div>');
				var h1TextFirst = $(first).find(".destination-text-container").clone();
				var wrapperFirst = jQuery('<div/>', {
					style: `width: ${width}%;height:100%;position:absolute;right:0`,
					class: ``
				});
				wrapperFirst.append(h1TextFirst);
				first.prepend(wrapperFirst);
				$(first).find(".carousel-caption").remove();


				var last = $(this).find(".destination-item:nth-child(3)");
				$(last).prepend(
					'<div class="transparent-layer" data-slide="next" href="#multi-item-carousel"></div>');
				var h1Text = $(last).find(".destination-text-container").clone();
				var wrapper = jQuery('<div/>', {
					style: `width: ${width}%;height:100%;position:absolute;`,
					class: ``
				});
				wrapper.append(h1Text);
				last.prepend(wrapper);
				$(last).find(".carousel-caption").remove();
			});
		});

		$(".black-marron-btn").hover((e) => {
			$(e.currentTarget).siblings().removeClass("black-marron-btn-hover");
			$(e.currentTarget).addClass("black-marron-btn-hover");
			$(e.currentTarget).removeClass("black-marron-btn");
			$(e.currentTarget).click();
		}, (e) => {
			$(e.currentTarget).addClass("black-marron-btn");
		})

		$('#multi-item-carousel .carousel-item').each(function () {
			var next = $(this).next();
			if (!next.length) next = $(this).siblings(':first');
			next.children(':first-child').clone().appendTo($(this));
		});

		$('#multi-item-carousel .carousel-item').each(function () {
			var prev = $(this).prev();
			if (!prev.length) prev = $(this).siblings(':last');
			prev.children(':nth-last-child(2)').clone().prependTo($(this));
		});
		var distance = $('#animated-nav').offset().top,
			$window = $(window);

	</script>

</body>
</html>
