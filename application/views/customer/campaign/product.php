
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

            <a href="<?=site_url('customer/product_export/'.$f->cus_id.'/'.$campaign->campaign_id);?>" class="btn btn-info btn-sm"><i class='fa fa-plus'></i>Export</a>

            <a href="<?=site_url('customer/product_add/'.$f->cus_id.'/'.$campaign->campaign_id);?>" class="btn btn-info btn-sm"><i class='fa fa-plus'></i> เพิ่ม ของรางวัล</a>
          </div>

        </div>
        <div class="box-body no-padding">
        	<?=form_open('');?>
        	<p><button type="submit" class="btn btn-info btn-sm">Delete</button></p>
          <table class="table table-bordered table-striped">
            <thead><tr>
            <th width="80">Delete <br><input type="checkbox" class="checkbox" /> เลือกทั้งหมด</th>
              <th>ของรางวัล</th>
              <th>ผู้ที่ได้รับรางวัล</th>
              <th>เมื่อ</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($rs)==0):?>
              <tr><td colspan="4"> - - - ไม่มีข้อมูล - - -</td></tr>
            <?php else:?>
              <?php foreach($rs as $r):?>
                <tr>                 
                <td><input type="checkbox" name="product_id[]" value="<?=$r->product_id;?>" /></td>
                  <td><?=$r->product_name;?> <?=$r->member_id;?></td>
                  <td width="300"><?=$r->member_name==''?anchor('campaign/id/'.$r->campaign_id.'/'.$r->product_id, 'จับรางวัล', 'target=_blank'):$r->member_name;?></td>
                  <td width="150"><?=$r->created_date;?></td>
                </tr>
              <?php endforeach;?>

            <?php endif;?>

              
            </tbody>
          </table>
          <?=form_close();?>
        </div>
        
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  