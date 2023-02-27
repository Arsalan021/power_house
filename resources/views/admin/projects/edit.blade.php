
@extends('admin/layout/layout')

@section('header-script')

@endsection

@section('body-section')
<br>
<section class="input-validation dashboard-analytics">
     <div class="row">
          <div class="col-12">
          <div class="card">
                                
                <div class="card-content">
                    <div class="card-body">
                  {!! Form::model($projects, ['method' => 'PATCH','route' => ['project.update', $projects->id],'enctype'=>'multipart/form-data']) !!}
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Title:</strong>
                              {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                          </div>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Capacity:</strong>
                              {!! Form::text('capacity', null, array('placeholder' => 'Capacity','class' => 'form-control')) !!}
                          </div>
                      </div>


                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Location:</strong>
                              {!! Form::text('location', null, array('placeholder' => 'Location','class' => 'form-control')) !!}
                          </div>
                      </div>


                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Description:</strong>
                              {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                          </div>
                      </div>

                     
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                            <img class="profile-user-img img-fluid" src='{{asset("documents/project/$projects->image??null")}}' width="200px" alt="Image">
                            </div>
                        </div>
                        

                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Image:</strong>
                              {!! Form::file('image',  array('class' => 'form-control')) !!}
                          </div>
                      </div>

                    
                      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </div>
                  {!! Form::close() !!}
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

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDMzBtl2TKTecLe_NEmSup5U-nkj93Ch7o"></script>
<script src="{{asset('assets/js/waitMe.js')}}"></script>


<script type="text/javascript">

 var APP_URL = {!! json_encode(url('/')) !!}





 
</script>

@endsection