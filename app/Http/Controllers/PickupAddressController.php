<?php

namespace App\Http\Controllers;

use App\Models\PickupAddress;
use Illuminate\Http\Request;

class PickupAddressController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PickupAddress  $pickupAddress
     * @return \Illuminate\Http\Response
     */
    public function show(PickupAddress $pickupAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PickupAddress  $pickupAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(PickupAddress $pickupAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PickupAddress  $pickupAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PickupAddress $pickupAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PickupAddress  $pickupAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(PickupAddress $pickupAddress)
    {
        //
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $addresses = PickupAddress::all();

        if (isset($keyword)) {
            $addresses = PickupAddress::where('name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('street', 'LIKE', '%' . $keyword . '%')
                ->orWhere('building_name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('unit_level', 'LIKE', '%' . $keyword . '%')
                ->orWhere('block_number', 'LIKE', '%' . $keyword . '%')
                ->orWhere('unit_number', 'LIKE', '%' . $keyword . '%')
                ->get();
        }

        if (isset($addresses)) {
            return view('user.cart.itemPickupAddressCheckout', ['addresses' => $addresses]);
        }
    }
}
