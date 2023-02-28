<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class TestimonialController extends Controller
{
    public function index()
    {
         $testimonial = Testimonial::get();
        return view('admin.testimonials.index',compact('testimonial'));
    }

   
    public function create()
    {
        return view('admin.testimonials.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            
        ]);
    
        $input = $request->except(['_token', 'image'],$request->all());
        
       
        if($request->hasFile('image'))
        {
            $img = Str::random(20).$request->file('image')->getClientOriginalName();
            $input['image'] = $img;
            $request->image->move(public_path("documents/testimonial/"), $img);
        }
         $user = Testimonial::create($input);
    
        return redirect()->back()->with(['message'=>'Testimonial addedd successfully','type'=>'success']);
    }

    
    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonials.show',compact('testimonial'));
    }

   
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonials.edit',compact('testimonial'));
    }

   
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $testimonial = Testimonial::find($id);
        $testimonial->update($input);
        return redirect()->back()
                ->with(['message'=>'User update successfully','type'=>'success']);
    }

   
    public function destroy($id)
    {
        Testimonial::find($id)->delete();
        return redirect()->route('testimonial.index')
                        ->with(['message'=>'Service delete successfully','type'=>'success']);
    }
}
