<?php


class Connection{
	
	private $conn;
	
	public function getConnection(){
		
		$this->conn = new mysqli("localhost", "root", "1234", "tccsolution");
		return $this->conn;
	}
	
	public function close(){
		
		$this->conn->close();
	}
	
}


?>