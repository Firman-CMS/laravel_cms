<?php

namespace LaravelCms\Http\Controllers\backend;

use LaravelCms\m_aboutme;
use LaravelCms\Http\Controllers\Controller;
use Illuminate\Http\Request;


class aboutme extends Controller
{
  public function __construct()
       {
           $this->middleware('auth');
       }

    public function edit($id)
    {
      $aboutme =m_aboutme::find($id);
      return view('backend.aboutme.edit',compact('aboutme'));
    }

    public function update(Request $request, $id)
    {
      $aboutme =m_aboutme::find($id);
      if( $request->hasFile('pic') ){
           $file = $request->file('pic');
           $destination_path = 'uploads/';
           $filename = str_random(6).'_'.$file->getClientOriginalName();
           $file->move($destination_path, $filename);
           $aboutme->pic = $destination_path . $filename;
      }

      $data['complate_name']    = $request->input('complate_name');
      $data['date_birth']       = $request->input('date_birth');
      $data['nationality']      = $request->input('nationality');
      $data['email']            = $request->input('email');
      $data['number_phone']     = $request->input('number_phone');
      $data['aboutme']          = $request->input('aboutme');

      $aboutme ->update($data);

      return redirect('aboutme/1')->with('message','Data has been updated');
    }

}
