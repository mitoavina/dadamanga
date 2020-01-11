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
    <link href="<?= base_url() ?>assets/css/global.css?v=1" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/galleria-themes/galleria.reis.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/page/destination.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.1.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/galleria-1.4.2.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/galleria-themes/galleria.reis.min.js"></script>
    <title>Dadamanga | <?= $destinationName ?></title>
</head>
<?php include("navbar.php"); ?>
<?php include("sidenav.php"); ?>

<body>

    <div id="jumbotron" class="jumbotron flex-column flex-center" style="background-image: url(<?= base_url($destination->IMAGE) ?>);">

        <div class="home-text">
            <h1 class="text-white"><span class="font-weight-bold"><?= $destination->TITLE ?></h1>
        </div>
    </div>
    <div class="body-index">
        <nav id="animated-nav" class=" text-center navbar">
            <p><a class="lien1">OVERVIEW</a> | <a class="lien2">GALLERY</a> | <a class="lien3">WHEN TO TRAVEL</a> | <a class="lien4">REGIONS</a></p>
            <a class="navbar-brand" href="<?= base_url() . "home" ?>">
                <img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
        </nav>
        
        <div id="conteneur-marron" class="content-template container-fluid text-center">
            <!-- DIV1 -->
            <div class=" div1 container mb-5 ">
                <div class="row d-flex justify-content-center">
                    <div class="text-center col-md-8 pt-5 mb-5 text_header">
                        <?= $information->text[0]->value ?>
                    </div>
                </div>
                <?php for ($i = 1; $i < count($information->text); $i++) { ?>
                    <div class="row">
                        <div class="col-md-6 mb-4 text-left"><?= $information->text[$i]->value ?></div>
                        <?php
                        if ($i < count($information->text) - 1) {
                        ?>
                            <div class="col-md-6 mb-4 text-left"><?= $information->text[++$i]->value ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>

            <div class="div2" id="galleria">
                <?php for($i = 0; $i < count($regions); $i++) { ?>
                    <img src="<?= base_url($regions[$i]->IMAGE) ?>" data-title="My title" data-description="Something about Tana">
                <?php } ?>
            </div>


            <div class="container">
                <!-- DIV3 -->
                <div class=" div3 row">
                    <div class="col-md-12">
                        <h1 class="title_text">WHEN TO TRAVEL</h1>
                    </div>
                </div>

                <div class="row d-flex justify-content-center text1 pt-3">
                    <div class="text-center col-md-8 text_header pt-5 mb-5">
                        <?= $information->travel->title ?>
                    </div>
                </div>

                <div class="row mb-4">
                    <?php foreach ($information->travel->paragraph as $paragraph) { ?>
                        <div class="col-md-6 mb-4 text-left"><?= $paragraph ?></div>
                    <?php } ?>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="dadamanga-special-card card mb-3">
                            <div class="row no-gutters">
                                <div class="col-lg-6 my-auto col-md-12">
                                    <?php
                                    $i = 0;
                                    foreach ($information->slides as $slide) { ?>
                                        <img src="<?= base_url($slide->image) ?>" style="border-radius:0;" class="<?= $i == 0 ? 'active  wow animated fadeInLeft' : 'd-none' ?> img-fluid card-img" alt="...">

                                    <?php
                                        ++$i;
                                    } ?>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="wow animated fadeInRight card-body text-left">
                                        <div class="row title_text ">
                                            <div class="col-md-12">
                                                <p class="pb-2">SELECT THE MONTH YOU PLAN TO TRAVEL</p>
                                            </div>
                                        </div>
                                        <div class="row title_text" style="margin-top:0;color:#151515;font-size:18px;">
                                            <div class="month-containers col-md-12 ">
                                                <?php
                                                $i = 0;
                                                foreach ($information->slides as $slide) { ?>
                                                    <p class="pb-2 <?= $i == 0 ? 'active' :  'd-none' ?>"><?= $slide->period ?></p>
                                                <?php
                                                    ++$i;
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="description-container mb-3">
                                            <?php
                                            $i = 0;
                                            foreach ($information->slides as $slide) {
                                            ?>
                                                <p class="text_secondaire <?= $i == 0 ? 'active' :  'd-none' ?>"><?= $slide->description ?></p>
                                            <?php
                                                ++$i;
                                            }
                                            ?>
                                        </div>
                                        <button onclick="prevCard()" type="button" style=" bottom:0;" class=" position-absolute noShadow btn-marron btn btn-sm "><i class="fas fa-angle-left"></i></button>
                                        <button onclick="nextCard()" type="button" style=" bottom:0;left:90px;" class=" position-absolute noShadow btn-marron btn btn-sm "><i class="fas fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DIV4 -->
                <div class="row div4">
                    <div class="col-md-12">
                        <h1 class="title_text">REGION FOCUS</h1>
                    </div>
                </div>

                <div class="row d-flex justify-content-center text1 pt-3">
                    <div class="text-center col-md-8 text_header pt-5 mb-5">
                        <?= $information->focus[0]->value ?>
                    </div>
                </div>
                <?php
                for ($i = 1; $i < count($information->focus); $i++) {
                ?>
                    <div class="row">
                        <div class="col-md-6 mb-4 text-left"><?= $information->focus[$i]->value ?></div>
                        <?php
                        if ($i < count($information->focus) - 1) {
                        ?>
                            <div class="col-md-6 text-left"><?= $information->focus[++$i]->value ?></div>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="itineraries-details row pt-4 mt-4 bg-white mb-5 px-md-5">
                <div class="itinerary-menu text-left col-md-3">
                    <h6>SELECT A REGION</h6>
                    <ul class="list-group">
                        <?php
                        for ($i = 0; $i < count($regions); $i++) {

                        ?>
                            <li class="list-group-item side-menu-style <?= $i == 0 ? 'side-menu-style-active' : '' ?>" data-index="<?= $i ?>"><a class="active-card-tab"><?= $regions[$i]->TITLE ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>

                <div class="dadamanga-special-card-container col-md-8 offset-md-1">
                    <?php
                    for ($i = 0; $i < count($regions); $i++) {
                        $information = $regions[$i]->INFO;
                        $accordions = new ArrayObject();
                        if ($information != "" && $information != NULL) {
                            $accordions = json_decode($information)->accordions;
                        }
                        if ($i == 0) {
                    ?>
                            <div data-index="<?= $i ?>" class="active card dadamanga-special-card text-left">
                                <img style="border-radius:0;" src="<?= base_url($regions[$i]->IMAGE) ?>" class="card-img-top w-100 h-50" alt="...">
                                <div>
                                    <p class="mt-4 mb-3 card-title dadamanga-special-card-title"><?= $regions[$i]->NAME ?></p>
                                    <p class="text_secondaire"><?= $regions[$i]->DESCRIPTION ?></p>
                                    <?php if ($information != "" && $information != NULL) { ?>
                                        <div class="font-brandon-grotesque-light mb-4 for-more-info font-italic">Click on attraction below for more info</div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    for ($j = 0; $j < count($accordions); $j++) {
                                        $accordionIndex = $j + 1;
                                    ?>
                                        <div class=" font-geometria-light click-below mb-2">
                                            <a class="font-color-brown noHover" data-toggle="collapse" href="#collapse<?= $accordionIndex ?>">+ <?= $accordions[$j]->title ?></a>
                                        </div>
                                        <div class="collapse" id="collapse<?= $accordionIndex ?>">
                                            <p class="pl-2 ml-2 description"><?= $accordions[$j]->text ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php
                        } else {

                        ?>
                            <div data-index="<?= $i ?>" class="d-none card dadamanga-special-card text-left">
                                <img style="border-radius:0;" src="<?= base_url($regions[$i]->IMAGE) ?>" class="card-img-top" alt="...">
                                <div class="">
                                    <p class="mt-4 mb-3 card-title dadamanga-special-card-title"><?= $regions[$i]->NAME ?></p>
                                    <p class="text_secondaire"><?= $regions[$i]->DESCRIPTION ?></p>
                                </div>
                                <?php if ($information != "" && $information != NULL) { ?>
                                    <div class="font-brandon-grotesque-light mb-4 for-more-info font-italic">Click on attraction below for more info</div>
                                <?php
                                }
                                ?>
                                <?php
                                for ($j = 0; $j < count($accordions); $j++) {
                                    $accordionIndex = $j + 1;
                                ?>
                                    <div class=" font-geometria-light click-below mb-2">
                                        <a class="font-color-brown noHover" data-toggle="collapse" href="#collapse<?= $accordionIndex ?>">+ <?= $accordions[$j]->title ?></a>
                                    </div>
                                    <div class="collapse" id="collapse<?= $accordionIndex ?>">
                                        <p class="pl-2 ml-2 description"><?= $accordions[$j]->text ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>

            <div class="row mb-5">
                <div id="select-below" class="col-md-12">SELECT ANOTHER DESTINATION BELOW</div>
            </div>

            <div class="container">
                <div id="select-below-images-container" class="row">
                    <?php foreach ($others as $other) { ?>
                        <div class="col-md-4 col-6 overlay-marron-container">
                            <div class="col-md-12 flex-center" style="background-image: url(<?= base_url($other->IMAGE) ?>);">
                                <a href="<?= destination_url($other->NAME) ?>" class="to-hide text-uppercase white-link"><?= $other->NAME ?></a>
                            </div>
                            <div class="overlay-with-padding">
                                <a href="<?= destination_url($other->NAME) ?>" class="d-none overlay-marron white-text">
                                    <div style="font-size: 0.8em">
                                        <div class="mb-3 text-uppercase font-weight-bold"><?= $other->NAME ?></div>
                                        <div>FIND OUT MORE <i class="fas fa-long-arrow-alt-right"></i></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= js_url("global") ?>"></script>
    <?php include("followus.php") ?>
    <?php include("footer.php"); ?>
</body>

</html>