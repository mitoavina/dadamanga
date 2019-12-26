<div class="learn-more-destinations col-lg-10 col-10 offset-lg-1 offset-1">
    <div class="title text-center">LEARN MORE ABOUT OUR DESTINATIONS</div>
    <div class="place-list row">
        <?php foreach ($destinationModel as $item) { ?>
            <div class="place col-lg-4 col-6 overlay-marron-container">
                <a href="<?= destination_url($item->NAME) ?>"><span style="z-index: 50" class="pic-title to-hide"><?= $item->TITLE ?></span></a>
                <div class="pic-container position-relative">
                    <div class="overlay-with-padding text-center">
                        <a href="<?= destination_url($item->NAME) ?>" class="d-none overlay-marron white-text">
                            <div>
                                <div class="mb-3 text-uppercase font-weight-bold"><?=$item->NAME ?></div>
                                <div>FIND OUT MORE <i class="fas fa-long-arrow-alt-right"></i></div>
                            </div>
                        </a>
                    </div>
                    <img src="<?= base_url($item->IMAGE) ?>" alt="" width="100%" height="100%">
                </div>
            </div>
        <?php } ?>
    </div>
</div>
