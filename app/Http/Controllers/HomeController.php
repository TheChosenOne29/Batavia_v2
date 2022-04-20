<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {            
        $dataMenu1 = Menu::all()->where('category', 'light_bites');
        $dataMenu2 = Menu::all()->where('category', 'appetizer');
        $dataMenu3 = Menu::all()->where('category', 'main_course');
        $dataMenu4 = Menu::all()->where('category', 'desserts');
        $dataMenu5 = Menu::all()->where('category', 'drinks');

        return view('/index')->with([
            'dataMenu1' => $dataMenu1,
            'dataMenu2' => $dataMenu2,
            'dataMenu3' => $dataMenu3,
            'dataMenu4' => $dataMenu4,
            'dataMenu5' => $dataMenu5
        ]);
    }

    public function blog()
    {
        return view('blog', [
            'dataEvents' => Events::all()
        ]);
    }
}