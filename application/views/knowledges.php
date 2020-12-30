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
    <link href="<?= base_url() ?>assets/css/page/knowledge.css?v=0.0.1" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Dadamanga | Knowledge of the place</title>
</head>
<?php include("navbar.php"); ?>
<?php include("sidenav.php"); ?>

<body>
    <div style="background-image:url( <?= base_url() . 'assets/img/knowledges/jumbotron.jpg' ?>)" id="jumbotron " class="jumbotron-knowledge jumbotron flex-column flex-center">
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
        <div class="div1 container-fluid content-knowledge">
            <div class="row">
                <div class="col-md-8 offset-md-2 pt-5 pb-5 text_header">
                    <p class="text-center">
                    With its iconic lemurs, its paradisiacal beaches, its impenetrable jungles, its breathtaking
landscapes and its fascinating underwater life; Madagascar is an irresistible destination for
adventurers and lovers of ecological and seaside tourism. A thousand and one wonders are to be
discovered on the Red Island, and a trip to Madagascar is a unique experience that will
undoubtedly be rich in discovery, pleasure and emotion.
                    </p>
                </div>
            </div>
            <div class="container pb-4 mt-3 mb-5">
                <div class="row">
                    <div class="col-md-6 text_secondaire">
                        <p>Visiting Madagascar, however, can not be easy, and using the services of a travel agency and tour
guides are strongly recommended. To give you a taste of a stay on the Big Island, we offer
descriptions of the top attractions of the country and each of its regions.</p>
                    </div>
                    <div class="col-md-6 text_secondaire">
                        <p>We are therefore at your disposal to concoct tailor-made trips according to your preferences and
your budget. Whether it is an ecological and cultural discovery of the island with ease, or a
luxury stay in the best seaside resorts in the country, our team is at your entire disposal.</p>
                    </div>
                </div>
            </div>

            <div class="row flex-center mb-5 no-gutters">
                <div class="col-md-8 img-placeholder rectangle-large">
                    <img class="w-100" src="<?= base_url("assets/img/knowledges/Banner.jpg") ?>" alt="" srcset="">
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md-12">
                    <div class="pb-2 text-center marron-title">THE NAME BEHIND THE BRAND AND WHY YOU SHOULD CHOOSE US</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 pt-5 pb-5 text_header">
                    <p class="text-center">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi ut aliquip ex ea
                    </p>
                </div>
            </div>
            <div class="container pb-4 mt-3">
                <div class="row">
                    <div class="col-md-6 mb-5 text_secondaire">
                        <p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
                    </div>
                    <div class="col-md-6 mb-5 text_secondaire">
                        <p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
                    </div>
                    <div class="col-md-6 mb-5 text_secondaire">
                        <p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
                    </div>
                    <div class="col-md-6 mb-5 text_secondaire">
                        <p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="knowledges col-lg-10 col-10 offset-lg-1 offset-1">
                    <div class="row">
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url("knowledge/madagascar#content") ?>">Madagascar</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url("assets/img/knowledges/MADAGASCAR.jpg") ?>" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url("knowledge/baobab#content") ?>">Baobab</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url("assets/img/knowledges/BAOBAB.jpg") ?>" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url("knowledge/tsingy#content") ?>">Tsingy</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url("assets/img/knowledges/Tsingy.jpg") ?>" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url("knowledge/beaches#test") ?>">Beaches</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url("assets/img/knowledges/BEACHES.jpg") ?>" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url("knowledge/wildlife#content") ?>">Wildlife</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url("assets/img/knowledges/WILDLIFE.jpg") ?>" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url("knowledge/culture#content") ?>">Culture</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url("assets/img/knowledges/Culture.jpg") ?>" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="knowledge col-lg-4 col-6">
                            <span class="pic-title"><a href="<?= base_url("knowledge/sport#content") ?>">Sports</a></span>
                            <div class="pic-container">
                                <img src="<?= base_url("assets/img/knowledges/SPORTS.jpg") ?>" alt="" width="100%" height="100%">
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
        <?php include("common-scripts.php") ?>
    </div>
</body>

</html>