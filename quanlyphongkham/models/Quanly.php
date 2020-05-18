<?php 
class Quanly extends Database {
	
public function allbenhnhan($name,$vitri, $count)
{
	$this->conn= parent::connect();
		$sql= "SELECT * from benhnhan WHERE phone like '%".$name."%' OR cmnd like '%".$name."%' ORDER BY id DESC LIMIT $vitri, $count ";
		parent::query($sql);
		return parent::selectall_cf();
}
public function countallbenhnhan($name)
{
	$this->conn= parent::connect();
		$sql= "SELECT * from benhnhan WHERE phone like '%".$name."%' OR cmnd like '%".$name."%'";
		parent::query($sql);
		return parent::numrow();
}

public function addbenhnhan($name, $sex, $birthday, $phone, $cmnd){
	$this->conn= parent::connect();
		$sql= "INSERT INTO benhnhan (id, name, sex, birthday, phone, cmnd) VALUES (NULL, '".$name."', '".$sex."', '".$birthday."', '".$phone."', '".$cmnd."')";
		return parent::query($sql);
}
public function infobenhnhan($id)
{
	$this->conn= parent::connect();
		$sql= "SELECT * from benhnhan WHERE id='".$id."'";
		parent::query($sql);
		return parent::select_cf();
}

public function editbenhnhan($id, $name, $sex, $birthday, $phone, $cmnd){
	$this->conn= parent::connect();
		$sql= "UPDATE benhnhan SET name = '".$name."', sex = '".$sex."', birthday = '".$birthday."', phone = '".$phone."', cmnd = '".$cmnd."' WHERE benhnhan.id = '".$id."'";
		return parent::query($sql);
}

public function deletebenhnhan($id)
{
	$this->conn= parent::connect();
		$sql= "DELETE FROM benhnhan WHERE id ='".$id."'";
		return parent::query($sql);
}

}
?>
