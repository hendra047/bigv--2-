<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Addon;
use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->load('vendor', 'category', 'variations', 'images');
        $product->vendor->load('location');

        $addons = Addon::where('product_id', $product->id)->with(['addons_options'])->get();

        if (count($product->variations) > 0) {
            if ($product->variations[0]->name != 'novariation') {
                $min = ProductVariation::where('product_id', $product->id)->min('price');
                $max = ProductVariation::where('product_id', $product->id)->max('price');

                return view('user.product.detail', [
                    'product' => $product,
                    'minProductPrice' => $min,
                    'maxProductPrice' => $max,
                    'addons' => $addons,
                ]);
            }
        }

        return view('user.product.detail', [
            'product' => $product,
            'addons' => $addons,
        ]);
    }

    public function filter(Request $request)
    {
    }
}
