<?php

namespace LaravelCms\Http\Controllers\backend;

use LaravelCms\m_service;
use LaravelCms\Http\Controllers\Controller;
use Illuminate\Http\Request;


class service extends Controller
{
  public function __construct()
       {
           $this->middleware('auth');
       }

    public function index()
    {
        $service = m_service::all();
        return view('backend.service.index',compact('service'));
    }

    public function show($id)
    {
      $service=m_service::find($id);
      return view('backend.service.detail',compact('service'));
    }

    public function edit($id)
    {
      $service=m_service::find($id);
      return view('backend.service.edit',compact('service'));
    }

    public function update(Request $request, $id)
    {
      $service  = m_service::find($id);
      $data['icon']         = $request->input('icon');
      $data['service']      = $request->input('service');
      $data['description']  = $request->input('description');
      $data['status']       = 1 ;

      $service->update($data);
      return redirect('service');
    }

    public function status(Request $request, $id, $post)
    {
      $service  = m_service::find($id);
      $data['status']       = $post;

      $service->update($data);
      return redirect('service');
    }

}
