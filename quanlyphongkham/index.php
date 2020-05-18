
<link rel="stylesheet" href="../views/assests/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<?php 
session_start();
require_once('config/database.php');
$db = new Database;


	$url = isset($_GET['url']) ? $_GET['url'] : null;
	$url = trim($url, '/');
	$arr_url = explode('/', $url);
	// xu li
	$controller = !empty($arr_url[0]) ? $arr_url[0] : 'home';
	$action = isset($arr_url[1]) ? $arr_url[1] : 'index';
	$param = isset($arr_url[2]) ? $arr_url[2] :null;
	$param1 = isset($arr_url[3]) ? $arr_url[3] :null;
	// tro den controlller
	$fileName = 'controllers/'.ucfirst($controller).'Controller.php';
	//echo $fileName;
	 if(file_exists($fileName))
	 {
	 	include($fileName);
	 	$className = ucfirst($controller).'Controller';
	 	$object = new $className;
	 	if(!method_exists($object, $action)) {
			require_once('views/layouts/404.php');
		} else {
			if(!empty($param) && !empty($param1)) {
				$object->$action($param,$param1);
			} else {
				if(!empty($param)){
					$object->$action($param);
				}else
				{$object->$action();}
			}
		}
	} else {
		require_once('views/layouts/404.php');
	}

 ?>
 <style type="text/css">
 	@import url('https://fonts.googleapis.com/css?family=Quicksand&display=swap');
 	body
 	{
 		font-family: 'Quicksand', sans-serif!important;
 	}
 </style>