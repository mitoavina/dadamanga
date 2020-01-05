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
    <link href="<?= base_url() ?>assets/css/page/off-the-shelf.css" rel="stylesheet">
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
    <title>Dadamanga | OFF THE SHELF</title>
</head>
<?php include("navbar.php"); ?>
<?php include("sidenav.php"); ?>

<body>
    <div style="background-image:url( <?= base_url() . 'assets/img/off_the_shelf/off_the_shelf.jpg' ?>)" id="jumbotron" class="jumbotron-off text-white jumbotron flex-column flex-center">
        <div class="text">
            <h1 class="text-center"><span>OFF THE SHELF<span></h1>
        </div>
    </div>
    <div class="body-index">
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
                        " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi ut aliquip ex ea
                    </p>
                </div>
            </div>

            <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=3cc73682-bcaa-47be-b91e-44e4bc463d9c" async></script>
            <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/3cc73682-bcaa-47be-b91e-44e4bc463d9c/product-list/18981"></div>
            <noscript>Please enable javascript in your browser to book</noscript>

            <!-- <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=8439ce9c-a587-4955-91f8-b7423b94a409" async></script>
            <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/8439ce9c-a587-4955-91f8-b7423b94a409/product-list/19173"></div>
            <noscript>Please enable javascript in your browser to book</noscript> -->



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
                                    <div class="mb-3">"Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod

                                        tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad

                                        minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut
                                        enim
                                        ad minim"</div>
                                    <div>FIND OUT MORE <i class="fas fa-long-arrow-alt-right"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("followus.php") ?>
        <?php include("footer.php"); ?>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/global.js"></script>
    </div>
</body>

</html>