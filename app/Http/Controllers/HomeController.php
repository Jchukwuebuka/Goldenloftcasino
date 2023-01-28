<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() 
    {
        return view("Homepages.index");
    }

    public function abouts() 
    {
        return view("Homepages.about");
    }

    public function roulettes() 
    {
        return view("Homepages.roulette");
    }

    public function baccarats() 
    {
        return view("Homepages.baccarat");
    }

    public function pokers() 
    {
        return view("Homepages.poker");
    }

    public function lotterys() 
    {
        return view("Homepages.lottery");
    }

    public function electronics() 
    {
        return view("Homepages.electronic");
    }

    public function ruless() 
    {
        return view("Homepages.rules");
    }

}
