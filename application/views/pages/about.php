<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php $this->load->view("components/common-css.php"); ?>
	<link href="<?= base_url() ?>assets/css/page/about.css?v=0.0.1" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<title>Dadamanga | About</title>
</head>
<?php $this->load->view("components/navbar.php"); ?>
<?php $this->load->view("components/sidenav.php"); ?>

<body>

	<div id="jumbotron" class="jumbotron-about jumbotron flex-column flex-center" style="background-image: url(<?= base_url($image[0]->path) ?>) !important;">
		<div class="text">
			<h1 class="text-white text-center"><span class="montserrat-bold">Dadamanga</span>Travel Service</h1>
		</div>
	</div>
	<div class="body-index">
		<nav id="animated-nav" class=" text-center navbar">
			<p><a class="lien1">ABOUT</a> | <a class="lien2">THE TEAM</a> | <a class="lien3">SOCIAL RESPONSABILITY</a> |
				<a class="lien4">REVIEWS</a>
			</p>
			<a class="navbar-brand" href="<?= base_url() . "home" ?>">
				<img style="height:50px; " src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
			</a>
			<button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
		</nav>
		<div class=" container-fluid content-about">
			<div class=" div1 row">
				<div class="col-md-2"></div>
				<div class="col-md-8 pt-5 pb-5">
					<p class="text-center text-form-2">
						MADAGASCAR inspires a sense of imminent adventure. It creeps under your skin with a magical
						fascination of untouched wildlife and the nervous excitement of the unknown. Experience the
						heart and soul of this magnificent land with Dadamanga.
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
						<p class="text-form-1">
							Dadamanga was founded in 2010, but with over 25 years experience in Madagascar, specializing
							in some of the most inspiring and fascination destinations across this island continent. Our
							knowledge, expertise and personal experiences are reflected in the tailor made itineraries
							that we create for you. We personally take pride in designing a LIVE THE ADVENTURE journey
							to suit every client’s needs and requirements. Brett Massoud the founder of Dadamanga first
							set foot on Madagascar in 1987, and during numerous overland adventures, months were spent
							exploring the land and some of the best wildlife parks on offer. Finally settling in Fort
							Dauphin, he is lucky to have national parks, endless beaches, amazing wildlife and
							fascinating culture within easy reach. Working with the most professional team and
							service-providers nationally, and speaking the local language, his time in this magical land
							has given him a wealth of knowledge and expertise on how to create a Madagascar safari.
							Dadamanga is our way of sharing this wealth of experience with you.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text-form-1">
							Conservation is high on our agenda, the projects that we support are based on our knowledge
							of the land and our love of wildlife and sustainability. Our mission is to offer you a LIVE
							THE ADVENTURE journey, and by stepping onto this fascinating island continent for the first
							time you will feel all of your five senses come alive. The smell, sights, sounds of the
							Malagasy way of life, and her nature, will fill your soul with a harmonious and overwhelming
							sense of excitement.
							<br>
							Being specialists in individual and tailor made safaris, we find it exciting that we are
							able to provide our clients with an authentic awe-inspiring tour. Inspiring value and trust,
							a bucket-list adventure that you will never forget, a must to be experienced.
						</p>
					</div>
				</div>
				<p class="pt-3 px-auto text-form-3 text-center">Connect with us and explore our social media. Here you
					can engage
					with us, see
					our history with your own eyes, and after your trip, contribute your own experiences to our story.
				</p>
				<div class="row mt-5 text-center">
					<div class="col-md-12 ">
						<a target="_blank" href="https://www.facebook.com/Dadamanga/"><img class=" contrast socialIcon mx-2 d-inline-block" src="<?= base_url() ?>assets/img/about/facebook-black.png"></a>
						<a target="_blank" href="https://www.instagram.com/dadamangamadagascar/"><img class="socialIcon mx-2 d-inline-block" src="<?= base_url() ?>assets/img/about/instagram-black.png"></a>
						<a target="_blank" href="https://twitter.com/dadamanga"><img class="socialIcon mx-2 d-inline-block" src="<?= base_url() ?>assets/img/about/twitter-black.png"></a>
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
					<p class="text-center text-form-1">
						Our team have a strong sense of solidarity, like a big loving family. We are spread across the
						country, connected by fibre-optic internet and our heart-strings. Our head office is in
						Tolagnaro, the planning & design office is in Antsirabe, we have a team of around thirty drivers
						and guides in Antananarivo, and key team-members on every corner of the island. The team is
						really what makes us unique, our strength is our mutual respect, our strong communication, and
						the genuine desire of the team to share their love of their homeland in a respectful way. All of
						our drivers are also licensed tour guides and our guides are the creme-de-la-creme of Madagascar
						tourism. You only need to read our reviews to witness this fact.
					</p>
				</div>
				<div class="col-md-2"></div>
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
					<p class="text-center text-form-2">
						<?= $text[0]->value ?>
					</p>
				</div>
				<div class="col-md-2"></div>
			</div>

			<div class="dadamanga-special-card card">
				<div class="row no-gutters mb-5">
					<div class="col-lg-6 my-auto px-2 col-md-12">
						<img src="<?= base_url() ?>/assets/img/about/maki-1.jpg" style="border-radius:0;" class="img-fluid card-img wow animated fadeInLeft active" alt="...">
						<img src="<?= base_url() ?>/assets/img/about/cameleon.jpg" style="border-radius:0;" class="img-fluid card-img d-none" alt="...">
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="wow animated fadeInRight card-body">
							<div class="description-container">
								<p class="text_secondaire active">
									Every year, most companies measure their performance by the profit they made. At
									Dadamanga, of course, we aim to make a profit, we are after all a professional tour
									operator company. But each year, we strive not only to generate profit, we also
									strive to measure how we have contributed to the environment and to the people.
									These are the “three P’s” of Triple Bottom Line Management; Profit, Planet, People.
								</p>

								<p class="text_secondaire d-none">
									We make contributions to multiple projects across Madagascar every year, including
									support for a school for girls (giving girls opportunities to stay in school as far
									as university, and helping adolescent girls to avoid starting families when they
									themselves are still children) and the ongoing management and protection of our
									extraordinary private nature reserve at Sainte Luce. At Sainte Luce Reserve, we
									protect the last natural coastal ebony forest in the south of Madagascar where the
									forest meets the sea, where lemurs leap through the trees, where turtles nest on the
									beach, and where crocodiles smile in our estuary. We have been protecting Sainte
									Luce Reserve and her thousands of species of wild flora and fauna since 2010.
								</p>
							</div>
							<button onclick="prevCard()" type="button" class="brown-color text-white btn btn-sm dadamanga-special-card"><i class="fas fa-angle-left"></i></button>
							<button onclick="nextCard()" type="button" class=" text-white brown-color btn btn-sm dadamanga-special-card"><i class="fas fa-angle-right"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class=" div4 row sr">
				<div class="col-md-12 mb-5 pt-5">
					<p class="text-center">OUR REVIEWS ON TRIPADVISOR</p>
				</div>
				<div class="col-md-12" style="overflow:hidden;">
					<div class="elfsight-app-719f865f-1ded-4062-b5e7-f423b8127562"></div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view("components/followus.php") ?>
	<?php $this->load->view("components/footer.php"); ?>
	<?php $this->load->view("components/common-scripts.php") ?>
	<script src="https://apps.elfsight.com/p/platform.js" async></script>
</body>

</html>