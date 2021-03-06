@extends('admin.layout.master')
 
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $page_name." ".$title }}
       {{--  <small>advanced tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}/dashbord"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage {{ $title }}</a></li>
        {{-- <li class="active">{{ $page_name." ".$title }}</li> --}}
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          @include('admin.layout._status_msg')
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mange location</h3>
              <a href="{{url('/admin')}}/add_location" class="btn btn-primary pull-right">Add location</a>
            </div>
            
            
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>City</th>
                  <th>Area</th>
                  <th>Active/Inactive</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data as $key=>$value)
                    <tr>
                      <td>
                        {{$key+1}}
                      </td>
                      <td>
                        {{$value->city}}
                      </td>
                      <td>
                        {{$value->area}}
                      </td>
                      <td>
                        @if($value->is_active==1)
                          <a class="btn btn-success" href="{{url('/admin')}}/change_location_status/{{base64_encode($value->id)}}">Active</a>
                        @else
                          <a class="btn btn-danger" href="{{url('/admin')}}/change_location_status/{{base64_encode($value->id)}}">Inactive</a>
                        @endif
                      </td> 
                      <td>
                        <a href="{{url('/admin')}}/edit_location/{{$value->id}}" title="Edit" class="btn btn-default">
                          <i class="fa fa-edit text-info"></i>
                        </a>
                        <a href="{{url('/admin')}}/view_location/{{$value->id}}" title="View" class="btn btn-default">
                          <i class="fa fa-eye text-primary"></i>
                        </a>
                        <a href="{{url('/admin')}}/delete_location/{{$value->id}}" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-default">
                          <i class="fa fa-trash text-danger"></i>
                        </a>
                      </td>   
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
@endsection