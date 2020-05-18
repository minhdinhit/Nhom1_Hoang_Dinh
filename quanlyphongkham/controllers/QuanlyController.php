<?php 
require("models/Quanly.php");
class QuanlyController extends Quanly {
	public function index()
	 {
	 	//slide
	 	if(!isset($_SESSION['name']))
			{
				header('location:../');
			}

if(!isset($_GET['page']))
		{
			$page = 1;
		}else
		{
			$page = $_GET['page'];
		}

		if(!isset($_GET['name']))
		{
			$name = '';
		}else
		{
			$name = $_GET['name'];
		}

		
	 		 	include("views/layouts/quanly/header.php");

	 		 	include("views/layouts/quanly/benhnhan.php");
}
public function showdsbenhnhan()
	 {
	 	if(!isset($_SESSION['name']))
			{
				header('location:../');
			}



		$count = 6;
		if(!isset($_GET['page']))
		{
			$page = 1;
		}else
		{
			$page = $_GET['page'];
		}

		if(!isset($_GET['name']))
		{
			$name = '';
		}else
		{
			$name = $_GET['name'];
		}


		$allbenhnhan = parent::allbenhnhan($name,($page-1)*$count,$count);
		$countallbenhnhan = parent::countallbenhnhan($name);

	 		 	include("views/layouts/quanly/showdsbenhnhan.php");
}

public function thembenhnhan(){

	if(!isset($_SESSION['name']))
			{
				header('location:../');
			}


	if(isset($_POST['name']))
	{
		parent::addbenhnhan($_POST['name'], $_POST['sex'], $_POST['birthday'], $_POST['phone'], $_POST['cmnd']);
		header('location:index');
	}



	include("views/layouts/quanly/header.php");

	include("views/layouts/quanly/thembenhnhan.php");
}

public function chinhsuabenhnhan($id)
{
	if(!isset($_SESSION['name']))
			{
				header('location:../');
			}

	if(isset($_POST['name']))
	{
		parent::editbenhnhan($id, $_POST['name'], $_POST['sex'], $_POST['birthday'], $_POST['phone'], $_POST['cmnd']);
		header('location:../index');
	}


	$data = parent::infobenhnhan($id);


	include("views/layouts/quanly/header.php");

	include("views/layouts/quanly/editbenhnhan.php");
}


public function xoabenhnhan($id)
{
	if(!isset($_SESSION['name']))
			{
				header('location:../');
			}

	
		parent::deletebenhnhan($id);
		header('location:../index');



	
}


	


}

 ?>
