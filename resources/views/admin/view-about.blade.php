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
                  <form class="form-horizontal" action="{{route('addAbout')}}" novalidate enctype= "multipart/form-data" method="POST">
                     @csrf
                     <div class="row">
                        <input type="hidden" name="id" value="{{$about->id??null}}">
                        <div class="col-md-12">

                        <div class="form-group">
                              <label>About Us</label>
                              <div class="controls">
                                 <input type="text" name="about_us" class="form-control" value="{{$about->about_us??null}}" placeholder="About Us">
                              </div>
                           </div>



                        <div class="form-group">
                              <label>About Us Description</label>
                              <div class="controls">
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="about_us_desc" name="about_us_desc" rows="5" placeholder="About Us Description">{{$about->about_us_desc??null}}</textarea>
                                </fieldset>
                                 </div>
                           </div>

                           

                           <div class="form-group">
                              <label>Service Title</label>
                              <div class="controls">
                                 <input type="text" name="services_title" class="form-control" value="{{$about->services_title??null}}" placeholder="Company About">
                              </div>
                           </div>


                           <div class="form-group">
                              <label>Service Description</label>
                              <div class="controls">
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="services_desc" name="services_desc" rows="5" placeholder="Company Description">{{$about->services_desc??null}}</textarea>
                                </fieldset>
                                 </div>
                           </div>


                           <div class="form-group">
                              <label>Custom Fit</label>
                              <div class="controls">
                                 <input type="text" name="custom_fit" class="form-control" value="{{$about->custom_fit??null}}" placeholder="Custom Fit">
                              </div>
                           </div>


                           <div class="form-group">
                                <label>Custom Fit Description</label>
                                <div class="controls">
                                    <fieldset class="form-group">
                                        <textarea class="form-control" id="custom_fit_desc" name="custom_fit_desc" rows="5" placeholder="Custom Fit Description">{{$about->custom_fit_desc??null}}</textarea>
                                    </fieldset>
                                </div>
                           </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Service Image</label>
                                        <div class="controls">
                                            <input type="file" name="services_image" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @php $img = $about->services_image??null; @endphp
                                    <img src='{{asset("documents/about/$img")}}' alt="" width="150px">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Custom Fit Imgage 1</label>
                                        <div class="controls">
                                            <input type="file" name="custom_fit_img1" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @php $custom_fit_img1 = $about->custom_fit_img1??null; @endphp
                                    <img src='{{asset("documents/about/$custom_fit_img1")}}' alt="" width="150px">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Custom Fit Imgage 2</label>
                                        <div class="controls">
                                            <input type="file" name="custom_fit_img2" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    @php $custom_fit_img2 = $about->custom_fit_img2??null; @endphp
                                    <img src='{{asset("documents/about/$custom_fit_img2")}}' alt="" width="150px">
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