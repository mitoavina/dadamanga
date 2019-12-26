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
    <link href="<?= base_url() ?>assets/css/global.css" rel="stylesheet">
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
    <title>Dadamanga | Knowledge of the place</title>
</head>
<?php include("navbar.php"); ?>
<?php include("sidenav.php"); ?>
<body>
    <div style="background-image:url( <?= base_url().'assets/img/knowledges/jumbotron.jpg' ?>)" id="jumbotron " class="jumbotron-knowledge jumbotron flex-column flex-center">
        <div class="text text-white">
            <h1 class="text-center"><span>KNOWLEDGE OF THE PLACE<span></h1>
		</div>
    </div>
    <div class="body-index">
    <nav id="animated-nav" class=" text-center navbar">
		<p><a class="lien1">MADAGASCAR</a>  |  <a class="lien2">INTERESTING FACTS</a>  | <a class="lien3">DOWNLOADS</a></p>
            <a class="navbar-brand" href="<?= base_url()."home" ?>">
                <img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i
            class="fas fa-bars fa-1x"></i></span></button>
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
            <div class="row">
                <div class="knowledges col-lg-10 col-10 offset-lg-1 offset-1">
                    <div class="row">
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url() ?>knowledge/madagascar">Madagascar</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url() ?>/assets/img/blank2.png" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url() ?>knowledge/baobab">Baobab</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url() ?>/assets/img/blank2.png" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url() ?>knowledge/tsingy">Tsingy</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url() ?>/assets/img/blank2.png" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url() ?>knowledge/beaches">Beaches</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url() ?>/assets/img/blank2.png" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url() ?>knowledge/wildlife">Wildlife</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url() ?>/assets/img/blank2.png" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url() ?>knowledge/culture">Culture</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url() ?>/assets/img/blank2.png" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url() ?>knowledge/sport">Sports</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url() ?>/assets/img/blank2.png" alt="" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" div2 knowledge-carousel row flex-center">
				<div class="knowledge-carousel-content col-xl-7 col-lg-7">
					<div class="carousel-title text-center">INTERESTING FACTS</div>
					<div id="carouselControls" class="carousel slide carousel-container" data-ride="carousel">
						<div class="carousel-inner font-brandon-grotesque-light text-center">
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
						<button  href="#carouselControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
						</button>
					</div>
				</div>
            </div>
            <div class="row">
                <?php include("about_destinations.php") ?>
            </div>
        </div>
        <div class=" div3 up-footer text-white text-center container-fluid">
            <h2>DOWNLOADS</h2>
            <div class="row justify-content-center">
                <div class="col-lg-2">
                    <img src="<?= base_url() ?>assets/img/followus/ring.png">
                    <div><h2>Tipping & Food</h2></div>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url() ?>assets/img/followus/starfish.png">
                    <div><h2>Animal Welfare</h2></div>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url() ?>assets/img/followus/file.png">
                    <div><h2>Terms & Conditions</h2></div>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url() ?>assets/img/followus/smartphone.png">
                    <div><h2>Mobile Phone Setup</h2></div>
                </div>
                <div class="col-lg-2">
                    <img src="<?= base_url() ?>assets/img/followus/backpack.png">
                    <div><h2>Preparation</h2></div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/global.js"></script>
    </div>
</body>
</html>
