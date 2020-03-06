<?php 
	class Database {

	private $conn;
	private $result;

	public function connect() {
		$this->conn = mysqli_connect( 'localhost', 'root' , '' , 'quanlyphongkham' );

		if(!$this->conn) {
			echo 'Không thể kết nối Database';
		} else {
			mysqli_set_charset( $this->conn, 'utf8' );
			date_default_timezone_set('Asia/Ho_Chi_Minh');
		}
		return $this->conn;
	}
	public function query($sql)
	{
		if(!$this->result = mysqli_query($this->conn,$sql))
		{
			echo "error query";
		}
		return $this->result; 
	}
	public function numrow()
	{
		return mysqli_num_rows($this->result);
	}
public function selectall_cf()
{
	if($this->numrow()>0)
		{
			while($row = mysqli_fetch_assoc($this->result))
			{
				$data[]=$row;
			}
		}else
		{
			$data=0;
		}
		return $data;

	}


public function select_cf()
{
	if($this->numrow()>0)
		{
			return mysqli_fetch_assoc($this->result);
		}else
		{
			return 0;
		}
}

}
 ?>