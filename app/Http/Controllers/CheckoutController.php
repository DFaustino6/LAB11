<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class CheckoutController extends Controller
{
    
    public function checkout($total)
    {
        if(!session()->has('id')) {
             $values = array(
                'MENU2' => 'Login',
                'MENU1' => 'Register',
                'href1' => '#',
                'href2' => '#',
                'MENU3' => 'fad fa-shopping-cart',
                'href3' => '#',
                'Msg'   => 'Login first to checkout!',
                'text_color' => 'black',
                'back_color' => 'red',
                'icon' => 'fas fa-times',
                'MENU3' => 'Cart',
                'href3' => '#',
                'MENU4' => 'Orders',
                'href4' => '#',

             );
            return view('message_template',$values);           
        }
        $customer_id=session()->get('id');
        $order_id = Store_model::create_order($customer_id,$total);
        $cart = session()->get('cart');
        foreach($cart as $product_id => $details)
            Store_model::insert_order_item($order_id, $product_id, $details['quantity']);

        session()->forget('cart');
        $values = array(
            'MENU2' => 'Logout',
            'MENU1' => 'Welcome',
            'href1' => '#',
            'href2' => '#',
            'MENU3' => 'fad fa-shopping-cart',
            'href3' => '#',
            'Msg'   => 'Checkout Successfully!',
            'text_color' => 'green',
            'back_color' => '#00d269',
            'icon' => 'fas fa-check',
            'MENU3' => 'Cart',
            'href3' => '#',
            'MENU4' => 'Orders',
            'href4' => '#',

         );
        return view('message_template',$values);
        
    }
}