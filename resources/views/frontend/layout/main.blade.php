<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/img/favicon.png">

    <!-- FONTS
		============================================ -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/animate.css">

    <!-- FANCYBOX CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/jquery.fancybox.css">

    <!-- BXSLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/jquery.bxslider.css">

    <!-- MEANMENU CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/meanmenu.min.css">

    <!-- JQUERY-UI-SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/jquery-ui-slider.css">

    <!-- NIVO SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/nivo-slider.css">

    <!-- OWL CAROUSEL CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/owl.carousel.css">

    <!-- OWL CAROUSEL THEME CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/owl.theme.css">

    <!-- BOOTSTRAP CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">

    <!-- FONT AWESOME CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css">

    <!-- NORMALIZE CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/normalize.css">

    <!-- MAIN CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/main.css">

    <!-- STYLE CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/style.css">

    <!-- RESPONSIVE CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/responsive.css">

    <!-- IE CSS
		============================================ -->
    <link rel="stylesheet" href="/frontend/css/ie.css">

    <!-- MODERNIZR JS
		============================================ -->
    <script src="/frontend/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/frontend/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- HEADER-TOP START -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- HEADER-LEFT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-left-menu">



                </div>
            </div>
            <!-- HEADER-LEFT-MENU END -->
            <!-- HEADER-RIGHT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-right-menu">
                    <nav>
                        <ul class="list-inline">
                            <li><a href="/frontend/cart.html">Gi??? h??ng</a></li>
                            <li><a href="{{ route('shop.contact') }}">Li??n h???</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- HEADER-RIGHT-MENU END -->
        </div>
    </div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<section class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- LOGO START -->
                <div class="logo">
                    <a href="/frontend/index.html"><img src="/frontend/img/logo.png" alt="bstore logo" /></a>
                </div>
                <!-- LOGO END -->
                <!-- HEADER-RIGHT-CALLUS START -->

                <!-- HEADER-RIGHT-CALLUS END -->
                <!-- CATEGORYS-PRODUCT-SEARCH START -->
                <div class="categorys-product-search">
                    <form action="{{ route('shop.search') }}" method="get" class="search-form-cat">
                        <div class="search-product form-group">
                            <input style="width:100%;" type="text" class="form-control search-form" name="tu-khoa" placeholder="Nh???p t??? kh??a t??m ki???m " />
                            <button class="search-button" value="Search" name="s" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- CATEGORYS-PRODUCT-SEARCH END -->
            </div>
        </div>
    </div>
</section>
<!-- HEADER-MIDDLE END -->
<!-- MAIN-MENU-AREA START -->
<header class="main-menu-area">
    <div class="container">
        <div class="row">
            <!-- SHOPPING-CART START -->

            <!-- SHOPPING-CART END -->
            <!-- MAINMENU START -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
                <div class="mainmenu">
                    <nav>
                        <ul class="list-inline mega-menu">
                            <li><a href="/">Trang ch???</a></li>
                            <li><a href="{{ route('shop.articles') }}">Gi???i thi???u</a></li>
                            @foreach($categories as $parent)
                                @if($parent->parent_id == 0 )
                            <li class="" style="position:relative"><a href="{{ route('shop.category',['slug'=> $parent->slug]) }}">{{ $parent->name }}</a>
                                <!-- DROPDOWN MENU START -->
                                <div class="home-var-menu" style="left: 0px">
                                    <ul class="home-menu">
                                        @foreach($categories as $child)
                                            @if($child->parent_id == $parent->id)
                                                <li><a href="{{ route('shop.category',['slug'=>$child->slug]) }}">{{ $child->name }}</a></li>
                                            @endif

                                        @endforeach
                                    </ul>
                                </div>
                                <!-- DROPDOWN MENU END -->
                            </li>
                                @endif
                            @endforeach
                            <li><a href="{{ route('shop.contact') }}">Li??n H???</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- MAINMENU END -->
        </div>
        <div class="row">
            <!-- MOBILE MENU START -->
            <div class="col-sm-12 mobile-menu-area">
                <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                    <span class="mobile-menu-title">MENU</span>
                    <nav>
                        <ul>
                            <li><a href="/frontend/index.html">Home</a>
                                <ul>
                                    <li><a href="/frontend/index.html">Home variation 1</a></li>
                                    <li><a href="/frontend/index-2.html">Home variation 2</a></li>
                                </ul>
                            </li>
                            <li><a href="/frontend/shop-gird.html">Women</a>
                                <ul>
                                    <li><a href="/frontend/shop-gird.html">Tops</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">T-Shirts</a></li>
                                            <li><a href="/frontend/shop-gird.html">Blouses</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/frontend/shop-gird.html">Dresses</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">Casual Dresses</a></li>
                                            <li><a href="/frontend/shop-gird.html">Summer Dresses</a></li>
                                            <li><a href="/frontend/shop-gird.html">Evening Dresses</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="/frontend/shop-gird.html">men</a>
                                <ul>
                                    <li><a href="/frontend/shop-gird.html">Tops</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">Sports</a></li>
                                            <li><a href="/frontend/shop-gird.html">Day</a></li>
                                            <li><a href="/frontend/shop-gird.html">Evening</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/frontend/shop-gird.html">Blouses</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">Handbag</a></li>
                                            <li><a href="/frontend/shop-gird.html">Headphone</a></li>
                                            <li><a href="/frontend/shop-gird.html">Houseware</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/frontend/shop-gird.html">Accessories</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">Houseware</a></li>
                                            <li><a href="/frontend/shop-gird.html">Home</a></li>
                                            <li><a href="/frontend/shop-gird.html">Health & Beauty</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/frontend/shop-gird.html">clothing</a></li>
                            <li><a href="/frontend/shop-gird.html">tops</a></li>
                            <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                            <li><a href="/frontend/#">Delivery</a></li>
                            <li><a href="/frontend/about-us.html">About us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- MOBILE MENU END -->
        </div>
    </div>
