<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?= base_url() ?>icon.ico" />
    <link href="<?= base_url() ?>assets/css/all.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>assets/css/global.css?v=0.0.1" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/galleria-themes/galleria.reis.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/page/luxury.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Dadamanga | Explore Luxury</title>
</head>
<?php $this->load->view("components/navbar.php"); ?>
<?php $this->load->view("components/sidenav.php"); ?>

<body>
    <!-- MODAL -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
            <form id="luxury-form">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid ">
                            <h5 class="modal-title" id="exampleModalLongTitle">THE ADVENTURE BEGINS..</h5>
                            <div class="row justify-content-center my-lg-5">
                                <div class="col-lg-8">
                                    <p class="text-center">Planning a unique itinerary for someone is always a process,
                                        and to make that process more efficient, we require all potential clients to
                                        fill out this form</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label class="modal-label" for="name">FULL NAME*</label>
                                    <input required="required" type="text" class="form-control custom-bg-input" name="name" id="name" placeholder="full Name">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="modal-label" for="phone">Phone*</label>
                                    <input required="required" name="phone" type="number" class="form-control custom-bg-input" id="phone" placeholder="Phone">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="modal-label" for="email">Email</label>
                                    <input required="required" name="email" type="email" class="form-control custom-bg-input" id="email" placeholder="Exemple@exemple.com">
                                </div>
                            </div>
                            <div class=" myMargin form-row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label class="modal-label" for="nationality">NATIONALITY /CONTRY OF
                                                RESIDENCE</label>
                                            <!-- <input type="text" class="form-control custom-bg-input" id="email" placeholder="Exemple@exemple.com"> -->
                                            <select required="required" class=" custom-bg-input browser-default custom-select" name="nationality">
                                                <option value="" disabled selected>Select your nationality</option>
                                                <option value="afghan">Afghan</option>
                                                <option value="albanian">Albanian</option>
                                                <option value="algerian">Algerian</option>
                                                <option value="american">American</option>
                                                <option value="andorran">Andorran</option>
                                                <option value="angolan">Angolan</option>
                                                <option value="antiguans">Antiguans</option>
                                                <option value="argentinean">Argentinean</option>
                                                <option value="armenian">Armenian</option>
                                                <option value="australian">Australian</option>
                                                <option value="austrian">Austrian</option>
                                                <option value="azerbaijani">Azerbaijani</option>
                                                <option value="bahamian">Bahamian</option>
                                                <option value="bahraini">Bahraini</option>
                                                <option value="bangladeshi">Bangladeshi</option>
                                                <option value="barbadian">Barbadian</option>
                                                <option value="barbudans">Barbudans</option>
                                                <option value="batswana">Batswana</option>
                                                <option value="belarusian">Belarusian</option>
                                                <option value="belgian">Belgian</option>
                                                <option value="belizean">Belizean</option>
                                                <option value="beninese">Beninese</option>
                                                <option value="bhutanese">Bhutanese</option>
                                                <option value="bolivian">Bolivian</option>
                                                <option value="bosnian">Bosnian</option>
                                                <option value="brazilian">Brazilian</option>
                                                <option value="british">British</option>
                                                <option value="bruneian">Bruneian</option>
                                                <option value="bulgarian">Bulgarian</option>
                                                <option value="burkinabe">Burkinabe</option>
                                                <option value="burmese">Burmese</option>
                                                <option value="burundian">Burundian</option>
                                                <option value="cambodian">Cambodian</option>
                                                <option value="cameroonian">Cameroonian</option>
                                                <option value="canadian">Canadian</option>
                                                <option value="cape verdean">Cape Verdean</option>
                                                <option value="central african">Central African</option>
                                                <option value="chadian">Chadian</option>
                                                <option value="chilean">Chilean</option>
                                                <option value="chinese">Chinese</option>
                                                <option value="colombian">Colombian</option>
                                                <option value="comoran">Comoran</option>
                                                <option value="congolese">Congolese</option>
                                                <option value="costa rican">Costa Rican</option>
                                                <option value="croatian">Croatian</option>
                                                <option value="cuban">Cuban</option>
                                                <option value="cypriot">Cypriot</option>
                                                <option value="czech">Czech</option>
                                                <option value="danish">Danish</option>
                                                <option value="djibouti">Djibouti</option>
                                                <option value="dominican">Dominican</option>
                                                <option value="dutch">Dutch</option>
                                                <option value="east timorese">East Timorese</option>
                                                <option value="ecuadorean">Ecuadorean</option>
                                                <option value="egyptian">Egyptian</option>
                                                <option value="emirian">Emirian</option>
                                                <option value="equatorial guinean">Equatorial Guinean</option>
                                                <option value="eritrean">Eritrean</option>
                                                <option value="estonian">Estonian</option>
                                                <option value="ethiopian">Ethiopian</option>
                                                <option value="fijian">Fijian</option>
                                                <option value="filipino">Filipino</option>
                                                <option value="finnish">Finnish</option>
                                                <option value="french">French</option>
                                                <option value="gabonese">Gabonese</option>
                                                <option value="gambian">Gambian</option>
                                                <option value="georgian">Georgian</option>
                                                <option value="german">German</option>
                                                <option value="ghanaian">Ghanaian</option>
                                                <option value="greek">Greek</option>
                                                <option value="grenadian">Grenadian</option>
                                                <option value="guatemalan">Guatemalan</option>
                                                <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                <option value="guinean">Guinean</option>
                                                <option value="guyanese">Guyanese</option>
                                                <option value="haitian">Haitian</option>
                                                <option value="herzegovinian">Herzegovinian</option>
                                                <option value="honduran">Honduran</option>
                                                <option value="hungarian">Hungarian</option>
                                                <option value="icelander">Icelander</option>
                                                <option value="indian">Indian</option>
                                                <option value="indonesian">Indonesian</option>
                                                <option value="iranian">Iranian</option>
                                                <option value="iraqi">Iraqi</option>
                                                <option value="irish">Irish</option>
                                                <option value="israeli">Israeli</option>
                                                <option value="italian">Italian</option>
                                                <option value="ivorian">Ivorian</option>
                                                <option value="jamaican">Jamaican</option>
                                                <option value="japanese">Japanese</option>
                                                <option value="jordanian">Jordanian</option>
                                                <option value="kazakhstani">Kazakhstani</option>
                                                <option value="kenyan">Kenyan</option>
                                                <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                <option value="kuwaiti">Kuwaiti</option>
                                                <option value="kyrgyz">Kyrgyz</option>
                                                <option value="laotian">Laotian</option>
                                                <option value="latvian">Latvian</option>
                                                <option value="lebanese">Lebanese</option>
                                                <option value="liberian">Liberian</option>
                                                <option value="libyan">Libyan</option>
                                                <option value="liechtensteiner">Liechtensteiner</option>
                                                <option value="lithuanian">Lithuanian</option>
                                                <option value="luxembourger">Luxembourger</option>
                                                <option value="macedonian">Macedonian</option>
                                                <option value="malagasy">Malagasy</option>
                                                <option value="malawian">Malawian</option>
                                                <option value="malaysian">Malaysian</option>
                                                <option value="maldivan">Maldivan</option>
                                                <option value="malian">Malian</option>
                                                <option value="maltese">Maltese</option>
                                                <option value="marshallese">Marshallese</option>
                                                <option value="mauritanian">Mauritanian</option>
                                                <option value="mauritian">Mauritian</option>
                                                <option value="mexican">Mexican</option>
                                                <option value="micronesian">Micronesian</option>
                                                <option value="moldovan">Moldovan</option>
                                                <option value="monacan">Monacan</option>
                                                <option value="mongolian">Mongolian</option>
                                                <option value="moroccan">Moroccan</option>
                                                <option value="mosotho">Mosotho</option>
                                                <option value="motswana">Motswana</option>
                                                <option value="mozambican">Mozambican</option>
                                                <option value="namibian">Namibian</option>
                                                <option value="nauruan">Nauruan</option>
                                                <option value="nepalese">Nepalese</option>
                                                <option value="new zealander">New Zealander</option>
                                                <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                <option value="nicaraguan">Nicaraguan</option>
                                                <option value="nigerien">Nigerien</option>
                                                <option value="north korean">North Korean</option>
                                                <option value="northern irish">Northern Irish</option>
                                                <option value="norwegian">Norwegian</option>
                                                <option value="omani">Omani</option>
                                                <option value="pakistani">Pakistani</option>
                                                <option value="palauan">Palauan</option>
                                                <option value="panamanian">Panamanian</option>
                                                <option value="papua new guinean">Papua New Guinean</option>
                                                <option value="paraguayan">Paraguayan</option>
                                                <option value="peruvian">Peruvian</option>
                                                <option value="polish">Polish</option>
                                                <option value="portuguese">Portuguese</option>
                                                <option value="qatari">Qatari</option>
                                                <option value="romanian">Romanian</option>
                                                <option value="russian">Russian</option>
                                                <option value="rwandan">Rwandan</option>
                                                <option value="saint lucian">Saint Lucian</option>
                                                <option value="salvadoran">Salvadoran</option>
                                                <option value="samoan">Samoan</option>
                                                <option value="san marinese">San Marinese</option>
                                                <option value="sao tomean">Sao Tomean</option>
                                                <option value="saudi">Saudi</option>
                                                <option value="scottish">Scottish</option>
                                                <option value="senegalese">Senegalese</option>
                                                <option value="serbian">Serbian</option>
                                                <option value="seychellois">Seychellois</option>
                                                <option value="sierra leonean">Sierra Leonean</option>
                                                <option value="singaporean">Singaporean</option>
                                                <option value="slovakian">Slovakian</option>
                                                <option value="slovenian">Slovenian</option>
                                                <option value="solomon islander">Solomon Islander</option>
                                                <option value="somali">Somali</option>
                                                <option value="south african">South African</option>
                                                <option value="south korean">South Korean</option>
                                                <option value="spanish">Spanish</option>
                                                <option value="sri lankan">Sri Lankan</option>
                                                <option value="sudanese">Sudanese</option>
                                                <option value="surinamer">Surinamer</option>
                                                <option value="swazi">Swazi</option>
                                                <option value="swedish">Swedish</option>
                                                <option value="swiss">Swiss</option>
                                                <option value="syrian">Syrian</option>
                                                <option value="taiwanese">Taiwanese</option>
                                                <option value="tajik">Tajik</option>
                                                <option value="tanzanian">Tanzanian</option>
                                                <option value="thai">Thai</option>
                                                <option value="togolese">Togolese</option>
                                                <option value="tongan">Tongan</option>
                                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian
                                                </option>
                                                <option value="tunisian">Tunisian</option>
                                                <option value="turkish">Turkish</option>
                                                <option value="tuvaluan">Tuvaluan</option>
                                                <option value="ugandan">Ugandan</option>
                                                <option value="ukrainian">Ukrainian</option>
                                                <option value="uruguayan">Uruguayan</option>
                                                <option value="uzbekistani">Uzbekistani</option>
                                                <option value="venezuelan">Venezuelan</option>
                                                <option value="vietnamese">Vietnamese</option>
                                                <option value="welsh">Welsh</option>
                                                <option value="yemenite">Yemenite</option>
                                                <option value="zambian">Zambian</option>
                                                <option value="zimbabwean">Zimbabwean</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="modal-label" for="email">APPROXIMATE DATES OF TRAVEL</label>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input placeholder="Beginning" id="begin" name="begin" type="text" class="form-control custom-bg-input">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input placeholder="End" id="end" name="end" type="text" class="form-control  custom-bg-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" myMargin form-row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label class="modal-label" for="disability">ANY DISABILITY / ACCESSIBILITY
                                                REQUIREMENT?</label>
                                            <input name="disability" type="text" class="form-control custom-bg-input" id="disability" placeholder="YES/NO/COMMENT">

                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="modal-label" for="food">ANY SPECIAL FOOD REQUIREMENTS</label>
                                            <input name="food" type="text" class="form-control custom-bg-input" placeholder="Write">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="myMargin form-row justify-content-center">
                                <div class="col-lg-11">
                                    <div class="form-group">
                                        <label class="modal-label" for="else">ANYTHING ELSE YOU WANT TO TELL US?</label>
                                        <textarea name="else" class="custom-bg-textarea form-control " id="else" rows="5" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="cc btn btn-sm text-white brown-color">SEND</button>
                        <div id="mailSpinner" class="d-none spinner-border text-light spinner-border-sm" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- MODAL -->
    <div id="jumbotron" class=" jumbotron-luxury jumbotron flex-column flex-center">
        <div class="text">
            <h1 class="text-center"><span>EXPLORE LUXURY<span></h1>
        </div>
    </div>
    <div class="body-index">
        <nav id="animated-nav" class=" text-center navbar">
            <p>
                <a class="lien1">OVERVIEW</a> |
                <a class="lien2">GALERY</a> |
                <!-- <a class="lien3">WHEN TO TRAVEL</a> | -->
                <a class="lien4">PROPERTY FOCUS</a> |
                <a class="lien5">HELICOPTER TRAVEL</a>
            </p>
            <a class="navbar-brand" href="<?= base_url() . "home" ?>">
                <img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
        </nav>
        <div class=" div1 container-fluid content-template">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 pt-5 pb-5 text_header">
                    <p class="text-center">
                        Madagascar now offers many luxury experiences comparable to anywhere in the world. Usually
                        remote, and usually requiring an adventurous journey to reach your destination, Dadamanga can
                        manage your visit to any of these world class destinations. Ask us.
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="container pb-4 mt-3">
                <div class="row">
                    <div class="col-md-6 text_secondaire">
                        <p>From pristine tropical islands accessed only by helicopter, to coastal resorts with huge
                            private nature reserves, to the wild jungles of the Masoala Peninsular, Madagascar offers
                            many experiences suitable for the most discerning voyager.</p>
                    </div>
                    <div class="col-md-6 text_secondaire">
                        <p>We offer a small selection of the best destinations in Madagascar here as suggestions, and we
                            can incorporate these into any itinerary. It is sure that to see more of Madagascar, you
                            will need to have an adventure, for example, hiking or visiting rainforests, with some days
                            pampering yourself at a luxury hotel as a fitting end to your more strenuous activities.</p>
                    </div>
                </div>
            </div>
            <div class="div2 row mt-4">
                <div class="col-md-12 p-0">
                    <div id="galleria">
                        <img style="border-radius:0;" src="./assets/img/luxury/miavana-bg.jpg" class="card-img-top" alt="...">
                        <img style="border-radius:0;" src="./assets/img/luxury/Tsarabanjina.jpg" class="card-img-top" alt="...">
                        <img style="border-radius:0;" src="./assets/img/luxury/Luxury_1.jpg" class="card-img-top" alt="...">
                        <img style="border-radius:0;" src="./assets/img/luxury/Luxury_2.jpg" class="card-img-top" alt="...">
                        <img style="border-radius:0;" src="./assets/img/luxury/1.jpg" class="card-img-top" alt="...">
                        <img style="border-radius:0;" src="./assets/img/luxury/2.jpg" class="card-img-top" alt="...">
                        <img style="border-radius:0;" src="./assets/img/luxury/3.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
            <!-- <div class=" div3 row title_text text-center">
				<div class="col-md-12">
					<p class="pb-2">WHEN TO TRAVEL</p>
				</div>
			</div> -->
            <!-- <div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 pt-5 pb-5 text_header">
					<p class="text-center">
						" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut
						labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi
						ut aliquip ex ea
					</p>
				</div>
				<div class="col-md-2"></div>
			</div> -->
            <!-- <div class="container pb-4 mt-3">
				<div class="row">
					<div class="col-md-6 text_secondaire">
						<p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut
							labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore
							magna aliqua.. Ut enim ad minim</p>
					</div>
					<div class="col-md-6 text_secondaire">
						<p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut
							labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore
							magna aliqua.. Ut enim ad minim</p>
					</div>
				</div>
			</div> -->
            <!-- <div class="row mt-4">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="luxury-card dadamanga-special-card card mb-3">
						<div class="row no-gutters">
							<div class="col-lg-6 col-md-12">
								<img src="./assets/img/luxury/miavana.jpg" style="border-radius:0;"
									class="img-fluid card-img active wow animated fadeInLeft" alt="...">
								<img src="./assets/img/luxury/gidro.jpg" style="border-radius:0;"
									class="img-fluid card-img d-none" alt="...">
								<img src="./assets/img/luxury/baobab.jpg" style="border-radius:0;"
									class="img-fluid card-img d-none" alt="...">
								<img src="./assets/img/luxury/miavana.jpg" style="border-radius:0;"
									class="img-fluid card-img d-none" alt="...">
								<img src="./assets/img/luxury/miavana.jpg" style="border-radius:0;"
									class="img-fluid card-img d-none" alt="...">
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card-body py-0 wow animated fadeInRight">
									<div class="row title_text">
										<div class="dadamanga-special-card-brown-title col-md-12">
											<p class="pb-2 active">MIAVANA</p>
											<p class="pb-2 d-none">TSARABANJINA</p>
											<p class="pb-2 d-none">ANJAVAVY LE LODGE</p>
											<p class="pb-2 d-none">MADAGASCAR CLASSIC COLLECTION</p>
											<p class="pb-2 d-none">MASOALA FOREST LODGE</p>
										</div>
									</div>
									<div class="row title_text " style="margin-top:0;color:#151515;font-size:18px;">
										<div class="month-containers col-md-12 ">
											<p class="pb-2 active">DEC - MAR</p>
											<p class="pb-2 d-none">NOV - JAN</p>
											<p class="pb-2 d-none">FEB - MAR</p>
											<p class="pb-2 d-none">APR - MAY</p>
											<p class="pb-2 d-none">APR - MAY</p>
										</div>
									</div>
									<div class="description-container">
										<p class="text_secondaire active">
											Madagascar's first 5 star eco luxury accommodation - NOSY ANKAO - Sink your
											feet into the pearly sands of a remote island sanctuary where you'll taste
											sweet jasmine on the breeze while gazing at a thousand sparkling shades of
											turquoise.
										</p>
										<p class="text_secondaire d-none">
											Azure blue water, powder soft beaches, private bungalows fenced by tropical
											plants, choose from one of the 25 beach villas. Laid back atmosphere,
											barefoot chic, an intimate retreat, eco-friendly, an unspoiled Island
											surrounded by azure water; the resort offers a chic Robinson Crusoe
											experience.
										</p>
										<p class="text_secondaire d-none">
											ANJAJAVY - On an isolated peninsular on the northwest coast of Madagascar,
											Anjajavy le Lodge awaits your discovery. Set along sandy beaches, azure
											waters and encircled by a fabulous forest reserve, Anjajavy reflects the
											rich diversity and untouched beauty of Madagascar and the natural warm
											hospitality of her people.
										</p>
										<p class="text_secondaire d-none">
											MCC - two exclusive properties, a tented camp with seven fully-outfitted
											rooms in the heart of southern Madagascar’s spiny forest, and Manafiafy
											Beach & Rainforest Lodge, a barefoot luxury lodge with five rooms tucked
											into a secluded and serene bay on the southeastern shores of Madagascar.
										</p>
										<p class="text_secondaire d-none">
											MASOALA FOREST LODGE - An Untouched Rainforest Peninsula - The spectacular
											rainforest covered peninsula on Madagascar’s northeast coast forms the
											backdrop for Masoala Forest Lodge – a luxurious outpost lost in time and
											nature… A place to relax explore and connect with the natural world in all
											its primordial splendor.
										</p>
									</div>
									<button onclick="prevCard(true)" style="bottom: 0;"
										class="position-absolute noShadow btn-marron btn btn-sm"><i
											class="fas fa-angle-left"></i></button>
									<button onclick="nextCard(true)" style="bottom: 0; left:90px"
										class="position-absolute noShadow btn-marron btn btn-sm"><i
											class="fas fa-angle-right"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div> -->
            <div class=" div4 row title_text text-center">
                <div class="col-md-12">
                    <p class="pb-2">PROPERTY FOCUS</p>
                </div>
            </div>
            <!-- <div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 pt-5 pb-5 text_header">
					<p class="text-center">
						" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut
						labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi
						ut aliquip ex ea
					</p>
				</div>
				<div class="col-md-2"></div>
			</div> -->
            <!-- <div class="container pb-4 mt-3">
				<div class="row">
					<div class="col-md-6 text_secondaire">
						<p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut
							labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore
							magna aliqua.. Ut enim ad minim</p>
					</div>
					<div class="col-md-6 text_secondaire">
						<p>« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut
							labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore
							magna aliqua.. Ut enim ad minim</p>
					</div>
				</div>
			</div> -->
            <div class="itinerary-menu-mobile text-center">
                <h5>WHAT INTERESTS YOU?</h5>
                <ul class="list-inline">
                    <li class="list-inline-item side-menu-style-active" data-index="0"><a>Miavana</a></li>
                    <li class="list-inline-item" data-index="1"><a>Tsarabanjina</a></li>
                    <li class="list-inline-item" data-index="2"><a>Anjajavy Le Lodge</a></li>
                    <li class="list-inline-item" data-index="3"><a>Madagascar Classic Collection</a></li>
                    <li class="list-inline-item" data-index="4"><a>Masoala Forest Lodge</a></li>
                </ul>
            </div>
            <div class="itineraries-details position-relative row pt-4 mt-4 bg-white px-md-5">
                <div class="itinerary-menu col-lg-3 col-sm-4 pr-5 " id="jj">
                    <h5>WHAT INTERESTS YOU?</h5>
                    <ul class="list-group">
                        <li class="side-menu-style side-menu-style-active list-group-item" data-index="0"><a>Miavana</a>
                        </li>
                        <li class="side-menu-style list-group-item" data-index="1"><a>Tsarabanjina</a></li>
                        <li class="side-menu-style list-group-item" data-index="2"><a>Anjajavy Le Lodge</a></li>
                        <li class="side-menu-style list-group-item" data-index="3"><a>Madagascar Classic Collection</a>
                        </li>
                        <li class="side-menu-style list-group-item" data-index="4"><a>Masoala Forest Lodge</a></li>
                    </ul>
                </div>
                <div class="dadamanga-special-card-container col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div data-index="0" class="card luxury-card active dadamanga-special-card">
                        <img style="border-radius:0;" src="./assets/img/luxury/miavana-bg.jpg" class="card-img-top" alt="...">
                        <div class="">
                            <p class="mt-4 mb-2 card-title luxury-card-title" style="margin:0;">Miavana</p>
                            <p class="text_secondaire">
                                Madagascar's first 5 star eco luxury accommodation - NOSY ANKAO - Sink your feet into
                                the pearly sands of a remote island sanctuary where you'll taste sweet jasmine on the
                                breeze while gazing at a thousand sparkling shades of turquoise.
                            </p>
                            <div class="text-right" style="font-family:'Geometria';">
                                <style>
                                    .kl {
                                        box-shadow: none;
                                    }
                                </style>
                                <button type="button" data-toggle="modal" data-target="#modal" class="noShadow brown-color kl text-white btn-rounded btn btn-sm">BOOK</i></button>
                            </div>
                        </div>
                    </div>

                    <div data-index="1" class="d-none card luxury-card dadamanga-special-card">
                        <img style="border-radius:0;" src="./assets/img/luxury/Tsarabanjina.jpg" class="card-img-top" alt="...">
                        <div class="">
                            <p class="mt-4 mb-2 card-title luxury-card-title" style="margin:0;">Tsarabanjina</p>
                            <p class="text_secondaire">
                                Azure blue water, powder soft beaches, private bungalows fenced by tropical plants,
                                choose from one of the 25 beach villas. Laid back atmosphere, barefoot chic, an intimate
                                retreat, eco-friendly, an unspoiled Island surrounded by azure water; the resort offers
                                a chic Robinson Crusoe experience.
                            </p>
                            <div class="text-right" style="font-family:'Geometria';">
                                <style>
                                    .kl {
                                        box-shadow: none;
                                    }
                                </style>
                                <button type="button" data-toggle="modal" data-target="#modal" class="noShadow brown-color kl text-white btn-rounded btn btn-sm">BOOK</i></button>
                            </div>
                        </div>
                    </div>

                    <div data-index="2" class="d-none card luxury-card dadamanga-special-card">
                        <img style="border-radius:0;" src="./assets/img/luxury/Luxury_1.jpg" class="card-img-top" alt="...">
                        <div>
                            <p class="mt-4 mb-2 card-title luxury-card-title" style="margin:0;">Anjavavy Le Lodge</p>
                            <p class="text_secondaire">
                                On an isolated peninsular on the northwest coast of Madagascar, Anjajavy le Lodge awaits
                                your discovery. Set along sandy beaches, azure waters and encircled by a fabulous forest
                                reserve, Anjajavy reflects the rich diversity and untouched beauty of Madagascar and the
                                natural warm hospitality of her people.
                            </p>
                            <div class="text-right" style="font-family:'Geometria';">
                                <style>
                                    .kl {
                                        box-shadow: none;
                                    }
                                </style>
                                <button type="button" data-toggle="modal" data-target="#modal" class="noShadow brown-color kl text-white btn-rounded btn btn-sm">BOOK</i></button>
                            </div>
                        </div>
                    </div>

                    <div data-index="3" class="d-none card luxury-card dadamanga-special-card">
                        <img style="border-radius:0;" src="./assets/img/luxury/Luxury_2.jpg" class="card-img-top" alt="...">
                        <div class="">
                            <p class="mt-4 mb-2 card-title luxury-card-title" style="margin:0;">Madagascar Classic
                                Collection</p>
                            <p class="text_secondaire">
                                Two exclusive properties, a tented camp with seven fully-outfitted rooms in the heart of
                                southern Madagascar’s spiny forest, and Manafiafy Beach & Rainforest Lodge, a barefoot
                                luxury lodge with five rooms tucked into a secluded and serene bay on the southeastern
                                shores of Madagascar.
                            </p>
                            <div style="font-family:'Geometria';">
                                <div class="font-brandon-grotesque-light mb-4 for-more-info font-italic">Click on
                                    attraction below for more info</div>

                                <div class=" font-geometria-light click-below mb-2">
                                    <a class="font-color-brown noHover" data-toggle="collapse" href="#collapse0">+
                                        Mandrare River Camp</a>
                                </div>
                                <div class="collapse" id="collapse0">
                                    <p class="pl-2 ml-2 description">
                                        The camp's off the beaten path location, in the remote south of Madagascar,
                                        provides exclusive access to one of world’s most unique ecosystems. Experience
                                        this rare and important environment up close and immerse yourself in the
                                        biological and cultural diversity of Madagascar. The charming tents combine
                                        authentic bush flair with the comfort of high-end accommodation.
                                    </p>
                                </div>

                                <div class=" font-geometria-light click-below mb-2">
                                    <a class="font-color-brown noHover" data-toggle="collapse" href="#collapse1">+
                                        Manafiafy Beach & Rainforest Lodge</a>
                                </div>
                                <div class="collapse" id="collapse1">
                                    <p class="pl-2 ml-2 description">
                                        With sparkling blue seas, verdant rainforests, and abundant wildlife, this
                                        intimate lodge offers you your choice of serenity or adventure. The Lodge sits
                                        nestled into a forest-fringed cove on a tranquil stretch of white sand beaches
                                        rarely seen by anyone other than the local fishermen that have lived here for
                                        generations. Only five luxury thatched bungalows offering a private terrace just
                                        inches from the sea.
                                    </p>
                                </div>

                                <div class="text-right" style="font-family:'Geometria';">
                                    <style>
                                        .kl {
                                            box-shadow: none;
                                        }
                                    </style>
                                    <button type="button" data-toggle="modal" data-target="#modal" class="noShadow brown-color kl text-white btn-rounded btn btn-sm">BOOK</i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div data-index="4" class="d-none card luxury-card dadamanga-special-card">
                        <img style="border-radius:0;" src="./assets/img/luxury/masoala.jpg" class="card-img-top" alt="...">
                        <div class="">
                            <p class="mt-4 mb-2 card-title luxury-card-title" style="margin:0;">Masoala Forest Lodge</p>
                            <p class="text_secondaire">
                                An Untouched Rainforest Peninsula - The spectacular rainforest covered peninsula on
                                Madagascar’s northeast coast forms the backdrop for Masoala Forest Lodge – a luxurious
                                outpost lost in time and nature… A place to relax explore and connect with the natural
                                world in all its primordial splendor.
                            </p>
                            <div style="font-family:'Geometria';">
                                <div class="text-right" style="font-family:'Geometria';">
                                    <style>
                                        .kl {
                                            box-shadow: none;
                                        }
                                    </style>
                                    <button type="button" data-toggle="modal" data-target="#modal" class="noShadow brown-color kl text-white btn-rounded btn btn-sm">BOOK</i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div5 row title_text text-center mb-3">
                <div class="col-md-12">
                    <p class="pb-2">PRIVATE PLANE & HELICOPTER TRAVEL</p>
                </div>
            </div>
            <div class="container mb-5">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="text_secondaire">
                            Some of the most exclusive destinations can only be reached by private aircraft, normally
                            included as part of the package. For those of our clients who want to make their journey
                            more
                            private and exclusive, we can arrange private aircraft to many destinations in Madagascar.
                            Imagine a private flight over the Tsingy de Bemaraha, descending to hike the Tsingy, then to
                            Morondava to wander on the iconic Avenue of Baobabs, and finally south to witness the
                            spectacles
                            of the Isalo National Park. We can arrange exclusive private charters for from one to around
                            twelve people, or more, in multiple aircraft, with ground services included to the standard
                            you
                            request at each stop. Please ask us.
                        </div>
                    </div>
                    <div class="mr-md-6 col-md-6 plane-mother plane mt-2">
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("components/followus.php"); ?>
        <?php $this->load->view("components/footer.php"); ?>
    </div>
    <script type="text/javascript">
        var baseUrl = '<?= base_url() ?>';
    </script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.1.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/galleria-1.4.2.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/galleria-themes/galleria.reis.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcS0soUAAAAADENjhERzn54gxfmOHPi4jepIVmB"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/page/luxury.js"></script>
    <?php $jquery_already_included = true; ?>
    <?php $this->load->view("components/common-scripts.php") ?>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/global.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <?php $this->load->view("components/modal_msg.php"); ?>
</body>


</html>