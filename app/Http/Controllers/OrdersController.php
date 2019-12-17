<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class OrdersController extends Controller
{
    
    public function orders()
    {
       $db=Store_model::get_orders(session()->get('id'));
       $order_items=Store_model::get_order_items($db[0]->id);
       //print_r($db);
       if(session()->has('id')){
            $values = array(
                'MENU1' => 'Welcome'.' '.session()->get('name'),
                'href1' => '#',
                'MENU2' => 'Logout',
                'href2' => 'store/logout',
                'loginId' => session()->get('id'),
                'MENU3' => 'Cart',
                'href3' => '#',
                'MENU4' => 'Orders',
                'href4' => '#',
                'orders' => $db,
                'order_items' => $order_items
            ); 

            return view('orders',$values);
        }
        else{
            $values = array(
            'MENU1' => 'Login',
            'href1' => 'login',
            'MENU2' => 'Register',
            'href2' => 'store/register',
            'Msg'   => 'Login first to see your orders!',
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