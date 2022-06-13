<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>

<!-- wrapper-->
<div id="wrapper">
    <!-- content-->
    <div class="content">


        <?= $this->include("partials/fr/home_hero_section") ?>

        <section class="slw-sec" id="sec1">
            <div class="section-title">
                <h2>Services les plus sollicités</h2>
                <div class="section-subtitle">Newest Listings</div>
                <span class="section-separator"></span>
                <p>Plusieurs sollicitations on été enregistrées au courant de 4 dernières semaines sur les services ci-après :</p>
            </div>
            <div class="listing-slider-wrap fl-wrap">
                <div class="listing-slider fl-wrap">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--  swiper-slide  -->
                            <?php foreach ($premiumservices as $row) : ?>
                                <div class="swiper-slide">
                                    <div class="listing-slider-item fl-wrap">
                                        <!-- listing-item  -->
                                        <div class="listing-item listing_carditem">
                                            <article class="geodir-category-listing fl-wrap">
                                                <div class="geodir-category-img">
                                                    <!-- <div class="geodir-js-favorite_btn"><i class="fa fa-whatsapp"></i><span>Save</span></div> -->
                                                    <a href="<?= site_url("services/$row->serviceSlug") ?>" title="En savoir plus sur  <?= $row->serviceName_fr ?>" class="geodir-category-img-wrap fl-wrap">
                                                        <img src="<?= site_url("public/assets/images/services/covers/$row->serviceCoverImage") ?>" alt="<?= $row->serviceName_fr ?> Cover">
                                                    </a>
                                                    <?php if ($row->isactive == 1) : ?>
                                                        <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Ouvert Maintenant</div>
                                                    <?php else : ?>
                                                        <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Fermé Maintenant</div>
                                                    <?php endif; ?>
                                                    <div class="geodir-category-opt">
                                                        <div class="geodir-category-opt_title">
                                                            <h4><a href="https://wa.me/243825363907?text=Bonjour Tayari events, j'ai été intéressé par le service <?= $row->serviceName_fr ?> et je voulais en savoir plus..." title="Contacter le propriétaire de <?= $row->serviceName_fr ?>"><?= $row->serviceName_fr ?></a></h4>
                                                            <div class="geodir-category-location"><a href="<?= site_url("services/$row->serviceSlug") ?>"><i class="fas fa-map-marker-alt"></i> <?= $row->cityName_fr ?></a></div>
                                                        </div>
                                                        <div class="listing-rating-count-wrap">
                                                        </div>
                                                        <div class="listing_carditem_footer fl-wrap">
                                                            <a class="listing-item-category-wrap" href="https://wa.me/243825363907?text=Bonjour Tayari events, j'ai été intéressé par le service <?= $row->serviceName_fr ?> et je voulais en savoir plus..." title="Contactez le responsable">
                                                                <div class="listing-item-category red-bg"><i class="<?= $row->categoryIcon ?>"></i></div>
                                                                <span><?= $row->categoryName_fr ?></span>
                                                            </a>
                                                            <div class="post-author"><a href="<?= site_url("services/$row->serviceSlug") ?>"><img src="<?= site_url("public/assets/images/avatar/$row->userAvatar") ?>" alt=""><span>Par , <?= $row->userFirstName ?></span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- listing-item end -->
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <!--  swiper-slide end  -->

                        </div>
                    </div>
                    <div class="listing-carousel-button listing-carousel-button-next2"><i class="fas fa-caret-right"></i></div>
                    <div class="listing-carousel-button listing-carousel-button-prev2"><i class="fas fa-caret-left"></i></div>
                </div>
                <div class="tc-pagination_wrap">
                    <div class="tc-pagination2"></div>
                </div>
            </div>
        </section>
        <!--section end-->
        <div class="sec-circle fl-wrap"></div>
        <!--section -->
        <section class="gray-bg hidden-section particles-wrapper">
            <div class="container">
                <div class="section-title">
                    <h2>Plus de 5 villes en RDC</h2>
                    <div class="section-subtitle"></div>
                    <span class="section-separator"></span>
                    <p>Partout où vous êtes dans le Grand Katanga, Trouvez avec facilité un service que vous désirez .</p>
                </div>
                <div class="listing-item-grid_container fl-wrap">
                    <div class="row">
                        <?php foreach ($servicesByCity as $row) : ?>
                            <div class="<?= $row->cityName_fr == 'Lubumbashi' ? 'col-sm-8' : 'col-sm-4' ?>">
                                <div class="listing-item-grid">
                                    <div class="bg" data-bg="<?= site_url("public/assets/images/cities/$row->cityImage") ?>"></div>
                                    <div class="d-gr-sec"></div>
                                    <div class="listing-counter color2-bg"><span><?= $row->nbCities ?> </span> Service<?= $row->nbCities > 1 ? 's' : '' ?></div>
                                    <div class="listing-item-grid_title">
                                        <h3><a href="<?= site_url("cities/$row->cityName_fr") ?>" title="Services <?= $row->cityName_fr ?>"><?= $row->cityName_fr ?></a></h3>
                                        <p>Découvrez les meilleurs services pour vos événements dans la ville de <?= $row->cityName_fr ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                        <!--  listing-item-grid end  -->
                    </div>
                </div>
                <a href="<?= site_url("cities") ?>" class="btn dec_btn color2-bg">Voir dans toutes les villes<i class="fal fa-arrow-alt-right"></i></a>
            </div>

        </section>
        <!--  section  -->


        <!--section  -->
        <section class="parallax-section" data-scrollax-parent="true">
            <div class="bg par-elem " data-bg="<?= site_url("public/assets/images/bg/tayari-event-video-cover.webp") ?>" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay op7"></div>
            <!--container-->
            <div class="container">
                <div class="video_section-title fl-wrap">
                    <h4>Tayari Events facilite l'organisation événements</h4>
                    <h2>Préparez votre événement avec aisance et tranquilité <br> avec Tayari Events.</h2>
                </div>
                <a href="<?= site_url("public/assets/video/2.mp4") ?>" class="promo-link big_prom   image-popup"><i class="fal fa-play"></i><span>Voir la Video</span></a>
            </div>
        </section>
        <!--section end-->
        <!--section  -->
        <section data-scrollax-parent="true">
            <div class="container">
                <div class="section-title">
                    <h2>Comment ça marche</h2>
                    <div class="section-subtitle">Tayari Events </div>
                    <span class="section-separator"></span>
                    <p>Certes, Vous vous demandez toujours, de quelle manière nous facilitons l'organisation
                        des événements et quelles sont les avantages pour vous de passer par nous avant d'amorcer le processus d'organisation de vos événements. </p>
                </div>
                <div class="process-wrap fl-wrap">
                    <ul class="no-list-style">
                        <li>
                            <div class="process-item">
                                <span class="process-count">01 </span>
                                <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                <h4>Tayari Events avec ses services</h4>
                                <p>Nous avons signé des contrats de parténariat avec les responsables de services qui sont présents sur la plate-forme Tayari Events en vue de rendre facile la preparation des vos événements.</p>
                            </div>
                            <span class="pr-dec"></span>
                        </li>
                        <li>
                            <div class="process-item">
                                <span class="process-count">02</span>
                                <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                <h4> Et quelles sonts les avantages pour vous ?</h4>
                                <p>En passant par Tayari Events, vous bénéficiez d'une marge de réduction allant de 5 à 10% du coût total dû.
                                    En plus, qu'est-ce qu'il y a de meilleurs pour
                                    l'organisation d'un événement si ce n'est de trouver tout ce qui va avec chez un seul facilitateur ?
                                    Alors plus besoin de vous faire mal à la tête. </p>
                            </div>
                            <span class="pr-dec"></span>
                        </li>
                        <li>
                            <div class="process-item">
                                <span class="process-count">03</span>
                                <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                <h4> Et comment vous y prendre</h4>
                                <p>C'est simple, commencez par chosir un service qui vous
                                    intéresse dans la ville où vous êtes ou celle où vous souhaitez l'exécuter,
                                    ensuite contactez-nous via les boutons qui vous sont affichés,
                                    nous sommes disponnibles pour vous répondre ou même vous recontacter.</p>
                            </div>
                        </li>
                    </ul>
                    <!-- <div class="process-end"><i class="fal fa-check"></i></div> -->
                </div>
            </div>
        </section>
        <!--section end-->
        <!--section  -->
        <section class="gradient-bg hidden-section" data-scrollax-parent="true">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="colomn-text  pad-top-column-text fl-wrap">
                            <div class="colomn-text-title">
                                <h3>Un peu de détails techniques</h3>
                                <p>Dans le but de satisfaire les visiteus de notre plate-forme,
                                    nous avons fait de sorte que la plate-forme sois conçue avec le principe de PWA (Progressive Web Application),
                                    une application web progressive que vous pouvez installer sur vos smart-phones ous vos PC pendant votre navigation.
                                    De ce fait vous pouvez naviguer sur la plate-forme Tayari Events même hors connexion internet.</p>
                                <a href="#" class="down-btn color3-bg"><i class="fab fa-chrome"></i> Google Chrome </a>
                                <a href="#" class="down-btn color3-bg"><i class="fab fa-safari"></i> Safari </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="collage-image">
                            <!-- <img src="#<?php //site_url("public/assets/images/sapi.png") 
                                        ?>" class="main-collage-image" > -->
                            <div class="images-collage-title color2-bg icdec"> <img src="<?= site_url("public/assets/images/logo.png") ?>" alt="Tayari Events Logo"></div>
                            <div class="images-collage_icon green-bg" style="right:-20px; top:120px;"><i class="fal fa-thumbs-up"></i></div>
                            <div class="collage-image-min cim_1"><img src="<?= site_url("public/assets/images/api/1.png") ?>" alt="Tayari Events PWA"></div>
                            <div class="collage-image-min cim_2"><img src="<?= site_url("public/assets/images/api/2.png") ?>" alt="Tayari Events PWA"></div>
                            <div class="collage-image-btn green-bg">Choisir un service</div>
                            <div class="collage-image-input">Rechercher <i class="fa fa-search"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
            <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
            <div class="circle-wrap" style="left:270px;top:120px;" data-scrollax="properties: { translateY: '-200px' }">
                <div class="circle_bg-bal circle_bg-bal_small"></div>
            </div>
            <div class="circle-wrap" style="right:420px;bottom:-70px;" data-scrollax="properties: { translateY: '150px' }">
                <div class="circle_bg-bal circle_bg-bal_big"></div>
            </div>
            <div class="circle-wrap" style="left:420px;top:-70px;" data-scrollax="properties: { translateY: '100px' }">
                <div class="circle_bg-bal circle_bg-bal_big"></div>
            </div>
            <div class="circle-wrap" style="left:40%;bottom:-70px;">
                <div class="circle_bg-bal circle_bg-bal_middle"></div>
            </div>
            <div class="circle-wrap" style="right:40%;top:-10px;">
                <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
            </div>
            <div class="circle-wrap" style="right:55%;top:90px;">
                <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
            </div>
        </section>
        <!--section end-->
    </div>
    <!--content end-->
</div>
<!-- wrapper end-->
<?= $this->endSection() ?>