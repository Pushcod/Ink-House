<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $banners = Banner::latest();
        return view('home');
    }
}
