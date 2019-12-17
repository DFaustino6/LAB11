<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class CheckoutController extends Controller
{
    
    public function checkout()
    {
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