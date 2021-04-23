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
              <h3 class="m-0 pull-left box-title">Online Booking</h3>
              <a class="btn bg-navy pull-right" href="{{url('/admin')}}/download_bookings">Download Excel</a>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Mobile No.</th>
                  <th>Booking Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data as $key=>$value)
                    <tr>
                      <td>
                        {{$key+1}}
                      </td>
                      <td class="user-name">
                        {{$value->name}}
                      </td>
                      <td>
                        {{$value->email}}
                      </td>
                      <td>
                        {{$value->mobile}}
                      </td>
                      <td>
                        {{$value->date}}
                      </td>
                      <td>
                        {{$value->status}}
                      </td>
                      <td>
                        {{-- <a href="{{url('/admin')}}/edit_{{$url_slug}}/{{$value->id}}" title="Edit">
                          <i class="fa fa-edit"></i>
                        </a> --}}
                        <a href="{{url('/admin')}}/view_{{$url_slug}}/{{$value->id}}" data-toggle="tooltip" title="View" class="btn btn-default">
                          <i class="fa fa-eye"></i>
                        </a>
                        {{-- <a href="{{url('/admin')}}/delete_{{$url_slug}}/{{$value->id}}" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');">
                          <i class="fa fa-trash"></i>
                        </a> --}}
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
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
    </script> 
@endsection