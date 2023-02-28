<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Project;
use App\Models\Contact;
use App\Models\About;
use DB;
use Hash;
use DataTables;
use Session;
use Carbon\Carbon;

class FrontController extends Controller
{

   
 public function index()
 {
    $data['services'] = Service::take(3)->get();
    $data['testimonial'] = Testimonial::get();
    $data['projects'] = Project::take(4)->where('type','compeleted')->get();
    $data['manufacturing'] = Project::take(4)->where('type','pending')->get();
    return view('front/index',$data);
 }

 public function about()
 {
   $data['testimonial'] = Testimonial::get();
   $data['about']  = About::first();
   $data['manufacturing'] = Project::take(4)->where('type','pending')->get();
    return view('front/about-us',$data);
 }

 public function services()
 {
    $data['services'] = Service::get();
    $data['testimonial'] = Testimonial::get();
    $data['manufacturing'] = Project::take(4)->where('type','pending')->get();
    return view('front/services',$data);
 }

 public function projects()
 {
   $data['testimonial'] = Testimonial::get();
   $data['projects'] = Project::where('type','compeleted')->get();
   $data['manufacturing'] = Project::take(4)->where('type','pending')->get();
    return view('front/projects',$data);
 }

 public function contactUs()
 {
   $data['testimonial'] = Testimonial::get();
   $data['manufacturing'] = Project::take(4)->where('type','pending')->get();
    return view('front/contact-us',$data);
 }

 public function doContact(Request $request)
 {
      $data = $request->all();
      Contact::Create($data);
      $send = Mail::send("front/mail", $data, function($message) use($request) {
      $message->to('robertsonalexander40@gmail.com')->subject('You have recived a contact message');
      $message->from($request->email);
      });
      if($send)
      {
         return redirect()->back()
                ->with(['message'=>'THank you for your feedback','type'=>'success']);
      }else{
        return redirect()->back()
                ->with(['message'=>'Something went wrong please try again','type'=>'error']);
      }
 }

 



}
