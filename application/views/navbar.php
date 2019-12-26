<link rel="icon" href="<?= base_url() ?>icon.ico" />
<header>
    <nav style="position:absolute;margin-top:-30px;" id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand bleu" href="<?= base_url()."home" ?>">
            <img src="<?= base_url() ?>assets/img/svg/logo.svg" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse  navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto my-auto " style="width:100%;">
                <li class="nav-item mx-auto">
                    <a class=" nav-link" href="<?= base_url()."about" ?>">About</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" href="<?= base_url()."destinations" ?>">Destinations</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class=" nav-link" href="<?= base_url()."shelf" ?>">Off the Shelf</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" href="<?= base_url()."adventure" ?>">Create an Adventure</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class=" nav-link" href="<?= base_url()."luxury" ?>">Explore Luxury</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" href="<?= base_url()."knowledges" ?>">Knowledge of the Place</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class=" nav-link" href="<?= base_url()."contact" ?>">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
