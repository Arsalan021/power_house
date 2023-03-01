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
                  <form class="form-horizontal" action="{{route('add-section')}}" novalidate enctype= "multipart/form-data" method="POST">
                     @csrf
                     <div class="row">
                        <input type="hidden" name="id" value="{{$section->id??null}}">
                        <div class="col-md-12">

                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Title</label>
                                       <div class="controls">
                                          <input type="text" name="title" class="form-control" placeholder="Title" value="{{$section->title??null}}">
                                       </div>
                                    </div>
                                 </div> 

                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label> Sub Title</label>
                                       <div class="controls">
                                          <input type="text" name="sub_title" class="form-control" placeholder="Sub Title" value="{{$section->sub_title??null}}">
                                       </div>
                                    </div>
                                 </div>
                              </div>   

                              <div class="form-group">
                                 <label>Description</label>
                                 <div class="controls">
                                 <fieldset class="form-group">
                                       <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description">{{$section->description??null}}</textarea>
                                 </fieldset>
                                    </div>
                              </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="controls">
                                            <input type="file" name="image" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                @php $img = $section->image??null; @endphp
                                <div class="col-md-6">
                                    <img src='{{asset("documents/section/$img??null")}}' alt="" width="300px">
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