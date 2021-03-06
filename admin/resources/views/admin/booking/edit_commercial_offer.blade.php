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
        <li><a href="{{url('/')}}/dashbord"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/')}}/manage_{{$url_slug}}">Manage {{ $title }}</a></li>
        <li class="active">{{ $page_name." ".$title }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $page_name." ".$title }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/admin')}}/update_commercial_offer/{{$data->id}}" method="post" role="form" data-parsley-validate="parsley" enctype="multipart/form-data">
              @include('admin.layout._status_msg')
              {!! csrf_field() !!}
              
              <div class="box-body">

                <div class="form-group">
                  <label for="oldpassword">Car Maker<span style="color:red;" >*</span></label>
                 
                  <select class="form-control" id="car_maker" name="car_maker" onchange="function_car()" required="true">
                    <option value="">Select Maker</option>
                    @foreach($car as $value)
                    <option value="{{$value->car}}" @if($data->car_maker==$value->car) selected="" @endif>{{$value->car}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="oldpassword">Varient<span style="color:red;" >*</span></label>
                  <select id="varient" name="varient"  class="form-control" onchange="function_varient()" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select car varient"> 

           <option value="">Select Varient</option>
                        @foreach($varient as $value)
                        <option value="{{$value->varient}}" @if($data->varient==$value->varient) selected="" @endif>{{$value->varient}}</option>
                        @endforeach
        </select>
                </div>
                <div class="form-group">
                  <label for="oldpassword">Color<span style="color:red;" >*</span></label>
                  <select id="color" class="form-control" onchange="function_color()" name="color" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select color" >
            <option value="">Select Color</option>
                        @foreach($color as $value)
                        <option value="{{$value->color}}" @if($data->color==$value->color) selected="" @endif>{{$value->color}}</option>
                        @endforeach
        </select>
                </div>
                 <div class="form-group">
                  <img id="output_image1" height="100px" width="110px" src="https://www.marutiseva.com/{{$data->image}}" style="border-radius: 50px" />
                      <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="preview_image(event,1)" required="true">
                      <span class='error help-block'>{{ $errors->first('image_video') }}</span>
                      <label for="oldpassword">Image<span style="color:red;" >*</span></label>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
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
   function function_car()
  {
       var selectValue = $("#car_maker").val();           
        $.ajax({
            url: "{{url('/admin')}}/getvarientcomm",
            type: 'post',
            data: {id: selectValue},
            success: function (data) 
            {
              $("#varient").html(data);
            }
        });
  }

  function function_varient()
  {
       var selectValue = $("#varient").val();            
       var car = $("#car_maker").val();  
       $.ajax({
            url: "{{url('/admin')}}/getcolorcomm",
            type: 'post',
            data: {varient: selectValue,car: car},
            success: function (data) 
            {
              $("#color").html(data);
            }
        });
  }
 </script>
@endsection