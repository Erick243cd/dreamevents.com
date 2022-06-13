<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from townhub.kwst.net/login-sign.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2022 23:13:22 GMT -->

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Tayari - Events  Register-Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?= site_url("public/assets/css/reset.css") ?>">
    <link type="text/css" rel="stylesheet" href="<?= site_url("public/assets/css/plugins.css") ?>">
    <link type="text/css" rel="stylesheet" href="<?= site_url("public/assets/css/style.css") ?>">
    <link type="text/css" rel="stylesheet" href="<?= site_url("public/assets/css/color.css") ?>">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="<?= site_url("public/assets/images/favicon.ico") ?>">
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
        <!--login-column  -->
        <div class="login-column">
            <div class="login-column_header">
                <img src="<?= site_url("public/assets/images/logo.png") ?>" alt="">
                <div class="clearfix"></div>
                <h4>Tayari Events, Authentification .</h4>
            </div>
            <div class="main-register-holder tabs-act">
                <div class="main-register fl-wrap">
                    <ul class="tabs-menu fl-wrap no-list-style">
                        <li class="<?= $page == 'login' ? 'current' : '' ?>"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                        <li class="<?= $page == 'register' ? 'current' : '' ?>"><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                    </ul>
                    <!--tabs -->
                    <div class="tabs-container">
                        <div class="tab">
                            <!--tab -->
                            <div id="tab-1" class="tab-content <?= $page == 'login' ? 'first-tab' : '' ?>">
                                <div class="custom-form">
                                    <form method="post" action="<?= site_url("login") ?>">
                                        <label>Téléphone <span>*</span></label>
                                        <input name="user_phone" type="text" onClick="this.select()" value="<?= set_value("user_phone") ?>">
                                        <p class="text-red" style="color:red"><?= $validation['user_phone'] ?? null ?></p>

                                        <label>Mot de passe <span>*</span></label>
                                        <input name="user_password" type="password" onClick="this.select()" value="">
                                        <p class="text-red" style="color:red"><?= $validation['user_password'] ?? null ?></p>

                                        <button type="submit" class="btn float-btn color2-bg"> Log In <i class="fas fa-caret-right"></i></button>
                                        <div class="clearfix"></div>
                                        <!-- <div class="filter-tags">
                                            <input id="check-a3" type="checkbox" name="check">
                                            <label for="check-a3">Remember me</label>
                                        </div> -->
                                    </form>
                                    <!-- <div class="lost_password">
                                        <a href="#" class="show-lpt">Lost Your Password?</a>
                                        <div class="lost-password-tootip">
                                            <p>Enter your email and we will send you a password</p>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <button type="submit" class="btn float-btn color2-bg"> Send<i class="fas fa-caret-right"></i></button>
                                            <div class="close-lpt"><i class="far fa-times"></i></div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!--tab end -->
                            <!--tab -->
                            <div class="tab">
                                <div id="tab-2" class="tab-content <?= $page == 'register' ? 'first-tab' : '' ?>">
                                    <div class="custom-form">
                                        <form method="post" class="main-register-form" id="main-register-form2" action="<?= site_url("register") ?>">
                                            <label>Nom complet<span>*</span> </label>
                                            <input name="ufullname" type="text" onClick="this.select()" value="<?= set_value("ufullname") ?>">
                                            <p class="text-red" style="color:red"><?= $validation['ufullname'] ?? null ?></p><br>


                                            <label>Téléphone <span>*</span></label>
                                            <input name="uphone" type="text" onClick="this.select()" value="<?= set_value("uphone") ?>">
                                            <p class="text-red" style="color:red"><?= $validation['uphone'] ?? null ?></p>

                                            <label>Mot de passe <span>*</span></label>
                                            <input name="upassword" type="password" onClick="this.select()" value="">
                                            <p class="text-red" style="color:red"><?= $validation['upassword'] ?? null ?></p>


                                            <label>Confirmer Mot de passe <span>*</span></label>
                                            <input name="upawordconfirm" type="password" onClick="this.select()" value="">
                                            <p class="text-red" style="color:red"><?= $validation['upawordconfirm'] ?? null ?></p>


                                            <div class="clearfix"></div>
                                            <div class="filter-tags ft-list">
                                                <input id="check-a" type="checkbox" name="check" required>
                                                <label for="check-a">J'accepte les <a href="#">Termes et Conditions</a></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <button type="submit" class="btn float-btn color2-bg"> Register <i class="fas fa-caret-right"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--tab end -->
                        </div>
                        <!-- tabs end
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div class="soc-log fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="facebook-log"> Facebook</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!--login-column end-->
        <!--login-column-bg  -->
        <div class="login-column-bg gradient-bg">
            <!--ms-container-->
            <div class="slideshow-container" data-scrollax="properties: { translateY: '300px' }">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--ms_item-->
                        <div class="swiper-slide">
                            <div class="ms-item_fs fl-wrap full-height">
                                <div class="bg" data-bg="images/bg/29.jpg"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <!--ms_item end-->
                        <!--ms_item-->
                        <div class="swiper-slide ">
                            <div class="ms-item_fs fl-wrap full-height">
                                <div class="bg" data-bg="images/bg/13.jpg"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <!--ms_item end-->
                        <!--ms_item-->
                        <div class="swiper-slide">
                            <div class="ms-item_fs fl-wrap full-height">
                                <div class="bg" data-bg="images/bg/35.jpg"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <!--ms_item end-->
                    </div>
                </div>
            </div>
            <!--ms-container end-->
            <div class="login-promo-container">
                <div class="container">
                    <div class="video_section-title fl-wrap">
                        <h4>Enregistrez-vous chez Tayari Events</h4>
                        <h2>Vous désirez ajouter vos services. <br> Tayari Events vous ramène des clients.</h2>
                    </div>
                    <!-- <a href="https://vimeo.com/253953667" class="promo-link big_prom   image-popup"><i class="fal fa-play"></i><span>Promo Video</span></a> -->
                </div>
            </div>
        </div>
        <!--login-column-bg end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="<?= site_url("public/assets/js/jquery.min.js") ?>"></script>
    <script src="<?= site_url("public/assets/js/plugins.js") ?>"></script>
    <script src="<?= site_url("public/assets/js/scripts.js") ?>"></script>
</body>

</html>