<?php

namespace LaravelCms\Http\Controllers\backend;

use LaravelCms\Http\Controllers\Controller;
use Illuminate\Http\Request;

class wpcms extends Controller
{
    public function __construct()
       {
           $this->middleware('auth');
       }

    public function index()
    {
      return view('backend.wpcms');
    }


}
