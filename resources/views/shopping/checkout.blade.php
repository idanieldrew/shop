<x-app-layout>
    <x-slot name="title">
        صورت حساب
    </x-slot>
    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('shop/pics/bg_1.jpg') }}');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">خانه</a></span> </p>
                    <h1 class="mb-0 bread">پرداخت صورت حساب</h1>
                </div>
            </div>
        </div>
    </div>

    @if ($errors)
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 ftco-animate">
                    <form action="{{ route('checkout.store') }}" method="POST" class="billing-form">
                        @csrf
                        <h3 class="mb-4 billing-heading">جزئیات صورتحساب</h3>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">نام</label>
                                    <input type="text" name="name" class="form-control" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">نام خانوادگی</label>
                                    <input type="text" name="lastName" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">شهر / کشور</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="city" id="" class="form-control m-1">
                                            <option value="1">تهران</option>
                                            <option value="2">دماوند</option>
                                            <option value="3">رودهن</option>
                                            <option value="4">پردیس</option>
                                            <option value="5">بومهن</option>
                                            <option value="6">شهریار</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="streetaddress">آدرس </label>
                                    <input type="text" name="address" class="form-control"
                                        placeholder="شماره پلاک و نام خیابان">
                                </div>
                            </div>
                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="postcodezip">کد پستی *</label>
                                    <input type="text" name="postalcode" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">شماره تماس</label>
                                    <input type="text" name="phone" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">ایمیل آدرس</label>
                                    <input type="text" name="email" class="form-control" placeholder="">
                                </div>
                                <input type="hidden" name="total" value="{{ $cart->total }}">
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <div class="radio">
                                        <label class="mr-3"><input type="radio" name="optradio"> ساخت اکانت؟
                                        </label>
                                        <label><input type="radio" name="optradio"> حمل به آدرس های مختلف</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- </form><!-- END --> --}}
                </div>
                <div class="col-xl-5">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12 d-flex mb-5">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">جمع کل صورتحساب</h3>
                                <p class="d-flex">
                                    <span>جمع کل</span>
                                    <span>{{ $cart->total }}تومان</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">روش های پرداخت</h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2"> از طریق
                                                درگاه
                                                بانکی</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="" class="mr-2"> من شرایط را
                                                خوانده و تایید میکنم</label>
                                        </div>
                                    </div>
                                </div>
                                <p><button type="submit" class="btn btn-primary py-3 px-4">ثبت سفارش</button></p>
                                </form><!-- END -->

                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->
</x-app-layout>
