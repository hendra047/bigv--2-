<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Vendor;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function getCheckout(Request $request)
    {
        if (session()->has('checkout-items')) {
            $checkout_items = Cart::whereIn('id', session()->get('checkout-items'))->get();
            $checkout_items = Vendor::with(['products' => function ($q1) {
                $q1->select('vendor_id', 'carts.id as cart_id', 'products.featured_image', 'products.name as product_name', 'product_variations.name as product_variation_name', 'carts.price', 'carts.quantity', 'carts.user_id')
                    ->join('product_variations', 'product_variations.product_id', '=', 'products.id')
                    ->join('carts', 'carts.product_variation_id', '=', 'product_variations.id')
                    ->whereIn('carts.id', session()->get('checkout-items'))
                    ->whereNull('carts.transaction_id')
                    ->where('user_id', auth()->user()->id);
            }])->whereHas('products', function ($q1) {
                $q1->select('vendor_id')
                    ->join('product_variations', 'product_variations.product_id', '=', 'products.id')
                    ->join('carts', 'carts.product_variation_id', '=', 'product_variations.id')
                    ->whereIn('carts.id', session()->get('checkout-items'))
                    ->whereNull('carts.transaction_id')
                    ->where('user_id', auth()->user()->id);
            })->get();

            return view('user.cart.checkout', ['checkouts' => $checkout_items]);
        }

        return redirect()->back();
    }

    public function verifyCheckout(Request $request)
    {
        $carts = json_decode($request->carts, true);

        $cart_checkout_id = [];
        if (isset($carts)) {
            if (count($carts) > 0) {
                foreach ($carts as $vendor_id => $cart) {
                    foreach ($cart as $cart_id => $product) {
                        if (isset($product['price']) && isset($product['quantity'])) {
                            $cart_checkout_id[] = $cart_id;
                        }
                    }
                }

                if (count($cart_checkout_id) > 0) {
                    session()->put('checkout-items', $cart_checkout_id);
                    session()->save();

                    return redirect('/user/cart/checkout');
                }
            }
        }

        return redirect()->back();
    }
}
