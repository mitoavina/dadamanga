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
    <link href="<?= base_url() ?>assets/css/page/contact.css" rel="stylesheet">
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
    <title>Dadamanga | Contact</title>
</head>
<?php include("navbar.php"); ?>
<?php include("sidenav.php"); ?>

<body>
    <div id="jumbotron " class="jumbotron jumbotron-contact flex-column flex-center">
        <div class="text text-white">
            <h1 class="text-center"><span>CONTACT DADAMANGA<span></h1>
        </div>
    </div>
    <div class="container-fluid contact-body">
        <div class="row justify-content-center">
            <!-- <div class="col-md-1 bg-primary">a</div> -->
            <div class=" col-md-10 pt-3 pt-sm-0 page-centrale">
                <div class="row part1">
                    <div class="col-md-4 ">
                        <p class="contact-label">ADDRESS</p>
                        <p>Le port hotel,<br>Avenue du marechal foch isokaka<br>Tolagnaro 614 (BP 319)</p>
                    </div>
                    <div class="col-md-4">
                        <p class="contact-label">PHONE</p>
                        <p>0342025862<p>
                    </div>
                    <div class="col-md-4">
                        <p class="contact-label">EMAIL</p>
                        <p>dadamanga@me.com<p>
                    </div>
                </div>
                <form class="text-left" method="post" action="<?= base_url('contact_mail') ?>">
                    <div class="row">
                        <div class="col-md-5 ">
                            <label class="contact-label" for="name">NAME*</label>
                            <input id="name" name="name" required="required" class="form-control custom-bg-input mb-4" type="text" placeholder="Your Name">
                            <label class="contact-label " for="number">PHONE*</label>
                            <input id="number" name="number" required="required" class="custom-bg-input form-control mb-4" type="text" placeholder="Your Number">
                            <label class="contact-label" for="email">EMAIL*</label>
                            <input id="email" name="email" required="required" class="custom-bg-input form-control mb-4" type="email" placeholder="Your Email">
                            <p class="text-muted font-italic">*mandatory fields</p>
                        </div>
                        <div class="col-md-7 test justify-content-right">
                            <label for="message" class="contact-label">MESSAGE</label>
                            <textarea required="required" name="message" class="custom-bg-textarea form-control " id="message" cols="1000" rows="10" placeholder="Your Message"></textarea>
                            <div class="text-right">
                                <button class="cc btn btn-sm text-white brown-color">SEND</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="col-md-1 bg-primary">a</div> -->
        </div>
    </div>
    <?php include("followus.php") ?>
    <?php include("footer.php"); ?>
    <script src="<?= js_url("global") ?>"></script>
</body>

</html>