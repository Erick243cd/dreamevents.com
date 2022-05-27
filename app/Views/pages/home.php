<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>

<main>
    <div class="slider-area hero-bg1">
        <div class="single-slider hero-overly  slider-height1 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">

                        <div class="hero-caption pt-10">
                            <h1>Listing made easy.</h1>
                            <p>Explore vacation rentals, bar & restaurants and experiences . Find amazing places to
                                visit</p>
                        </div>

                        <form action="#" class="search-box mb-45">
                            <div class="input-form">
                                <input type="text" placeholder="Ex: Food, Service, Hotel, Shopping">
                                <span>What?</span>
                            </div>
                            <div class="input-form">
                                <input type="text" placeholder="Your City....">
                                <span>Where?</span>
                            </div>
                            <div class="search-form">
                                <a href="#"><i class="fas fa-search"></i>Search</a>
                            </div>
                        </form>

                        <div class="category-items text-center">
                            <ul>
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#" class="active">Home</a></li>
                                <li><a href="#">Party</a></li>
                                <li><a href="#">Shopping</a></li>
                                <li><a href="#">Hotel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="great-stuffs section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-tittle text-center mb-40">
                        <h2>Top Destination</h2>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col col-lg-2 col-sm-6 col-md-4">
                    <div class="single-location mb-30 text-center">
                        <div class="location-img">
                            <?= img('public/assets/img/gallery/topDesti5.png', '', 'alt=""') ?>
                            <div class="location-details">
                                <h4><a href="#">Explore<i class="fas fa-angle-right"></i></a></h4>
                            </div>
                        </div>
                        <h3><a href="#">Dhaka</a></h3>
                    </div>
                </div>
                <div class="col col-lg-2 col-sm-6 col-md-4">
                    <div class="single-location mb-30 text-center">
                        <div class="location-img">
                            <?= img('public/assets/img/gallery/topDesti5.png', '', 'alt=""') ?>
                            <div class="location-details">
                                <h4><a href="#">Explore<i class="fas fa-angle-right"></i></a></h4>
                            </div>
                        </div>
                        <h3><a href="#">Dhaka</a></h3>
                    </div>
                </div>
                <div class="col col-lg-2 col-sm-6 col-md-4">
                    <div class="single-location mb-30 text-center">
                        <div class="location-img">
                            <?= img('public/assets/img/gallery/topDesti5.png', '', 'alt=""') ?>
                            <div class="location-details">
                                <h4><a href="#">Explore<i class="fas fa-angle-right"></i></a></h4>
                            </div>
                        </div>
                        <h3><a href="#">Dhaka</a></h3>
                    </div>
                </div>
                <div class="col col-lg-2 col-sm-6 col-md-4">
                    <div class="single-location mb-30 text-center">
                        <div class="location-img">
                            <?= img('public/assets/img/gallery/topDesti5.png', '', 'alt=""') ?>
                            <div class="location-details">
                                <h4><a href="#">Explore<i class="fas fa-angle-right"></i></a></h4>
                            </div>
                        </div>
                        <h3><a href="#">Dhaka</a></h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="popular-location section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-80">
                        <h2>Things Are You Interested In</h2>
                        <p>Things you are looking for today</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="single-location mb-20">
                                <div class="location-img">
                                <?= img('public/assets/img/gallery/xhome-blog1.jpg.pagespeed.ic.VNtrDP4kDg.jpg', '', 'alt=""') ?>
                                </div>
                                <div class="location-details">
                                    <h4><a href="#">Restaurant & Bar</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="single-location mb-20">
                                <div class="location-img">
                                    <?= img('public/assets/img/gallery/xhome-blog2.jpg.pagespeed.ic.rR7UGE-fK5.jpg', '', 'alt=""') ?>
                                </div>
                                <div class="location-details">
                                    <h4><a href="#">Outdoor</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-10">
                    <div class="single-location mb-20">
                        <div class="location-img">
                        <?= img('public/assets/img/gallery/home-blog3.jpg', '', 'alt=""') ?>
                        </div>
                        <div class="location-details location-details2">
                            <h4><a href="#">Shopping Center</a></h4>
                            <p>Discover & connect with great <br> local businesses in New York</p>
                            <a href="#" class="location-btn">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                            <div class="single-location mb-20">
                                <div class="location-img">
                                   <?= img('public/assets/img/gallery/xhome-blog4.jpg.pagespeed.ic.gfQ_hnKkUp.jpg', '', 'alt=""') ?>
                                </div>
                                <div class="location-details">
                                    <h4><a href="#">Restaurant & Bar</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                            <div class="single-location mb-20">
                                <div class="location-img">
                                   <?= img('public/assets/img/gallery/xhome-blog5.jpg.pagespeed.ic.Z79QCKKDC7.jpg', '', 'alt=""') ?>
                                </div>
                                <div class="location-details">
                                    <h4><a href="#">Outdoor</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="popular-directorya-area section-padding fix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-tittle text-center mb-35">
                        <h2>Popular Things To do</h2>
                        <p>Popular Exclusive Listings In Our Directory</p>
                    </div>
                </div>
            </div>
            <div class="directory-active">

                <div class="properties pb-20">
                    <div class="properties-card">
                        <div class="properties-img overlay1">
                            <a href="#">
                            <?= img('public/assets/img/gallery/xdirectory1.jpg.pagespeed.ic.bkNyqwihp8.jpg', '', 'alt=""') ?>

                            </a>
                            <div class="img-text">
                                <span>Closed</span>
                            </div>
                            <div class="icon">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><span>- 4.90 (230 Review)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="properties-caption">
                            <h3>
                                <a href="#">Gloria Fast Food Restaurant</a>
                            <?= img('public/assets/img/gallery/xvarified.png.pagespeed.ic.WKI_FS8TqB.png', '', 'alt=""') ?>

                            </h3>
                            <p><i class="fas fa-map-marker-alt"></i>75 Prince Street, green road, NY, USAk</p>
                        </div>
                        <div class="properties-footer d-flex justify-content-between align-items-center flex-wrap">
                            <div class="restaurant-name">
                            <?= img('public/assets/img/icon/restaurant-icon.svg', '', 'alt=""') ?>
                                <h3><a href="#">Food & Restaurant</a></h3>
                            </div>
                            <div class="contact">
                                <ul>
                                    <li><i class="fas fa-phone-alt"></i></li>
                                    <li><i class="far fa-envelope"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="properties pb-20">
                    <div class="properties-card">
                        <div class="properties-img overlay1">
                            <a href="#"><img src="assets/img/gallery/xdirectory2.jpg.pagespeed.ic.uf85pWD2w_.jpg" alt=""></a>
                            <div class="img-text">
                                <span>Closed</span>
                            </div>
                            <div class="icon">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><span>- 4.90 (230 Review)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="properties-caption">
                            <h3>
                                <a href="#">Gloria Fast Food Restaurant</a>
                                <img src="assets/img/gallery/xvarified.png.pagespeed.ic.WKI_FS8TqB.png" alt="">
                            </h3>
                            <p><i class="fas fa-map-marker-alt"></i>75 Prince Street, green road, NY, USAk</p>
                        </div>
                        <div class="properties-footer d-flex justify-content-between align-items-center flex-wrap">
                            <div class="restaurant-name">
                                <img src="assets/img/icon/restaurant-icon.svg" alt="">
                                <h3><a href="#">Food & Restaurant</a></h3>
                            </div>
                            <div class="contact">
                                <ul>
                                    <li><i class="fas fa-phone-alt"></i></li>
                                    <li><i class="far fa-envelope"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="properties pb-20">
                    <div class="properties-card">
                        <div class="properties-img overlay1">
                            <a href="#"><img src="assets/img/gallery/xdirectory3.jpg.pagespeed.ic.4bZLsLVNDk.jpg" alt=""></a>
                            <div class="img-text">
                                <span>Closed</span>
                            </div>
                            <div class="icon">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><span>- 4.90 (230 Review)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="properties-caption">
                            <h3>
                                <a href="#">Gloria Fast Food Restaurant</a>
                                <img src="assets/img/gallery/xvarified.png.pagespeed.ic.WKI_FS8TqB.png" alt="">
                            </h3>
                            <p><i class="fas fa-map-marker-alt"></i>75 Prince Street, green road, NY, USAk</p>
                        </div>
                        <div class="properties-footer d-flex justify-content-between align-items-center flex-wrap">
                            <div class="restaurant-name">
                                <img src="assets/img/icon/restaurant-icon.svg" alt="">
                                <h3><a href="#">Food & Restaurant</a></h3>
                            </div>
                            <div class="contact">
                                <ul>
                                    <li><i class="fas fa-phone-alt"></i></li>
                                    <li><i class="far fa-envelope"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="properties pb-20">
                    <div class="properties-card">
                        <div class="properties-img overlay1">
                            <a href="#"><img src="assets/img/gallery/xdirectory4.jpg.pagespeed.ic.zGrsyRcN3Q.jpg" alt=""></a>
                            <div class="img-text">
                                <span>Closed</span>
                            </div>
                            <div class="icon">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><span>- 4.90 (230 Review)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="properties-caption">
                            <h3>
                                <a href="#">Gloria Fast Food Restaurant</a>
                                <img src="assets/img/gallery/xvarified.png.pagespeed.ic.WKI_FS8TqB.png" alt="">
                            </h3>
                            <p><i class="fas fa-map-marker-alt"></i>75 Prince Street, green road, NY, USAk</p>
                        </div>
                        <div class="properties-footer d-flex justify-content-between align-items-center flex-wrap">
                            <div class="restaurant-name">
                                <img src="assets/img/icon/restaurant-icon.svg" alt="">
                                <h3><a href="#">Food & Restaurant</a></h3>
                            </div>
                            <div class="contact">
                                <ul>
                                    <li><i class="fas fa-phone-alt"></i></li>
                                    <li><i class="far fa-envelope"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="properties pb-20">
                    <div class="properties-card">
                        <div class="properties-img overlay1">
                            <a href="#"><img src="assets/img/gallery/xdirectory2.jpg.pagespeed.ic.uf85pWD2w_.jpg" alt=""></a>
                            <div class="img-text">
                                <span>Closed</span>
                            </div>
                            <div class="icon">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><span>- 4.90 (230 Review)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="properties-caption">
                            <h3>
                                <a href="#">Gloria Fast Food Restaurant</a>
                                <img src="assets/img/gallery/xvarified.png.pagespeed.ic.WKI_FS8TqB.png" alt="">
                            </h3>
                            <p><i class="fas fa-map-marker-alt"></i>75 Prince Street, green road, NY, USAk</p>
                        </div>
                        <div class="properties-footer d-flex justify-content-between align-items-center flex-wrap">
                            <div class="restaurant-name">
                                <img src="assets/img/icon/restaurant-icon.svg" alt="">
                                <h3><a href="#">Food & Restaurant</a></h3>
                            </div>
                            <div class="contact">
                                <ul>
                                    <li><i class="fas fa-phone-alt"></i></li>
                                    <li><i class="far fa-envelope"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-8 col-lg-9">
                    <div class="wantToWork-area w-padding2 mt-30">
                        <div class="pera">
                            <h2>Do you want to find more?</h2>
                            <p>10,563 listing for you on our list.</p>
                        </div>
                        <div class="linking">
                            <a href="#" class="btn wantToWork-btn">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>


    <section class="our-services section-padding position-relative">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-xl-7 col-lg-8 col-md-11">

                    <div class="section-tittle text-center mb-70">
                        <h2>How It Work?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <img src="assets/img/icon/services1.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Find Businesses</a></h5>
                            <p>Discover & connect with great local businesses in your local neighborhood like
                                dentists, hair stylists and more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <img src="assets/img/icon/services2.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Review Listings</a></h5>
                            <p>Discover & connect with great local businesses in your local neighborhood like
                                dentists, hair stylists and more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <img src="assets/img/icon/services3.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Make a Reservation</a></h5>
                            <p>Discover & connect with great local businesses in your local neighborhood like
                                dentists, hair stylists and more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="video_testiomonial section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="video-area section-img-bg2 d-flex align-items-center" data-background="assets/img/gallery/video-bg.jpg">
                        <div class="video-wrap">
                            <div class="video-icon">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=up68UAfH0d0">
                                    <img src="assets/img/icon/play-butto.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="testimonial-area">
                        <div class="h1-testimonial-active">

                            <div class="single-testimonial">
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <h2>People talking about</h2>
                                        <p>"Discover & connect with great local businesses in your local
                                            neighborhood like dentists, hair stylists and more unde omnis iste natus
                                            error sit voluptatem.</p>
                                    </div>

                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/gallery/founder-img.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Dan Delion</span>
                                            <p>UI & UX Designer at Colorlib</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <h2>People talking about</h2>
                                        <p>"Discover & connect with great local businesses in your local
                                            neighborhood like dentists, hair stylists and more unde omnis iste natus
                                            error sit voluptatem.</p>
                                    </div>

                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/gallery/founder-img.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Dan Delion</span>
                                            <p>UI & UX Designer at Colorlib</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<?= $this->endSection() ?>