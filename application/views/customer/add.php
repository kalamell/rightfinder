
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ข้อมูลลูกค้า
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?=site_url('customer');?>"><i class="fa fa-dashboard"></i> ข้อมูลลูกค้า</a></li>
        <li class="active">เพิ่มข้อมูลลูกค้า</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">ข้อมูลลูกค้า</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?=form_open_multipart('customer/do_add');?>
          <div class="box-body">
            <div class="form-group">
              <label for="customer_name">ชื่อลูกค้า</label>
              <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="ชื่อลูกค้า">
            </div>

            <div class="form-group">
              <label for="customer_logo">Logo</label>
              <input type="file" id="customer_logo" name="customer_logo">

              <p class="help-block">* ภาพเป็นชนิด jpg, png</p>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        <?=form_close();?>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  