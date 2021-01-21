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
    <link href="<?= base_url() ?>assets/css/global.css?v=0.0.1" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/page/off-the-shelf.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Dadamanga | OFF THE SHELF</title>
</head>
<?php $this->load->view("components/navbar.php"); ?>
<?php $this->load->view("components/sidenav.php"); ?>

<body>
    <div style="background-image:url( <?= base_url() . 'assets/img/off_the_shelf/off_the_shelf.jpg' ?>)" id="jumbotron" class="jumbotron-off text-white jumbotron flex-column flex-center">
        <div class="text">
            <h1 class="text-center"><span>OFF THE SHELF<span></h1>
        </div>
    </div>
    <div>
        <nav id="animated-nav" class=" text-center navbar">
            <a class="navbar-brand" href="<?= base_url() . "home" ?>">
                <img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
        </nav>

        <div class="container-fluid content-template">
            <div class="row">
                <div class="offset-md-2 col-md-8 pt-5 pb-5 text_header">
                    <p class="text-center">
                        This section of our website is for those of you who want quick access to tours that do not
                        include domestic air travel. These itineraries may be purchased instantly, or, you can ask us to
                        tweak them, or combine them, to suit you perfectly.
                    </p>
                </div>
            </div>

            <div class="row">
                <?php foreach ($trips as $trip) { ?>
                    <div class="col-md-3">
                        <div class="card mb-5">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img src="<?= $trip->getImg() ?>" class="card-img-top trip-card-img" alt="..." />
                                <!-- <img class="card-img-top trip-card-img" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"> -->
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="trip-card-title"><?= $trip->getName() ?></div>
                                <div class="trip-card-price-from">Price From</div>
                                <div class="trip-card-price"><span class="currency"><?= $trip->getCurrency() ?></span><span class="price"><?= $trip->getPrice() ?></span></div>
                            </div>
                            <a href="#!" class="btn trip-card-book-btn">BOOK NOW</a>
                        </div>
                    </div>
                <?php } ?>

                <!-- <div class="col-md-3">
					<div data-travefy-itinerary-id="6yw9rqtsjg8wqz2at7eqy6mawfdfmta" class="travefy-itinerary"></div>
				</div>
				<div class="col-md-3">
					<div data-travefy-itinerary-id="6yw9rqqsn7dsqz2as67s68ff465832a" class="travefy-itinerary"></div>
				</div>
				<div class="col-md-3">
					<div data-travefy-itinerary-id="6yw9rqtsndywqz2a4ms3qly42kbtsgq" class="travefy-itinerary"></div>
				</div>
				<div class="col-md-3">
					<div data-travefy-itinerary-id="6yw9rqtat27wqz2asa4dq58ry7f9btq" class="travefy-itinerary"></div>
				</div> -->
            </div>

            <div class="row div1 taylor-title text-center ">
                <div class="col-md-12">
                    <h1 class="geometria-title">TAYLOR YOUR OWN UNIQUE EXPERIENCE</h1>
                </div>
            </div>
            <div id="taylor-images" class="row">
                <div class="col-md-10">
                    <div class="row overlay-marron-container">
                        <div class="taylor-image col-md-4"></div>
                        <div class="taylor-image col-md-4">
                            <h1 class="to-hide on-background-text"><a href="<?= base_url() . 'adventure' ?>" class="white-link">CREATE YOUR ADVENTURE</a></h1>
                        </div>
                        <div class="taylor-image col-md-4"></div>
                        <div class="overlay-with-padding text-center">
                            <a href="<?= base_url('adventure') ?>" class="d-none overlay-marron white-text">
                                <div>
                                    <div class="mb-3">
                                        Here you can tell us the places and attractions that you want to see to make
                                        your safari around Madagascar perfect. The more information you can give us
                                        here, the closer we will get to your ideal tour, first time around
                                    </div>
                                    <div>FIND OUT MORE <i class="fas fa-long-arrow-alt-right"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view("components/followus.php") ?>
        <?php $this->load->view("components/footer.php"); ?>
        <?php $this->load->view("components/common-scripts.php") ?>

        <!-- <script data-version="v0" id="travefy-itinerary-embedder" type="text/javascript">
			(function() {
				function l() {
					var s = document.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = '//travefy.com/embed/itinerary.1.0.js';
					var e = document.getElementById('travefy-itinerary-embedder');
					e.parentNode.insertBefore(s, e);
				}
				if (window.attachEvent) {
					window.attachEvent('onload', l);
				} else {
					window.addEventListener('load', l, false);
				}
			})();
		</script> -->
    </div>
</body>

</html>