<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    
    public function index()
    {
        $projects = Project::get();
        return view('admin.projects.index',compact('projects'));
    }

    
    public function create()
    {
        return view('admin.services.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            // 'image' => 'required',
            'description' => 'required',
            
        ]);
    
        $input = $request->except(['_token', 'image'],$request->all());
        
       
        if($request->hasFile('image'))
        {
            $img = Str::random(20).$request->file('image')->getClientOriginalName();
            $input['image'] = $img;
            $request->image->move(public_path("documents/project/"), $img);
        }
         $user = Project::create($input);
    
        return redirect()->back()->with(['message'=>'Project addedd successfully','type'=>'success']);
    }

   
    public function show($id)
    {
        $projects = Project::find($id);
        return view('admin.projects.show',compact('projects'));
    }

   
    public function edit($id)
    {
        $projects = Project::find($id);
        return view('admin.projects.edit',compact('projects'));
    }

   
    public function update(Request $request, $id)
    {
        $input = $request->all();
       
        if($request->hasFile('image'))
        {
            $img = Str::random(20).$request->file('image')->getClientOriginalName();
            $input['image'] = $img;
            $request->image->move(public_path("documents/project/"), $img);
        }

        $user = Project::find($id);
        $user->update($input);
        return redirect()->back()
                ->with(['message'=>'Project update successfully','type'=>'success']);
    }

   
    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect()->route('project.index')
                        ->with(['message'=>'Project delete successfully','type'=>'success']);
    }

    public function changTypeProject(Request $request)
    {
        // if($request->type == 'compeleted')
        // $type = 'pending';
        // if($request->type == 'pending')
        // $type = 'compeleted';

        $statusChange = Project::where('id',$request->id)->update(['type'=>$request->type]);
        if($statusChange)
        {
            return array('message'=>'Project status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'Project status has not changed please try again','type'=>'error');
        }

    }
}
