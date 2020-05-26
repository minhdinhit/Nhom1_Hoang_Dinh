<?php 
require("models/Donthuoc.php");
class DonthuocController extends Donthuoc {
	// khu vuc danh cho don thuoc

public function themdonthuoc(){
	if(!isset($_SESSION['name']))
			{
				header('location:../');
			}

	$loaidichvu = parent::md_selectdichvu(2);

	include("views/layouts/quanly/header.php");

	include("views/layouts/donthuoc/themdonthuoc.php");
}

public function kqsearchbnadddonthuoc(){
	if(!isset($_POST['name']))
	{
		echo 'Đã gặp sự cố, vui lòng thử lại';
	}else
	{
		$kq = parent::md_kqsearchbnadddonthuoc($_POST['name']);
		include("views/layouts/donthuoc/kqsearchbnadddonthuoc.php");
	}
}

public function kqnhaptenthuoc(){
	if(!isset($_POST['name']))
	{
		echo 'Đã gặp sự cố, vui lòng thử lại';
	}else
	{
		$kq = parent::md_kqnhaptenthuoc($_POST['name']);
		include("views/layouts/donthuoc/kqnhaptenthuoc.php");
	}
}

public function kqnhapdonmau(){
	$kq = parent::md_showdonmau($_POST['name']);
include("views/layouts/donthuoc/showkqdonthuoc.php");

}

public function kqtaodonthuoc(){
	// print_r($_POST);

	$taikham = isset($_POST['taikham']) ? '1' : '0';

	$donmau = isset($_POST['donmau']) ? '1' :'0';
	$kq = parent::md_adddonthuoc($_POST['name'], $_POST['ghichu'], $taikham, $_POST['id_benhnhan'],$_SESSION['id'], date("Y-m-d h:i:sa"), $_POST['uudaitongdon'], $_POST['loaidichvu'], $donmau, $_POST['thuoc'], $_POST['count']);


	header('location:showdonkham?id='.$kq);

	}


	public function showdonkham(){
	$showkq = parent::md_showdonkham($_GET['id']);

	include("views/layouts/quanly/header.php");

	include("views/layouts/donthuoc/showketquadonkham.php");
}

public function chuyendoidonmau(){
	$kq = parent::md_chuyendoidonmau($_POST['id']);
	include("views/layouts/donthuoc/chuyendoidonmau.php");
}

public function khothuoc(){

	if(isset($_GET['type']) && ($_GET['type']=='little'))
	{
		$type="little";
	}else{
		$type="new";
	}
	$count = 6;

	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 1;
	}
	$data  = parent::md_selectkhothuoc($type,($page-1)*$count,$count);
	$countall  = parent::md_countallkhothuoc($type);
	include("views/layouts/quanly/header.php");
	include("views/layouts/donthuoc/khothuoc.php");
}

public function themsoluongthuoc(){
	if(isset($_POST)){
		parent::md_themsoluongthuoc($_POST['id'], $_POST['count']);
	}
}

public function addthuoc(){
	print_r($_POST);
	parent::md_addthuoc($_POST['name'], $_POST['donvitinh'], $_POST['giacuoi'], $_POST['gianhap'], $_POST['cachdung'], $_POST['count']);

	header('location:khothuoc');
}

}

 ?>
