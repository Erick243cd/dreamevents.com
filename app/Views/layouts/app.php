<?= doctype() ?>
<html lang="<?= $lang ?>">
<!-- Afrinew soft Designer -->

<head>
    <!--=============== basic  ===============-->
    <?php
    foreach ($links->metaHeader as $meta) {
        echo $meta;
    }
    ?>

    <title><?= $links->title ?></title>
    <!--=============== css  ===============-->

    <?= link_tag('public/assets/css/reset.css') ?>
    <?= link_tag('public/assets/css/plugins.css') ?>
    <?= link_tag('public/assets/css/style.css') ?>
    <?= link_tag('public/assets/css/color.css') ?>

    <!--=============== favicons ===============-->
    <?= $links->faveicon ?>

</head>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="loader-inner">
            <div class="loader-inner-cirle"></div>
        </div>
    </div>
    <!--loader end-->
    <!-- main start  -->
    <div id="main">
        <!-- header -->
        <header class="main-header">
            <!-- logo-->
            <a href="<?= $page === 'home' ? '#' : site_url() ?>" class="logo-holder"><?= img('public/assets/images/logo.png', '', 'alt="logo"') ?></a>
            <!-- logo end-->
            <!-- header-search_btn-->
            <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Rechercher</span></div>
            <!-- header-search_btn end-->
            <!-- header opt -->
            <a href="dashboard-add-listing.html" class="add-list color-bg">Add Listing <span><i class="fal fa-layer-plus"></i></span></a>
            <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip" aria-label="Your Wishlist"><i class="fal fa-heart"></i><span class="cart-counter green-bg"></span> </div>
            <div class="show-reg-form modal-open avatar-img" data-srcav="images/avatar/3.jpg"><i class="fal fa-user"></i>Sign In</div>
            <!-- header opt end-->
            <!-- lang-wrap-->
            <div class="lang-wrap">
                <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>En</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                <ul class="lang-tooltip lang-action no-list-style">
                    <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                    <li><a href="#" data-lantext="Fr">Français</a></li>
                    <!-- <li><a href="#" data-lantext="Es">Espaol</a></li>
                    <li><a href="#" data-lantext="De">Deutsch</a></li> -->
                </ul>
            </div>
            <!-- lang-wrap end-->
            <!-- nav-button-wrap-->
            <div class="nav-button-wrap color-bg">
                <div class="nav-button">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <!-- nav-button-wrap end-->
            <!--  navigation -->
            <div class="nav-holder main-menu">
                <nav>
                    <ul class="no-list-style">
                        <li>
                            <a href="<?= $page === 'home' ? '#' : site_url() ?>" class="<?= $page === 'home' ? 'act-link' : '' ?>"><?= $links->home ?></a>
                        </li>
                        <li>
                            <a href="#" class="<?= ($page == 'listings' || $page == 'listbycategory') ? 'act-link' : '' ?>"> <?= $links->listings ?> <i class="fa fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <?php foreach ($categories as $row) : ?>
                                    <li><a href="<?= site_url("categories/$row->categorySlug") ?>" title="<?= $row->categoryName_fr ?>"><?= $row->categoryName_fr ?></a></li>
                                <?php endforeach ?>
                                <li><a href="<?= site_url("categories") ?>" title="Voir plus">Voir plus...</a></li>
                            </ul>
                            <!--second level end-->
                        </li>
                        <li>
                            <a href="<?= $page === 'news' ? '#' : site_url('news') ?>"> <?= $links->news ?></a>
                        </li>
                        <li>
                            <a href="#" class="<?= ($page == 'about' || $page == 'contact' || $page == 'profile' || $page == 'login-signin' || $page == 'dashboard') ? 'act-link' : '' ?>">Pages <i class="fa fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <!-- <li>
                                    <a href="#">Shop<i class="fa fa-caret-down"></i></a>
                                    <!--third  level  -->
                                <!-- <ul>
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-single.html">Product single</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                    </ul> -->
                                <!--third  level end-->
                                <!-- </li> -->

                                <li><a href="<?= $page === 'about' ? '#' : site_url('about') ?>"><?= $links->about ?></a></li>
                                <li><a href="<?= $page === 'contact' ? '#' : site_url('contact') ?>"><?= $links->contact ?></a></li>
                                <li><a href="<?= $page === 'profile' ? '#' : site_url('profile') ?>"><?= $links->profile ?></a></li>
                                <li><a href="<?= $page === 'login-signin' ? '#' : site_url('login-signin') ?>"><?= $links->login_signin ?></a></li>
                                <li><a href="<?= $page === 'dashboard' ? '#' : site_url('dashboard') ?>"><?= $links->dashboard ?></a></li>
                            </ul>
                            <!--second level end-->
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- navigation  end -->
            <!-- header-search_container -->
            <div class="header-search_container header-search vis-search">
                <?= form_open('search') ?>
                <div class="container small-container">
                    <div class="header-search-input-wrap fl-wrap">
                        <div class="header-search-input header-search_selectinpt ">
                            <select data-placeholder="Ville" class="chosen-select no-radius" required>
                                <option value="">Ville</option>
                                <?php foreach ($cities as $row) : ?>
                                    <option value="<?= $row->cityName_fr ?>"><?= $row->cityName_fr ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="header-search-input header-search_selectinpt ">
                            <select data-placeholder="Category" class="chosen-select no-radius">
                                <option value="all-services">Tous types</option>
                                <?php foreach ($categories as $row) : ?>
                                    <option value="<?= $row->categorySlug ?>"><?= $row->categoryName_fr ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <button class="header-search-button green-bg" type="submit"><i class="far fa-search"></i> Rechercher </button>
                    </div>
                    <div class="header-search_close color-bg"><i class="fal fa-long-arrow-up"></i></div>
                </div>
            </div>
            <?= form_close() ?>
            <!-- header-search_container  end -->
            <!-- wishlist-wrap-->
            <div class="header-modal novis_wishlist">
                <!-- header-modal-container-->
                <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                    <!--widget-posts-->
                    <div class="widget-posts  fl-wrap">
                        <ul class="no-list-style">
                            <li>
                                <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a>
                                </div>
                                <div class="widget-posts-descr">
                                    <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                                    <div class="widget-posts-descr-link"><a href="listing.html">Restaurants </a> <a href="listing.html">Cafe</a></div>
                                    <div class="widget-posts-descr-score">4.1</div>
                                    <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/2.png" alt=""></a>
                                </div>
                                <div class="widget-posts-descr">
                                    <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                                    <div class="widget-posts-descr-link"><a href="listing.html">Hotels </a> </div>
                                    <div class="widget-posts-descr-score">5.0</div>
                                    <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/3.png" alt=""></a>
                                </div>
                                <div class="widget-posts-descr">
                                    <h4><a href="listing-single.html">Rocko Band in Marquee Club</a></h4>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                    <div class="widget-posts-descr-link"><a href="listing.html">Events</a> </div>
                                    <div class="widget-posts-descr-score">4.2</div>
                                    <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/4.png" alt=""></a>
                                </div>
                                <div class="widget-posts-descr">
                                    <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                                    <div class="widget-posts-descr-link"><a href="listing.html">Fitness</a> <a href="listing.html">Gym</a> </div>
                                    <div class="widget-posts-descr-score">5.0</div>
                                    <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- widget-posts end-->
                </div>
                <!-- header-modal-container end-->
                <div class="header-modal-top fl-wrap">
                    <h4>Your Wishlist : <span><strong></strong> Locations</span></h4>
                    <div class="close-header-modal"><i class="far fa-times"></i></div>
                </div>
            </div>
            <!--wishlist-wrap end -->
        </header>
        <!-- header end-->

        <!-- Section render -->
        <?= $this->renderSection("content") ?>
        <!-- End Section render -->

        <!--footer -->
        <footer class="main-footer fl-wrap">
            <!-- footer-header-->
            <div class="footer-header fl-wrap grad ient-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="subscribe-header">
                                <h3>Souscrire à notre <span>Newsletter</span></h3>
                                <p>Vous souhaitez être informé des nouveaux services ? Inscrivez-vous simplement.</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="subscribe-widget">
                                <div class="subcribe-form">
                                    <form id="subscribe" action="<?= site_url("newsletter") ?>" method="post">
                                        <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Entrer votre adresse mail" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fal fa-envelope"></i></button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-header end-->
            <!--footer-inner-->
            <div class="footer-inner fl-wrap">
                <div class="container">
                    <div class="row">
                        <!-- footer-widget-->
                        <div class="col-md-4">
                            <div class="footer-widget fl-wrap">
                                <div class="footer-logo"><a href="<?= $page == 'home' ? '#' : site_url() ?>"><img src="<?= site_url("public/assets/images/logo.png") ?>" alt="Tayari Events"></a></div>
                                <div class="footer-contacts-widget fl-wrap">
                                    <p>Trouvez facilement les services pour la preparation de vos événements avec Tayari Events </p>
                                    <ul class="footer-contacts fl-wrap no-list-style">
                                        <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="mailto:contact@tayari-events.com" target="_blank">contact@tayari-events.com</a></li>
                                        <li> <span><i class="fal fa-map-marker"></i> Adress :</span><a href="#" target="_blank">Lubumbashi, RD Congo</a></li>
                                        <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">+(243)825 363 907</a></li>
                                    </ul>
                                    <div class="footer-social">
                                        <span>Trouvez nous sur : </span>
                                        <ul class="no-list-style">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a href="https://wa.me/243825363907?text=Bonjour Dream events, j'ai été intéressé par un des vos services et je veux en savoir plus " target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget end-->
                        <!-- footer-widget-->
                        <div class="col-md-4">
                            <div class="footer-widget fl-wrap">
                                <h3>Nos services</h3>
                                <div class="footer-widget-posts fl-wrap">
                                    <ul class="no-list-style">
                                        <?php foreach ($premiumservices as $item) : ?>
                                            <li class="clearfix">
                                                <a href="<?= site_url("services/$item->serviceSlug") ?>" class="widget-posts-img"><img src="<?= site_url("public/assets/images/services/covers/$item->serviceCoverImage") ?>" class="respimg" alt="Tayari Events, <?= $item->serviceName_fr ?>"></a>
                                                <div class="widget-posts-descr">
                                                    <a href="<?= site_url("service/$item->serviceSlug") ?>" title="<?= $item->serviceName_fr ?>"><?= $item->serviceName_fr ?></a>
                                                    <span class="widget-posts-date"><i class="fal fa-calendar"></i> <?= $item->isactive == 1 ? 'Ouvert Maintenant' : 'Fermé' ?> </span>
                                                </div>
                                            </li>
                                        <?php endforeach ?>

                                    </ul>
                                    <a href="<?= $page == 'news' ? '#' : site_url("news") ?>" class="footer-link">Voir plus <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget end-->
                        <!-- footer-widget  -->
                        <div class="col-md-4">
                            <div class="footer-widget fl-wrap ">
                                <h3>Catégories de services</h3>
                                <div class="footer-widget-posts fl-wrap">
                                    <ul class="no-list-style">
                                        <?php foreach ($categories as $item) : ?>
                                            <li class="clearfix">
                                                <div class="widget-posts-descr">
                                                    <a href="<?= site_url("categories/$item->categorySlug") ?>" title="<?= $item->categoryName_fr ?>"><?= $item->categoryName_fr ?></a>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget end-->
                    </div>
                </div>
                <!-- footer bg-->
                <div class="footer-bg" data-ran="4"></div>
                <div class="footer-wave">
                    <svg viewbox="0 0 100 25">
                        <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                    </svg>
                </div>
                <!-- footer bg  end-->
            </div>
            <!--footer-inner end -->
            <!--sub-footer-->
            <div class="sub-footer  fl-wrap">
                <div class="container">
                    <div class="copyright"> &#169; Tayari Events <?= date("Y") ?> . Tous droits reservés.</div>
                    <div class="lang-wrap">
                        <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>En</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                        <ul class="lang-tooltip lang-action no-list-style">
                            <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                            <li><a href="#" data-lantext="Fr">Français</a></li>
                            <!-- <li><a href="#" data-lantext="Es">Espaol</a></li>
                            <li><a href="#" data-lantext="De">Deutsch</a></li> -->
                        </ul>
                    </div>
                    <div class="subfooter-nav">
                        <ul class="no-list-style">
                            <li><a href="<?= site_url("terms") ?>">Conditions d'utilisation</a></li>
                            <li><a href="<?= site_url("addListing") ?>" title="Ajouter un service">Enrengistrer vos services</a></li>
                            <li><a href="<?= $page == 'news' ? '#' : site_url("news") ?>" title="Actualités">Actualites</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--sub-footer end -->
        </footer>
        <!--footer end -->

        <!-- Place of register, modal, login  form  -->

        <a class="to-top"><i class="fas fa-caret-up"></i></a>
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <?= script_tag('public/assets/js/jquery.min.js') ?>
    <?= script_tag('public/assets/js/plugins.js') ?>
    <?= script_tag('public/assets/js/scripts.js') ?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
    <?= script_tag('public/assets/js/map-single.js') ?>
</body>
<!-- Afrinew soft Designer -->

</html>