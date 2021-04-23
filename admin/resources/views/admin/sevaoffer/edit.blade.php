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
          <div class="box box-primary">
           <!--  <div class="box-header with-border">
              <h3 class="box-title">{{ $page_name." ".$title }}</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start --> 
             @include('admin.layout._status_msg')
              <form action="{{ url('/admin')}}/update_{{$url_slug}}/{{$data['slider_id']}}" method="post" role="form" data-parsley-validate="parsley" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <div class="row">
                 <div class="col-md-12">
                  <div class="col-md-4">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="role_name">Image Name<rspan style="color:red;" >*</rspan></label>
                        <input type="text" class="form-control" id="slider_name" name="slider_name" value="{{$data['slider_name']}}" placeholder="Slider Name" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="role_name">click Link(optional)</label>
                        <div class="input-group">
                         <span class="input-group-addon">http://</span>
                         <input type="text" class="form-control" id="link" name="link" value="{{$data['link']}}" placeholder="Slider Link" >
                      </div>
                    </div>
                    </div>
                  </div>
                  
                 </div>
                  <div class="col-md-12">
                  <div class="col-md-4">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="role_name">Image File<rspan style="color:red;" >*</rspan></label>
                          <div class="input-group">
                            
                          <input type="file" class="form-control" id="slider_img" name="slider_img"  placeholder="Slider Name">
                          <input type="hidden" name="old_slider_img" value="{{$data['slider_img']}}">
                         
                          <span class="input-group-addon"><a href="{{url('/')}}/upload/seva_offer_banner/{{$data['slider_img']}}" data-fancybox="gallery" data-caption="Caption #1">
                              <i class="fa fa-eye"></i></a></span>
                           </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div> 
            
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('/admin')}}/manage_{{$url_slug}}"  class="btn btn-default">Back</a>
                <button type="submit" class="btn btn-primary pull-right">Update</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
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
      $("#slider_img").removeAttr("required");
     
    }
  }
</script>
<style>
    .displaynone{
      display: none !important;
    }
</style>
@endsection