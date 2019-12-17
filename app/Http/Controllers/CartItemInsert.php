<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class CartItemInsert extends Controller
{
   public function cartItemInsert($id){

        $db=Store_model::get_products();
        $cart= session()->get('cart');
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $values = array(
            'MENU1' => 'Login',
            'href1' => 'login',
            'MENU2' => 'Register',
            'href2' => 'store/register',
            'MENU3' => 'Carrinho',
            'href3' => '#',

         ); 

        return view('index_template',$values);
    }
}