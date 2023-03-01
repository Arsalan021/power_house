@extends('admin/layout/layout')

@section('header-script')
<style type="text/css">
  
</style>
@endsection

@section('body-section')
<section id="dashboard-analytics">
    <div class="container-fluid">
    
        <div class="row">
        <div class="col-12">
         <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-striped dataex-html5-selectors" >
              <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Social Installer</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
              </thead>
                
                @forelse ($contacts as $key => $item)
                 
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->name??null }}</td>
                    <td>{{ $item->phone??null }}</td>
                    <td>{{ $item->email??null }}</td>
                    <td>{{ $item->social_installer??null }}</td>
                    <td>{{ $item->msg??null }}</td>
                    <td>
                      <a href="{{route('contact-delete',$item->id)}}" onclick="return confirm('Are you sure want to delete?')"><span class="action-delete btn btn-danger"><i class="feather icon-trash"></i></span></a>
                     
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

@endsection