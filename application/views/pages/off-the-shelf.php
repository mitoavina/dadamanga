<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->load->view("components/common-css.php"); ?>
    <link href="<?= base_url() ?>assets/css/page/off-the-shelf.css?v=0.0.4" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/jquery-ui.css" rel="stylesheet">
    <title>Dadamanga | OFF THE SHELF</title>
</head>
<?php $this->load->view("components/navbar.php"); ?>
<?php $this->load->view("components/sidenav.php"); ?>

<body id="off-the-shelf">
    <div style="background-image:url( <?= base_url() . 'assets/img/off_the_shelf/off_the_shelf.jpg' ?>)" id="jumbotron" class="jumbotron-off text-white jumbotron flex-column flex-center">
        <div class="text">
            <h1 class="text-center"><span>OFF THE SHELF<span></h1>
        </div>
    </div>
    <div>
        <nav id="animated-nav" class=" text-center navbar">
            <a class="navbar-brand" href="<?= base_url() . "home" ?>">
                <img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
        </nav>

        <div class="container-fluid content-template">
            <div class="row">
                <div class="offset-md-3 col-md-6 pt-5 pb-5 text_header">
                    <p class="text-center">
                        This section of our website is for those of you who want quick access to tours that do not
                        include domestic air travel. These itineraries may be purchased instantly, or, you can ask us to
                        tweak them, or combine them, to suit you perfectly.
                    </p>
                </div>
            </div>

            <div class="row offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 offset-md-2 col-md-8">
                <?php $i = 0; ?>
                <?php foreach ($trips as $trip) { ?>
                    <div class="col-xl-4 col-lg-6 col-md-12 mb-5">
                        <div class="card trip-card">
                            <div class="view overlay">
                                <img src="<?= $trip->getImg() ?>" class="card-img-top trip-card-img" alt="<?= $trip->getName() ?>" />
                                <a href="#!" data-toggle="modal" data-target="#trip<?= $trip->getId() ?>">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title trip-card-title"><?= $trip->getName() ?></h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item trip-card-det"><span class="mr-2"><i class="far fa-clock"></i></span> <span><?= $trip->getDays() ?> day excursion</span></li>
                                    <li class="list-group-item trip-card-det"><span class="mr-2"><i class="far fa-times-circle"></i></span> <span>free cancellation</span></li>
                                    <li class="list-group-item trip-card-det"><span class="mr-2"><i class="far fa-comment-alt"></i></span>
                                        <span>
                                            <?php for ($j = 0; $j <  count($trip->getLanguages()); $j++) {  ?>
                                                <?= $trip->getLanguages()[$j]; ?>
                                                <?php if ($j < count($trip->getLanguages()) - 1) { ?>
                                                    <?= ', ' ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent trip-card-price-container">
                                <div class="trip-price">
                                    <span class="trip-card-price-from">from</span> <span class="trip-card-price"><?= $trip->getPrice() ?> <?= $trip->getCurrency() ?></span>
                                </div>
                                <!-- <button type="button" class="book-btn" data-toggle="modal">book</button> -->
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>

                    <!-- Modal -->
                    <div class="modal fade" id="trip<?= $trip->getId() ?>" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?= $trip->getName() ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div data-travefy-itinerary-id="<?= $trip->getId() ?>" class=" travefy-itinerary"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="close-trip-modal" data-dismiss="modal">Close</button>
                                    <button type="button" class="book-btn" data-dismiss="modal" onclick="openFormular(<?= $i ?>)">book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!--		MODAL TRIP		-->
            <div class="modal fade" id="trip-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header slide-header">
                            <h5 class="modal-title" id="slide-modal-title"></h5>
                            <div class="dot-content">
                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                    <span class="dot" onclick="currentSlide(<?= $i; ?>)"></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="modal-body slide-body">
                            <form id="slide-form" class="slides col-12">
                                <div class="form-row fade slide" id="slide-traveler-nb">
                                    <input type="hidden" value="<?= $trip->getName() ?>" name="tripName" />
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label>email*</label>
                                        <input type="email" class="form-control form-input" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label>phone*</label>
                                        <input type="text" class="form-control form-input" name="phone" placeholder="Your Number">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label>number of travelers*</label>
                                        <div class="traveler-form-inline">
                                            <input type="text" id="travelerNumber" class="form-control form-input" name="travelerNumber" value="0" disabled>
                                            <button type="button" class="btn edit-tranveler-nb" onclick="editTravelerNumber(1)"><i class="fas fa-plus"></i></button>
                                            <button type="button" class="btn edit-tranveler-nb" onclick="editTravelerNumber(-1)"><i class="fas fa-minus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row fade slide">
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
                                                <input type="text" class="form-control form-input" id="arrive" name="arrival" placeholder="Arrive">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control form-input" id="depart" name="departure" placeholder="Depart">
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
                                <div class="form-row fade slide">
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
                            </form>
                        </div>
                        <div class="modal-footer slide-footer">
                            <div class="slide-btn-left col">
                                <button class="btn slide-btn-change" data-dismiss="modal">Change my trip</button>
                            </div>
                            <div class="slide-btn-right col">
                                <button class="btn slide-btn-previous" onclick="slideTo(-1)">Previous</button>
                                <button class="btn slide-btn-next" onclick="slideTo(1)">Next</button>
                                <button type="submit" form="slide-form" id="slide-send" class="btn slide-btn-send">Send</button>
                            </div>
                            <div id="mailSpinner" class="d-none spinner-border text-light spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---->


            <div class="row justify-content-center pagination">
                <div class="pagination-chevron"><i class="fas fa-chevron-left"></i></div>
                <div class="pagination-number">
                    <a class="pagination-active">1</a>
                    <a>2</a>
                    <a>3</a>
                </div>
                <div class="pagination-chevron"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>


        <?php $this->load->view("components/followus.php") ?>
        <?php $this->load->view("components/footer.php"); ?>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.1.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui.js"></script>
        <?php $this->load->view("components/common-scripts.php", array('jquery_already_included' => true)); ?>
        <script data-version="v0" id="travefy-itinerary-embedder" type="text/javascript">
            (function() {
                function l() {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = '//travefy.com/embed/itinerary.1.0.js';
                    var e = document.getElementById('travefy-itinerary-embedder');
                    e.parentNode.insertBefore(s, e);
                }
                if (window.attachEvent) {
                    window.attachEvent('onload', l);
                } else {
                    window.addEventListener('load', l, false);
                }
            })();
        </script>
        <script type="text/javascript">
            var baseUrl = '<?= base_url() ?>';
        </script>
        <script type="text/javascript">
            let tripList = (<?= json_encode($trips); ?>);
            bookTrip = (index) => {
                let trips = getCookie('trips');
                if (trips == null)
                    trips = new Array();
                let trip = tripList[index];
                if (trips.filter(function(t) {
                        return t._id == trip._id
                    }).length > 0)
                    return;
                trips.push(trip);
                createCookie('trips', trips);
                setCartNumber();
            }
        </script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/page/shelf.js?v=0.0.2"></script>
    </div>
</body>

</html>