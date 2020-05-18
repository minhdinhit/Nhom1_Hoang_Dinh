<div class="col-12">
	<div class="row">
		<div class="col-md-12 col-12">
			<h6><b>EDIT BỆNH NHÂN</b></h6>
<small>Chỉnh sửa thông tin bệnh nhân</small> 
		</div>
		
	</div>
</div>

<div class="col-12 col-md-5 mx-auto mt-5">
	<form method="post">
	<p class="py-0 mt-1 mb-0">
		Tên bệnh nhân
	</p>
	<p class="py-0 mt-1 mb-0">
		<input type="text" name="name" placeholder="" class="btn bg-transparent border px-3 py-1" value="<?php echo $data['name']; ?>">
	</p>

	<p class="py-0 mt-1 mb-0">
		Giới tính
	</p>
	<p class="py-0 mt-1 mb-0">
		<select name="sex" class="btn bg-transparent border px-3 py-1">
			<?php 
				if($data['sex']==2)
				{
					echo '<option value="1">Nam</option>
			<option value="2" selected="selected">Nử</option>';
				}
				else
				{
					echo '<option value="1">Nam</option>
			<option value="2">Nử</option>';
				}
			 ?>
		</select>
	</p>

	<p class="py-0 mt-1 mb-0">
		Ngày sinh
	</p>
	<p class="py-0 mt-1 mb-0">
		<input type="date" name="birthday" placeholder="" class="btn bg-transparent border px-3 py-1" value="<?php echo $data['birthday']; ?>">
	</p>
	<p class="py-0 mt-1 mb-0">
		Số điện thoại
	</p>
	<p class="py-0 mt-1 mb-0">
		<input type="text" name="phone" placeholder="" class="btn bg-transparent border px-3 py-1" value="<?php echo $data['phone']; ?>">
	</p>
	<p class="py-0 mt-1 mb-0">
		Chứng minh nhân dân
	</p>
	<p class="py-0 mt-1 mb-0">
		<input type="text" name="cmnd" placeholder="" class="btn bg-transparent border px-3 py-1" value="<?php echo $data['cmnd']; ?>">
	</p>
	<p class="my-4 mx-2">
		<button class="btn btn-info"><i class="far fa-check-circle"></i> CHỈNH SỬA</button>
	</p>
</form>

</div>