
@extends('admin/layout/layout')

@section('header-script')

@endsection

@section('body-section')
<br>
<section id="dashboard-analytics">
    <div class="container-fluid">
    
        <div class="row">
        <div class="col-12">
         <div class="card">
            <div class="card-header">
             <a class="btn btn-success" href="{{ route('project.create') }}"> Create New</a>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-striped dataex-html5-selectors" id="">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Capacity</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
              </thead>
                
                @forelse ($projects as $key => $item)
                 
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->capacity }}</td>
                    <td>{{ $item->location }}</td>
                    <td>{{ $item->description }}</td>
                    <td><img class="profile-user-img img-fluid" src='{{asset("documents/project/$item->image")}}' width="50px" alt="Image"></td>
                    <td>
                      
                      <div class="form-group">
                          <select class="select2-size-lg form-control" id="large-select{{$item->id}}" data-id="{{$item->id}}" data-type="{{$item->type}}">
                              <option value="compeleted" {{ ($item->type == 'compeleted') ? 'selected' : '' }} >Compeleted</option>
                              <option value="pending"  {{  ($item->type == 'pending') ? 'selected' : '' }} >Manufacturing</option>
                           </select>
                      </div>

                      <!-- <div class="custom-control custom-switch switch-lg custom-switch-success mr-2 mb-1">
                              
                              <input type="checkbox" class="custom-control-input" id="customSwitch{{$key+1}}" data-id="{{$item->id}}" data-type="{{$item->type}}">
                              <label class="custom-control-label" for="customSwitch{{$key+1}}">
                                  @if($item->type =='compeleted')
                                  <span class="switch-text-left">Compeleted</span>
                                  @endif
                                  @if($item->type =='pending')
                                  <span class="switch-text-right">Manufacture</span>
                                  @endif
                              </label>
                          </div> -->
                    </td> 
                    
                    <td>
                      <a class="btn btn-info" href="{{ route('project.show',$item->id) }}"><span class="action-edit"><i class="feather icon-eye"></i></span></a>
                       <a class="btn btn-primary" href="{{ route('project.edit',$item->id) }}"><span class="action-edit"><i class="feather icon-edit"></i></span></a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <form method="post" action="{{route('project.destroy',$item->id)}}" style="margin-top: -38px;margin-left: 150px";>
                         @csrf
                         @method('delete')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure Want To Delete This..??')" class="btn btn-default generalsetting_admin"><span class="action-delete"><i class="feather icon-trash"></i></span></button>
                       </form>
                    </td>
                  </tr>
                  @empty
                @endforelse
                </table>
            </div>
            <!-- /.card-body -->
         </div>
      </div>
        </div>
    </div>
</section>

@endsection


@section('footer-section')
@endsection

@section('footer-script')



<script type="text/javascript">
 
 var APP_URL = {!! json_encode(url('/')) !!}

//  
$('.select2-size-lg').change(function() {
    var id = $(this).attr("data-id");
    // var type = $(this).attr("data-type");
    var type = $("#large-select"+id).val();
    
    $.ajax({
        url : "{{route('change-type-project')}}", 
        type: 'GET',
       
        data: {'id': id,'type':type},
        success: function (response) {
          if(response)
            {
             toastr.success(response.message);
            }else{
             toastr.error(response.message);
            } 
        }, error: function (error) {
            toastr.error("Some error occured!");
        }
    });

    })

 
</script>

@endsection