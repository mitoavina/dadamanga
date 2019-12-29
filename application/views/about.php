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
    <link href="<?= base_url() ?>assets/css/page/about.css" rel="stylesheet">
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
    <title>Dadamanga  |  About</title>
</head>
<?php include("navbar.php"); ?>
<?php include("sidenav.php"); ?>

<body>

    <div id="jumbotron" class="jumbotron-about jumbotron flex-column flex-center" style="background-image: url(<?= base_url($image[0]->path) ?>) !important;">
        <div class="text">
            <h1 class="text-white text-center"><span class="montserrat-bold">Dadamanga</span><span class="montserrat-Light">Travel Service<span></h1>
        </div>
    </div>
    <div class="body-index">
        <nav id="animated-nav" class=" text-center navbar">
            <p><a class="lien1">ABOUT</a>  |  <a class="lien2" >THE TEAM</a>  |  <a class="lien3" >SOCIAL RESPONSABILITY</a>  |  <a class="lien4" >REVIEWS</a></p>
            <a class="navbar-brand" href="<?= base_url()."home" ?>">
                <img style="height:50px; "src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
        </nav>
        <div class=" container-fluid content-about">
            <div class=" div1 row">
                <div class="col-md-2"></div>
                <div class="col-md-8 pt-5 pb-5">
                    <p class="text-center">
                        " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi ut aliquip ex ea
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-6 text-center mb-5">
                        <img class="img-fluid" alt="" src="<?= base_url() ?>assets/img/about/img_1-about.jpg">
                    </div>
                    <div class="col-md-6">
                        <p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim
                            <br>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim
                            <br>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
                    </div>
                </div>
                <p class="pt-3 px-auto">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPSCING ELIT, SED DO EISUMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA.</p>
                <div class="row mt-5 text-center">
                    <div class="col-md-12 ">
                        <a target="_blank" href="https://www.facebook.com/Dadamanga/"><img class=" contrast socialIcon mx-2 d-inline-block" src="<?= base_url() ?>assets/img/about/facebook-black.png"></a>
                        <a target="_blank" href="https://www.instagram.com/dadamangamadagascar/"><img class="socialIcon mx-2 d-inline-block" src="<?= base_url() ?>assets/img/about/instagram-black.png"></a>
                        <a target="_blank" href="https://twitter.com/dadamanga"><img class="socialIcon mx-2 d-inline-block" src="<?= base_url() ?>assets/img/about/twitter-black.png"></a>
                        <a target="_blank" href=""><img class="socialIcon mx-2 d-inline-block" src="<?= base_url() ?>assets/img/about/whatsapp-black.png"></a>
                        <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293809-d13188459-Reviews-Dadamanga_Travel_Service-Antananarivo_Antananarivo_Province.html"><img class="socialIcon mx-2 d-inline-block" src="<?= base_url() ?>assets/img/about/tripadvisor-black.png"></a>
                    </div>
                </div>
                <div class=" div2 row team text-center">
                    <div class=" col-md-12">
                        <p class="pb-4">THE TEAM</p>
                        <img class="img-fluid" alt="picture of the team" src="<?= base_url() ?>assets/img/about/team-img.jpg">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2"></div>
                <div class="col-md-8 pt-5 pb-5">
                    <p class="text-center">
                        " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi ut aliquip ex ea
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="container pb-4 mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
                    </div>
                    <div class="col-md-6 ">
                        <p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color:white;" class=" div3 content-about-white container">
            <div class="row sr text-center">
                <div class="col-md-12">
                    <p class="pb-2">SOCIAL RESPONSABILITY</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 pt-5 pb-5">
                    <p class="text-center">
                        <?= $text[0]->value ?>
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="dadamanga-special-card card">
                <div class="row no-gutters mb-5">
                    <div class="col-lg-6 my-auto px-2 col-md-12">
                        <img src="./assets/img/about/maki-1.jpg" style="border-radius:0;" class="img-fluid card-img wow animated fadeInLeft active" alt="...">
                        <img src="./assets/img/about/cameleon.jpg" style="border-radius:0;" class="img-fluid card-img d-none" alt="...">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="wow animated fadeInRight card-body">
                            <div class="description-container">
                                <p class="text_secondaire active">« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim
                                    <br>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>

                                <p class="text_secondaire d-none">« Blabla ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim
                                    <br>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
                            </div>
                            <button onclick="prevCard()" type="button" class="brown-color text-white btn btn-sm dadamanga-special-card"><i class="fas fa-angle-left"></i></button>
                            <button onclick="nextCard()" type="button" class=" text-white brown-color btn btn-sm dadamanga-special-card"><i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" div4 row">
                <div class="col-md-12" style="overflow:hidden;">
                    <div class="elfsight-app-719f865f-1ded-4062-b5e7-f423b8127562"></div>
                </div>
            </div>
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        </div>
    </div>
    <?php include("followus.php") ?>
    <?php include("footer.php"); ?>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/global.js"></script>
</body>

</html>