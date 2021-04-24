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
                <div class="date">POSTED ON <?= $article->{'creation_date'} ?></div>
                <div class="title"><?= $article->{'title'} ?></div>
                <?php $fields = json_decode($article->{'fields'}); ?>
                <div class="details">
                    <?php foreach ($fields as $field) { ?>
                        <?php if ($field->{'type'} == 1) { ?>
                            <div class="detail paragraph">
                                <?= $field->{'paragraph'} ?>
                            </div>
                        <?php } else { ?>
                            <div class="detail">
                                <div><img src="<?= article_url($article->{'id'}, $field->{'image'}->{'filename'}) ?>"></div>
                            </div>
                        <?php } ?>
                    <?php } ?>
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