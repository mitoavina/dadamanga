<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="<?= base_url() ?>assets/css/all.css" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= base_url() ?>assets/css/global.css?v=1" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/page/knowledge.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?= base_url() ?>assets/js/mdb.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>Dadamanga | Knowledge</title>
</head>
<?php include("navbar.php"); ?>
<?php include("sidenav.php"); ?>

<body>
	<div style="background-image:url( <?= base_url() . 'assets/img/knowledges/jumbotron.jpg' ?>)" id="jumbotron" class="jumbotron-knowledge jumbotron flex-column flex-center">
		<div class="text text-white">
			<h1 class="text-center"><span>KNOWLEDGE OF THE PLACE<span></h1>
		</div>
	</div>
	<div class="body-index">
		<nav id="animated-nav" class=" text-center navbar">
			<p><a class="lien1">MADAGASCAR</a> | <a class="lien2">INTERESTING FACTS</a> | <a class="lien3">DOWNLOADS</a></p>
			<a class="navbar-brand" href="<?= base_url() . "home" ?>">
				<img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
			</a>
			<button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
		</nav>
		<div class=" div1 container-fluid content-knowledge">
			<div class="row">
				<div class="col-md-8 offset-md-2 pt-5 pb-5 text_header">
					<p class="text-center">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi ut aliquip ex ea
					</p>
				</div>
			</div>
			<div class="container pb-4 mt-3">
				<div class="row">
					<div class="col-md-6 text_secondaire">
						<p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
					</div>
					<div class="col-md-6 text_secondaire">
						<p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
					</div>
				</div>
			</div>
		</div>
		<div id="knowledge-container" class="container-fluid">
			<div class="knowledge-sub-container">
				<div class="knowledge-list container-fluid">
					<div class="itinerary-menu-mobile text-center">
						<h5>WHAT INTERESTS YOU?</h5>
						<ul>
							<li><a href="">Madagascar</a></li>
							<li><a href="">Baobab</a></li>
							<li><a href="">Tsingy</a></li>
							<li><a href="">Beaches</a></li>
							<li><a href="">Wildlife</a></li>
							<li><a href="">Culture</a></li>
							<li><a href="">Sports</a></li>
						</ul>
					</div>
					<div class="knowledge-title d-flex justify-content-center">
						<p><?= $knowledge ?></p>
					</div>
					<div class="itineraries-details row px-md-5">
						<div class="itinerary-menu col-lg-3 col-sm-4 pr-5">
							<h5>WHAT INTERESTS YOU?</h5>
							<ul class="list-group knowledge-menu">
								<li class="list-group-item side-menu-style" data-index="madagascar"><a>Madagascar</a></li>
								<li class="list-group-item side-menu-style" data-index="baobab"><a>Baobab</a></li>
								<li class="list-group-item side-menu-style" data-index="tsingy"><a>Tsingy</a></li>
								<li class="list-group-item side-menu-style" data-index="beaches"><a>Beaches</a></li>
								<li class="list-group-item side-menu-style" data-index="wildlife"><a>Wildlife</a></li>
								<li class="list-group-item side-menu-style" data-index="culture"><a>Culture</a></li>
								<li class="list-group-item side-menu-style" data-index="sports"><a>Sports</a></li>
							</ul>
						</div>
						<div class="dadamanga-special-card-container knowledge-details col-lg-8 col-sm-8 col-xs-12">
							<div data-index="madagascar" class="row d-none">
								<div class="knowledge col-lg-6 col-sm-12">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
								</div>
								<div class="knowledge col-lg-6 col-sm-12">
									<img src="<?= base_url() ?>/assets/img/knowledge/madagascar.png" alt="" width="100%" style="max-height:100%;">
								</div>
							</div>
							<div data-index="baobab" class="row d-none">
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="col-lg-5">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
										<div class="col-lg-5 offset-lg-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
									</div>
								</div>
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">Baobab Avenue MORONDAVA</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">Reniala Reserve IFATY</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">DIEGO</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
									</div>
								</div>
							</div>
							<div data-index="tsingy" class="row d-none">
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="col-lg-5">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
										<div class="col-lg-5 offset-lg-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
									</div>
								</div>
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">Bemaraha NP MORONDAVA</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">Red Tsingy DIEGO</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">Ankarana NP DIEGO</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
									</div>
								</div>
							</div>
							<div data-index="beaches" class="row d-none">
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="col-lg-5">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
										<div class="col-lg-5 offset-lg-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
									</div>
								</div>
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">Ifaty & Mangily TOLIARA</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">Ile aux Nattes SAINTE MARIE</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">NosyTanikelu NOSY BE</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">Emerald Sea DIEGO</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">Nosy Iranja NOSY BE</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
									</div>
								</div>
							</div>
							<div data-index="wildlife" class="row d-none">
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="col-lg-5">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
										<div class="col-lg-5 offset-lg-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
									</div>
								</div>
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">LEMURS</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">BIRDS</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">FOSA</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">WHALES AND SHARKS</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
									</div>
								</div>
							</div>
							<div data-index="culture" class="row d-none">
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="col-lg-5">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
										<div class="col-lg-5 offset-lg-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
									</div>
								</div>
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">THE LANGUAGE</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">THE PEOPLE</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">FAMADIHANA</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
									</div>
								</div>
							</div>
							<div data-index="sports" class="row d-none">
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="col-lg-5">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
										<div class="col-lg-5 offset-lg-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore ma</p>
										</div>
									</div>
								</div>
								<div class="knowledge col-lg-12">
									<div class="row">
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">TREKKING</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">SURFING</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">DIVING</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">KITE SURFING</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
										<div class="knowledge-pic col-lg-4 col-6">
											<span class="knowledge-pic-title">SPA & WELLNESS</span>
											<img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="div2 knowledge-carousel row flex-center">
				<div class="knowledge-carousel-content col-xl-7 col-lg-7">
					<div class="carousel-title text-center">INTERESTING FACTS</div>
					<div id="carouselControls" class="carousel slide carousel-container" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi ut aliquip ex ea</p>
							</div>
							<div class="carousel-item">
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi ut aliquip ex ea</p>
							</div>
						</div>
					</div>
					<div class="carousel-btn text-center">
						<button href="#carouselControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						</button>
						<button href="#carouselControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
						</button>
					</div>
				</div>
			</div>
			<?php include("about_destinations.php") ?>
		</div>
		<?php include("downloads.php"); ?>
		<?php include("footer.php"); ?>
		<script type="text/javascript">
			var knowledge = '<?php echo $knowledge; ?>';
		</script>
		<script type="text/javascript" src="<?= base_url() ?>assets/js/page/knowledge.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assets/js/global.js"></script>
	</div>
</body>

</html>