<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        // dd(session()->get('checkout-items'));
        if (!session()->has('checkout-items')) {
            // dd("1");
            return redirect()->back();
        }
    }

    public function getCheckout(Request $request)
    {
        dd("2");
        // dd(session()->get('checkout-items'));
        if (session()->has('checkout-items')) {
            $checkout_items = Cart::whereIn('id', session()->get('checkout-items'))->get();
            // dd($checkout_items);
            // return view('user.cart.checkout', ['checkout' =>]);
        }

        return redirect()->back();
    }

    public function verifyCheckout(Request $request)
    {
        $carts = json_decode($request->carts, true);

        $cart_checkout_id = [];
        if (isset($carts)) {
            if (count($carts) > 0) {
                foreach ($carts as $key => $cart) {
                    foreach ($cart as $product) {
                        if (isset($product['price']) && isset($product['quantity'])) {
                            $cart_checkout_id[] = $key;
                        }
                    }
                }

                if (count($cart_checkout_id) > 0) {
                    session()->put('checkout-items', $cart_checkout_id);
                    return redirect('/user/cart/checkout');
                }
            }
        }

        return redirect()->back();
    }
}
