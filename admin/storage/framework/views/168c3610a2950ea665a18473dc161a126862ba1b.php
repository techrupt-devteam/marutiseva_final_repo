 
<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e($page_name." ".$title); ?>

       
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/admin')); ?>/dashbord"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage <?php echo e($title); ?></a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $__env->make('admin.layout._status_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="box">
            <div class="box-header">
              <div class="row"> 
                    <div class="col-md-12">
                        <div class="col-md-3"><div class="form-group">
                        <h3 class="box-title" style="margin-top: 25px;"><?php echo e($page_name." ".$title); ?></h3></div>
                      </div>
                       <form action="<?php echo e(url('/admin')); ?>/comm_enq_csv" method="post" role="form" data-parsley-validate="parsley" enctype="multipart/form-data">
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
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td>
                        <?php echo e($key+1); ?>

                      </td>
                      <td>
                        <?php echo e($value->name); ?>

                      </td>
                      <td>
                        <?php echo e($value->email); ?>

                      </td>
                      <td>
                        <?php echo e($value->mobile); ?>

                      </td>
                      <td>
                        <?php echo e($value->desc); ?>

                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\marutiseva_final\admin\resources\views/admin/booking/commercial_enquiries.blade.php ENDPATH**/ ?>