</header>
<!-- MAIN-MENU-AREA END -->
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        @yield('main-content')
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->

<!-- BRAND-CLIENT-AREA START -->

<!-- BRAND-CLIENT-AREA END -->
<!-- COMPANY-FACALITY START -->
<section class="company-facality">
    <div class="container">
        <div class="row">
            <div class="company-facality-row">
                <!-- SINGLE-FACALITY START -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-facality">
                        <div class="facality-icon">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="facality-text">
                            <h3 class="facality-heading-text">FREE SHIPPING</h3>
                            <span>Mi???n ph?? giao h??ng</span>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-FACALITY END -->
                <!-- SINGLE-FACALITY START -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-facality">
                        <div class="facality-icon">
                            <i class="fa fa-umbrella"></i>
                        </div>
                        <div class="facality-text">
                            <h3 class="facality-heading-text">H??? TR??? 24/7</h3>
                            <span>Tham v???n tr???c tuy???n</span>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-FACALITY END -->
                <!-- SINGLE-FACALITY START -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-facality">
                        <div class="facality-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="facality-text">
                            <h3 class="facality-heading-text">LU??N C???P NH???T </h3>
                            <span>Theo d??i tin m???i nh???t</span>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-FACALITY END -->
                <!-- SINGLE-FACALITY START -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-facality">
                        <div class="facality-icon">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <div class="facality-text">
                            <h3 class="facality-heading-text">Ho??n ti???n</h3>
                            <span>?????m b???o tr??? l???i ti???n</span>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-FACALITY END -->
            </div>
        </div>
    </div>
