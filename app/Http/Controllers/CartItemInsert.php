<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class CartItemInsert extends Controller
{
   public function cartItemInsert($id){

        $product=Store_model::get_product_information($id);
        print_r($product);
        
        $cart= session()->get('cart');
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product[0]->name,
                        "quantity" => 1,
                        "price" => $product[0]->price,
                        "image" => $product[0]->image
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back();
        }

        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back();
 
        }

         $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);
 
        return redirect()->back();
    }



         return redirect()->back();
    }

    public function cartdisplay(){
            $db=Store_model::get_products();
            $values = array(
                'MENU1' => 'Welcome'.' '.session()->get('name'),
                'href1' => '#',
                'MENU2' => 'Logout',
                'href2' => 'store/logout',
                'loginId' => session()->get('id'),
                'MENU3' => 'Cart',
                'href3' => 'checkout',
                'MENU4' => 'Orders',
                'href4' => '#',
                'products' => $db,
            ); 

            return view('cart_template',$values);

        
    }
}