
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
        <li class='active'>ข้อมูลแคมเปญของ <?=$f->customer_name;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">ข้อมูลแคมเปญของ <?=$f->customer_name;?></h3>

          <div class="box-tools">
            <a href="<?=site_url('customer/campaign_add/'.$f->cus_id);?>" class="btn btn-info btn-sm"><i class='fa fa-plus'></i> เพิ่ม campaign</a>
          </div>
        </div>
        <div class="box-body no-padding">
          <table class="table table-bordered table-striped">
            <thead><tr>
            <th>Tool</th>
              <th>ชื่อ Campaign</th>
              <th>ข้อมูลของรางวัล</th>
              <th>ข้อมูลสมาชิก</th>
              
            </tr>
            </thead>
            <tbody>
            <?php if (count($rs)==0):?>
              <tr><td colspan="4"> - - - ไม่มีข้อมูล - - -</td></tr>
            <?php else:?>
              <?php foreach($rs as $r):?>
                <tr>         
                <td width="80">
                    <a onclick="return confirm('ต้องการลบหรือไม่ ?');" href="<?=site_url('customer/delete_campaign/'.$r->cus_id.'/'.$r->campaign_id);?>" class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>
                  </td>        
                  <td><?=$r->campaign_name;?></td>
                  <td width="150"><a href="<?=site_url('customer/product/'.$r->cus_id.'/'.$r->campaign_id);?>" class='btn btn-sm btn-default'>ข้อมูลของราลวัล</a></td>
                  <td width="150"><a href="<?=site_url('customer/member/'.$r->cus_id.'/'.$r->campaign_id);?>" class='btn btn-sm  btn-default'>ข้อมูลสมาชิก</a></td>
                  
                </tr>
              <?php endforeach;?>

            <?php endif;?>

              
            </tbody>
          </table>
        </div>
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  