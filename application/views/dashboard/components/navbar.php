<div class="sidebar">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                pages
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item<?= $active == 'home' ? ' active' : '' ?>">
                <a class="nav-link" href="dashboard">
                    <i class="nc-icon nc-align-center"></i>
                    <p>home</p>
                </a>
            </li>
            <li class="nav-item<?= $active == 'about' ? ' active' : '' ?>">
                <a class="nav-link" href="dash_about">
                    <i class="nc-icon nc-circle"></i>
                    <p>about</p>
                </a>
            </li>
            <li class="nav-item<?= $active == 'park' ? ' active' : '' ?>">
                <a class="nav-link " href="dash_park">
                    <i class="nc-icon nc-settings-tool-66"></i>
                    <p>park</p>
                </a>
            </li>
            <li class="nav-item<?= $active == 'experience' ? ' active' : '' ?>">
                <a class="nav-link" href="dash_experience">
                    <i class="nc-icon nc-globe-2"></i>
                    <p>experience</p>
                </a>
            </li>
            <li class="nav-item<?= $active == 'wildlife' ? ' active' : '' ?>">
                <a class="nav-link" href="dash_wildlife">
                    <i class="nc-icon nc-notes"></i>
                    <p>wildlife</p>
                </a>
            </li>
            <li class="nav-item<?= $active == 'blog' ? ' active' : '' ?>">
                <a class="nav-link" href="dash_blog">
                    <i class="nc-icon nc-single-02"></i>
                    <p>blog</p>
                </a>
            </li>
            <li class="nav-item<?= $active == 'travefy' ? ' active' : '' ?>">
                <a class="nav-link" href="dash_travefy">
                    <i class="nc-icon nc-planet"></i>
                    <p>travefy</p>
                </a>
            </li>
        </ul>
    </div>
</div>