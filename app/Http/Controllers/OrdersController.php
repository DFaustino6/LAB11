<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class OrdersController extends Controller
{
    
    public function orders()
    {
       //print_r($db);
       if(session()->has('id')){
            $db=Store_model::get_orders(session()->get('id'));
            if($db) {

                foreach($db as $key => $order) {
                    $db[$key]->order_items = Store_model::get_order_items($db[0]->id);
                }
    
                $values = array(
                    'MENU1' => 'Welcome'.' '.session()->get('name'),
                    'href1' => '#',
                    'MENU2' => 'Logout',
                    'href2' => action('LogoutController@logout'),
                    'loginId' => session()->get('id'),
                    'MENU3' => 'Cart',
                    'href3' => action('CartItemInsert@cartdisplay'),
                    'MENU4' => 'Orders',
                    'href4' => action('OrdersController@orders'),
                    'db' => $db,
                ); 
                return view('orders',$values);
            } else {
                $values = array(
                    'MENU1' => 'Welcome'.' '.session()->get('name'),
                    'href1' => '#',
                    'MENU2' => 'Logout',
                    'href2' => action('LogoutController@logout'),
                    'loginId' => session()->get('id'),
                    'MENU3' => 'Cart',
                    'href3' => action('CartItemInsert@cartdisplay'),
                    'MENU4' => 'Orders',
                    'href4' => action('OrdersController@orders'),
                    'error' => "yes",
                ); 
                return view('orders',$values);
            }
        }
        else{
            $values = array(
            'MENU1' => 'Login',
            'href1' => action('LogoutController@logout'),
            'MENU2' => 'Register',
            'href2' => 'store/register',
            'Msg'   => 'Login first to see your orders!',
            'text_color' => 'black',
            'back_color' => 'red',
            'icon' => 'fas fa-exclamation-circle',
            'MENU3' => 'Cart',
            'href3' => action('CartItemInsert@cartdisplay'),
            'MENU4' => 'Orders',
            'href4' => action('OrdersController@orders'),
            );
           return view('message_template',$values);
        }  
        
    }

    public function order($id) {
       //print_r($db);
       if(session()->has('id')){
            $Order_items = Store_model::get_order_items($id);
            if(count($Order_items)>0) {
                $values = array(
                    'MENU1' => 'Welcome'.' '.session()->get('name'),
                    'href1' => '#',
                    'MENU2' => 'Logout',
                    'href2' => action('LogoutController@logout'),
                    'loginId' => session()->get('id'),
                    'MENU3' => 'Cart',
                    'href3' => action('CartItemInsert@cartdisplay'),
                    'MENU4' => 'Orders',
                    'href4' => action('OrdersController@orders'),
                    'Order_items' => $Order_items,
                    'id' => $id
                ); 
                return view('order',$values);
            } else {
                $values = array(
                    'MENU1' => 'Welcome'.' '.session()->get('name'),
                    'href1' => '#',
                    'MENU2' => 'Logout',
                    'href2' => action('LogoutController@logout'),
                    'loginId' => session()->get('id'),
                    'MENU3' => 'Cart',
                    'href3' => action('CartItemInsert@cartdisplay'),
                    'MENU4' => 'Orders',
                    'href4' => '#',
                    'error' => "yes",
                ); 
                return view('order',$values);
            }
        } 
        
    }       
}