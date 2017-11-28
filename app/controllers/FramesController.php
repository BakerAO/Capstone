<?php

namespace App\Controllers;
use App\Core\Application;
Application::bind('config', require 'config.php');
Application::bind('database', new \QueryBuilder(\Connection::make(Application::get('config')['database'])));
class FramesController{
    public function index(){
        $_SESSION['user_frame'] = 1001;
        try{
            $frames = Application::get('database')->selectFrame('frames', $_SESSION['user_frame']);
            return view('frames', ['frames'=>$frames]);
        }catch(\Exception $e){
            die($e->getMessage());
        }
    }
    public function changeFrame(){
        if ($_POST["btn_submit"] == "Next Frame"){
            try{
                $_SESSION['user_frame'] +=1;
                if ($_SESSION['user_frame'] == 1016){
                    $_SESSION['user_frame'] = 1001;
                }
                $frames = Application::get('database')->selectFrame('frames', $_SESSION['user_frame']);
                return view('frames', ['frames'=>$frames]);
            }catch(\Exception $e){
                die($e->getMessage());
            }
        }
        if ($_POST["btn_submit"] == "Previous Frame"){
            try{
                $_SESSION['user_frame'] -=1;
                if ($_SESSION['user_frame'] == 1000){
                    $_SESSION['user_frame'] = 1015;
                }
                $frames = Application::get('database')->selectFrame('frames', $_SESSION['user_frame']);
                return view('frames', ['frames'=>$frames]);
            }catch(\Exception $e){
                die($e->getMessage());
            }
        }
        if ($_POST["btn_submit"] == "Burberry"){
            try{
                $frames = Application::get('database')->selectBrand('Burberry');
                return view('frames', ['frames'=>$frames]);
            }catch(\Exception $e){
                die($e->getMessage());
            }
        }
        if ($_POST["btn_submit"] == "Oakley"){
            try{
                $frames = Application::get('database')->selectBrand('Oakley');
                return view('frames', ['frames'=>$frames]);
            }catch(\Exception $e){
                die($e->getMessage());
            }
        }
        if ($_POST["btn_submit"] == "Ray-Ban"){
            try{
                $frames = Application::get('database')->selectBrand('Ray-Ban');
                return view('frames', ['frames'=>$frames]);
            }catch(\Exception $e){
                die($e->getMessage());
            }
        }
        if ($_POST["btn_submit"] == "DoNothing"){
            $_SESSION['user_frame'] = 1001;
            try{
                $frames = Application::get('database')->selectFrame('frames', $_SESSION['user_frame']);
                return view('frames', ['frames'=>$frames]);
            }catch(\Exception $e){
                die($e->getMessage());
            }
        }
        
    }
}