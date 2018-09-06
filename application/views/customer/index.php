
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
        <li class="active">ข้อมูลลูกค้า</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">ข้อมูลลูกค้า</h3>

          <div class="box-tools">
            <a href="<?=site_url('customer/add');?>" class="btn btn-info btn-sm"><i class='fa fa-plus'></i> เพิ่มข้อมูลลูกค้า</a>
          </div>
        </div>
        <div class="box-body no-padding">
          <table class="table table-bordered table-striped">
            <thead><tr>
              <th>Logo</th>
              <th>ชื่อลูกค้า</th>
              <th>Campaign</th>
              <th style="width: 150px">Tools</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($rs)==0):?>
              <tr><td colspan="3"> - - - ไม่มีข้อมูล - - -</td></tr>
            <?php else:?>
              <?php foreach($rs as $r):?>
                <tr>
                  <td><img src="<?=base_url();?>upload/<?=$r->customer_logo;?>" class='img-responsive' /></td>
                  <td><?=$r->customer_name;?></td>
                  <td><a href="<?=site_url('customer/campaign/'.$r->cus_id);?>">ดูแคมเปญ</a></td>
                  <td align="center"><a href="<?=site_url('customer/delete/'.$r->cus_id);?>"  onclick="javascript:return confirm('ต้องการลบหรือไม่');" class='btn btn-sm btn-default'>Delete</a></td>
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

  