</section>
<!-- COMPANY-FACALITY END -->
<!-- FOOTER-TOP-AREA START -->
<section class="footer-top-area">
    <div class="container">
        <div class="footer-top-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <!-- FOOTER-TOP-LEFT START -->
                    <div class="footer-top-left">
                        <!-- NEWSLETTER-AREA START -->
                        <div class="newsletter-area">
                            <h2>????NG K?? NH???N TIN</h2>
                            <p>????ng k?? danh s??ch g???i th?? c???a ch??ng t??i ????? nh???n th??ng tin c???p nh???t v??? h??ng m???i, ??u ????i ?????c bi???t v?? th??ng tin gi???m gi?? kh??c.</p>
                            <form action="#">
                                <div class="form-group newsletter-form-group">
                                    <input type="text" class="form-control newsletter-form" placeholder="Nh???p Email ....">
                                    <input type="submit" class="newsletter-btn" name="submit" value="G???i" />
                                </div>
                            </form>
                        </div>
                        <!-- NEWSLETTER-AREA END -->
                        <!-- ABOUT-US-AREA START -->
                        <div class="about-us-area">
                            <h2>NEM FASHION</h2>
                            <p>C??ng ty TNHH D???ch v??? v?? Th????ng m???i An Th??nh.
                                S??? ??KKD 0107861393, S??? KH??T Tp. H?? N???i c???p ng??y 04/10/2017</p>
                        </div>
                        <!-- ABOUT-US-AREA END -->
                        <!-- FLLOW-US-AREA START -->
                        <div class="fllow-us-area">
                            <h2>K???T N???I V???I CH??NG T??I</h2>
                            <ul class="flow-us-link">
                                <li><a href="/frontend/#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="/frontend/#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="/frontend/#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="/frontend/#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <!-- FLLOW-US-AREA END -->
                    </div>
                    <!-- FOOTER-TOP-LEFT END -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <!-- FOOTER-TOP-RIGHT-1 START -->
                    <div class="footer-top-right-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-sm">
                                <!-- STATICBLOCK START -->
                                <div class="staticblock">
                                    <h2>TH????NG HI???U</h2>
                                    <h3 style="color:ghostwhite;">Lu??n quan t??m ch??m s??c kh??ch h??ng ??em ?????n cho q??y kh??ch h??ng nh???ng tr???i nghi???m t???t nh???t khi mua s???m h??ng . <br>Mang ?????n nh???ng s???n ph???m t???t nh???t , da d???ng v??? m???u m?? v?? s???n ph???m ,ch????ng tr??nh ch??m kh??ch h??ng , c??c s??? ki???n ??u ????i v???i kh??ch h??ng khi l?? th??nh vi??n c???a shop !!!</h3>
                                </div>
                                <!-- STATICBLOCK END -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <!-- STORE-INFORMATION START -->
                                <div class="Store-Information">
                                    <h2>Th??ng tin</h2>
                                    <ul>
                                        <li>
                                            <div class="info-lefticon">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="info-text">
                                                <p>?????a ch???: Ph??ng 1002, t???ng 10, T??a nh?? NEM
                                                    s??? 545 ???????ng Nguy???n V??n C???, P. Gia Th???y, Q. Long Bi??n, H?? N???i</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-lefticon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="info-text call-lh">
                                                <p>Hotline: 024 3938 8512</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-lefticon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="info-text">
                                                <p>Email : <a href="/frontend/mailto:nemcskh@stripe-vn.com"><i class="fa fa-angle-double-right"></i>  nemcskh@stripe-vn.com</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- STORE-INFORMATION END -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <!-- GOOGLE-MAP-AREA START -->
                                <div class="google-map-area">
                                    <div class="google-map">
                                        <div id="googleMap" style="width:100%;height:150px;"></div>
                                    </div>
                                </div>
                                <!-- GOOGLE-MAP-AREA END -->
                            </div>
                        </div>
                    </div>
                    <!-- FOOTER-TOP-RIGHT-1 END -->
                    <div class="footer-top-right-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <!-- FOTTER-MENU-WIDGET START -->
                                <div class="fotter-menu-widget">
                                    <div class="single-f-widget">
                                       <a href="{{ route('shop.contact') }}"><h2>Li??n h???</h2></a>
                                        <ul>
                                            <li><a href="{{ route('shop.articles') }}"><i class="fa fa-angle-double-right"></i>Gi???i thi???u </a></li>
                                            <li><a href="{{ route('shop.contact') }}"><i class="fa fa-angle-double-right"></i>Li??n h??? v???i ch??ng t??i</a></li>
                                            <li><a href="{{ route('shop.articles') }}"><i class="fa fa-angle-double-right"></i>tin t???c</a></li>
                                            <li><a href="/frontend/shop-gird.html"><i class="fa fa-angle-double-right"></i>Tr??? gi??p</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- FOTTER-MENU-WIDGET END -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <!-- FOTTER-MENU-WIDGET START -->
                                <div class="fotter-menu-widget">
                                    <div class="single-f-widget">
                                        <h2>Ch??m s??c kh??ch h??ng</h2>
                                        <ul>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>Ch??nh s??ch ?????i tr??? ho??n ti???n</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>Tra c???u ????n h??ng</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>Quy ?????nh ?????i h??ng</a></li>
                                            <li><a href="/frontend/contact-us.html"><i class="fa fa-angle-double-right"></i>Kh??ch h??ng th??n thi???t</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- FOTTER-MENU-WIDGET END -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <!-- FOTTER-MENU-WIDGET START -->
                                <div class="fotter-menu-widget">
                                    <div class="single-f-widget">
                                        <h2>H??? tr??? kh??ch h??ng</h2>
                                        <ul>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>H???i ????p</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>H?????ng d???n mua h??ng</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>????ng k?? t??i kho???n</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>Ch??nh s??ch giao h??ng</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>Ph????ng th???c thanh to??n</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- FOTTER-MENU-WIDGET END -->
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!-- PAYMENT-METHOD START -->
                                <div class="payment-method">
                                    <img class="img-responsive pull-right" src="/frontend/img/payment.png" alt="payment-method" />
                                </div>
                                <!-- PAYMENT-METHOD END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER-TOP-AREA END -->
<!-- COPYRIGHT-AREA START -->
<footer class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="copy-right">
                    <address>?? Elise 2020.<a href="/frontend/http://bootexperts.com/"></a> All Rights Reserved</address>
                </div>
                <div class="scroll-to-top">
                    <a href="/frontend/#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- COPYRIGHT-AREA END -->
<!-- JS
		===============================================-->
<!-- jquery js -->
<script src="/frontend/js/vendor/jquery-1.11.3.min.js"></script>

<!-- fancybox js -->
<script src="/frontend/js/jquery.fancybox.js"></script>

<!-- bxslider js -->
<script src="/frontend/js/jquery.bxslider.min.js"></script>

<!-- meanmenu js -->
<script src="/frontend/js/jquery.meanmenu.js"></script>

<!-- owl carousel js -->
<script src="/frontend/js/owl.carousel.min.js"></script>

<!-- nivo slider js -->
<script src="/frontend/js/jquery.nivo.slider.js"></script>

<!-- jqueryui js -->
<script src="/frontend/js/jqueryui.js"></script>

<!-- bootstrap js -->
<script src="/frontend/js/bootstrap.min.js"></script>

<!-- wow js -->
<script src="/frontend/js/wow.js"></script>
<script>
    new WOW().init();
</script>

<!-- Google Map js -->
<script src="/frontend/https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(35.149868, -90.046678)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- main js -->
<script src="/frontend/js/main.js"></script>
</body>


</html>
