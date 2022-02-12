<x-app-layout>
    <x-slot name="title">
        صفحه اصلی
    </x-slot>
    <!--Start Slider-->
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url('{{ asset('shop/pics/bg_1.jpg') }} ');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">تهیه میوه و سبزیجات تازه</h1>
                            <h2 class="subheading mb-4">میوه و سبزیجات ارگانیک</h2>
                            <p><a href="#" class="btn btn-primary">مشاهده جزییات</a></p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url('{{ asset('shop/pics/bg_2.jpg') }} ');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">میوه های 100 درصد تازه و ارگانیک</h1>
                            <h2 class="subheading mb-4">تهیه میوه و سبزیجات ارگانیک</h2>
                            <p><a href="#" class="btn btn-primary">مشاهده جزییات</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slider-->

    <!--Tozihat-->
    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">ارسال رایگان</h3>
                            <span>برای سفارش های بالای 100 هزارتومان</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">تازگی محصولات</h3>
                            <span>بسته بندی مناسب</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">کیفیت برتر</h3>
                            <span>محصولات با کیفیت</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">پشتیبانی</h3>
                            <span>پشتیبانی 24 ساعته</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Tozihat-->

    <section class="ftco-section ftco-category ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 order-md-last align-items-stretch d-flex">
                            <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
                                style="background-image: url(pics/category.jpg);">
                                <div class="text text-center">
                                    <h2>سبزیجات</h2>
                                    <p>حفاظت از سلامت هر خانه</p>
                                    <p><a href="#" class="btn btn-primary">خرید آنی</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                                style="background-image: url('{{ asset('shop/pics/category-1.jpg') }} ');">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">سرزمین میوه</a></h2>
                                </div>
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end"
                                style="background-image: url('{{ asset('shop/pics/category-2.jpg') }} ');">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">توت فرنگی</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url('{{ asset('shop/pics/category-3.jpg') }} ');">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">آب میوه های طبیعی</a></h2>
                        </div>
                    </div>
                    <div class="category-wrap ftco-animate img d-flex align-items-end"
                        style="background-image: url('{{ asset('shop/pics/category-4.jpg') }} ');">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">میوه خشک</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading"> انتخاب هوشمند محصولات ارگانیک</span>
                    <h2 class="mb-4">سرزمین میوه</h2>
                    <p>پیشنهاد ما به شما</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="{{ asset('shop/pics/product-2.jpg') }}" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">{{ $product->name }}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price">
                                            <span>{{ $product->price }}</span>
                                            <span> تومان</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">

                                        <a href="{{ route('shop.show',$product->slug) }}"
                                            class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>

    <section class="ftco-section img" style="background-image: url('{{ asset('shop/pics/bg_3.jpg') }} ');">
        >
        <div class="container">
            <div class="row justify-content-first">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                    <span class="subheading">بهترین قیمت</span>
                    <h2 class="mb-4">فروش روز</h2>
                    <p>سبد ارگانیک مخصوص شما</p>
                    <h3><a href="#">اسفناج</a></h3>
                    <span class="price"> 10 هزار تومان <a href="#">هم اکنون 5 هزارتومان</a></span>
                    <div id="timer" class="d-flex mt-5 ">
                        <div class="time pr-4" id="days"></div>
                        <div class="time pr-4" id="hours"></div>
                        <div class="time pr-4" id="minutes"></div>
                        <div class="time pr-4" id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
