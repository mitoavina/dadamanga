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
    <link href="<?= base_url() ?>assets/css/page/adventure.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/jquery-ui.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Dadamanga | Create Your Adventure</title>
</head>
<?php $this->load->view('components/navbar'); ?>
<?php $this->load->view("components/sidenav"); ?>

<body>
    <div style="background-image:url( <?= base_url() . 'assets/img/adventure/jumbotron.jpg' ?>)" class="jumbotron flex-column flex-center">
        <div class="text">
            <h1 class="text-white">CREATE YOUR<span class="font-weight-bold"> ADVENTURE</span></h1>
        </div>
    </div>
    <!--		MODAL ADVENTURE		-->
    <div class="modal fade" id="adventure-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="adventure-modal-pages">
                    <div class="modal-header">
                        <h5 class="modal-title" id="adventure-modal-title">THE ADVENTURE BEGINS..</h5>
                        <div class="dot-content">
                            <span class="dot" onclick="currentSlideAdv(1)"></span>
                            <span class="dot" onclick="currentSlideAdv(2)"></span>
                            <span class="dot" onclick="currentSlideAdv(3)"></span>
                            <span class="dot" onclick="currentSlideAdv(4)"></span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="adventure-modal-body-header row justify-content-center">
                            <div class="col-lg-8 text-center">
                                It is not necessary to use this form but if you can give us this information in an email it really helps speed up the itinerary development process
                            </div>
                        </div>
                        <form id="adventure-form" class="adventure-form">
                            <div class="form-row fade">
                                <div class="form-group col-lg-4 col-md-6">
                                    <label>FULL NAME*</label>
                                    <input type="text" class="form-control form-input" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label>PHONE*</label>
                                    <input type="text" class="form-control form-input" name="phone" placeholder="Your Number">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label>EMAIL*</label>
                                    <input type="email" class="form-control form-input" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label>N° OF ADULTS</label>
                                    <input type="text" class="form-control form-input" name="noAdult" placeholder="Write">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label>N° OF CHILDREN / AGES</label>
                                    <input type="text" class="form-control form-input" name="noChildAges" placeholder="Write">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label>ROOM CONFIGURATION</label>
                                    <select class="form-control form-input" name="room">
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Twin">Twin</option>
                                        <option value="Family">Family room</option>
                                        <option value="Separate">Separate room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row fade">
                                <div class="form-group col-lg-4 offset-lg-1">
                                    <label>NATIONALITY /CONTRY OF RESIDENCE</label>
                                    <select class="form-control form-input" name="nationality">
                                        <option value="" disabled selected>Select</option>
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
                                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
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
                                <div class="form-group col-lg-4 offset-lg-2">
                                    <label>APPROXIMATE DATES OF TRAVEL</label>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control form-input" id="arrive" name="arrive" placeholder="Arrive">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control form-input" id="depart" name="depart" placeholder="Depart">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 offset-lg-1">
                                    <label>PARTLY-GUIDED or FULLY GUIDED?</label>
                                    <select class="form-control form-input" name="guided">
                                        <option value="" disabled selected>Select</option>
                                        <option value="Partly">Partly</option>
                                        <option value="Fully">Fully</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4 offset-lg-2">
                                    <label>ANY SPECIAL FOOD REQUIREMENTS </label>
                                    <input type="text" class="form-control form-input" name="food" placeholder="Write">
                                </div>
                            </div>
                            <div class="form-row fade">
                                <div class="form-group col-lg-5 offset-lg-1">
                                    <label>CAN YOU MANAGE LONG JOURNEY BY ROAD?</label>
                                    <input type="text" class="form-control form-input" name="journey" placeholder="Yes / No / Comments">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label>CAN YOU EXLAIN YOUR LEVEL OF FITNESS?</label>
                                    <input type="text" class="form-control form-input" name="fitness" placeholder="Write">
                                </div>
                                <div class="form-group col-lg-5 offset-lg-1">
                                    <label>ANY DISABILITY / ACCESSIBILITY REQUIREMENT?</label>
                                    <input type="text" class="form-control form-input" name="access" placeholder="Yes / No / Comments">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label>ANYTHING ELSE YOU WANT TO TELL US?</label>
                                    <input type="text" class="form-control form-input" name="other" placeholder="Write">
                                </div>
                            </div>
                            <div class="form-row your-adventure-contents justify-content-center">
                                <div id="adventure-modal-destination" class="col-lg-5 your-adventure-content offset-lg-1">
                                    <div class="your-adventure-sub-title">Destinations</div>
                                </div>
                                <div id="adventure-modal-park" class="col-lg-5 your-adventure-content">
                                    <div class="your-adventure-sub-title">Parks</div>
                                </div>
                                <div id="adventure-modal-experience" class="col-lg-5 your-adventure-content offset-lg-1">
                                    <div class="your-adventure-sub-title">Experiences</div>
                                </div>
                                <div id="adventure-modal-wildlife" class="col-lg-5 your-adventure-content">
                                    <div class="your-adventure-sub-title">Wildlife</div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="adventure-btn-left col">
                            <button class="btn adventure-btn-change" data-dismiss="modal">Change my adventure</button>
                        </div>
                        <div class="adventure-btn-right col">
                            <button class="btn adventure-btn-previous" onclick="slideAdvTo(-1)">Previous</button>
                            <button class="btn adventure-btn-next" onclick="slideAdvTo(1)">Next</button>
                            <button type="submit" form="adventure-form" id="adventure-btn-send" class="btn adventure-btn-send">Send</button>
                        </div>
                        <div id="mailSpinner" class="d-none spinner-border text-light spinner-border-sm" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class=" div1 body-index">
        <nav id="animated-nav" class="text-center navbar">
            <p><a class="lien1">OVERVIEW</a> | <a class="lien2">DESIGN YOUR OWN ADVENTURE</a> | <a class="lien3">DESTINATIONS</a> </p>
            <a class="navbar-brand" href="<?= base_url() . "home" ?>">
                <img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
        </nav>
        <div class="container-fluid content-template">
            <div class="row">
                <div class="col-md-8 offset-md-2 pt-5 pb-5 text_header">
                    <p class="text-center">
                        Design your own custom itinerary by simply selecting the specific part of Madagascar or park you would like to visit, the wildlife you are interested in, and the adventure you would like to experience.
                        <br>
                        When you are done, click on the 'Create my Adventure' button, fill in your details then we can tailor an itinerary to suit your needs. Or contact us directly to discuss our destinations.
                    </p>
                </div>
            </div>
            <div class="container pb-4 mt-3">
                <div class="row">
                    <div class="col-md-6 text_secondaire">
                        <p>
                            We like to collect as much information possible to assist in making your Madagascar safari the best experience possible.
                        </p>
                        <p>
                            Some points to consider whilst planning your trip:
                        </p>
                        <p>
                            It is useful for us to understand the style and level of trip you would prefer, because we will always aim for a comfortable mid-range as our standard, but, if you want non-stop luxury, or a few days or spoiling, please let us know.
                        </p>
                    </div>
                    <div class="col-md-6 text_secondaire">
                        <p>
                            We realize budget and time play a big factor in planning your adventure so, the more specific the information you give us, the more accurate we can be, first time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 		COLLAPSE -->
        <div class="container-fluid your-adventure collapse" id="adventure-collapse">
            <div class="row justify-content-center">
                <div class="your-adventure-title">YOUR ADVENTURE</div>
            </div>
            <div class="row your-adventure-contents justify-content-center">
                <div id="adventure-destination" class="col-lg-3 your-adventure-content">
                    <div class="your-adventure-sub-title">Destinations</div>
                </div>
                <div id="adventure-park" class="col-lg-3 your-adventure-content">
                    <div class="your-adventure-sub-title">Parks</div>
                </div>
                <div id="adventure-experience" class="col-lg-3 your-adventure-content">
                    <div class="your-adventure-sub-title">Experiences</div>
                </div>
                <div id="adventure-wildlife" class="col-lg-3 your-adventure-content">
                    <div class="your-adventure-sub-title">Wildlife</div>
                </div>
            </div>
            <div class="create-adventure-container d-flex justify-content-center">
                <button type="button" class="show-adventure-btn" data-toggle="modal" data-target="#adventure-modal">CREATE MY ADVENTURE <span>></span></button>
            </div>
        </div>
        <div class="div2 advnenture-container">
            <div class="adventure-itineraries container-fluid ">
                <div class="itinerary-menu-mobile text-center">
                    <h5>WHAT INTERESTS YOU?</h5>
                    <ul class="list-group flex-row justify-content-center">
                        <li class="list-group-item side-menu-style-active" data-index="0"><a>Destinations</a></li>
                        <li class="list-group-item" data-index="1"><a>Parks</a></li>
                        <li class="list-group-item" data-index="2"><a>Experiences</a></li>
                        <li class="list-group-item" data-index="3"><a>Wildlife</a></li>
                    </ul>
                </div>
                <div class="show-adventure-container d-flex justify-content-center">
                    <button type="button" class="show-adventure-btn" data-toggle="collapse" data-target="#adventure-collapse" aria-expanded="false" aria-controls="adventure-collapse">SHOW MY ADVENTURE <span>></span></button>
                </div>
                <div class="itineraries-details row px-md-5">
                    <div class="itinerary-menu col-lg-3 col-sm-4 pr-5">
                        <h5>WHAT INTERESTS YOU?</h5>
                        <ul class="list-group">
                            <li class="list-group-item side-menu-style side-menu-style-active" data-index="0"><a class="itinerary-menu-destination">Destinations<span></span></a></li>
                            <li class="list-group-item side-menu-style" data-index="1"><a class="itinerary-menu-park">Parks<span></span></a></li>
                            <li class="list-group-item side-menu-style" data-index="2"><a class="itinerary-menu-experience">Experiences<span></span></a></li>
                            <li class="list-group-item side-menu-style" data-index="3"><a class="itinerary-menu-wildlife">Wildlife<span></span></a></li>
                        </ul>
                        <div class="create-adventure-container d-flex justify-content-center">
                            <button type="button" class="show-adventure-btn" data-toggle="modal" data-target="#adventure-modal">CREATE MY ADVENTURE <span>></span></button>
                        </div>
                    </div>
                    <div class="dadamanga-special-card-container itineraries col-lg-8 col-sm-8 col-xs-12">
                        <div data-index="0" class="row active">
                            <form class="form-inline col-lg-12 pb-5">
                                <input type="search" class="form-control col-xl-3 offset-xl-8 col-lg-6 offset-lg-5 col-10 adventure-search adventure-destination-search" placeholder="Search">
                                <label class="col-xl-1 col-lg-1 col-2 adventure-search-label"><i class="fas fa-search"></i></label>
                            </form>
                            <?php foreach ($destinationModel as $item) { ?>
                                <div class="itinerary itinerary-destination col-sm-6 col-6" data-text="<?= $item->TITLE ?>">
                                    <div class="card">
                                        <img class="card-img-top" src="<?= base_url($item->IMAGE) ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="itinerary-title"><?= $item->TITLE ?></div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="add-itinerary-btn" value="<?= 'destination' . $item->IDDESTINATION; ?>" data-toggle="collapse" data-target="#adventure-collapse" aria-expanded="false" aria-controls="adventure-collapse">ADD TO ITINERARY <span><i class="fas fa-plus"></i></span></button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div data-index="1" class="row d-none">
                            <form class="form-inline col-lg-12 pb-5">
                                <input type="search" class="form-control col-xl-3 offset-xl-8 col-lg-6 offset-lg-5 col-10 adventure-search adventure-park-search" placeholder="Search">
                                <label class="col-xl-1 col-lg-1 col-2 adventure-search-label"><i class="fas fa-search"></i></label>
                            </form>
                            <?php foreach ($parkModel as $item) { ?>
                                <div class="itinerary itinerary-park col-sm-6 col-6" data-text="<?= $item->TITLE ?>">
                                    <div class="card">
                                        <img class="card-img-top" src="<?= base_url($item->IMAGE) ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="itinerary-title"><?= $item->TITLE ?></div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="add-itinerary-btn" value="<?= 'park' . $item->IDPARK; ?>">ADD TO ITINERARY <span><i class="fas fa-plus"></i></span></button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div data-index="2" class="row d-none">
                            <form class="form-inline col-lg-12 pb-5">
                                <input type="search" class="form-control col-xl-3 offset-xl-8 col-lg-6 offset-lg-5 col-10 adventure-search adventure-experience-search" placeholder="Search">
                                <label class="col-xl-1 col-lg-1 col-2 adventure-search-label"><i class="fas fa-search"></i></label>
                            </form>
                            <?php foreach ($experienceModel as $item) { ?>
                                <div class="itinerary itinerary-experience col-sm-6 col-6" data-text="<?= $item->TITLE ?>">
                                    <div class="card">
                                        <img class="card-img-top" src="<?= base_url($item->IMAGE) ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="itinerary-title"><?= $item->TITLE ?></div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="add-itinerary-btn" value="<?= 'experience' . $item->IDEXPERIENCE; ?>">ADD TO ITINERARY <span><i class="fas fa-plus"></i></span></button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div data-index="3" class="row d-none">
                            <form class="form-inline col-lg-12 pb-5">
                                <input type="search" class="form-control col-xl-3 offset-xl-8 col-lg-6 offset-lg-5 col-10 adventure-search adventure-wildlife-search" placeholder="Search">
                                <label class="col-xl-1 col-lg-1 col-2 adventure-search-label"><i class="fas fa-search"></i></label>
                            </form>
                            <?php foreach ($wildlifeModel as $item) { ?>
                                <div class="itinerary itinerary-wildlife col-sm-6 col-6" data-text="<?= $item->TITLE ?>">
                                    <div class="card">
                                        <img class="card-img-top" src="<?= base_url($item->IMAGE) ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="itinerary-title"><?= $item->TITLE ?></div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="add-itinerary-btn" value="<?= 'wildlife' . $item->IDWILDLIFE; ?>">ADD TO ITINERARY <span><i class="fas fa-plus"></i></span></button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="adventure-bottom container-fluid">
            <div class="row adventure-bottom-content">
                <div style="margin-bottom: 100px;" class="adventure-current col-lg-10 col-10 offset-lg-1 offset-1">
                    <div class="title text-center">OUR CURRENT ADVENTURES</div>
                    <div class="adventure-current-container overlay-marron-container">
                        <div class="view-adventure-current col-lg-12">
                            <img src="<?= base_url() ?>/assets/img/adventure/current-adventure.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="to-hide pic-title">VIEW OUR CURRENT ADVENTURE</div>
                        <div class="overlay-with-padding text-center">
                            <a href="<?= base_url('shelf') ?>" class="d-none overlay-marron white-text">
                                <div>
                                    <div class="mb-3">« Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minimeiusmod tempor incididunt ut labore etdolore magna aliqua.. Ut enim ad minim</div>
                                    <div>FIND OUT MORE <i class="fas fa-long-arrow-alt-right"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="div3 w-100">
                    <?php $this->load->view("components/about_destinations"); ?>
                </div>
            </div>
        </div>
        <?php $this->load->view("components/followus.php"); ?>
        <?php $this->load->view("components/footer.php"); ?>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.1.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/isotope.pkgd.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/isotope.pkgd.min.js"></script>
        <?php $this->load->view("components/common-scripts.php", array('jquery_already_included' => true)); ?>
        <script type="text/javascript">
            var destinations = JSON.parse('<?= json_encode($destinationModel); ?>');
            var parks = JSON.parse('<?= json_encode($parkModel); ?>');
            var experiences = JSON.parse('<?= json_encode($experienceModel); ?>');
            var wildlifes = JSON.parse('<?= json_encode($wildlifeModel); ?>');
            var baseUrl = '<?= base_url() ?>';
        </script>
        <script src="https://www.google.com/recaptcha/api.js?render=6LcS0soUAAAAADENjhERzn54gxfmOHPi4jepIVmB"></script>
        <!-- <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.cookie.min.js"></script> -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/global.js"></script>
        <!-- <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        <?php $this->load->view("components/modal_msg.php"); ?> -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/page/adventure.js"></script>
    </div>
</body>

</html>