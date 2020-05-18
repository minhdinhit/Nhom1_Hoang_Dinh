

<div class="col-12">
	<div class="row">
		<div class="col-md-3 col-6">
			<h6><b>BỆNH NHÂN</b></h6>
<small>Quản lí bệnh nhân</small> 
		</div>
		<div class="col-md-9 col-6 text-right">
			<input type="text" name="" placeholder="CMND/Số điện thoại" class="btn bg-transparent border text-left pr-5 col-8 col-md-4" id="search" value="<?php echo $name; ?>">
			<input type="hidden" name="" value="<?php echo $page; ?>" id="page">
			<a href="thembenhnhan">
				<button style="width:40px;height: 40px;border-radius:50%" class="bg-info text-light border-0 shadow mr-md-5 mr-0"><i class="fas fa-user-plus"></i></button>
			</a>

		</div>
	</div>
</div>
<div id="result"></div>
<script type="text/javascript">
	 $.ajax({
                    url : "showdsbenhnhan", 
                    type : "get", 
                    dateType:"text", 
                    data : { 
                         name : $('#search').val(),
                         page : $('#page').val()
                    },
                    success : function (result){
                        $('#result').html(result);
                    }
                });

	 $('#search').on('input', function(){
	 	$.ajax({
                    url : "showdsbenhnhan", 
                    type : "get", 
                    dateType:"text", 
                    data : { 
                         name : $('#search').val(),
                         page : '1'
                    },
                    success : function (result){
                        $('#result').html(result);
                    }
                });
	 });
	
</script>

