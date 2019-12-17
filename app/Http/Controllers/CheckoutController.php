<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class CheckoutController extends Controller
{
    
    public function checkout()
    {
       $db=Store_model::get_products();
       //print_r($db);
       if(session()->has('id')){
            $values = array(
                'MENU1' => 'Welcome'.' '.session()->get('name'),
                'href1' => '#',
                'MENU2' => 'Logout',
                'href2' => 'store/logout',
                'loginId' => session()->get('id'),
                'MENU3' => 'Cart',
                'href3' => 'store/checkout',
                'MENU4' => 'Orders',
                'href4' => 'orders',
                'products' => $db,
            ); 

            return view('checkout_template',$values);
        }
        else{
            $values = array(
            'MENU1' => 'Login',
            'href1' => 'login',
            'MENU2' => 'Register',
            'href2' => 'store/register',
            'Msg'   => 'Login first to checkout!',
            'text_color' => 'black',
            'back_color' => 'red',
            'icon' => 'fas fa-exclamation-circle',
            'MENU3' => 'Cart',
            'href3' => '#',
            'MENU4' => 'Orders',
            'href4' => '#',
            );
           return view('message_template',$values);
        }  
        
    }
}