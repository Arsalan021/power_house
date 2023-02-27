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

                           
                           
                           <div class="form-group">
                              <label>Email</label>
                              <div class="controls">
                                 <input type="email" name="email" class="form-control" value="{{$setting->email??null}}">
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Phone Number</label>
                              <div class="controls">
                                 <input type="number" name="phone_number" class="form-control" placeholder="Phone Numner" value="{{$setting->phone_number??null}}">
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

                           <div class="form-group">
                              <label>Twitter Url</label>
                              <div class="controls">
                                 <input type="url" name="twitter" class="form-control" placeholder="twitter Url" value="{{$setting->twitter??null}}">
                              </div>
                           </div>

                           <div class="form-group">
                              <label>Facebook Url</label>
                              <div class="controls">
                                 <input type="url" name="facebook" class="form-control" placeholder="facebook Url" value="{{$setting->facebook??null}}">
                              </div>
                           </div>

                           <div class="form-group">
                              <label>Youtube Url</label>
                              <div class="controls">
                                 <input type="url" name="youtube" class="form-control" placeholder="youtube Url" value="{{$setting->youtube??null}}">
                              </div>
                           </div>


                           <div class="form-group">
                              <label>Instagram Url</label>
                              <div class="controls">
                                 <input type="url" name="instagram" class="form-control" placeholder="instagram Url" value="{{$setting->instagram??null}}">
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