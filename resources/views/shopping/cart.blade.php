<x-app-layout>
    <x-slot name="title">
        تسویه حساب
    </x-slot>
    <x-slot name="scripts">
        <script>
            $(document).ready(function() {

                var quantitiy = 0;
                $('.quantity-right-plus').click(function(e) {

                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());

                    // If is not undefined

                    $('#quantity').val(quantity + 1);


                    // Increment

                });

                $('.quantity-left-minus').click(function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());

                    // If is not undefined

                    // Increment
                    if (quantity > 0) {
                        تومان('#quantity').val(quantity - 1);
                    }
                });
            });
        </script>
    </x-slot>
    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('shop/pics/bg_1.jpg') }}');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">خانه</a></span></p>
                    <h1 class="mb-0 bread">پیش فاکتور</h1>
                </div>
            </div>
        </div>
    </div>
    @if (\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success small" style="text-align: center">
            {{ \Illuminate\Support\Facades\Session::get('success') }}
        </div>
    @endif
    @if (\Illuminate\Support\Facades\Session::has('danger'))
        <div class="alert alert-success small" style="text-align: center">
            {{ \Illuminate\Support\Facades\Session::get('danger') }}
        </div>
    @endif
    @if ($errors->count())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        </div>
    @endif
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>نام محصول</th>
                                    <th>قیمت</th>
                                    <th>تعداد</th>
                                    <th>جمع کل</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $cartItem)
                                    <tr class="text-center">
                                        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a>
                                        </td>

                                        <td class="image-prod">
                                            <div class="img"
                                                style="background-image:url('{{ asset('shop/pics/product-3.jpg') }}');">
                                            </div>
                                        </td>

                                        <td class="product-name">
                                            <h3>{{ $cartItem->products->name }}</h3>
                                            <p>{{ $cartItem->products->details }}</p>
                                        </td>

                                        <td class="price">{{ $cartItem->price }} تومان</td>

                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="quantity"
                                                    class="quantity form-control input-number"
                                                    value="{{ $cartItem->quantity }}" min="1" max="100">
                                            </div>
                                        </td>

                                        <td class="total">{{ $cartItem->total }} تومان</td>
                                    </tr><!-- END TR-->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>کد تخفیف</h3>
                        <p>کد تخفیف خود را وارد کنید</p>
                        <form action="#" class="info">
                            <div class="form-group">
                                <label for="">استفاده از حروف کوچک و بزرگ الزامیست</label>
                                <input type="text" class="form-control text-left px-3" placeholder="">
                            </div>
                        </form>
                    </div>
                    <p><a href="checkout.html" class="btn btn-primary py-3 px-4">تایید کد تخفیف</a></p>
                </div>
                <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>صورت حساب</h3>
                        <p class="d-flex">
                            <span>جمع کل</span>
                            <span>{{ $cart->total }}تومان</span>
                        </p>
                        <p class="d-flex">
                            <span>هزینه ی تحویل</span>
                            <span>0.00 تومان</span>
                        </p>
                        <p class="d-flex">
                            <span>تخفیف</span>
                            <span>3.00 تومان</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>جمع کل</span>
                            <span>17.60 تومان</span>
                        </p>
                    </div>
                    <p><a href="checkout.html" class="btn btn-primary py-3 px-4">پرداخت</a></p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
