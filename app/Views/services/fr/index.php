<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>
<!-- wrapper-->
<div id="wrapper">
    <!-- content-->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section single-par" data-scrollax-parent="true">
            <div class="bg par-elem " data-bg="<?= site_url("public/assets/images/bg/35.jpg") ?>" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay op7"></div>
            <div class="container">
                <div class="section-title center-align big-title">
                    <h2><span>Services</span></h2>
                    <span class="section-separator"></span>
                    <div class="breadcrumbs fl-wrap"><a href="<?= site_url()?>">Accueil</a><span>Services</span></div>
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
                        <h2><span><?= count($services); ?> Services </span></h2>
                    </div>
                    <!-- list-main-wrap-title end-->
                    <!-- list-main-wrap-opt-->
                    <div class="list-main-wrap-opt">
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

                        <!--tabs -->
                        <div class="tabs-container fl-wrap">
                            <!--tab -->
                            <div class="tab">
                                <form action="<?= site_url('search') ?>" method="post">
                                    <div id="filters-search" class="tab-content  first-tab ">
                                        <div class="fl-wrap">
                                            <div class="row">
                                                <!-- listsearch-input-item-->
                                                <div class="col-md-4">
                                                    <div class="listsearch-input-item">
                                                        <span class="iconn-dec"><i class="far fa-bookmark"></i></span>
                                                        <input type="text" placeholder="Que cherchez-vous?" value="<?= set_value("keywords") ?>" name="keywords" />
                                                    </div>
                                                </div>
                                                <!-- listsearch-input-item end-->
                                                <!-- listsearch-input-item-->
                                                <div class="col-md-3">
                                                    <div class="listsearch-input-item">
                                                        <select data-placeholder="Catégorie" class="chosen-select no-search-select" name="category">
                                                            <option value="all">Tous types</option>
                                                            <?php foreach ($allcategories as $row) : ?>
                                                                <option value="<?= $row->categoryId ?>"><?= $row->categoryName_fr ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- listsearch-input-item end-->
                                                <!-- listsearch-input-item-->
                                                <div class="col-md-3">
                                                    <div class="listsearch-input-item">
                                                        <select data-placeholder="Ville" class="chosen-select no-search-select" name="city">
                                                            <option value="">Ville</option>
                                                            <?php foreach ($cities as $row) : ?>
                                                                <option value="<?= $row->cityId ?>"><?= $row->cityName_fr ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- listsearch-input-item end-->

                                                <!-- listsearch-input-item-->
                                                <div class="col-md-2">
                                                    <div class="listsearch-input-item">
                                                        <button class="header-search-button color-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i><span>Search</span></button>
                                                    </div>
                                                </div>
                                                <!-- listsearch-input-item end-->
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--tab end-->

                        </div>
                        <!--tabs end-->
                    </div>
                    <!-- listsearch-input-wrap end-->
                    <!-- listing-item-container -->
                    <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
                        <!-- listing-item  -->
                        <?php foreach ($services as $row) : ?>
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <!-- <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div> -->
                                        <a href="<?= site_url("services/$row->serviceSlug") ?>" class="geodir-category-img-wrap fl-wrap">
                                            <img src="<?= site_url("public/assets/images/services/covers/$row->serviceCoverImage") ?>" alt="<?= $row->serviceName_fr ?>">
                                        </a>
                                        <div class="listing-avatar"><a href="https://wa.me/243825363907?text=Bonjour Tayari events, j'ai été intéressé par le service <?= $row->serviceName_fr ?> et je voulais en savoir plus..." title="Contacter le propriétaire de <?= $row->serviceName_fr ?>"><img src="<?= site_url("public/assets/images/avatar/007-whatsapp.png") ?>" alt="Tayari Events"></a>
                                            <span class="avatar-tooltip">Contactez <strong> <?= $row->serviceName_fr ?></strong></span>
                                        </div>
                                        <?php if ($row->isactive == 1) : ?>
                                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Ouvert Maintenant</div>
                                        <?php else : ?>
                                            <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Fermé Maintenant</div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="<?= site_url("services/ $row->serviceSlug") ?>"><?= $row->serviceName_fr ?></a><?= $row->ispremium == 1 ? '<span class="verified-badge"><i class="fal fa-check"></i></span>' : "" ?></h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i><?= $row->cityName_fr ?>, RDC</a></div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a class="listing-item-category-wrap">
                                                <div class="listing-item-category red-bg"><i class="<?=$row->categoryIcon ?>"></i></div>
                                                <span><?= $row->categoryName_fr ?></span>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="mailto:contact@tayari-events.com" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                    <li><a href="#!" class="single-map-item" data-newlatitude="" data-newlongitude=""><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip"><?= $row->cityName_fr ?>  <strong>RDC</strong></span> </a></li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?= site_url("public/assets/images/services/covers/$row->serviceCoverImage")?>'},{'src': '<?= site_url("public/assets/images/services/covers/$row->serviceCoverImage")?>'}, {'src': '<?= site_url("public/assets/images/services/covers/$row->serviceCoverImage")?>'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallerie</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="phone:+243825363907">+243825363907</a></li>
                                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a href="mailto:contact@tayari-events.com">contact@tayari-events.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach ?>

                        <!-- listing-item end -->
                        <!-- <div class="pagination fwmpag">
                            <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                            <a href="#">1</a>
                            <a href="#" class="current-page">2</a>
                            <a href="#">3</a>
                            <a href="#">...</a>
                            <a href="#">7</a>
                            <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                        </div> -->
                    </div>
                    <!-- listing-item-container end -->
                </div>
            </div>
        </section>
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--content end-->
</div>
<!-- wrapper end--

<?= $this->endSection() ?>