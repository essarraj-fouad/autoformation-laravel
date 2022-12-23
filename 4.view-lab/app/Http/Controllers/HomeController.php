<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index(){
        $x = 1;
        $y = 2;
        $z = $x + $y;
        return "Index page";
    }
}
