<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function blog()
    {
        return view('blog', [
            'dataEvents'=>Events::all()
        ]);
    }
}