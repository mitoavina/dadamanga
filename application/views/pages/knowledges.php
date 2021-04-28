<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->load->view("components/common-css.php"); ?>
    <link href="<?= base_url() ?>assets/css/page/knowledge.css?v=0.0.1" rel="stylesheet">
    <title>Dadamanga | Knowledge of the place</title>
</head>
<?php $this->load->view("components/navbar.php"); ?>
<?php $this->load->view("components/sidenav.php"); ?>

<body>
    <div style="background-image:url( <?= base_url() . 'assets/img/knowledges/jumbotron.jpg' ?>)" id="jumbotron " class="jumbotron-knowledge jumbotron flex-column flex-center">
        <div class="text text-white">
            <h1 class="text-center"><span>KNOWLEDGE OF THE PLACE<span></h1>
        </div>
    </div>
    <div class="body-index">
        <nav id="animated-nav" class=" text-center navbar">
            <p><a class="lien1">MADAGASCAR</a> | <a class="lien3">DOWNLOADS</a></p>
            <a class="navbar-brand" href="<?= base_url() . "home" ?>">
                <img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
        </nav>
        <div class="div1 container-fluid content-knowledge">

            <?php $this->load->view("components/knowledge-intro.php"); ?>

            <div class="row flex-center mb-5 no-gutters">
                <div class="col-md-8 img-placeholder rectangle-large">
                    <img class="w-100" src="<?= base_url("assets/img/knowledges/Banner.jpg") ?>" alt="" srcset="">
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
            <?php $this->load->view("components/about_destinations.php"); ?>
        </div>
        <?php $this->load->view("components/downloads.php"); ?>
        <?php $this->load->view("components/footer.php"); ?>
        <?php $this->load->view("components/common-scripts.php"); ?>
    </div>
</body>

</html>