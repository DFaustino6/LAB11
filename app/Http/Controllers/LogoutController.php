<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class LogoutController extends Controller
{
    public function logout(){
        session()->flush();
        $values = array(
            'MENU1' => 'Login',
            'href1' => 'login',
            'MENU2' => 'Register',
            'href2' => 'store/register',
            'Msg'   => 'See you back soon!',
            'text_color' => 'black',
            'back_color' => '#ff9966',
            'icon' => 'fas fa-sign-out-alt',
            'MENU3' => 'Cart',
            'href3' => '#',
            'MENU4' => 'Orders',
            'href4' => '#',


         ); 
        Cookie::queue('siteAuth','',-1);
        return view('message_template',$values);
    }
}