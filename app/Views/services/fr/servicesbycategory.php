<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>
<!-- wrapper-->
<div id="wrapper">
    <!-- content-->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section single-par" data-scrollax-parent="true">
            <div class="bg par-elem " data-bg="images/bg/35.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay op7"></div>
            <div class="container">
                <div class="section-title center-align big-title">
                    <h2><span>Listings Without Map</span></h2>
                    <span class="section-separator"></span>
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Listings</a><span>Listings Without Map</span></div>
                </div>
            </div>
            <div class="header-sec-link">
                <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
            </div>
        </section>
        <!--  section  end-->
        <section class="gray-bg small-padding no-top-padding-sec" id="sec1">
            <div class="container">
                <!-- list-main-wrap-header-->
                <div class="list-main-wrap-header fl-wrap   block_box no-vis-shadow no-bg-header fixed-listing-header">
                    <!-- list-main-wrap-title-->
                    <div class="list-main-wrap-title">
                        <h2>Results For : <span>New York </span></h2>
                    </div>
                    <!-- list-main-wrap-title end-->
                    <!-- list-main-wrap-opt-->
                    <div class="list-main-wrap-opt">
                        <!-- price-opt-->
                        <div class="price-opt">
                            <span class="price-opt-title">Sort by:</span>
                            <div class="listsearch-input-item">
                                <select data-placeholder="Popularity" class="chosen-select no-search-select">
                                    <option>Popularity</option>
                                    <option>Average rating</option>
                                    <option>Price: low to high</option>
                                    <option>Price: high to low</option>
                                </select>
                            </div>
                        </div>
                        <!-- price-opt end-->
                        <!-- price-opt-->
                        <div class="grid-opt">
                            <ul class="no-list-style">
                                <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="fal fa-th"></i></span></li>
                                <li class="grid-opt_act"><span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="fal fa-list"></i></span></li>
                            </ul>
                        </div>
                        <!-- price-opt end-->
                    </div>
                    <!-- list-main-wrap-opt end-->
                    <a class="custom-scroll-link back-to-filters clbtg" href="#lisfw"><i class="fal fa-search"></i></a>
                </div>
                <!-- list-main-wrap-header end-->
                <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i> Filters</div>
                <div class="fl-wrap">
                    <!-- listsearch-input-wrap-->
                    <div class="listsearch-input-wrap lws_mobile fl-wrap tabs-act inline-lsiw" id="lisfw">
                        <div class="listsearch-input-wrap_contrl fl-wrap">
                            <ul class="tabs-menu fl-wrap no-list-style">
                                <li class="current"><a href="#filters-search"> <i class="fal fa-sliders-h"></i> Filters </a></li>
                                <li><a href="#category-search"> <i class="fal fa-image"></i>Categories </a></li>
                            </ul>
                        </div>
                        <!--tabs -->
                        <div class="tabs-container fl-wrap">
                            <!--tab -->
                            <div class="tab">
                                <div id="filters-search" class="tab-content  first-tab ">
                                    <div class="fl-wrap">
                                        <div class="row">
                                            <!-- listsearch-input-item-->
                                            <div class="col-md-4">
                                                <div class="listsearch-input-item">
                                                    <span class="iconn-dec"><i class="far fa-bookmark"></i></span>
                                                    <input type="text" placeholder="What are you looking for ?" value="" />
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item end-->
                                            <!-- listsearch-input-item-->
                                            <div class="col-md-4">
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="Location" class="chosen-select no-search-select">
                                                        <option>All Categories</option>
                                                        <option>Shops</option>
                                                        <option>Hotels</option>
                                                        <option>Restaurants</option>
                                                        <option>Fitness</option>
                                                        <option>Events</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item end-->
                                            <!-- listsearch-input-item-->
                                            <div class="col-md-4">
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="City/Location" class="chosen-select no-search-select">
                                                        <option>All Cities</option>
                                                        <option>New York</option>
                                                        <option>Chicago</option>
                                                        <option>Los Angeles</option>
                                                        <option>Washington</option>
                                                        <option>Boston</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item end-->
                                            <!-- listsearch-input-item-->
                                            <div class="col-md-5">
                                                <div class="listsearch-input-item location autocomplete-container">
                                                    <span class="iconn-dec"><i class="far fa-map-marker"></i></span>
                                                    <input type="text" placeholder="Where to look?" class="autocomplete-input" id="autocompleteid3" value="" />
                                                    <a href="#"><i class="fal fa-location"></i></a>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item end-->
                                            <!-- listsearch-input-item-->
                                            <div class="col-md-5">
                                                <div class="listsearch-input-item">
                                                    <div class="price-rage-wrap fl-wrap">
                                                        <div class="price-rage-wrap-title"><i class="fal fa-hand-holding-usd"></i> Price :</div>
                                                        <div class="price-rage-item fl-wrap">
                                                            <input type="text" class="price-range" data-min="0" data-max="4" name="price-range1" data-step="1" value="$$">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-end-->
                                            <!-- listsearch-input-item-->
                                            <div class="col-md-2">
                                                <div class="listsearch-input-item">
                                                    <button class="header-search-button color-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i><span>Search</span></button>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item end-->
                                        </div>
                                        <!-- hidden-listing-filter -->
                                        <div class="hidden-listing-filter fl-wrap">
                                            <div class="listsearch-input-wrap-header fl-wrap"><i class="fal fa-tasks"></i>More Filters</div>
                                            <div class="fl-wrap mar-btoom">
                                                <div class="row">
                                                    <!-- listsearch-input-item-->
                                                    <div class="col-md-4">
                                                        <div class="listsearch-input-item">
                                                            <button class="toggle-filter-btn tsb_act "><i class="fal fa-clock"></i> <span>Open Now</span></button>
                                                        </div>
                                                    </div>
                                                    <!-- listsearch-input-end-->
                                                    <!-- listsearch-input-item-->
                                                    <div class="col-md-4">
                                                        <div class="listsearch-input-item clact date-container">
                                                            <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                            <input type="text" placeholder="Event Date" name="datepicker-here" value="" />
                                                            <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                                        </div>
                                                    </div>
                                                    <!-- listsearch-input-end-->
                                                </div>
                                            </div>
                                            <div class="listsearch-input-wrap-header fl-wrap"><i class="fal fa-tags"></i>Facilities</div>
                                            <!-- listsearch-input-item-->
                                            <div class="listsearch-input-item">
                                                <div class=" fl-wrap filter-tags">
                                                    <ul class="no-list-style">
                                                        <li>
                                                            <input id="check-aa" type="checkbox" name="check">
                                                            <label for="check-aa">Elevator in building</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-b" type="checkbox" name="check">
                                                            <label for="check-b">Friendly workspace</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c" type="checkbox" name="check" checked>
                                                            <label for="check-c">Instant Book</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-d" type="checkbox" name="check">
                                                            <label for="check-d">Wireless Internet</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-d2" type="checkbox" name="check" checked>
                                                            <label for="check-d2">Free WiFi</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-d3" type="checkbox" name="check" checked>
                                                            <label for="check-d3">Free Parking</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-d4" type="checkbox" name="check">
                                                            <label for="check-d4">Smoking Allowed</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item end-->
                                        </div>
                                        <!-- hidden-listing-filter end -->
                                        <div class="more-filter-option-wrap">
                                            <div class="more-filter-option-btn act-hiddenpanel color2-bg"><i class="far fa-plus"></i> <span>More Options</span></div>
                                            <div class="clear-filter-btn color"><i class="far fa-redo"></i> Reset Filters</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab end-->
                            <!--tab -->
                            <div class="tab">
                                <div id="category-search" class="tab-content">
                                    <!-- category-carousel-wrap -->
                                    <div class="category-carousel-wrap fl-wrap">
                                        <div class="category-carousel fl-wrap full-height">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <!-- category-carousel-item -->
                                                    <div class="swiper-slide">
                                                        <a class="category-carousel-item fl-wrap full-height checket-cat" href="#">
                                                            <img src="images/all/12.jpg" alt="">
                                                            <div class="category-carousel-item-icon red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                            <div class="category-carousel-item-container">
                                                                <div class="category-carousel-item-title">Restaurants / Cafe</div>
                                                                <div class="category-carousel-item-counter">6 listings</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- category-carousel-item end -->
                                                    <!-- category-carousel-item -->
                                                    <div class="swiper-slide">
                                                        <a class="category-carousel-item fl-wrap full-height" href="#">
                                                            <img src="images/all/34.jpg" alt="">
                                                            <div class="category-carousel-item-icon yellow-bg"><i class="fal fa-bed"></i></div>
                                                            <div class="category-carousel-item-container">
                                                                <div class="category-carousel-item-title">Hotel / Hostel</div>
                                                                <div class="category-carousel-item-counter">14 listings</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- category-carousel-item end -->
                                                    <!-- category-carousel-item -->
                                                    <div class="swiper-slide">
                                                        <a class="category-carousel-item fl-wrap full-height" href="#">
                                                            <img src="images/all/33.jpg" alt="">
                                                            <div class="category-carousel-item-icon purp-bg"><i class="fal fa-cocktail"></i></div>
                                                            <div class="category-carousel-item-container">
                                                                <div class="category-carousel-item-title">Events / Nightlife</div>
                                                                <div class="category-carousel-item-counter">6 listings</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- category-carousel-item end -->
                                                    <!-- category-carousel-item -->
                                                    <div class="swiper-slide">
                                                        <a class="category-carousel-item fl-wrap full-height" href="#">
                                                            <img src="images/all/10.jpg" alt="">
                                                            <div class="category-carousel-item-icon blue-bg"><i class="fal fa-dumbbell"></i></div>
                                                            <div class="category-carousel-item-container">
                                                                <div class="category-carousel-item-title">Fitness / Gym</div>
                                                                <div class="category-carousel-item-counter">18 listings</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- category-carousel-item end -->
                                                    <!-- category-carousel-item -->
                                                    <div class="swiper-slide">
                                                        <a class="category-carousel-item fl-wrap full-height" href="#">
                                                            <img src="images/all/11.jpg" alt="">
                                                            <div class="category-carousel-item-icon green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                                            <div class="category-carousel-item-container">
                                                                <div class="category-carousel-item-title">Shopping</div>
                                                                <div class="category-carousel-item-counter">19 listings</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- category-carousel-item end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- category-carousel-wrap end-->
                                    </div>
                                    <div class="catcar-scrollbar fl-wrap">
                                        <div class="hs_init"></div>
                                        <div class="cc-contorl">
                                            <div class="cc-contrl-item cc-prev"><i class="fal fa-angle-left"></i></div>
                                            <div class="cc-contrl-item cc-next"><i class="fal fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab end-->
                        </div>
                        <!--tabs end-->
                    </div>
                    <!-- listsearch-input-wrap end-->
                    <!-- listing-item-container -->
                    <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="images/all/1.jpg" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                        <span class="avatar-tooltip">Added By <strong>Alisa Noory</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                    <div class="geodir-category-opt">
                                        <div class="listing-rating-count-wrap">
                                            <div class="review-score">4.8</div>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                            <br>
                                            <div class="reviews-count">12 reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="geodir-category-content fl-wrap title-sin_item">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities : </div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a class="listing-item-category-wrap">
                                            <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                            <span>Restaurants</span>
                                        </a>
                                        <div class="geodir-opt-list">
                                            <ul class="no-list-style">
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#1" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>1</strong></span> </a></li>
                                                <li>
                                                    <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/1.jpg'},{'src': 'images/all/24.jpg'}, {'src': 'images/all/12.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-level geodir-category_price">
                                            <span class="price-level-item" data-pricerating="3"></span>
                                            <span class="price-name-tooltip">Pricey</span>
                                        </div>
                                        <div class="geodir-category_contacts">
                                            <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                            <ul class="no-list-style">
                                                <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="images/all/9.jpg" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/2.jpg" alt=""></a>
                                        <span class="avatar-tooltip">Added By <strong>Mark Rose</strong></span>
                                    </div>
                                    <div class="geodir_status_date color-bg"><i class="fal fa-clock"></i>27 may 2019</div>
                                    <div class="geodir-category-opt">
                                        <div class="listing-rating-count-wrap">
                                            <div class="review-score">4.2</div>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                            <br>
                                            <div class="reviews-count">6 reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="geodir-category-content fl-wrap title-sin_item">
                                    <div class="geodir-category-content-title fl-wrap ">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Rocko Band in Marquee Club</a></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities : </div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a class="listing-item-category-wrap">
                                            <div class="listing-item-category purp-bg"><i class="fal fa-cocktail"></i></div>
                                            <span>Events</span>
                                        </a>
                                        <div class="geodir-opt-list">
                                            <ul class="no-list-style">
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>2</strong></span></a></li>
                                                <li>
                                                    <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/9.jpg'},{'src': 'images/all/32.jpg'}, {'src': 'images/all/23.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-level geodir-category_price">
                                            <span class="price-level-item" data-pricerating="4"></span>
                                            <span class="price-name-tooltip">Ultra High</span>
                                        </div>
                                        <div class="geodir-category_contacts">
                                            <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                            <ul class="no-list-style">
                                                <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="images/all/31.jpg" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/4.jpg" alt=""></a>
                                        <span class="avatar-tooltip">Added By <strong>Lisa Smith</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now</div>
                                    <div class="geodir-category-opt">
                                        <div class="listing-rating-count-wrap">
                                            <div class="review-score">3.8</div>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                            <br>
                                            <div class="reviews-count">4 reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="geodir-category-content fl-wrap title-sin_item">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Premium Fitness Gym</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities : </div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a class="listing-item-category-wrap">
                                            <div class="listing-item-category blue-bg"><i class="fal fa-dumbbell"></i></div>
                                            <span>Fitness / Gym</span>
                                        </a>
                                        <div class="geodir-opt-list">
                                            <ul class="no-list-style">
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#" class="single-map-item" data-newlatitude="40.94982541" data-newlongitude="-73.84357452"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>3</strong></span> </a></li>
                                                <li>
                                                    <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/31.jpg'},{'src': 'images/all/10.jpg'}, {'src': 'images/all/15.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-level geodir-category_price">
                                            <span class="price-level-item" data-pricerating="2"></span>
                                            <span class="price-name-tooltip">Moderate</span>
                                        </div>
                                        <div class="geodir-category_contacts">
                                            <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                            <ul class="no-list-style">
                                                <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="images/all/16.jpg" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/3.jpg" alt=""></a>
                                        <span class="avatar-tooltip">Added By <strong>Kliff Antony</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                    <div class="geodir-category-opt">
                                        <div class="listing-rating-count-wrap">
                                            <div class="review-score">5.0</div>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                            <br>
                                            <div class="reviews-count">4 reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="geodir-category-content fl-wrap title-sin_item">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">MontePlaza Hotel</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities : </div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a class="listing-item-category-wrap">
                                            <div class="listing-item-category  yellow-bg"><i class="fal fa-bed"></i></div>
                                            <span>Hotels</span>
                                        </a>
                                        <div class="geodir-opt-list">
                                            <ul class="no-list-style">
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#" class="single-map-item" data-newlatitude="40.72228267" data-newlongitude="-73.99246214"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>4</strong></span></a></li>
                                                <li>
                                                    <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/16.jpg'},{'src': 'images/all/27.jpg'}, {'src': 'images/all/20.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-level geodir-category_price">
                                            <span class="price-level-item" data-pricerating="4"></span>
                                            <span class="price-name-tooltip">Ultra High</span>
                                        </div>
                                        <div class="geodir-category_contacts">
                                            <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                            <ul class="no-list-style">
                                                <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="images/all/28.jpg" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                        <span class="avatar-tooltip">Added By <strong>Nasty Wood</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                    <div class="geodir-category-opt">
                                        <div class="listing-rating-count-wrap">
                                            <div class="review-score">4.7</div>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                            <br>
                                            <div class="reviews-count">9 reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="geodir-category-content fl-wrap title-sin_item">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Handmade Shop</a></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 34-42 Montgomery St , NY, USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities : </div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a class="listing-item-category-wrap">
                                            <div class="listing-item-category green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                            <span>Shopping</span>
                                        </a>
                                        <div class="geodir-opt-list">
                                            <ul class="no-list-style">
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span> </a></li>
                                                <li>
                                                    <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/28.jpg'},{'src': 'images/all/29.jpg'}, {'src': 'images/all/30.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-level geodir-category_price">
                                            <span class="price-level-item" data-pricerating="3"></span>
                                            <span class="price-name-tooltip">Pricey</span>
                                        </div>
                                        <div class="geodir-category_contacts">
                                            <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                            <ul class="no-list-style">
                                                <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="images/all/18.jpg" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                        <span class="avatar-tooltip">Added By <strong>Alisa Noory</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_close"><i class="fal fa-lock-open"></i>Close Now</div>
                                    <div class="geodir-category-opt">
                                        <div class="listing-rating-count-wrap">
                                            <div class="review-score">4.1</div>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                            <br>
                                            <div class="reviews-count">26 reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="geodir-category-content fl-wrap title-sin_item">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Iconic Cafe in Manhattan</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities : </div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a class="listing-item-category-wrap">
                                            <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                            <span>Restaurants</span>
                                        </a>
                                        <div class="geodir-opt-list">
                                            <ul class="no-list-style">
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#" class="single-map-item" data-newlatitude="40.76221766" data-newlongitude="-73.96511769"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>6</strong></span> </a></li>
                                                <li>
                                                    <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/18.jpg'},{'src': 'images/all/21.jpg'}, {'src': 'images/all/22.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-level geodir-category_price">
                                            <span class="price-level-item" data-pricerating="2"></span>
                                            <span class="price-name-tooltip">Moderate</span>
                                        </div>
                                        <div class="geodir-category_contacts">
                                            <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                            <ul class="no-list-style">
                                                <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <div class="pagination fwmpag">
                            <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                            <a href="#">1</a>
                            <a href="#" class="current-page">2</a>
                            <a href="#">3</a>
                            <a href="#">...</a>
                            <a href="#">7</a>
                            <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                    <!-- listing-item-container end -->
                </div>
            </div>
        </section>
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--content end-->
</div>
<!-- wrapper end-->
<?= $this->endSection() ?>