<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class Store extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $db=Store_model::get_products();
       self::checkForCookie('siteAuth');
       if(session()->has('id')){
            $values = array(
                'MENU1' => 'Welcome'.' '.session()->get('name'),
                'href1' => '#',
                'MENU2' => 'Logout',
                'href2' => 'store/logout',
                'products' => $db,
                'loginId' => session()->get('id'),
                'MENU3' => 'Cart',
                'href3' => 'store/cart',
                'MENU4' => 'Orders',
                'href4' => 'store/orders',
            ); 
        }
        else{
            $values = array(
            'MENU1' => 'Login',
            'href1' => 'store/login',
            'MENU2' => 'Register',
            'href2' => 'store/register',
            'products' => $db,
            'MENU3' => 'Cart',
            'href3' => 'store/cart',
            'MENU4' => 'Orders',
            'href4' => 'store/orders',

            );
        }  
        return view('index_template',$values);
    }

    public function checkForCookie($name){
        if(Cookie::has($name)==1) { //retorna 1 se existir a cookie
            $cookie = Cookie::get($name); //retorna o valor associado a cookie...
            $nrows = Store_model::check_remember_digest($cookie);
            if(count($nrows)>0) {
                session(['name' => $nrows[0]->name]);
                session(['id' => $nrows[0]->id]);
            }
        }      
    }
}
