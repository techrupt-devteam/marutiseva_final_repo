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
              <h3 class="box-title">{{ $page_name." ".$title }}</h3>
              <a href="{{url('/admin')}}/add_{{$url_slug}}" class="btn btn-primary btn-sm" style="float: right;">Add Slider</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr.No.</th>
                  <th>Name</th>
                  <th>Order No</th>
                  <th>Slider Type</th>
                  <th>Link</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                  @foreach($data as $key=>$value)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$value['slider_name']}}</td>
                      <td>
                        <form action="{{ url('/admin')}}/update_order_no/{{$value['slider_id']}}" method="post" role="form" data-parsley-validate="parsley" enctype="multipart/form-data"> 
                           <div class="input-group">
                           <div class="input-group">
                            <input type="text" class="form-control" name="order_no" value="{{$value['order_no']}}" required="">
                            <input type="hidden" class="form-control" name="url_slug" value="{{$url_slug}}">
                            <span class="input-group-addon" style="padding: 1px 1px !important;">
                              <button class="btn-sm btn-primary btn"  name="submit"><i class="fa fa-save"></i></button>
                            </span>
                          </div>
                        </form>
                      </td>
                      <td>@if($value['slider_no']==1)offer Banner @else Banner @endif</td>
                      <td>{{$value['link']}}</td>
                      @if($url_slug=="slider")
                      <td><a href="{{url('/')}}/upload/seva_banner/{{$value['slider_img']}}" data-fancybox="gallery" data-caption="Caption #1"><img src="{{url('/')}}/upload/seva_banner/{{$value['slider_img']}}" width="50" height="50"></a></td>
                      @elseif($url_slug=="nexa_slider")
                       <td><a href="{{url('/')}}/upload/nexa_banner/{{$value['slider_img']}}" data-fancybox="gallery" data-caption="Caption #1"><img src="{{url('/')}}/upload/nexa_banner/{{$value['slider_img']}}" width="50" height="50"></a></td>
                      @elseif($url_slug=="commercial_slider")
                      <td><a href="{{url('/')}}/upload/commercial_banner/{{$value['slider_img']}}" data-fancybox="gallery" data-caption="Caption #1"><img src="{{url('/')}}/upload/commercial_banner/{{$value['slider_img']}}" width="50" height="50"></a></td>
                      @endif
                      <td>
                        <a href="{{url('/admin')}}/edit_{{$url_slug}}/{{$value['slider_id']}}" title="Edit">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{url('/admin')}}/delete_{{$url_slug}}/{{$value['slider_id']}}" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');">
                          <i class="fa fa-trash"></i>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
@endsection