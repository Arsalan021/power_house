@extends('admin/layout/layout')

@section('header-script')
<style type="text/css">
  
</style>
@endsection

@section('body-section')
<section class="input-validation dashboard-analytics">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-content">
               <div class="card-body">
                  <form class="form-horizontal" action="{{route('addSetting')}}" novalidate enctype= "multipart/form-data" method="POST">
                     @csrf
                     <div class="row">
                        <input type="hidden" name="id" value="{{$setting->id??null}}">
                        <div class="col-md-12">

                        <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                       <label>Icon Image</label>
                                       <div class="controls">
                                          <input type="file" name="icon_title" class="form-control" >
                                       </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 @php $icon_title = $setting->icon_title??null; @endphp
                                 <img src='{{asset("documents/setting/$icon_title")}}' alt="" width="150px">
                              </div>
                           </div>


                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                       <label>Header Background Image</label>
                                       <div class="controls">
                                          <input type="file" name="header_background_image" class="form-control" >
                                       </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 @php $header_background_image = $setting->header_background_image??null; @endphp
                                 <img src='{{asset("documents/setting/$header_background_image")}}' alt="" width="150px">
                              </div>
                           </div>

                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Home Title</label>
                                       <div class="controls">
                                          <input type="text" name="home_title" class="form-control" value="{{$setting->home_title??null}}">
                                       </div>
                                    </div>
                                 </div> 

                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Home Sub Title</label>
                                       <div class="controls">
                                          <input type="text" name="home_sub_title" class="form-control" placeholder="Home Sub Title" value="{{$setting->home_sub_title??null}}">
                                       </div>
                                    </div>
                                 </div>
                              </div>   

                              <div class="form-group">
                                 <label>Home title Description</label>
                                 <div class="controls">
                                 <fieldset class="form-group">
                                       <textarea class="form-control" id="home_description" name="home_description" rows="3" placeholder="Home Description">{{$setting->home_description??null}}</textarea>
                                 </fieldset>
                                    </div>
                              </div>


                           <div class="form-group">
                              <label>Company About</label>
                              <div class="controls">
                                 <input type="text" name="company_about_us" class="form-control" value="{{$setting->company_about_us??null}}" placeholder="Company About">
                              </div>
                           </div>


                           <div class="form-group">
                              <label>Company Description</label>
                              <div class="controls">
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="company_desc" name="company_desc" rows="3" placeholder="Company Description">{{$setting->company_desc??null}}</textarea>
                                </fieldset>
                                 </div>
                           </div>
                           
                           


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Header Logo</label>
                                        <div class="controls">
                                            <input type="file" name="header_logo" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src='{{asset("documents/setting/$setting->header_logo??null")}}' alt="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Footer Logo</label>
                                        <div class="controls">
                                            <input type="file" name="footer_logo" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <img src='{{asset("documents/setting/$setting->footer_logo??null")}}' alt="">
                                </div>
                            </div>

                           
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Email</label>
                                       <div class="controls">
                                          <input type="email" name="email" class="form-control" value="{{$setting->email??null}}">
                                       </div>
                                    </div>
                                 </div> 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Phone Number</label>
                                       <div class="controls">
                                          <input type="number" name="phone_number" class="form-control" placeholder="Phone Numner" value="{{$setting->phone_number??null}}">
                                       </div>
                                    </div>
                                 </div>
                              </div>   
                           
                           <div class="form-group">
                              <label>Address</label>
                              <div class="controls">
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="address">{{$setting->address??null}}</textarea>
                                </fieldset>
                                 </div>
                           </div>
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Twitter Url</label>
                                       <div class="controls">
                                          <input type="url" name="twitter" class="form-control" placeholder="twitter Url" value="{{$setting->twitter??null}}">
                                       </div>
                                    </div>
                               </div>
                               <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Facebook Url</label>
                                    <div class="controls">
                                       <input type="url" name="facebook" class="form-control" placeholder="facebook Url" value="{{$setting->facebook??null}}">
                                    </div>
                                 </div>
                               </div>
                           </div>  

                          
                           <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                                       <label>Youtube Url</label>
                                       <div class="controls">
                                          <input type="url" name="youtube" class="form-control" placeholder="youtube Url" value="{{$setting->youtube??null}}">
                                       </div>
                                    </div>
                                </div>
                              
                                <div class="col-md-6">
                                 <div class="form-group">
                                       <label>Instagram Url</label>
                                       <div class="controls">
                                          <input type="url" name="instagram" class="form-control" placeholder="instagram Url" value="{{$setting->instagram??null}}">
                                       </div>
                                    </div>
                                 </div> 
                           </div>
                           <div class="form-group">
                              <label>Text</label>
                              <div class="controls">
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="text" name="text" rows="3" placeholder="Text">{{$setting->text??null}}</textarea>
                                </fieldset>
                                 </div>
                           </div>

                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection


@section('footer-section')
@endsection

@section('footer-script')

@endsection