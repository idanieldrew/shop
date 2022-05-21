<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->first();

        return view('shopping.checkout', compact('cart'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|',
            'name' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postalcode' => 'required',
            'phone' => 'required',
            'total' => 'required',
        ]);

        auth()->user()->orders()->create([
            'email' => $request->email,
            'name' => $request->name,
            'lastName' => $request->lastName,
            'address' => $request->address,
            'city' => $request->city,
            'postalcode' => $request->postalcode,
            'phone' => $request->phone,
            'total' => $request->total
        ]);

        dd('درگاه');
        /*$response = zarinpal()
            ->merchantId('00000000-0000-0000-0000-000000000000') // تعیین مرچنت کد در حین اجرا - اختیاری
            ->amount($request->price) // مبلغ تراکنش
            ->request()
            ->description('اوکیه') // توضیحات تراکنش
            ->callbackUrl('https://127.0.0.1/shops') // آدرس برگشت پس از پرداخت
            ->mobile($request->phone) // شماره موبایل مشتری - اختیاری
            ->email($request->email) // ایمیل مشتری - اختیاری
            ->send();

        if (!$response->success()) {
            return $response->error()->message();
        }

        // ذخیره اطلاعات در دیتابیس
        // $response->authority();

        // هدایت مشتری به درگاه پرداخت
        return $response->redirect();*/
    }
}
