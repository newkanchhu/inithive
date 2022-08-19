<nav class="main-nav shadow-sm">
    <section class="bg-light main-nav__top">
        <div class="container top-menu">
            <div class="row">
                <div class="col">
                    <ul>
                        <li class="d-flex">
                            <input type="text" name="search" class="search-input">
                            <a class="search-button"><i class="fa fa-search"></i></a>
                        </li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="#">Login <i class="fa fa-lock"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="main-nav__main">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-1">
                    <a title="Inithive" href="index.php">
                        <img class="lozad main-nav__logo" data-src="images/logo.png">
                    </a>
                </div>
                <div class="col-5 col-md-9 justify-content-sm-end d-flex">
                    <button type="button" class="btn d-xl-none main-nav__burger" title="Open Menu">
                        <em class="fas fa-bars"></em>
                    </button>
                    <div class="main-nav__wrapper">
                        <button type="button" class="btn d-xl-none main-nav__burger" title="Close menu">
                            <em class="fa fa-times"></em>
                        </button>
                        <ul>
                            <li><a href="service.php">Multi-Cloud</a></li>
                            <li class="has-dropdown"><a href="#">App Platform <i class="fa fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">menu 1</a></li>
                                    <li class="has-sub-dropdown">
                                        <a href="#">menu 2</a>
                                        <ul>
                                            <li><a href="#">menu 2.1</a></li>
                                            <li><a href="#">menu 2.2</a></li>
                                            <li><a href="#">menu 2.3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">menu 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Cloud & Edge Infrastructure</a></li>
                            <li><a href="#">Anywhere Workspace</a></li>
                            <li><a href="#">Security & Networking</a></li>
                            <li><a href="#">Partners</a></li>
                            <!--<li class="align-self-center ps-xl-4"><a href="#" class="btn btn-primary">Get a Quote</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-3 col-md-2 container-rightbtn">
                    <a aria-label="" class="btn btn-primary" href="" title="" target="_self">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>
</nav>
