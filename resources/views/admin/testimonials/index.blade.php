
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
             <a class="btn btn-success" href="{{ route('testimonial.create') }}"> Create New</a>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-striped dataex-html5-selectors" >
              <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                   
                    <th>Action</th>
                  </tr>
              </thead>
                
                @forelse ($testimonial as $key => $item)
                 
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                   
                   
                    
                    <td>
                      <a class="btn btn-info" href="{{ route('testimonial.show',$item->id) }}"><span class="action-edit"><i class="feather icon-eye"></i></span></a>
                       <a class="btn btn-primary" href="{{ route('testimonial.edit',$item->id) }}"><span class="action-edit"><i class="feather icon-edit"></i></span></a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <form method="post" action="{{route('testimonial.destroy',$item->id)}}" style="margin-top: -38px;margin-left: 150px";>
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


<script>



  $(function () {
    $(".example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": []
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
</script>

<script type="text/javascript">
 
 var APP_URL = {!! json_encode(url('/')) !!}



 
</script>

@endsection