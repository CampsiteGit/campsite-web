<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function mc() { return view('mc'); }
    public function index() { return view('index'); }
    public function about() { return view('about'); }
    public function stats() { return view('stats'); }
    public function apply() { return view('apply'); }
    public function discord() { return view('discord'); }
}
