<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store_model; 
use Illuminate\Support\Facades\Cookie;

class CarItemInsertController extends Controller
{
   public function carItemInsert(){
        $values = array(
            'MENU1' => 'Login',
            'href1' => 'login',
            'MENU2' => 'Register',
            'href2' => 'store/register',
            'MENU3' => 'Carrinho',
            'href3' => '#',

         ); 

        return view('index_template',$values);
    }
}