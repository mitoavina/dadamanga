<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="<?= base_url() ?>assets/css/all.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/font/montserrat/montserrat.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>assets/css/global.css?v=0.0.1" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/page/list-destination.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
    <title>Dadamanga | Destinations</title>
</head>
<?php $this->load->view("components/navbar.php"); ?>
<?php $this->load->view("components/sidenav.php"); ?>

<body>
    <div style="background-image:url( <?= base_url() . 'assets/img/destinations/jumbotron.jpg' ?>)" id="destinationJumbotron" class="jumbotron flex-column flex-center">
        <div class="home-text">
            <h1 class="text-white text-center"><span class="montserrat-bold">MADAGASCAR </span><br>TRAVEL DESTINATIONS<br></h1>
        </div>
    </div>
    <div class="body-index">
        <nav id="animated-nav" class=" text-center navbar">
            <p>
                <?php
                $m = 1;
                foreach ($destinations as $destination) {
                    if ($m == count($destinations)) { ?>
                        <a class="lien<?= $m ?>"><?= $destination->TITLE ?></a>
                    <?php } else { ?>
                        <a class="lien<?= $m ?>"><?= $destination->TITLE ?></a><span class="px-2">|</span>
                    <?php }
                    $m++; ?>
                <?php } ?>
            </p>
            <a class="navbar-brand" href="<?= base_url("home") ?>">
                <img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
        </nav>
        <div class=" container-fluid content-template text-center">
            <div class="row">
                <div class="offset-md-2 col-md-8 pt-5 pb-5 text_header">
                    An island national often called the eighth continent; with multiple micro-climates; and multiple ethnic groups each with their own dialect, style, music, architecture and way of life; any journey across Madagascar is fascinating and eye-opening.
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <h1 class="geometria-title">SELECT A DESTINATION BELOW</h1>
                </div>
            </div>

            <div id="destination-list" class="row">
                <?php
                $p = 1;
                foreach ($destinations as $destination) {
                    $information = json_decode($destination->INFORMATION); ?>
                    <div class="overlay-marron-container div<?= $p ?> col-md-10 mb-3 p-0 destinationForImage" style="background-image: url(<?= $destination->IMAGE ?>);">
                    <!-- POUR CENTRER IMAGE DIEGO -->
                    <?php if(strcmp($destination->TITLE, "DIEGO & NORTH")==0) {?>
                        
                        <script>
                            var div = document.getElementsByClassName("div<?= $p ?>")[0];
                            div.style.backgroundPosition = '0% 60%';
                        </script>
                    <?php } ?>
                        <h1 class="to-hide white-text"><a href="<?= destination_url($destination->NAME) ?>" class="white-link"><?= $destination->TITLE ?></a></h1>
                        <div class="overlay-with-padding">
                            <a href="<?= destination_url($destination->NAME) ?>" class="d-none overlay-marron white-text" href="">
                                <div class="">
                                    <div class="mb-3"><?= $information->text[0]->value ?></div>
                                    <div>FIND OUT MORE <i class="fas fa-long-arrow-alt-right"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php $p++;} ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="geometria-title">TAYLOR YOUR OWN UNIQUE EXPERIENCE</h1>
                </div>
            </div>
            <div id="taylor-images" class="row">
                <div class="col-md-10">
                    <div class="row overlay-marron-container">
                            <div class="taylor-image col-md-4"></div>
                            <div class="taylor-image col-md-4">
                                <h1 class="to-hide on-background-text"><a href="<?= base_url('adventure') ?>" class="white-link">CREATE YOUR ADVENTURE</a></h1>
                            </div>
                            <div class="taylor-image col-md-4"></div>
                            <div class="overlay-with-padding">
                                <a href="<?= base_url('adventure') ?>" class="d-none overlay-marron white-text">
                                    <div>
                                        <div class="mb-3">Here you can tell us the places and attractions that you want to see to make your safari around Madagascar perfect.  The more information you can give us here, the closer we will get to your ideal tour, first time around.</div>
                                        <div>FIND OUT MORE <i class="fas fa-long-arrow-alt-right"></i></div>
                                    </div>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="geometria-title">OFF THE SHELF</h1>
                </div>
            </div>
            <div id="off_the_shelf_image" class="row">
                <div class="col-md-10 overlay-marron-container">
                    <h1 class="to-hide on-background-text"><a href="<?= base_url("shelf") ?>" class="white-link">VIEW OUR CURRENT ADVENTURE</a></h1>
                    <div class="overlay-with-padding">
                        <a href="<?= base_url("shelf") ?>" class="d-none overlay-marron white-text">
                            <div class="">
                                <div class="mb-3">This section of our website is for those of you who want quick access to tours that do not include domestic air travel.  These itineraries may be purchased instantly, or, you can ask us to tweak them, or combine them, to suit you perfectly.</div>
                                <div>FIND OUT MORE <i class="fas fa-long-arrow-alt-right"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php $this->load->view("components/followus.php") ?>
    <?php $this->load->view("components/footer.php"); ?>
    <?php $this->load->view("components/common-scripts.php") ?>
</body>

</html>