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
            <div class="box-header" >
             
              <div class="row"> 
                    <div class="col-md-12">
                        <div class="col-md-3"><div class="form-group">
                        <h3 class="box-title" style="margin-top: 25px;">{{ $page_name." ".$title }}</h3></div>
                      </div>
                        <form action="{{ url('/admin')}}/mexa_test_csv" method="post" role="form" data-parsley-validate="parsley" enctype="multipart/form-data">
                       <div class="col-md-3">
                           <div class="form-group">
                             <label>From Date<rspan style="color:red;">*</rspan></label>
                             <div class="form-input">
                                 <input type="text" class="form-control " name="from_date" id="datepicker"  placeholder="Select from date" required="true" autocomplete="off">
                             </div>
                           </div>
                         </div>
                         <div class="col-md-3">
                           <div class="form-group">
                             <label>To Date<rspan style="color:red;">*</rspan></label>
                             <div class="form-input">
                                 <input type="text" class="form-control " name="to_date" id="datepicker1" placeholder="Select from to"  required="true" autocomplete="off">
                             </div>
                           </div>
                         </div>
                         <div class="col-md-3"> 
                           <div class="form-group" style="margin-top:26px !important;">
                                 <input type="submit" class="btn bg-navy pull-right" name="export_Excel" value="Export CSV" >
                            </div>
                         </div>
                         </form> 
                      </div>  
               </div>
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
                  <th>Model</th>
                  <th>Test Drive Date</th>
                  <th>Test Drive Time</th>
                  <th>City</th>
                  <th>Message</th>
                  <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data as $key=>$value)
                    <tr>
                      <td>
                        {{$key+1}}
                      </td>
                      <td>
                        {{$value->name}}
                      </td>
                      <td>
                        {{$value->email}}
                      </td>
                      <td>
                        {{$value->phone_no}}
                      </td>
                      <td>
                        {{$value->model}}
                      </td>
                      <td>
                        {{$value->test_drive_date}}
                      </td>
                      <td>
                        {{$value->test_drive_time}}
                      </td>
                      <td>
                        {{$value->city}}
                      </td>
                       <td>
                        {{$value->message}}
                      </td>  
                        <td>
                        {{$value->created_at}}
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