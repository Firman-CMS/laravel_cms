<?php

namespace LaravelCms\Http\Controllers\backend;

use LaravelCms\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Mail;

class email extends Controller
{
  public function __construct()
       {
           $this->middleware('auth');
       }
  public function index()
   {
     return view('backend.email.formemail');
   }
  public function send(Request $request)
    {
      //kalo pengen banyak pake queue, https://arjunphp.com/laravel-5-sending-mails-using-queues/

      $mail['mail_to']      = $request->input('mail_to');
      $mail['mail_name']    = $request->input('mail_name');
      $mail['mail_subject'] = $request->input('mail_subject');
      $mail['mail']         = $request->input('message');

      Mail::send('backend.email.emailcontent', $mail, function($message) use ($mail)
      {
         $message->to($mail['mail_to'],'anonymous' )
                 ->subject($mail['mail_subject']);
      });
      return redirect('email')->with('send','Sent To : '. $mail['mail_to']);

    }

  }
