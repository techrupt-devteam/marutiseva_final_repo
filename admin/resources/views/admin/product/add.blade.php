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
                        <label for="role_name">Model Name<rspan style="color:red;" >*</rspan></label>
                        <input type="text" class="form-control" id="car" name="car" placeholder="Car Name" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="role_name">Menu Image<rspan style="color:red;" >*</rspan></label>
                        <input type="file" class="form-control" id="menu_image" name="menu_image" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="role_name">Feature Image<rspan style="color:red;" >*</rspan></label>
                        <input type="file" class="form-control" id="car_image" name="car_image" required="true">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="role_name">Link<rspan style="color:red;" >*</rspan></label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="link" required="true">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  
                  <div class="table-responsive"><div class="box-body">
                    <table class="table table-sm table-bordered table-striped table-dark" id="myTable">
                      <thead>
                        <tr class="text-uppercase text-center">
                          <th width="30%" >Variant</th>
                          <th width="30%">Color</th>
                          <th width="30%">Price</th>
                          <th class="text-center">
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-create addRow p-0 m-0" onclick="addDurationRow()"><i class="fa fa-plus"></i>
                            </a>
                          </th>
                        </tr>
                      </thead>
                      <tbody id="duration_body">
                        <input type="hidden" id="duration_flag" name="duration_flag" value="1">
                          <tr class="tr_row_duration1">
                            <td>
                                <input type="text" autocomplete="off" class="form-control" placeholder="Enter Variant Name" id="variant1" name="variant1" required="true" data-parsley-errors-container="#variant1" data-parsley-error-message="Enter Variant Name">
                                <span id="#variant1" style="color:red;"></span>
                            </td>
                            <td width="20%">
                                 <input type="text" id="color1" class="form-control" placeholder="Enter Color Name"   name="color1" required="true" data-parsley-errors-container="#color1" data-parsley-error-message="Please enter color.">
                                 <span id="color1" style="color:red;"></span>
                            </td>
                            <td>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-rupee"></i>
                                  </div>
                                  <input type="text" autocomplete="off" class="form-control" placeholder="Enter Price" id="price1" name="price1" required="true" data-parsley-errors-container="#dis_price1" data-parsley-error-message="Please Enter price.">
                                </div>
                                <span id="dis_price1" style="color:red;"></span>
                            </td>
                             <td style="text-align: center;"  width="10%">
                               <a href="javascript:void(0);" class="btn-sm btn btn-danger remove p-0 m-0"   onclick="removedurationRow_ajax(1)"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                  </div>                  
                </div>
              </div>
              </div>               
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

  //add more  
  function addDurationRow()
  {
      var duration_flag = $('#duration_flag').val();
      duration_flag = parseInt(duration_flag)+parseInt(1); 
      $('#duration_flag').val(duration_flag);
       var tr = '<tr class="tr_row_duration' + duration_flag + '"><td><input type="text" autocomplete="off" class="form-control" placeholder="Enter Variant Name" id="variant' + duration_flag + '" name="variant' + duration_flag + '" required="true" data-parsley-errors-container="#variant1" data-parsley-error-message="Enter Variant Name"><span id="#variant' + duration_flag + '" style="color:red;"></span></td><td><input type="text" id="color' + duration_flag + '" class="form-control" placeholder="Enter Color Name"   name="color' + duration_flag + '"" required="true" data-parsley-errors-container="#color' + duration_flag + '" data-parsley-error-message="Please enter color."><span id="color' + duration_flag + '" style="color:red;"></span></td><td><div class="input-group"><div class="input-group-addon"><i class="fa fa-rupee"></i></div><input type="text" autocomplete="off" class="form-control" placeholder="Enter Price" id="price' + duration_flag + '" name="price' + duration_flag + '" required="true" data-parsley-errors-container="#dis_price' + duration_flag + '" data-parsley-error-message="Please Enter price."></div><span id="dis_price' + duration_flag + '" style="color:red;"></span></td><td style="text-align:center"><a href="javascript:void(0);" class="btn btn-danger remove"  onclick="removedurationRow_ajax(' + duration_flag + ')"><i class="fa fa-trash"></i></a></td></tr>';

        $('#duration_body').append(tr);
     
  }


  function removedurationRow_ajax(div_id)
  {
      var duration_flag = $('#duration_flag').val();
      if(duration_flag!=1)
      {
        $('.tr_row_duration'+div_id).remove();
      }
  }
//end add more 


  </script>
  <style>
    .displaynone{
      display: none !important;
    }
  </style>
@endsection