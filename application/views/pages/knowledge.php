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
    <link href="<?= base_url() ?>assets/css/page/knowledge.css?v=0.0.1" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Dadamanga | Knowledge</title>
</head>
<?php $this->load->view("components/navbar.php"); ?>
<?php $this->load->view("components/sidenav.php"); ?>

<body>
    <div style="background-image:url( <?= base_url() . 'assets/img/knowledges/jumbotron.jpg' ?>)" id="jumbotron" class="jumbotron-knowledge jumbotron flex-column flex-center">
        <div class="text text-white">
            <h1 class="text-center"><span>KNOWLEDGE OF THE PLACE<span></h1>
        </div>
    </div>
    <div class="body-index">
        <nav id="animated-nav" class=" text-center navbar">
            <p><a class="lien1">MADAGASCAR</a> | <a class="lien2">INTERESTING FACTS</a> | <a class="lien3">DOWNLOADS</a>
            </p>
            <a class="navbar-brand" href="<?= base_url() . "home" ?>">
                <img src="<?= base_url() ?>assets/img/png/Logo_mini.png" alt="logo">
            </a>
            <button onclick="openNav()" style="font-size:32px;" class="navbar-toggler" type="button"><span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span></button>
        </nav>
        <div class=" div1 container-fluid content-knowledge">
            <div class="row">
                <div class="col-md-8 offset-md-2 pt-5 pb-5 text_header">
                    <p class="text-center">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor incididunt ut
                        labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud exercitation ullamo laboris nisi
                        ut aliquip ex ea
                    </p>
                </div>
            </div>
            <div class="container pb-4 mt-3">
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
            </div>
        </div>
        <div style="position: relative; bottom:50px" id="content"></div>
        <div id="knowledge-container" class="container-fluid">
            <div class="knowledge-sub-container">
                <div class="knowledge-list container-fluid">
                    <div class="itinerary-menu-mobile text-center">
                        <h5>WHAT INTERESTS YOU?</h5>
                        <ul>
                            <li><a href="">Madagascar</a></li>
                            <li><a href="">Baobab</a></li>
                            <li><a href="">Tsingy</a></li>
                            <li><a href="">Beaches</a></li>
                            <li><a href="">Wildlife</a></li>
                            <li><a href="">Culture</a></li>
                            <li><a href="">Sports</a></li>
                        </ul>
                    </div>
                    <div class="knowledge-title d-flex justify-content-center">
                        <p><?= $knowledge ?></p>
                    </div>
                    <div class="itineraries-details row px-md-5">
                        <div class="itinerary-menu col-lg-3 col-sm-4 pr-5">
                            <h5>WHAT INTERESTS YOU?</h5>
                            <ul class="list-group knowledge-menu">
                                <li class="list-group-item side-menu-style" data-index="madagascar"><a>Madagascar</a>
                                </li>
                                <li class="list-group-item side-menu-style" data-index="baobab"><a>Baobab</a></li>
                                <li class="list-group-item side-menu-style" data-index="tsingy"><a>Tsingy</a></li>
                                <li class="list-group-item side-menu-style" data-index="beaches"><a>Beaches</a></li>
                                <li class="list-group-item side-menu-style" data-index="wildlife"><a>Wildlife</a></li>
                                <li class="list-group-item side-menu-style" data-index="culture"><a>Culture</a></li>
                                <li class="list-group-item side-menu-style" data-index="sports"><a>Sports</a></li>
                            </ul>
                        </div>
                        <div class="dadamanga-special-card-container knowledge-details col-lg-8 col-sm-8 col-xs-12">
                            <div data-index="madagascar" class="row d-none">
                                <div class="knowledge col-lg-6 col-sm-12">
                                    <p>Madagascar is the largest island in the Indian Ocean, and it is famous for its unique wildlife and
                                        biodiversity. With unique flora and fauna, white sandy beaches, beautiful tropical forests,
                                        delicious local cuisine and a warm and welcoming population, this place offers an unforgettable
                                        experience in a lifetime. Country of "mora-mora" (translates gently-gently), the nation and its
                                        people are indeed distinguished by their sweetness of life.</p>
                                    <p>Despite its largely westernized culture in the largest cities of the country, the Malagasy people
                                        indeed have a way of enjoying life, and they willingly share it with visitors. Thus, discovering
                                        this country cannot be done only by exploring its tourist sites. Traveling to Madagascar also
                                        means adapting and enjoying a lifestyle conducive to well-being and relaxation.</p>
                                    <p>Malagasy people are also great revelers, exceptional artists, and experts in enjoying the sweetness
                                        of life, and discovering the many entertainments associated with these personality traits is an
                                        experience not to be missed. Through the different populations of the big island, a trip to
                                        Madagascar will thus be the discovery of a wide variety of culture influenced by the African,
                                        Asian and European ancestry of its people. This cosmopolitan mixture associated with the
                                        marvelous tourist sites makes all the charm of the country</p>
                                </div>
                                <div class="knowledge col-lg-6 col-sm-12">
                                    <img src="<?= base_url() ?>/assets/img/knowledge/madagascar.png" alt="" width="100%" style="max-height:100%;">
                                </div>
                            </div>
                            <div data-index="baobab" class="row d-none">
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>The baobab is an iconic emblem of the Malagasy flora. This majestic tree is one of Madagascar's
                                                greatest treasures, as six of the eight species of baobab that exist in the world are endemic to the
                                                Red Island. Also called Reniala (mother of the forest), baobabs are not just beautiful to admire,
                                                they also produce fruit, and are important in the ecosystems to which they belong.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>While baobabs can be seen from north to south Madagascar, some stand out more than others.
                                                The most famous are undoubtedly those of the alley of the baobabs in Morondava. Emblematic
                                                landscape of the country, it is one of Madagascar's best-known tourist showcases. We can also
                                                mention the baobabs of the spiny forest south of Fort Dauphin, from Ifaty, Zombitse,
                                                Ankarafantsika and Kirindy nature reserves.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Baobab Avenue MORONDAVA</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/baobab/avenue.jpg" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Reniala Reserve IFATY</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/baobab/diego.jpg" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">DIEGO</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/baobab/reniala.jpg" alt="" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="tsingy" class="row d-none">
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>These geological curiosities are craggy limestone points resulting from phenomena that occurred
                                                millions of years ago. Offering a unique and astonishing landscape, these rock formations are
                                                present in several national parks of Madagascar. The most famous of the karst formations in the
                                                country is Tsingy de Bemaraha, in the west of the big island.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>Listed as a UNESCO World Heritage Site, admiring the landscape of this nature reserve perched
                                                on a suspension bridge is an extraordinary experience. Note that the majority of Tsingy are found
                                                in the western regions of the country, and among them we can cite the Red Tsingy of Diego and
                                                Ankarana. The first is easy to access, and just as magnificent as the second which stands out for
                                                its rich ecological and cultural heritage linked to the Antakarana people.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Bemaraha NP MORONDAVA</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/tsingy/bemaraha.jpg" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Red Tsingy DIEGO</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/tsingy/redTsingy.jpg" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Ankarana NP DIEGO</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/tsingy/ankarana.jpg" alt="" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="beaches" class="row d-none">
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Madagascar's beaches easily compete with the most beautiful beaches in the world. But the
                                                difference on the Red Island is that the majority of its resorts are untouched by mass tourism, and
                                                tranquility and relaxation are always there. Being an island, and having other small islands, it is
                                                surely not the beaches that are lacking in Madagascar.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>Water sports and other seaside activities - such as diving or whale watching - are other reasons to
                                                enjoy the turquoise waters of the Big Island. Among the unmissable beaches of Madagascar, we
                                                can first mention those of the islands of Nosy Be and Sainte Marie, without forgetting that Fort
                                                Dauphin is surrounded by endless white-sand beaches in every direction. The most famous
                                                beaches in the country are all close to all kinds of hotel facilities to enjoy a dream vacation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Ifaty & Mangily TOLIARA</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/beaches/ifaty.jpg" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Ile aux Nattes SAINTE MARIE</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/beaches/ileAuxNattes.jpg" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Nosy Tanikely NOSY BE</span>
                                            <img src="<?= base_url("assets/img/knowledge/beaches/nosyTanikely.jpg") ?>" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Emerald Sea DIEGO</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/beaches/emerald.jpg" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">Nosy Iranja NOSY BE</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/beaches/nosyBe.jpg" alt="" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="wildlife" class="row d-none">
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Madagascar is a place that arouses curiosity. Nature has evolved at its own pace and according to
                                                its own rules. As proof, about 80% of all animal and plant species found in Madagascar are
                                                endemic. This is because the island has been isolated for over 80 million years. Among the
                                                endemic species found only in the big island, we can cite the lemurs, the Fosa as well as six
                                                species of baobab. Because of its unique biodiversity - on land, in the air and in the water -
                                                Madagascar is often referred to as "the eighth continent”.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>Unfortunately, Malagasy biodiversity is greatly threatened by human activity. Despite the many
                                                conservation programs in place in the country, many species are currently endangered in
                                                Madagascar. For the most intrepid and courageous of tourists, it is possible to participate in the
                                                safeguarding of Madagascan nature during stays in the country. Many NGOs and other
                                                environmental activist organizations welcome any help we can give them with open arms.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">LEMURS</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/wildlife/lemurs.jpg" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">BIRDS</span>
                                            <img src="<?= base_url("assets/img/knowledge/wildlife/bird.jpg") ?>" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">FOSA</span>
                                            <img src="<?= base_url("assets/img/knowledge/wildlife/fosa.jpg") ?>" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">WHALES</span>
                                            <img src="<?= base_url() ?>/assets/img/knowledge/wildlife/whale.jpg" alt="" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="culture" class="row d-none">
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>The culture of the Malagasy people reflects their origins in Southeast Asia and East Africa. The
                                                influence of Arabs, Indians, British, French and Chinese settlers is also evident. Even if the
                                                Malagasy share a common culture throughout the big island, each people - depending on its
                                                region - has its own habits and customs. Sometimes a source of tension, these cultural differences
                                                are nevertheless all the charm of the Malagasy population. It is thanks to them that one can
                                                discover so much different in the many towns and villages of the island.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>If life is already very westernized in the largest cities of Madagascar, the vestiges of the country's
                                                royal and colonial past can still be admired in many tourist sites. Regarding the villages far from
                                                the big cities, these are open-air exhibitions of the ancestral and traditional way of life of some
                                                Malagasy people. Among the most notable cultural practices in the country, we can cite the
                                                “famadihana” or the turning of the dead.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>
                                                Finally, Malagasy culture is inseparable from its gastronomy, music and crafts. These are largely
                                                inspired by the country's natural resources. As for music and literary art, it is expressed in the
                                                local language: Malagasy. Reflecting Malagasy culture as a whole, the language spoken in
                                                Madagascar is the same throughout the island, but also varies in various dialects.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">THE LANGUAGE</span>
                                            <img src="<?= base_url("assets/img/knowledge/culture/language.jpg") ?>" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">THE PEOPLE</span>
                                            <img src="<?= base_url("assets/img/knowledge/culture/people.jpg") ?>" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">FAMADIHANA</span>
                                            <img src="<?= base_url("assets/img/knowledge/culture/famadihana.jpg") ?>" alt="" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-index="sports" class="row d-none">
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Madagascar is a destination of choice for water sports enthusiasts of all kinds. With its many
                                                beaches and other coastal sites, you can practice sports such as windsurfing and kitesurfing,
                                                fishing and diving. Over the years, land sport has also been greatly enriched in the country. If
                                                hiking and trekking are the sports most practiced by tourists, private companies now offer
                                                activities such as parachute jumping, paragliding, rapid descent or even mountain biking or
                                                motocross treks.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>As for more traditional sports, be aware that pétanque is the country's national sport, and a stay in
                                                Madagascar is the perfect opportunity to improve skills in the matter. In addition, large cities
                                                have sports halls and other sports clubs where it is possible to train. Whether it is tennis, golf,
                                                basketball, martial arts or football, the majority of sports are practicable in the country. Finally,
                                                when we talk about sport in Madagascar, it is important to talk about Moraingy, the traditional
                                                martial art of the country</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="knowledge col-lg-12">
                                    <div class="row">
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">TREKKING</span>
                                            <img src="<?= base_url("assets/img/knowledge/sports/trekking.jpg") ?>" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">SURFING</span>
                                            <img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">DIVING</span>
                                            <img src="<?= base_url("assets/img/knowledge/sports/diving&scubaDiving.jpg") ?>" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">KITE SURFING</span>
                                            <img src="<?= base_url("assets/img/knowledge/sports/kiteSurfing.jpg") ?>" alt="" width="100%" height="100%">
                                        </div>
                                        <div class="knowledge-pic col-lg-4 col-6">
                                            <span class="knowledge-pic-title">SPA & WELLNESS</span>
                                            <img src="<?= base_url() ?>/assets/img/blank3.png" alt="" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div2 knowledge-carousel row flex-center">
                <div class="knowledge-carousel-content col-xl-7 col-lg-7">
                    <div class="carousel-title text-center">INTERESTING FACTS</div>
                    <div id="carouselControls" class="carousel slide carousel-container" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor
                                    incididunt ut labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamo laboris nisi ut aliquip ex ea</p>
                            </div>
                            <div class="carousel-item">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do euismod tempor
                                    incididunt ut labore et dolore aliqua.. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamo laboris nisi ut aliquip ex ea</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-btn text-center">
                        <button href="#carouselControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button href="#carouselControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
            <?php $this->load->view("components/about_destinations.php") ?>
        </div>
        <?php $this->load->view("components/downloads.php"); ?>
        <?php $this->load->view("components/footer.php"); ?>
        <script type="text/javascript">
            var knowledge = '<?php echo $knowledge; ?>';
        </script>
        <?php $this->load->view("components/common-scripts.php") ?>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/page/knowledge.js"></script>

        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.cookie.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/global.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        <?php $this->load->view("components/modal_msg.php"); ?>
    </div>
</body>

</html>