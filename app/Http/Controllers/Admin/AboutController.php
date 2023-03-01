<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\About;

class AboutController extends Controller
{
    public function viewAbout(Request $request)
    {
         $about = About::first();
        return view('admin.view-about',compact('about'));
    }

    public function addAbout(Request $request)
    {
        $input = $request->except(['services_image','_token'],$request->all());

        

        if($request->hasFile('header_background_image'))
        {
            $img = Str::random(21).$request->file('header_background_image')->getClientOriginalName();
            $input['header_background_image'] = $img;
            $request->header_background_image->move(public_path("documents/about/"), $img);
        }

        if($request->hasFile('background_image'))
        {
            $img = Str::random(21).$request->file('background_image')->getClientOriginalName();
            $input['background_image'] = $img;
            $request->background_image->move(public_path("documents/about/"), $img);
        }

        if($request->hasFile('services_image'))
        {
            $img = Str::random(20).$request->file('services_image')->getClientOriginalName();
            $input['services_image'] = $img;
            $request->services_image->move(public_path("documents/about/"), $img);
        }

        if($request->hasFile('custom_fit_img1'))
        {
            $img = Str::random(20).$request->file('custom_fit_img1')->getClientOriginalName();
            $input['custom_fit_img1'] = $img;
            $request->custom_fit_img1->move(public_path("documents/about/"), $img);
        }


        if($request->hasFile('custom_fit_img2'))
        {
            $img = Str::random(20).$request->file('custom_fit_img2')->getClientOriginalName();
            $input['custom_fit_img2'] = $img;
            $request->custom_fit_img2->move(public_path("documents/about/"), $img);
        }

        
        

        
        $about = About::updateOrCreate([
            'id' => $request->id
        ], $input);

        if($about)
        {
            return redirect()->back()->with(array('message'=>'Success','type'=>'success'));
        }else{
            return redirect()->with(array('message'=>'Somethig wrong please try again','type'=>'error'));
        }

    }
}
