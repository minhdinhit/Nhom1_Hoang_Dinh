<?php 
if($kq==0)
{
  echo '<div class="alert alert-danger" role="alert">Không tìm thấy thông tin bệnh nhân nào trùng khớp';
  echo '<a href="../quanly/thembenhnhan" class="text-success"> Thêm Bệnh Nhân</a></div>';
}
else
{
  echo '
<table class= border-0 mx-0 px-0 " style="background-color:#fff;width:100%;font-size:0.8em"><tr class="py-2 px-1"><th>Name</th><th>SDT</th><th>CMND</th><th></th></tr>';
foreach ($kq as $value) {
  echo '<tr class="khungtimbn border-bottom bn'.$value['id'].'">';
  echo '<td class="py-2 px-1">'.$value['name'].'</td>';
  echo '<td class="py-2 px-1">'.$value['phone'].'</td>';
  echo '<td class="py-2 px-1">'.$value['cmnd'].'</td>';
  echo '<td class="py-2 px-1"><div style="width:40px;height: 40px;border-radius:50%; display: flex; justify-content: center;  align-items: center;" class="bg-success text-light border-0 shadow chonnv" id="'.$value['id'].'"><i class="far fa-check-circle" ></i> </div></td>';
  echo '</tr>';
}

echo '</table>';
}

 ?>

 <script type="text/javascript">
   $('.chonnv').on('click',function(){
    $('.khungtimbn').hide();
    $('.bn'+$(this).attr('id')).show();
    $('.bn'+$(this).attr('id')).css('background-color','#EBF5FB');
    $('.bn'+$(this).attr('id')).css('color','#555');
    $('#mabenhnhan').val($(this).attr('id'));
   });
 </script>