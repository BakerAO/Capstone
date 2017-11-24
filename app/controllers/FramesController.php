<?php

namespace App\Controllers;
use App\Core\Application;
Application::bind('config', require 'config.php');
Application::bind('database', new \QueryBuilder(\Connection::make(Application::get('config')['database'])));
class FramesController{
    //public $frameIndex;
    public function index(){
        $_SESSION['user_frame'] = 1001;
        // $this->frameIndex = 1001;
        try{
            $frames = Application::get('database')->selectFrame('frames', $_SESSION['user_frame']);
            return view('frames', ['frames'=>$frames]);
        }catch(\Exception $e){
            die($e->getMessage());
        }
    }
    public function changeFrame(){
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
}