<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Setting;
use App\Models\Contact;
use App\Models\Section;
use DB;
use DataTables;
use Mail;
use Carbon\Carbon;
use Session;


class AdminController extends Controller
{
   
    public function user_login(Request $request)
    {
        return view('login');
       
    }


    public function userRegister(Request $request)
    {
        return view('register');
    }

    public function forgotPasswords()
    {
        return view('forgot-password');
    }
    public function resetpassword($id)
    {   
        date_default_timezone_set("Asia/Karachi");
        $current_time =  Carbon::now()->format('Y-m-d H:i:m');
        $user = User::where('remember_token',$id)->first();
        if(isset($user))
        {
            if($current_time >= $user->expire_token_time)
            {
                return redirect('forgot-password')->with(['message'=>"Link has been expired",'type'=>'error']);
            }
        }
        

        return view('resetpasswords-password',compact('id'));
    }

    
    public function loginAdminProcess(Request $request)
    {

        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password)))
        {
           if(auth()->user()->type == 'admin')
            {
                return redirect('admin/dashboard')->with(array('message'=>'Login success','type'=>'success'));
            }else if(auth()->user()->type == 'user')
            {
                return redirect('user/dashboard')->with(array('message'=>'Login success','type'=>'success'));

            }
            else{
                Auth::logout(); 
                return redirect()->back()->with(array('message'=>'Please wait for admin approval','type'=>'error'));;
            }
        }else{
            return redirect()->back()->with(array('message'=>'Invalid email or Password','type'=>'error'));
        }
    }
    
    
    public function RegisterProcess(Request $request)
    {
       
        $token = Str::random(40); 
        $validator = Validator::make($request->all(), [
           'email' => 'required|email|unique:users',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(array('message'=>'This email is already exists','type'=>'error'));
        }
        
        $users = $request->except(['password','password_confirmation'],$request->all());
        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $users['profile'] = $img;
            $request->profile->move(public_path("documents/profile"), $img);
        }
       
        $users['password'] = Hash::make($request->password);
        $user = User::create($users);
        if($user)
        {
            return redirect()->back()->with(array('message'=>'account created succssfully Please check your email','type'=>'success'));
            
        }else{
            return redirect()->with(array('message'=>'Somethig wrong please try again','type'=>'error'));
        }


    }

    public function notFound()
    {
        return  404;
    }

      
    public function forgotPassword(Request $request)
    {
        date_default_timezone_set("Asia/Karachi");
        $expire_token_time =  Carbon::now()->addMinutes(30)->format('Y-m-d H:i:m');

        if($request->has("email")){
            $user = User::where('email',$request->email)->get()->first();
            if($user)
            {
                $first_name = $user->first_name??'';
                $last_name = $user->last_name??'';
                $email = $user->email;
                $fourRandomDigit = Str::random(40).time().rand(1000,9999);
                User::where('email',$request->email)->update(['remember_token'=>$fourRandomDigit,'expire_token_time'=>$expire_token_time]);
                $data = array('otp'=>$fourRandomDigit);
                $send = Mail::send("admin/mail2", $data, function($message) use($email,$first_name,$last_name) {
                    $message->to($email, $first_name." ".$last_name)->subject('You have requested to reset your password');
                    $message->from('robertsonalexander40@gmail.com','Test');
                });
                return redirect()->back()->with(['message'=>"A password reset link has been sent to your email",'type'=>'success']);
            }else{
                return redirect()->back()->with(['message'=>"Invalid Email",'type'=>'error']);
            }
        }else
        {
            return redirect()->back()->with(['message'=>"Please provide emai",'type'=>'error']);
        }
    }

    public function updatePassword(Request $request)
    {
       
        if($request->has("remember_token"))
        {
            if($request->has("password"))
            {
                $user = User::where('remember_token',$request->remember_token)->get()->first();
                
                if($user)
                {
                    User::where('remember_token',$request->remember_token)->update(['remember_token'=>time().rand(1000,9999),'password'=>Hash::make($request->password)]);
                    return redirect('/')->with(['message'=>"Password reset Successfully",'type'=>'success']);
                }else
                {
                    return redirect()->back()->with(['message'=>"Invalid token please try again",'type'=>'error']);
                }
            }else
            {
                return redirect()->back()->with(['message'=>"Please enter password",'type'=>'error']);
            }
        }else
        {
            
            return redirect()->back()->with(['message'=>"Please provide reset password token",'type'=>'error']);
        }
    }

   public function dashboard(Request $request)
    {
       
       return view('admin/dashboard');
    }


    public function change_status(Request $request)
    {
        $statusChange = User::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'User status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'User status has not changed please try again','type'=>'error');
        }
   }

   public function setting()
   {
     $setting = Setting::first();
     return view('admin/setting',compact('setting'));
   }

   public function addSetting(Request $request)
   {
        $input = $request->except(['header_logo','footer_logo','header_background_image','icon_title','_token'],$request->all());
        
        

        if($request->hasFile('icon_title'))
        {
            $img = Str::random(21).$request->file('icon_title')->getClientOriginalName();
            $input['icon_title'] = $img;
            $request->icon_title->move(public_path("documents/setting/"), $img);
        }

        if($request->hasFile('header_background_image'))
        {
            $img = Str::random(21).$request->file('header_background_image')->getClientOriginalName();
            $input['header_background_image'] = $img;
            $request->header_background_image->move(public_path("documents/setting/"), $img);
        }

        if($request->hasFile('header_logo'))
        {
            $img = Str::random(20).$request->file('header_logo')->getClientOriginalName();
            $input['header_logo'] = $img;
            $request->header_logo->move(public_path("documents/setting/"), $img);
        }

        if($request->hasFile('footer_logo'))
        {
            $img = Str::random(20).$request->file('footer_logo')->getClientOriginalName();
            $input['footer_logo'] = $img;
            $request->footer_logo->move(public_path("documents/setting/"), $img);
        }
    
        $setting = Setting::updateOrCreate([
            'id' => $request->id
        ], $input);

        if($setting)
        {
            return redirect()->back()->with(array('message'=>'Success','type'=>'success'));
            
        }else{
            return redirect()->with(array('message'=>'Somethig wrong please try again','type'=>'error'));
        }
   }


   public function viewContact(Request $request)
   {
     $contacts = Contact::get();
    return view('admin.view-contact',compact('contacts'));
   }

   public function contactCelete($id)
   {
        $contacts =  Contact::find($id)->delete();
        if($contacts)
        {
            return redirect()->back()->with(array('message'=>'deleted successfully','type'=>'success'));
        }else{
            return redirect()->with(array('message'=>'Somethig wrong please try again','type'=>'error'));
        }
   }


   public function viewSection(Request $request)
   {
     $section = Section::first();
    return view('admin.sections.index',compact('section'));
   }

   public function addSection(Request $request)
   {
        $input = $request->except(['image','_token'],$request->all());
        
        if($request->hasFile('image'))
        {
            $img = Str::random(20).$request->file('image')->getClientOriginalName();
            $input['image'] = $img;
            $request->image->move(public_path("documents/section/"), $img);
        }

       
    
        $section = Section::updateOrCreate([
            'id' => $request->id
        ], $input);

        if($section)
        {
            return redirect()->back()->with(array('message'=>'Success','type'=>'success'));
            
        }else{
            return redirect()->with(array('message'=>'Somethig wrong please try again','type'=>'error'));
        }
   }


   public function profile()
   {
     return view('admin.profile');
   }

   public function profileUpdate(Request $request)
   {
        $user = User::find(auth()->user()->id);
        $input = $request->except(['profile','_token'],$request->all());

        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $input['profile'] = $img;
            $request->profile->move(public_path("documents/profile/"), $img);
        }

        $user->update($input);

        return redirect()->back()
                ->with(['message'=>'User update successfully','type'=>'success']);
   }

}
