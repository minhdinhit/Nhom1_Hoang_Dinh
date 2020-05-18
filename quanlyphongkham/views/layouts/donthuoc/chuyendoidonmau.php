<?php
if($kq!=0){
	foreach ($kq as $value) {
		echo '<div id="columthuoc_'.$value['id_thuoc'].'" class="col-12 mt-1 pb-1 border-bottom"><div class="row"><div class="col-6"><input type="hidden" value="'.$value['id_thuoc'].'" name="thuoc[]">'.$value['tenthuoc'].'</div><div class="col-6 text-left"><input type="number" style="width:60px" class="btn btn-light border" value="'.$value['soluong'].'" name="count['.$value['id_thuoc'].']">('.$value['donvitinh'].')</div></div></div>';
	}
}

?>