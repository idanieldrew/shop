<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title ?? 'فروشگاه' }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{ $headers ?? '' }}
    <link rel="stylesheet" href="{{ asset('shop/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('shop/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('shop/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('shop/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('shop/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('shop/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/style.css') }}">
</head>



<body class="goto-here">

    <!--header-->
    <div class="py-1 bg-primary" id="app">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pl-4 d-flex topper align-items-center">
                            <div class="icon ml-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">07132309534</span>
                        </div>
                        <div class="col-md pl-4 d-flex topper align-items-center">
                            <div class="icon ml-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">info@webrubik.com</span>
                        </div>
                        <div class="col-md-5 pl-4 d-flex topper align-items-center text-lg-left">
                            <span class="text">ارسال بین 3-5 روز کاری</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header-->

    <!--Start Nav-->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('shop.index') }}">محصولات</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> منو
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('landing') }}" class="nav-link">خانه</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop.index') }}" aria-expanded="false">خرید</a>
                        {{-- <div class="dropdown-menu" id="top-dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="shop.html">خرید</a>
                            <a class="dropdown-item" href="wishlist.html">محصولات مورد علاقه</a>
                            <a class="dropdown-item" href="product-single.html">محصولات تکی</a>
                            <a class="dropdown-item" href="cart.html">اشتراک</a>
                            <a class="dropdown-item" href="checkout.html">سبد خرید</a>
                        </div> --}}
                    </li>
                    @guest
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">ثبت نام /
                                ورود</a></li>
                    @endguest
                    <li class="nav-item"><a href="blog.html" class="nav-link">بلاگ فروت لند</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">تماس با ما</a></li>
                    <li class="nav-item">
                    </li>

                    {{-- <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span
                                class="icon-shopping_cart"></span>[0]</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    {{ $slot }}

    <!--Start Subscribe-->
    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">مشترک شدن در خبرنامه ما</h2>
                    <span>دریافت ایمیل درباره آخرین مغازه ها و پیشنهادات ویژه</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="ایمیل آدرس خود را وارد کنید">
                            <input type="submit" value="اشتراک" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe-->

    <!--Start Footer-->
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">غذاهای گیاهی</h2>
                        <p>یکی از بهترین راهها انتخاب درست مسیر زندگی هست با ما بسلامتی خود اهمیت بدین</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">منو</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">خرید</a></li>
                            <li><a href="#" class="py-2 d-block">درباره ی ما </a></li>
                            <li><a href="#" class="py-2 d-block">کاتالوگ</a></li>
                            <li><a href="#" class="py-2 d-block">ارتباط با ما</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">سوالی هست؟</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">اطلاعات حمل و نقل</a></li>
                                <li><a href="#" class="py-2 d-block">شرایط بازگشت و تعویض</a></li>
                                <li><a href="#" class="py-2 d-block">شرایط و ضوابط</a></li>
                                <li><a href="#" class="py-2 d-block">سیاست حفظ حریم خصوصی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">دانیال</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">ایران -
                                        تهران</span>
                                </li>
                                <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">09211271720</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">daniel2drew@gmail.com</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        <!-- Link back to webrubik can't be removed.  -->
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>


    <script src="{{ asset('shop/js/jquery.min.js') }}"></script>
    <script src="{{ asset('shop/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('shop/js/popper.min.js') }}"></script>
    <script src="{{ asset('shop/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('shop/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('shop/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('shop/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('shop/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('shop/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('shop/js/aos.js') }}"></script>
    <script src="{{ asset('shop/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('shop/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('shop/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('shop/js/google-map.js') }}"></script>
    <script src="{{ asset('shop/js/main.js') }}"></script>

    {{ $scripts ?? '' }}
</body>

</html>
