<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\medicines;
use App\Models\Cart;
class pharmacyController extends Controller
{
    public function index(){
        $medicines= medicines::all();
        $cart= Cart::all();
        return view('welcome',['medicines'=>$medicines,'cart'=>$cart]);
    }

    

    
    
    public function cart(Request $request,$medicineID){

        if(Auth::id())
        {
            $user=auth()->user();
            $medicine=medicines::find($medicineID);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->address=$user->address;
            $cart->MedcineImage=$medicine->medicineImage;
            $cart->MedcineName=$medicine->medicineName;
            $cart->MedcinePrice=$medicine->medicinePrice;
            $cart->Quantity=$request->Quantity;
            $cart->save();

            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }

       
        // $medicines= medicines::all();
        // return view('welcome',['medicines'=>$medicines]);
    }

    // public function showcart(){
    //     // $user=auth()->user();
    //     $cart=cart::all();
    //     return view('cart',["cart"=>$cart]);
    // }
  
}
 