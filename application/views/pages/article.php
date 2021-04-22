<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->load->view("components/common-css.php"); ?>
    <link href="<?= base_url() ?>assets/css/page/contact.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/page/article.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Dadamanga | Article</title>
</head>
<?php $this->load->view('components/navbar'); ?>
<?php $this->load->view("components/sidenav"); ?>

<body id="article">
    <div id="jumbotron" class="jumbotron jumbotron-contact flex-column flex-center">
    </div>
    <div class="content-centered">
        <div class="grid">
            <div class="share">
                <div class="share-block">
                    <div class="title">SHARE IT</div>
                    <div class="sn"><a target="_blank" href="https://www.facebook.com/Dadamanga/"><img src="<?= base_url() ?>assets/img/followus/facebook.png"></a></div>
                    <div class="sn"><a target="_blank" href="https://twitter.com/dadamanga"><img src="<?= base_url() ?>assets/img/followus/twitter.png"></a></div>
                    <div class="sn"><a target="_blank" href="https://www.instagram.com/dadamangatravel/"><img src="<?= base_url() ?>assets/img/followus/instagram.png"></a></div>
                </div>

            </div>
            <div class="content">
                <div class="date">POSTED ON March 31, 2021</div>
                <div class="title">Dadamanga Staff are Participating in Miatrika COVID Training Programme</div>
                <div class="details">
                    <div class="detail paragraph">
                        Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                        Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                        Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                        Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                    </div>

                    <div class="detail paragraph">
                        Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                        Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                        Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                        Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                    </div>

                    <div class="detail">
                        <div><img src="<?= base_url() ?>assets/img/articles/1/1.png"></div>
                    </div>

                    <div class="detail paragraph">
                        Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                        Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                        Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                        Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                    </div>
                </div>

            </div>
            <div></div>
        </div>
    </div>
    <div class="other-updates"><a href="<?= base_url() . "covid" ?>">OTHER UPDATES</a></div>
    <?php $this->load->view("components/followus.php"); ?>
    <?php $this->load->view("components/footer.php"); ?>
    <?php $this->load->view("components/common-scripts.php"); ?>
</body>

</html>