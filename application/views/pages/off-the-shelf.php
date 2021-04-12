<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->load->view("components/common-css.php"); ?>
    <link href="<?= base_url() ?>assets/css/page/off-the-shelf.css?v=0.0.2" rel="stylesheet">
    <title>Dadamanga | OFF THE SHELF</title>
</head>
<?php $this->load->view("components/navbar.php"); ?>
<?php $this->load->view("components/sidenav.php"); ?>

<body>
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
                <?php /*foreach ($trips as $trip) { ?>
                    <div class="col-md-3">
                        <div class="card mb-5">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img src="<?= $trip->getImg() ?>" class="card-img-top trip-card-img" alt="..." />
                                <!-- <img class="card-img-top trip-card-img" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"> -->
                                <a href="#!" data-toggle="modal" data-target="#trip<?= $trip->getId() ?>">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="trip-card-title"><?= $trip->getName() ?></div>
                                <div class="trip-card-price-from">Price From</div>
                                <div class="trip-card-price"><span class="currency"><?= $trip->getCurrency() ?></span><span class="price"><?= $trip->getPrice() ?></span></div>
                            </div>

                            <a href="#!" class="btn trip-card-book-btn" id="trip-btn-<?= $trip->getId(); ?>" onclick="bookTrip('<?= $i; ?>')">BOOK NOW</a>
                        </div>

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
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Add To Cart <i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php } */ ?>
                <?php foreach ($trips as $trip) { ?>
                    <div class="col-xl-4 col-lg-6 col-md-12 mb-5">
                        <div class="card trip-card">
                            <img src="<?= $trip->getImg() ?>" class="card-img-top trip-card-img" alt="<?= $trip->getName() ?>" />
                            <div class="card-body">
                                <h5 class="card-title trip-card-title"><?= $trip->getName() ?></h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item trip-card-det"><span class="mr-2"><i class="far fa-clock"></i></span> <span>1 day excursion</span></li>
                                    <li class="list-group-item trip-card-det"><span class="mr-2"><i class="far fa-times-circle"></i></span> <span>free cancellation</span></li>
                                    <li class="list-group-item trip-card-det"><span class="mr-2"><i class="far fa-comment-alt"></i></span> <span>english</span></li>
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent trip-card-price-container">
                                <span class="trip-card-price-from">from</span> <span class="trip-card-price"><?= $trip->getPrice() ?> <?= $trip->getCurrency() ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row justify-content-center pagination">
                <div class="pagination-chevron"><i class="fas fa-chevron-left"></i></div>
                <div class="pagination-number">
                    <span class="pagination-active">1</span>
                    <span>2</span>
                    <span>3</span>
                </div>
                <div class="pagination-chevron"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>


        <?php $this->load->view("components/followus.php") ?>
        <?php $this->load->view("components/footer.php"); ?>
        <?php $this->load->view("components/common-scripts.php") ?>

        <script type="text/javascript" src="<?= base_url() ?>assets/js/global.js"></script>
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
            function bookTrip(index) {
                let trips = getCookie('trips');
                if (trips == null)
                    trips = new Array();
                let trip = (<?= json_encode($trips); ?>)[index];
                if (trips.filter(function(t) {
                        return t._id == trip._id
                    }).length > 0)
                    return;
                trips.push(trip);
                createCookie('trips', trips);
                setCartNumber();
            }
        </script>
    </div>
</body>

</html>