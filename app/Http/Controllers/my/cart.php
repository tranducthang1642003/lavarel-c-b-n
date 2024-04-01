<?php

namespace App\Http\Controllers\my;

use Illuminate\Http\Request;

class cart
{
    function cart()
    {
        return view('cart.cart');
    }

    function checkout()
    {
        return view('cart.checkout');
    }
}
