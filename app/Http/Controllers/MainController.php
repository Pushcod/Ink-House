<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Collection;
use App\Models\Team;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $banners = Banner::latest()->get();
        return view('home',compact('banners'));
    }
}
