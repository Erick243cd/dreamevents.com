<?= doctype() ?>
<html class="no-js" lang="<?= $links->lang ?>">

<head>
    <?php
    foreach ($links->metaHeader as $meta) {
        echo $meta;
    }
    ?>
    <?php
    foreach ($links->cssLinks as $csslinks) {
        echo $csslinks;
    }

    ?>
    <title><?= $links->title ?></title>

    <?= $links->faveicon ?>
</head>

<body>
    <header>
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="left-content d-flex align-items-center">
                            <div class="logo">
                                <a href="index-2.html"><?= img('public/assets/img/logo/xlogo.png.pagespeed.ic.7q74cPMyQA.png', '', 'alt="Logo"') ?></a>
                            </div>

                            
                            <form action="#" class="form-box">
                                <input type="text" name="Search" placeholder="Search">
                                <div class="search-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                            </form>


                            <div class="main-menu d-none d-lg-block" id="navbarTogglerDemo01">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index-2.html">Home</a></li>
                                        <li><a href="listing.html">Listing <i class="fas fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="listing.html">Listing</a></li>
                                                <li><a href="details.html">Listing Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>


                        </div>

                        <div class="buttons">
                            <ul>
                                <li class="button-header">
                                    <a href="login.html" class="header-btn mr-30">Sign In</a>
                                    <a href="#" class="btn header-btn2">Add Listing</a>
                                </li>
                            </ul>
                        </div>

                        <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                    </div>
                    <!-- <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                    </div> -->


                </div>
            </div>
        </div>
    </header>

    <?= $this->renderSection("content") ?>

    <footer>
        <div class="footer-wrapper gray-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-20">

                                    <div class="footer-logo mb-35">
                                        <a href="index-2.html"><img src="assets/img/logo/xlogo2_footer.png.pagespeed.ic.7q74cPMyQA.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Seddo eiusmod tempor incididunt ut labore et dolore magna aliqua. Conse
                                                ctetur pisicin elit, sed do eiusmod tempor.</p>
                                        </div>
                                    </div>

                                    <div class="footer-social">
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offset-xl-1 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Navigation</h4>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Services</h4>
                                    <ul>
                                        <li><a href="#">Care</a></li>
                                        <li><a href="#">Treatment</a></li>
                                        <li><a href="#">Trainingl</a></li>
                                        <li><a href="#">Hygienic Care</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle mb-10">
                                    <h4>Subscribe newsletter</h4>
                                    <p>Subscribe our newsletter to get updates about our services and offers.</p>
                                </div>

                                <div class="footer-form mb-20">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Enter your email" class="placeholder hide-on-focus">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved |
                                        This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <?php
    foreach ($links->scriptLinks as $script) {
        echo $script;
    }
    ?>

    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script>
        eval(mod_pagespeed_h6FSS0R5Nk);
    </script>
    <script>
        eval(mod_pagespeed_nAF17_H0Ki);
    </script>

    <script src="assets/js/owl.carousel_slick.min.js"></script>
    <script>
        eval(mod_pagespeed_4EWkIIjjEL);
    </script>
    <script>
        eval(mod_pagespeed_b61UQMOxQz);
    </script>
    <script src="assets/js/jquery_slicknav.min.js"></script>
    <script>
        eval(mod_pagespeed_u74TJ7b4ya);
    </script>

    <script>
        eval(mod_pagespeed_jkoDhHOz0u);
    </script>
    <script>
        eval(mod_pagespeed_LXmZQChS9I);
    </script>
    <script>
        eval(mod_pagespeed_weSlV7qHIh);
    </script>
    <script>
        eval(mod_pagespeed_5FaTDDR9BI);
    </script>
    <script>
        eval(mod_pagespeed_$E6h4J_eHl);
    </script>

    <script>
        eval(mod_pagespeed_3Bn1QXBxeT);
    </script>
    <script src="assets/js/jquery.form.js%2bjquery.validate.min.js%2bmail-script.js%2bjquery.ajaxchimp.min.js%2bplugins.js%2bmain.js.pagespeed.jc.UiK9nRMxfh.js"></script>
    <script>
        eval(mod_pagespeed_wwngUhmEap);
    </script>
    <script>
        eval(mod_pagespeed_p1DPFKbsIO);
    </script>
    <script>
        eval(mod_pagespeed_qHuP$p3A$U);
    </script>
    <script>
        eval(mod_pagespeed_cha65DBll0);
    </script>

    <script>
        eval(mod_pagespeed__9GFzCTG35);
    </script>
    <script>
        eval(mod_pagespeed_3_hkYAdE2S);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7104107d39519cba","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/gricklo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 16:45:39 GMT -->

</html>