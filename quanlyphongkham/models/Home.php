<?php 
class Home extends Database {
	public function login($name, $password){
		$this->conn= parent::connect();
		$sql= "SELECT * from nhanvien WHERE name='".$name."' AND password='".$password."'";
		parent::query($sql);
		return parent::select_cf();
	
}

}
?>