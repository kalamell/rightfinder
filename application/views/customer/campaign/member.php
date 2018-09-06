
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ของรางวัลข้อมูลลูกค้า
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a href="<?=site_url('customer');?>">ข้อมูลลูกค้า</a></li>
        <li class=''><a href="<?=site_url('customer/campaign/'.$f->cus_id);?>">ข้อมูลแคมเปญของ <?=$f->customer_name;?></a></li>
        <li class="active">ของรางวัล</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">ของรางวัลของแคมเปญของ  <?=$f->customer_name;?> ชื่อแคมเปญ <?=$campaign->campaign_name;?></h3>
          <div class="box-tools">
            <?=form_open_multipart('', array('class' => 'form-inline'));?>
             <div class="form-group">
              <input type="file" name="file" class=''/>
            </div>
            <button type="submit" class="btn btn-info btn-sm"><i class='fa fa-plus'></i> Upload สมาชิก </button>
            <?=form_close();?>
          </div>

        </div>
        <div class="box-body no-padding">
          <table class="table table-bordered table-striped">
            <thead><tr>
              <th width="60">ลำดับ</th>
              <th>ชื่อลูกค้า</th>
              <th>ผู้ที่ได้รับรางวัล</th>
              <th>เมื่อ</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($rs)==0):?>
              <tr><td colspan="4"> - - - ไม่มีข้อมูล - - -</td></tr>
            <?php else:?>
              <?php $no = 1; foreach($rs as $r):?>
                <tr>
                  <td><?=$no;?></td>                 
                  <td><?=$r->member_name;?></td>
                  <td width="300"><?=$r->product_name==''?'-':$r->product_name;?></td>
                  <td width="150"><?=$r->created_date=='0000-00-00 00:00:00'?'':$r->created_date;?></td>
                </tr>
              <?php $no++; endforeach;?>

            <?php endif;?>

              
            </tbody>
          </table>
        </div>
        
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  