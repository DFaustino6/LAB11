<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $db=Store_model::get_posts();
       $values = array(
            'MENU1' => 'Login',
            'href1' => '#',
            'MENU2' => 'Register',
            'href2' => '#',
            'products' => $db
        );
        return view('index_template',$values);
    }
}
