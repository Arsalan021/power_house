<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use DB;
use Hash;
use DataTables;
use Session;
use Carbon\Carbon;

class FrontController extends Controller
{

   
 public function index()
 {
    return view('front/index');
 }

 public function about()
 {
    return view('front/about-us');
 }

 public function services()
 {
    return view('front/services');
 }

 public function projects()
 {
    return view('front/projects');
 }

 public function contactUs()
 {
    return view('front/contact-us');
 }

 



}
