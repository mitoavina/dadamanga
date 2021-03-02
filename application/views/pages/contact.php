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
	<!-- Material Design Bootstrap -->
	<link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>Dadamanga | Contact</title>
</head>
<?php $this->load->view('components/navbar'); ?>
<?php $this->load->view("components/sidenav"); ?>

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
						<p style="line-height:20px">Villa Massoud <br>Lot IVBL020 Rue Circulaire <br>Faux Cap, Tolagnaro
							614</p>
					</div>
					<div class="col-md-4">
						<p class="contact-label">PHONE & WHATSAPP</p>
						<p>
							+26134 20 990 99
						<p>
					</div>
					<div class="col-md-4">
						<p class="contact-label">EMAIL</p>
						<p>contact@dadamanga.mg
						<p>
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
	<?php $this->load->view("components/followus.php"); ?>
	<?php $this->load->view("components/footer.php"); ?>
	<?php $this->load->view("components/common-scripts.php"); ?>
</body>

</html>