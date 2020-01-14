<div class="row mb-5">
    <div id="select-below" class="col-md-12">LEARN MORE ABOUT DESTINATIONS</div>
</div>
<div style="padding-bottom: 64px"lass="container">
    <div id="select-below-images-container" class="row">
        <?php foreach ($destinationModel as $item) { ?>
            <div class="col-md-4 col-6 overlay-marron-container">
                <div class="col-md-12 flex-center" style="background-image: url(<?= base_url($item->IMAGE) ?>);">
                    <a href="<?= destination_url($item->NAME) ?>" class="to-hide text-uppercase white-link"><?= $item->NAME ?></a>
                </div>
                <div class="overlay-with-padding">
                    <a href="<?= destination_url($item->NAME) ?>" class="d-none overlay-marron white-text">
                        <div style="font-size: 0.8em">
                            <div class="mb-3 text-uppercase font-weight-bold"><?= $item->NAME ?></div>
                            <div>FIND OUT MORE <i class="fas fa-long-arrow-alt-right"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>