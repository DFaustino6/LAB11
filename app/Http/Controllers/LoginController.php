<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
   public function login(){
        $values = array(
            'MENU1' => 'Login',
            'href1' => 'login',
            'MENU2' => 'Register',
            'href2' => 'register',
            'MENU3' => 'Cart',
            'href3' => '#',
            'MENU4' => 'Orders',
            'href4' => '#',
         ); 

        return view('login_template',$values);
    }

    public function login_action(Request $request){
        $values = array(
            'MENU2' => 'Logout',
            'MENU1' => 'Welcome',
            'href1' => '#',
            'href2' => '#',
            'MENU3' => 'fad fa-shopping-cart',
            'href3' => '#',
            'Msg'   => 'Welcome back!',
            'text_color' => 'green',
            'back_color' => '#00d269',
            'icon' => 'fas fa-sign-in-alt',
            'MENU3' => 'Cart',
            'href3' => '#',
            'MENU4' => 'Orders',
            'href4' => '#',

         );
        
        $pwdHash=substr(md5($request->pwd),0,32);
        $nrows=Store_model::validate_user($request->email,$pwdHash);
        if(count($nrows)>0){
            session()->regenerate();
            session(['name' => $nrows[0]->name]);
            session(['id' => $nrows[0]->id]);
            if($request->autologin == true){ 
                $cookie_name = 'siteAuth';
                $cookie_time = (60 * 24 * 30); // 30 days
                $remember_digest = substr(md5(time()),0,32);
                Store_model::set_remember_digest($request->email,$remember_digest);
                Cookie::queue($cookie_name,$remember_digest,$cookie_time);
            }
            return view('message_template',$values); 
        }   
         
        else 
            return redirect('store/login')->withErrors('Wrong email or password.'); 
    }
}