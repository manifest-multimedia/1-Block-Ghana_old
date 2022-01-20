<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getPackages(){
        return view('backend.packages.list');
    }

    public function createPackage(){
        return view('backend.packages.create');
    }
}
