<?php

namespace LaravelCms\Http\Controllers\frontend;

use LaravelCms\m_aboutme;
use LaravelCms\m_service;

use LaravelCms\Http\Controllers\Controller;
use Illuminate\Http\Request;



class allpage extends Controller
{

    public function index()
    {
        $data['about']= m_aboutme::all();
        $data['service']= m_service::all();
        return view('frontend.homepage',compact('data'));
    }


}
