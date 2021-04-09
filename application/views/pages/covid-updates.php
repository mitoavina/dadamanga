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
    <link href="<?= base_url() ?>assets/css/page/covid-updates.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/global.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() ?>assets/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Dadamanga | Covid Updates</title>
</head>
<?php $this->load->view('components/navbar'); ?>
<?php $this->load->view("components/sidenav"); ?>

<body>
    <div id="jumbotron " class="jumbotron jumbotron-covid flex-column flex-center">
        <div class="text text-white">
            <!-- <h1 class="text-center"><span>CONTACT DADAMANGA<span></h1> -->
        </div>
    </div>
    <div class="container-fluid covid-body">
        <div class="row justify-content-center">
            <div class="card text-center col-md-8 card-top">
                <div class="card-body">
                    <h5 class="card-title">Navigating through Covid-19</h5>
                    <p class="card-text">
                        Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                    </p>
                    <p class="card-text">
                        Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                    </p>
                    <p class="card-text">
                        Also, you will see FAQs on your bookings and the possibility of pushing dates of travel.
                    </p>
                </div>
            </div>
            <!-- <div class="col-md-1 bg-primary">a</div> -->
        </div>
        <div class="row justify-content-center cantact-sub-title mb-5">
            <span>stay updated</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-6 vlog-img-container">
                            <img src="<?= base_url() ?>assets/img/covid/vlog-1.png" alt="vlog-1" class="vlog-img" />
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <p class="card-text">Last updated 3 mins ago</p>
                                <h5 class="card-title vlog-title">General Hygiene Rules at the Office</h5>
                                <p class="card-text">
                                    Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                                    Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                                </p>
                                <a href="#" class="btn vlog-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 mb-5">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-6 vlog-img-container">
                            <img src="<?= base_url() ?>assets/img/covid/vlog-2.png" alt="vlog-2" class="vlog-img" />
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <p class="card-text">Last updated 3 mins ago</p>
                                <h5 class="card-title vlog-title">Malagasy Government Announcement on Joining COVAX</h5>
                                <p class="card-text">
                                    Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                                    Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                                </p>
                                <a href="#" class="btn vlog-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 mb-5">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-6 vlog-img-container">
                            <img src="<?= base_url() ?>assets/img/covid/vlog-3.png" alt="vlog-3" class="vlog-img" />
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <p class="card-text">Last updated 3 mins ago</p>
                                <h5 class="card-title vlog-title">Dadamanga Staff are Participating in Miatrika COVID Training Programme</h5>
                                <p class="card-text">
                                    Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients.
                                    Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.
                                </p>
                                <a href="#" class="btn vlog-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

        <div class="container-fluid faq-container">
            <div class="row justify-content-center">
                <h2 class="faq-subtitle">frequently asked questions</h2>
            </div>
            <div class="row justify-content-center faq-list-container">
                <div class="col-md-10 faq-list">
                    <div class="card">
                        <?php $i = 0; ?>
                        <?php foreach ($faqList as $faq) { ?>
                            <div class="faq-item">
                                <div class="card-header">
                                    <h5><?= $faq->titre; ?></h5>
                                    <span class="faq-chevron" onclick="displayFaq(this,<?= $i; ?>)"><i class="fas fa-chevron-down"></i></span>
                                </div>
                                <div data-index="<?= $i; ?>" class="card-body faq-content">
                                    <p class="card-text">
                                        <?= $faq->contenu; ?>
                                    </p>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function displayFaq(elParent, index) {
            const el = document.querySelector(`[data-index="${index}"]`);
            const cssClass = 'faq-item-show';
            if (el.classList.contains(cssClass)) {
                el.classList.remove(cssClass);
            } else {
                el.classList.add(cssClass);
            }
            const elChevron = elParent.firstElementChild;
            if (elChevron.classList.contains('fa-chevron-down')) {
                elChevron.classList.remove('fa-chevron-down');
                elChevron.classList.add('fa-chevron-up');
            } else {
                elChevron.classList.remove('fa-chevron-up');
                elChevron.classList.add('fa-chevron-down');
            }
        }
    </script>
    <?php $this->load->view("components/followus.php"); ?>
    <?php $this->load->view("components/footer.php"); ?>
    <?php $this->load->view("components/common-scripts.php"); ?>
</body>

</html>