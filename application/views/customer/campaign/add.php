
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
        <li class="active">เพิมแคมเปญ</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">ข้อมูลแคมเปญของ  <?=$f->customer_name;?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?=form_open_multipart('customer/do_campaign_add');?>
        <input type="hidden" name="cus_id" value="<?=$f->cus_id;?>">
          <div class="box-body">
            <div class="form-group">
              <label for="campaign_name">ชื่อ Campaign</label>
              <input type="text" class="form-control" id="campaign_name" name="campaign_name" placeholder="ชื่อ Campaign">
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

  