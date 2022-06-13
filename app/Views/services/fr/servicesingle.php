<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>
<!-- wrapper-->
<div id="wrapper">
    <!-- content-->
    <div class="content">
        <section class="parallax-section single-par" data-scrollax-parent="true">
            <div class="bg par-elem " data-bg="<?= site_url("public/assets/images/bg/35.jpg") ?>" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay op7"></div>
            <div class="container">
                <div class="section-title center-align big-title">
                    <h2><span><?= $service->serviceName_fr ?? "Services" ?></span></h2>
                    <span class="section-separator"></span>
                    <div class="breadcrumbs fl-wrap"><a href="<?= site_url() ?>">Accueil</a><span><?= $cityName ?? "Services" ?></span></div>
                </div>
            </div>
            <div class="header-sec-link">
                <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
            </div>
        </section>
        <!-- scroll-nav-wrapper-->
        <div class="scroll-nav-wrapper fl-wrap">
            <div class="container">
                <nav class="scroll-nav scroll-init">
                    <ul class="no-list-style">
                        <li><a class="act-scrlink" href="#sec1"><i class="fal fa-images"></i> Top</a></li>
                        <li><a href="#sec2"><i class="fal fa-info"></i>Details</a></li>

                    </ul>
                </nav>
                <div class="scroll-nav-wrapper-opt">
                    <a href="#" class="scroll-nav-wrapper-opt-btn"> <i class="fas fa-heart"></i> Save </a>
                    <a href="#" class="scroll-nav-wrapper-opt-btn showshare"> <i class="fas fa-share"></i> Share </a>

                    <div class="share-holder hid-share">
                        <div class="share-container  isShare"></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- scroll-nav-wrapper end-->
        <section class="gray-bg no-top-padding">
            <div class="container">
                <div class="breadcrumbs inline-breadcrumbs fl-wrap">
                    <a href="<?= site_url() ?>">Accueil</a><a href="<?= site_url("services/all") ?>">Services</a><a href="<?= site_url("cities/$service->cityName_fr") ?>"><?= $service->cityName_fr ?></a><span><?= $service->serviceName_fr ?></span>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <!-- list-single-main-wrapper-col -->
                    <div class="col-md-8">
                        <!-- list-single-main-wrapper -->
                        <div class="list-single-main-wrapper fl-wrap" id="sec2">
                            <div class="list-single-main-media fl-wrap">
                                <div class="single-slider-wrap">
                                    <div class="single-slider fl-wrap">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper lightgallery">
                                                <div class="swiper-slide hov_zoom"><img src="<?= site_url("public/assets/images/services/covers/$service->serviceCoverImage") ?>" alt=""><a href="images/all/5.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                <div class="swiper-slide hov_zoom"><img src="<?= site_url("public/assets/images/cities/$service->cityImage") ?>" alt=""><a href="images/all/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-carousel_pagination">
                                        <div class="listing-carousel_pagination-wrap">
                                            <div class="ss-slider-pagination"></div>
                                        </div>
                                    </div>
                                    <div class="ss-slider-cont ss-slider-cont-prev color2-bg"><i class="fal fa-long-arrow-left"></i></div>
                                    <div class="ss-slider-cont ss-slider-cont-next color2-bg"><i class="fal fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <!-- list-single-main-item -->
                            <div class="list-single-main-item fl-wrap block_box">
                                <div class="list-single-main-item-title">
                                    <h3>Description</h3>
                                </div>
                                <div class="list-single-main-item_content fl-wrap">
                                    <!-- <p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. </p> -->
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p> -->
                                    <a href="https://wa.me/243825363907?text=Bonjour Tayari events, j'ai été intéressé par le service <?= $service->serviceName_fr ?> et je voulais en savoir plus..." class="btn color2-bg    float-btn">Contactez-nous<i class="fal fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- list-single-main-item end -->

                        </div>
                    </div>
                    <!-- list-single-main-wrapper-col end -->
                    <!-- list-single-sidebar -->
                    <div class="col-md-4">

                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap block_box">
                            <div class="box-widget-item-header">
                                <h3>Location / Contacts </h3>
                            </div>
                            <div class="box-widget">
                                <div class="box-widget-content bwc-nopad">
                                    <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                        <ul class="no-list-style">
                                            <li><span><i class="fal fa-map-marker"></i> Adresse :</span> <a href="#!"><?= $service->serviceLocation ?></a></li>
                                            <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="phone:243825363907">+(243)825363907</a></li>
                                            <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="mailto:contact@tayari-events.com">contact@tayari-events.com</a></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->

                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap block_box">
                            
                            <div class="box-widget">
                                <div class="box-widget-author fl-wrap">
                                    <div class="box-widget-author-title">
                                        <div class="box-widget-author-title-img">
                                            <img src="<?= site_url("public/assets/images/avatar/avatar-bg.png")?>" alt="avatar tayari events">
                                        </div>
                                        <div class="box-widget-author-title_content">
                                            <a href="">Tayari Events</a>
                                            <span>Service client</span>
                                        </div>
                                        <div class="box-widget-author-title_opt">
                                            <a href="https://wa.me/243825363907?text=Bonjour Tayari events, j'ai été intéressé par le service <?= $service->serviceName_fr ?> et je voulais en savoir plus..." class="tolt green-bg" data-microtip-position="top" data-tooltip="Chat avec nous"><i class="fab fa-whatsapp"></i></a>
                                            <a href="https://wa.me/243825363907?text=Bonjour Tayari events, j'ai été intéressé par le service <?= $service->serviceName_fr ?> et je voulais en savoir plus..." class="tolt color-bg cwb" data-microtip-position="top" data-tooltip="Chat avec nous"><i class="fas fa-comments-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->
                    </div>
                    <!-- list-single-sidebar end -->
                </div>
            </div>
        </section>
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--content end-->
</div>
<!-- wrapper end-->
<?= $this->endSection() ?>