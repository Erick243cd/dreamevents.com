<!--section  -->
<section class="hero-section" data-scrollax-parent="true">
    <div class="bg-tabs-wrap">
        <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
            <div class="bg bg_tabs" data-bg="images/bg/hero/1.jpg"></div>
            <div class="overlay op7"></div>
        </div>
    </div>
    <div class="container small-container">
        <div class="intro-item fl-wrap">
            <span class="section-separator"></span>
            <div class="bubbles">
                <h1>Organisez vos événements avec aisance.</h1>
            </div>
            <h3>Nous mettons à votre disposition des moyens prêts pour l'organisation de vos événements .</h3>
        </div>
        <!-- main-search-input-tabs-->
        <div class="main-search-input-tabs  tabs-act fl-wrap">
            <ul class="tabs-menu change_bg no-list-style">

                <li class="current"><a href="#tab-inpt1" data-bgtab="<?= site_url("public/assets/images/bg/hero/1.jpg") ?>"> Lubumbashi</a></li>
                <li><a href="#tab-inpt2" data-bgtab="<?= site_url("public/assets/images/bg/hero/2.jpg") ?>"> Kolwezi</a></li>
                <li><a href="#tab-inpt3" data-bgtab="<?= site_url("public/assets/images/bg/hero/3.jpg") ?>"> Likasi</a></li>
                <li><a href="#tab-inpt4" data-bgtab="<?= site_url("public/assets/images/bg/hero/4.jpg") ?>"> Kipushi</a></li>
                <li><a href="#tab-inpt5" data-bgtab="<?= site_url("public/assets/images/bg/hero/1.jpg") ?>"> Kasumbalesa</a></li>
            </ul>
            <!--tabs -->
            <div class="tabs-container fl-wrap">
                <!--tab Lubumbashi city -->
                <?= form_open('search') ?>
                <div class="tab">
                    <div id="tab-inpt1" class="tab-content first-tab">
                        <div class="main-search-input-wrap fl-wrap">
                            <div class="main-search-input fl-wrap">
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" disabled require name="city">
                                        <option value="lubumbashi">Lubumbashi</option>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" required name="services">
                                        <option value="all-services">Tous types</option>
                                        <?php foreach ($categories as $row) : ?>
                                            <option value="<?= $row->categorySlug ?>"><?= $row->categoryName_fr ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <label><i class="fal fa-keyboard"></i></label>
                                    <input type="text" placeholder="Mots clés (Optionnel)" value="" name="keywords" />
                                </div>
                                <button class="main-search-button color2-bg" type="submit">Search <i class="far fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
                <!--tab end lubumbashi city -->
                <!--tab kolwezi city -->
                <?= form_open('search') ?>
                <div class="tab">
                    <div id="tab-inpt2" class="tab-content">
                        <div class="main-search-input-wrap fl-wrap">
                            <div class="main-search-input fl-wrap">
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" disabled require name="city">
                                        <option value="kolwezi">Kolwezi</option>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" required name="services">
                                        <option value="all-services">Tous types</option>
                                        <?php foreach ($categories as $row) : ?>
                                            <option value="<?= $row->categorySlug ?>"><?= $row->categoryName_fr ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <label><i class="fal fa-keyboard"></i></label>
                                    <input type="text" placeholder="Mots clés (Optionnel)" value="" name="keywords" />
                                </div>
                                <button class="main-search-button color2-bg" type="submit">Search <i class="far fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
                <!--tab end kolwezi city -->
                <!--tab likasi city -->
                <?= form_open('search') ?>
                <div class="tab">
                    <div id="tab-inpt3" class="tab-content">
                        <div class="main-search-input-wrap fl-wrap">
                            <div class="main-search-input fl-wrap">
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" disabled require name="city">
                                        <option value="likasi">Likasi</option>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" required name="services">
                                        <option value="all-services">Tous types</option>
                                        <?php foreach ($categories as $row) : ?>
                                            <option value="<?= $row->categorySlug ?>"><?= $row->categoryName_fr ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <label><i class="fal fa-keyboard"></i></label>
                                    <input type="text" placeholder="Mots clés (Optionnel)" value="" name="keywords" />
                                </div>
                                <button class="main-search-button color2-bg" type="submit">Search <i class="far fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
                <!--tab end likasi city -->

                <!--tab kipushi city -->
                <?= form_open('search') ?>
                <div class="tab">
                    <div id="tab-inpt4" class="tab-content">
                        <div class="main-search-input-wrap fl-wrap">
                            <div class="main-search-input fl-wrap">
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" disabled require name="city">
                                        <option value="kipushi">Kipushi</option>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" required name="services">
                                        <option value="all-services">Tous types</option>
                                        <?php foreach ($categories as $row) : ?>
                                            <option value="<?= $row->categorySlug ?>"><?= $row->categoryName_fr ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <label><i class="fal fa-keyboard"></i></label>
                                    <input type="text" placeholder="Mots clés (Optionnel)" value="" name="keywords" />
                                </div>
                                <button class="main-search-button color2-bg" type="submit">Search <i class="far fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
                <!--tab end kipushi city -->

                <!--tab kasumbalesa city -->
                <?= form_open('search') ?>
                <div class="tab">
                    <div id="tab-inpt5" class="tab-content">
                        <div class="main-search-input-wrap fl-wrap">
                            <div class="main-search-input fl-wrap">
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" disabled require name="city">
                                        <option value="kasumbalesa">Kasumbalesa</option>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <select data-placeholder="Loaction" class="chosen-select on-radius" required name="services">
                                        <option value="all-services">Tous types</option>
                                        <?php foreach ($categories as $row) : ?>
                                            <option value="<?= $row->categorySlug ?>"><?= $row->categoryName_fr ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="main-search-input-item">
                                    <label><i class="fal fa-keyboard"></i></label>
                                    <input type="text" placeholder="Mots clés (Optionnel)" value="" name="keywords" />
                                </div>
                                <button class="main-search-button color2-bg" type="submit">Search <i class="far fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
                <!--tab end kasumbalesa city -->
            </div>
            <!--tabs end-->
        </div>
        <!-- main-search-input-tabs end-->
        <div class="hero-categories fl-wrap">
            <h4 class="hero-categories_title">Juste regarder autour de vous ? Utiliser la recherche rapide par catégorie :</h4>
            <ul class="no-list-style">
                <li><a href="listing.html"><i class="far fa-cheeseburger"></i><span>Restaurants</span></a></li>
                <li><a href="listing.html"><i class="far fa-bed"></i><span>Hotels</span></a></li>
                <li><a href="listing.html"><i class="far fa-shopping-bag"></i><span>Shops</span></a></li>
                <li><a href="listing.html"><i class="far fa-dumbbell"></i><span>Fitness</span></a></li>
                <li><a href="listing.html"><i class="far fa-cocktail"></i><span>Events</span></a></li>
            </ul>
        </div>
    </div>
    <div class="header-sec-link">
        <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
    </div>
</section>
<!--section end-->
<!--section  -->