<?php

namespace App;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Cookie;

class Store_model 
{
    public static function get_products(){
        $sql  = "SELECT price,image
             FROM products";
        $query=DB::select($sql);
        return $query;
    } 

    public static function check_email($Email){
        $email="SELECT * FROM customers where email='$Email'";
        $query=DB::select($email);
        return $query;
    }

    public static function register_user($Username,$Email,$pwdHash){
        $newUser="INSERT INTO customers(name,email,password_digest,created_at,updated_at)
        VALUES ('$Username','$Email','$pwdHash',NOW(),NOW())";
        DB::insert($newUser);
    }

    public static function check_pwd($Email,$pwdHash){
        $pass="SELECT * FROM customers where email = '$Email' AND password_digest='$pwdHash'";
        $query=DB::select($pass);
        return $query;
    }

    public static function set_remember_digest($Email,$value){
        $setCookie="UPDATE customers SET remember_digest='$value' WHERE email='$Email'";
        DB::update($setCookie);
    }

    public static function check_remember_digest($value) {
        $checkCookie="SELECT * FROM customers WHERE remember_digest='$value'";
        $query=DB::select($checkCookie);
        return $query;
    }
}
?>