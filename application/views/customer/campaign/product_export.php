<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>

<table class="table table-bordered table-striped" border="1">
<caption class="box-title">ของรางวัลของแคมเปญของ  <?=$f->customer_name;?> ชื่อแคมเปญ <?=$campaign->campaign_name;?></caption>
  <thead><tr>
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
        <td><?=$r->product_name;?></td>
        <td width="300"><?=$r->member_name==''?'-':$r->member_name;?></td>
        <td width="150"><?=$r->created_date;?></td>
      </tr>
    <?php endforeach;?>

  <?php endif;?>

    
  </tbody>
</table>

</head>
<body>
  