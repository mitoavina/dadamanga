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
	<link href="<?= base_url() ?>assets/css/page/contact.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/page/cart.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>Dadamanga | Cart</title>
</head>
<?php include("navbar.php"); ?>
<?php include("sidenav.php"); ?>

<body>
	<div id="jumbotron " class="jumbotron jumbotron-contact flex-column flex-center">
		<div class="text text-white">
			<h1 class="text-center"><span>CART<span></h1>
		</div>
	</div>
	<div class="container-fluid contact-body">
		<div class="row justify-content-center">
			<!-- <div class="col-md-1 bg-primary">a</div> -->
			<div class=" col-md-10 pt-3 pt-sm-0 page-centrale">
                <table id="cart-content">
                    <thead>
                        <tr>
                            <th style="width:10%"></th>
                            <th style="text-align:center;width:30%">Trip</th>
                            <th style="width:30%">Date</th>
                            <th style="width:5%;text-align:right;">Price</th>
                            <th style="width:10%;text-align:center;"></th>
                        </tr>
                    </thead>
                    <tbody id="items">
                    </tbody>
                </table>
                <div id="total-container">
                    <span>Total</span>
                    <span>30.00$</span>
                </div>
                <div id="checkout-btn-container">
                    <button class="cc btn btn-sm text-white brown-color waves-effect waves-light">CHECKOUT NOW</button>
                </div>
			</div>
			<!-- <div class="col-md-1 bg-primary">a</div> -->
		</div>
	</div>
	<?php include("followus.php") ?>
	<?php include("footer.php"); ?>
	<?php include("common-scripts.php") ?>
	<script src="<?= js_url("page/cart") ?>"></script>
</body>

</html>
