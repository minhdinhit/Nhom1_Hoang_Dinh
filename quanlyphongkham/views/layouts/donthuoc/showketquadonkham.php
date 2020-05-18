<div class="col-12">
	
</div>

<div class="col-10 mx-auto shadow py-5">
	<h6 class="text-uppercase text-center pb-5"><b>ĐƠN KHÁM BỆNH</b></h6>
	<p class="text-right" style="font-size: 0.8em">
		<?php 
			echo 'Ngày kê đơn '.$showkq[0]['ngaykedon'].'<br>';
			echo 'Mã đơn:<b> '.$showkq[0]['id'].'</b><br>';
		?>
	</p>

	<p class="text-left" style="font-size: 0.8em">
		<?php 
			echo 'Bệnh nhân:<b> '.$showkq[0]['tenbenhnhan'].'</b><br>';
			echo 'Mã bệnh nhân:<b> '.$showkq[0]['idbenhnhan'].'</b><br>';
			echo 'Chuẩn đoán:<b> '.$showkq[0]['tenbenh'].'</b><br>';
		?>
	</p>
	<p class="">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Tên thuốc</th>
		      <th scope="col">Số lượng</th>
		      <th scope="col">Đơn giá</th>
		    </tr>
		  </thead>
		  <tbody>

		  	<?php 
		  		foreach ($showkq as $value) {
		  			echo '<tr>';
		  			echo '<th>'.$value['TT'].'</th>';
		  			echo '<td>'.$value['tenthuoc'].'</td>';
		  			echo '<td>'.$value['soluong'].'</td>';
		  			echo '<td>'.$value['dongia'].' / 1 '.$value['donvitinh'].'</td>';
		  			echo '</tr>';
		  		}
		  	 ?>
		   <tr>
		   	<th>Giá dịch vụ</th>
		   	<th>% ưu đải dịch vụ</th>
		   	<th colspan="2">% ưu đải tổng đơn</th>
		   </tr>
		   <tr>
		   	<td><?php echo $showkq[0]['giadichvu'] ?></td>
		   	<td><?php echo $showkq[0]['uudaidichvu'] ?></td>
		   	<td colspan="2"><?php echo $showkq[0]['uudaitongdon'] ?></td>
		   </tr>

		    <tr>
		   	<th colspan="2">Tổng đơn ban đầu</th>
		   	<th colspan="2">Tổng đơn sau ưu đải</th>
		   </tr>
		   <tr>
		   	<td colspan="2"><?php echo $showkq[0]['giatruocuudai'] ?></td>
		   	<td colspan="2"><b><?php echo $showkq[0]['giacuoi'] ?></b></td>
		   </tr>

		   
		  </tbody>
		</table>
	</p>
	<p class="pt-3">
		Ghi chú: 
		<small>
		<?php 
		echo $showkq['0']['ghichu'];
		 ?>
		 </small>
	</p>
	<p class="text-left pt-5" style="font-size: 0.8em">
		<?php 
			echo 'Nhân viên viết đơn:<b> '.$showkq[0]['tenhanvien'].'</b><br>';
			echo 'Mã nhân viên:<b> '.$showkq[0]['idnhanvien'].'</b><br>';
		?>
	</p>
</div>