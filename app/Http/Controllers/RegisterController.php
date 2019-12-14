<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function register(){
        $values = array(
            'MENU1' => 'SubForum1',
            'MENU2' => 'SubForum2',
            'MENU3' => 'SubForum3',
            'MENU4' => 'Login',
            'href4' => 'login',
            'MENU5' => 'Register',
            'href5' => 'register'
         );  

        return view('register_template',$values);
    }

    public function register_action(Request $request){
        $values = array(
            'MENU1' => 'SubForum1',
            'MENU2' => 'SubForum2',
            'MENU3' => 'SubForum3',
            'MENU4' => 'Login',
            'MENU5' => 'Register',
            'Msg'   => 'Registration Completed.Welcome!',
            'text_color' => 'green',
            'back_color' => '#00d269',
            'icon' => 'glyphicon glyphicon-ok'
         );

        $Username=$request->Username;
        $Email=$request->Email;
        $pwdHash=substr(md5($request->Pwd),0,32);
        $nrows=Blog_model::check_email($request->Email);

        if(count($nrows)>0)
            return redirect('blog/register')->withErrors('Email já existe na base de dados')->withInput($request->except('Email'));
        elseif($request->Pwd!=$request->ConfPwd)
            return redirect('blog/register')->withErrors('Passwords não coincidem')->withInput();
        else{
            Blog_model::register_user($Username,$Email,$pwdHash);
            return view('message_template',$values);
        }     
    }
}