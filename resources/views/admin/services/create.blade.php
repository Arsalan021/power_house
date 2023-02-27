
@extends('admin/layout/layout')

@section('header-script')

@endsection

@section('body-section')


<section class="input-validation dashboard-analytics">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            
        <div class="card-content">
            <div class="card-body">
                <form class="form-horizontal" action="{{route('service.store')}}" novalidate enctype= "multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <div class="controls">
                                    <input type="text" name="title" class="form-control"  data-validation-required-message="This field is required" placeholder="Title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <p >
                                    <img src="" id="output" alt="">
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="controls">
                                    <input type="file" name="image" class="form-control"  data-validation-required-message="This field is required" onchange=loadFile(event) required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div class="controls">
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="description" required data-validation-required-message="This field is required" name="description" rows="3" placeholder="Description"></textarea>
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


<link rel="stylesheet" href="{{asset('app-assets/css/toastr.min.css')}}" />

<script src="{{asset('app-assets/js/waitMe.js')}}"></script>
<script src="{{asset('app-assets/js/toastr.min.js')}}"></script>

<script>


var loadFile = function(event) {
   
   var image = document.getElementById('output');
   
   image.src = URL.createObjectURL(event.target.files[0]);
   };
</script>

<script type="text/javascript">
 
 var APP_URL = {!! json_encode(url('/')) !!}






</script>

@endsection