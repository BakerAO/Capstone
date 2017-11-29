<?php

namespace App\Controllers;
use App\Core\Application;
Application::bind('config', require 'config.php');
Application::bind('database', new \QueryBuilder(\Connection::make(Application::get('config')['database'])));
class CartController{
    public function addFrame(){
        $fID = (int)$_POST["btn_addFrame"];
        $_SESSION['user_cart'][] = (int)$_POST["btn_addFrame"];
        try{
            $frames = Application::get('database')->selectFrame('frames', $fID);
            $_SESSION['cart_total'] += $frames[0]->retail_price;
            return view('cart', ['frames'=>$frames]);
        }catch(\Exception $e){
            die($e->getMessage());
        }
    }
    public function viewCart(){
        try{
            $frameID = $_SESSION['user_cart'];
            $frames = Application::get('database')->showCartFrames('frames', $frameID);
            return view('cart', ['frames'=>$frames]);
        }catch(\Exception $e){
            die($e->getMessage());
        }
    }
}