<x-auth>
    <x-slot name="title">
        لاگین
    </x-slot>
    <div class="limiter">
        @if ($errors)
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container-login100">
            <div class="wrap-login100">

                <!-- input form -->
                <form class="login100-form validate-form" action="{{ route('doLogin') }}" method="POST">
                    <span class="login100-form-title">ورود</span>
                    @csrf
                    <!-- enter email-->
                    <div class="wrap-input100 validate-input" data-validate="لطفا پست الکترونیک خود را وارد کنید!">
                        <input class="input100" type="text" name="email" placeholder="پست الکترونیک">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <!-- / enter email -->

                    <!-- enter password-->
                    <div class="wrap-input100 validate-input" data-validate="لطفا رمز عبور را وارد کنید!">
                        <input class="input100" type="password" name="password" placeholder="رمز عبور">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <!-- / enter password-->

                    <!-- login button-->
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">ورود</button>
                    </div>
                    <!-- / login button -->

                    <!-- restore password -->
                    <div class="text-center p-t-12">
                        <a class="txt2" href="#">
                            بازگردانی رمز عبور!
                        </a>
                    </div>
                    <!-- / restore password-->

                    <!-- register-->
                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ route('register') }}">
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            هنوز ثبت نام نکرده اید ؟
                        </a>
                    </div>
                    <!-- / register-->

                </form>
                <!-- / input form -->

                <!-- form image -->
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('auth/pics/img-01.png') }}" alt="IMG">
                </div>
                <!-- / form image -->

            </div>
        </div>
    </div>
</x-auth>
