<?php 
require("models/Home.php");
class HomeController extends Home {
	public function index()
	 {
	 	//slide
	 	if(isset($_POST['login']))
	 	{
	 		$return = parent::login($_POST['name'], $_POST['password']);

	 		if($return!=0)
	 		{
	 			header("Location: quanly/index");
	 		}
	 	}


	 	include("views/layouts/home/index.php");
}

	


}

 ?>
