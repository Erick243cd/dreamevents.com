<!-- wrapper-->
<div id="wrapper">
    <!-- content-->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
            <div class="container">
                <div class="dashboard-breadcrumbs breadcrumbs"><a href="<?= site_url() ?> ">Accueil</a><a href="#">Dashboard</a><span>Profile</span></div>

                <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                    <h1>Bienvenue : <span><?= $userdata->userFirstName ?></span></h1>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="dashboard-header fl-wrap">
                <div class="container">
                    <div class="dashboard-header_conatiner fl-wrap">
                        <div class="dashboard-header-avatar">
                            <img src="<?= site_url("public/assets/images/avatar/$userdata->userAvatar") ?>" alt="<?= $userdata->userFirstName ?>">
                            <a href="#" class="color-bg edit-prof_btn"><i class="fal fa-edit"></i></a>
                        </div>
                        <div class="dashboard-header-stats-wrap">
                            <div class="dashboard-header-stats">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--  dashboard-header-stats-item -->
                                        <div class="swiper-slide">
                                            <div class="dashboard-header-stats-item">
                                                <i class="fal fa-map-marked"></i>
                                                Services Actifs
                                                <span><?= count($myservices) ?></span>
                                            </div>
                                        </div>
                                        <!--  dashboard-header-stats-item end -->
                                        <!--  dashboard-header-stats-item -->
                                        <!-- <div class="swiper-slide">
                                            <div class="dashboard-header-stats-item">
                                                <i class="fal fa-chart-bar"></i>
                                                Listing Views
                                                <span>1054</span>
                                            </div>
                                        </div> -->
                                        <!--  dashboard-header-stats-item end -->
                                        <!--  dashboard-header-stats-item -->
                                        <!-- <div class="swiper-slide">
                                            <div class="dashboard-header-stats-item">
                                                <i class="fal fa-comments-alt"></i>
                                                Total Reviews
                                                <span>79</span>
                                            </div>
                                        </div> -->
                                        <!--  dashboard-header-stats-item end -->
                                        <!--  dashboard-header-stats-item -->
                                        <!-- <div class="swiper-slide">
                                            <div class="dashboard-header-stats-item">
                                                <i class="fal fa-heart"></i>
                                                Times Bookmarked
                                                <span>654</span>
                                            </div>
                                        </div> -->
                                        <!--  dashboard-header-stats-item end -->
                                    </div>
                                </div>
                            </div>
                            <!--  dashboard-header-stats  end -->
                            <!-- <div class="dhs-controls">
                                <div class="dhs dhs-prev"><i class="fal fa-angle-left"></i></div>
                                <div class="dhs dhs-next"><i class="fal fa-angle-right"></i></div>
                            </div> -->
                        </div>
                        <!--  dashboard-header-stats-wrap end -->
                        <a class="add_new-dashboard" href="<?= site_url("addservice")?>">Ajouter Service <i class="fal fa-layer-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
            <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
            <div class="circle-wrap" style="left:120px;bottom:120px;" data-scrollax="properties: { translateY: '-200px' }">
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
        <!--  section  end-->
        <!--  section  -->
        <section class="gray-bg main-dashboard-sec" id="sec1">
            <div class="container">

                <!--  dashboard-menu-->
                <div class="col-md-3">
                    <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Dashboard menu</div>
                    <div class="clearfix"></div>
                    <div class="fixed-bar fl-wrap" id="dash_menu">
                        <div class="user-profile-menu-wrap fl-wrap block_box">
                            <!-- user-profile-menu-->
                            <div class="user-profile-menu">
                                <h3>Main</h3>
                                <ul class="no-list-style">
                                    <li><a href="<?= $page == 'profile' ? "#" : site_url("profile")  ?>" class="<?= $page == 'profile' ? "user-profile-act" : "" ?>"><i class="fal fa-user-edit"></i> Editer profile</a></li>
                                    <li><a href="<?= $page == 'userpasseword' ? "#" : site_url("userpasseword")  ?>" class="<?= $page == 'userpasseword' ? "user-profile-act" : "" ?>"><i class="fal fa-key"></i>Changer Mot de passe</a></li>
                                </ul>
                            </div>
                            <!-- user-profile-menu end-->
                            <!-- user-profile-menu-->
                            <div class="user-profile-menu">
                                <h3>Services</h3>
                                <ul class="no-list-style">
                                    <?php if ($userdata->userRole !== 'provider') : ?>
                                        <li><a href="<?= $page == 'allservices' ? "#" : site_url("allservices") ?>" class="<?= $page == 'allservices' ? "user-profile-act" : "" ?>"><i class="fal fa-th-list"></i> Services</a></li>
                                    <?php else : ?>
                                        <li><a href="<?= $page == 'newService' ? "#" : site_url("addservice") ?>" class="<?= $page == 'newService' ? "user-profile-act" : "" ?>"><i class="fal fa-file-plus"></i> Ajouter</a></li>
                                        <li><a href="<?= $page == 'MyServices' ? "#" : site_url("userservices") ?>" class="<?= $page == 'MyServices' ? "user-profile-act" : "" ?>"> <i class="fal fa-calendar-check"></i> Mes services <span><?= count($myservices) ?></span></a></li>
                                    <?php endif ?>
                                </ul>
                            </div>
                            <!-- user-profile-menu end-->
                            <?= form_open("logout") ?>
                            <button class="logout_btn color2-bg" type="submit" onclick="return confirm('Etes-vous sûr de vous déconnecter ?');">Log Out <i class="fas fa-sign-out"></i></button>
                            <?= form_close() ?>
                        </div>
                    </div>
                    <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu">Remonter en haut<i class="fas fa-caret-up"></i></a>
                    <div class="clearfix"></div>
                </div>
                <!-- dashboard-menu  end-->