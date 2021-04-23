@extends('admin.layout.master')
@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $page_name." ".$title }}
        {{-- <small>Preview</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}/dashbord"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/admin')}}/manage_category">Manage {{ $title }}</a></li>
        <li class="active">{{ $page_name." ".$title }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
           @include('admin.layout._status_msg')
          <div class="box box-primary">
            <!-- form start -->
            <form action="{{ url('/admin')}}/store_{{$url_slug}}" method="post" role="form" data-parsley-validate="parsley" enctype="multipart/form-data">
             
              {!! csrf_field() !!}
              <div class="row">
                <div class="col-md-12">
                 <div class="col-md-4">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="role_name">Slider Heading<rspan style="color:red;" >*</rspan></label>
                        <input type="text" class="form-control" id="slider_name" name="slider_name" placeholder="Slider Name" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="role_name">click Link(optional)</label>
                        <div class="input-group">
                         <span class="input-group-addon">http://</span>
                         <input type="text" class="form-control" id="link" name="link" placeholder="Slider Link">
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="role_name">Image File<rspan style="color:red;" >*</rspan></label>
                        <input type="file" class="form-control" id="slider_img" name="slider_img" placeholder="Slider Name" required="true">
                      </div>
                    </div>
                  </div>
                </div>
              </div>               
              <div class="box-footer"> <a href="{{url('/admin')}}/manage_{{$url_slug}}"  class="btn btn-default">Back</a>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
    function slider()
    { 
      var order_type = $('#slider_no').val();
      if(order_type=="1")
      {
         $("input").removeAttr("required");
          $("rspan").addClass('displaynone');
      }else{
         $("input").attr("required","true"); 
        $("rspan").removeClass('displaynone');
      }
    }
  </script>
  <style>
    .displaynone{
      display: none !important;
    }
  </style>
@endsection