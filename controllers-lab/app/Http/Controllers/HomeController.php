<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index(){
        $x = 3;
        $y = 5;
        $z = $x + $y;
        return "Index page";
    }
}
