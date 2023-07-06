<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
class cartController extends Controller
{
    //
    function show(){
        $cart=Cart::all();
        return view('cart',['cart'=>$cart]);
    }
}
