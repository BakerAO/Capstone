<?php

namespace App\Controllers;
use App\Core\Application;
Application::bind('config', require 'config.php');
Application::bind('database', new \QueryBuilder(\Connection::make(Application::get('config')['database'])));
class UsersController{
    public function index(){
        try{
            $users = Application::get('database')->selectAll('users');
            return view('users', ['users'=>$users]);
        }catch(\Exception $e){
            die($e->getMessage());
        }
    }
    public function store(){
        Application::get('database')->insert('users', [
            'user_name' => $_POST['user_name']
        ]);
        return redirect('users');
    }
}