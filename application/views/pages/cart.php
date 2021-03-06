<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->load->view("components/common-css.php"); ?>
    <link href="<?= base_url() ?>assets/css/page/contact.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/page/cart.css" rel="stylesheet">
    <title>Dadamanga | Cart</title>
</head>
<?php $this->load->view('components/navbar'); ?>
<?php $this->load->view("components/sidenav"); ?>

<body>
    <div id="jumbotron " class="jumbotron jumbotron-contact flex-column flex-center">
        <div class="text text-white">
            <h1 class="text-center"><span>CART<span></h1>
        </div>
    </div>
    <div class="container-fluid contact-body">
        <div class="row justify-content-center">
            <!-- <div class="col-md-1 bg-primary">a</div> -->
            <div class=" col-md-10 pt-3 pt-sm-0 page-centrale" id="trip-content">
                <div id="trip-exist">
                    <div class="header-trip">
                        <div></div>
                        <div class="trip">Trip</div>
                        <div class="price">Price</div>
                        <div></div>
                    </div>
                    <div id="items" class="body-trip"></div>
                    <div id="total-container">
                        <span>Total</span>
                        <span id="trip-currency">$</span>
                        <span id="trip-price"></span>
                    </div>
                    <div id="checkout-btn-container">
                        <button class="cc btn btn-sm text-white brown-color waves-effect waves-light">CHECKOUT NOW</button>
                    </div>
                </div>
                <div id="trip-empty">
                    <span>Your cart is empty</span>
                </div>
            </div>
            <!-- <div class="col-md-1 bg-primary">a</div> -->
        </div>
    </div>
    <?php $this->load->view("components/followus.php"); ?>
    <?php $this->load->view("components/footer.php"); ?>
    <?php $this->load->view("components/common-scripts.php"); ?>
    <script src="<?= js_url("page/cart") ?>"></script>
</body>

</html>