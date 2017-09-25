<?php

namespace App\Controllers;
use App\Core\Application;
class UsersController{
    public function index(){
        $users = Application::get('database')->selectAll('user');
        return view('users', ['users'=>$users]);
    }
    public function store(){
        Application::get('database')->insert('user', [
            'name' => $_POST['name']
        ]);
        return redirect('users');
    }
}