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
              <h3 class="box-title">New Offer</h3>
              <a href="{{url('/admin')}}/add_offer" class="btn btn-primary pull-right">Add Offer</a>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Car Maker</th>
                  <th>Varient</th>
                  <th>Color</th>
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
                        {{$value->car_name}}
                      </td>
                      <td>
                        {{$value->varient}}
                      </td>
                      <td>
                        {{$value->color}}
                      </td>
                      <td>
                         <a href="{{url('/admin')}}/edit_offer/{{$value->id}}" title="Edit" class="btn btn-default">
                          <i class="fa fa-edit text-info"></i>
                        </a> 
                        <a href="{{url('/admin')}}/view_offer/{{$value->id}}" title="View" class="btn btn-default">
                          <i class="fa fa-eye text-primary"></i>
                        </a>
                        <a href="{{url('/admin')}}/delete_offer/{{$value->id}}" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-default">
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