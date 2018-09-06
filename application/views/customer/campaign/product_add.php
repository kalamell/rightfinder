
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ข้อมูลลูกค้า
        <!-- <small>it all starts here</small> -->
      </h1>
       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a href="<?=site_url('customer');?>">ข้อมูลลูกค้า</a></li>
        <li class=''><a href="<?=site_url('customer/campaign/'.$f->cus_id);?>">ข้อมูลแคมเปญของ <?=$f->customer_name;?></a></li>
        <li class=""><a href="<?=site_url('customer/product/'.$f->cus_id.'/'.$campaign->campaign_id);?>">ของรางวัล</a></li>
        <li class="">เพิ่มของรางวัล</li>
      </ol>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">ข้อมูลแคมเปญของ  <?=$f->customer_name;?> เพิ่มของรางวัล</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?=form_open_multipart('');?>

          <div class="box-body">
            <div class="form-group">
              <label for="product_name">ชื่อ ของรางวัล</label>
              <input type="text" class="form-control" id="product_name" name="product_name" placeholder="ชื่อ ของรางวัล">
            </div>

            <div class="form-group">
              <label for="no">จำนวนรางวัล</label>
              <input type="text" class="form-control" id="no" name="no" value="1" placeholder="จำนวนรางวัล">
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

  