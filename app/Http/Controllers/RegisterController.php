<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 

class RegisterController extends Controller
{
    public function register(){
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

        return view('register_template',$values);
    }

    public function register_action(Request $request){
        $values = array(
            'MENU1' => 'Login',
            'href1' => '#',
            'MENU2' => 'Register',
            'href2' => 'register',
            'Msg'   => 'Registration Completed.Welcome!',
            'text_color' => 'green',
            'back_color' => '#00d269',
            'icon' => 'fas fa-check',
            'MENU3' => 'Cart',
            'href3' => '#',
            'MENU4' => 'Orders',
            'href4' => '#',

         );

        $Username=$request->Username;
        $Email=$request->Email;
        $pwdHash=substr(md5($request->Pwd),0,32);
        $nrows=Store_model::check_email($request->Email);

        if(count($nrows)>0)
            return redirect('store/register')->withErrors('Email já existe na base de dados')->withInput($request->except('Email'));
        elseif($request->Pwd!=$request->ConfPwd)
            return redirect('store/register')->withErrors('Passwords não coincidem')->withInput();
        else{
            Store_model::register_user($Username,$Email,$pwdHash);
            return view('message_template',$values);
        }     
    }
}