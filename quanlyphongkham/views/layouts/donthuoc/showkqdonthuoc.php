<?php
if($kq==0){
	echo '<div class="alert alert-danger" role="alert">
  Không tìm thấy đơn mẩu phù hợp
</div>';
}
else
{
	echo '<p style="background:#fff" class="px-2 py-2 text-center">Đơn thuốc mẩu</p>';
	foreach ($kq as $value) {
		echo '<p class="border-bottom py-2 px-2"> '.$value['name'].'<a class="mx-1 btn btn-info text-light anchondonmau" id="donmauso_'.$value['id'].'"><i class="fas fa-clipboard-check"></i></a></div>';
	}
}
?>

<script type="text/javascript">
	$('.anchondonmau').on('click',function(){
		var chuoidau = $(this).attr('id');
		$.ajax({
			url :'chuyendoidonmau',
			type :'post',
			datetype :  'text',
			data : {
				id : chuoidau.substr(9)
			},
			success : function(result){
				$('#listdonthuoc').html(result);
			}
		});
	});
</script>
