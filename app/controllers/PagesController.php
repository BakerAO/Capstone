<?php

namespace App\Controllers;
class PagesController{
    public function home(){
        view('index');
    }
    public function about(){
        $company = 'EIP10';
        view('about', ['company' => $company]);
    }
    public function basic(){
        view('basic');
    }
    public function contact(){
        view('contact');
    }
}