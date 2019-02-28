<?php
	class Database{
		private $host = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $db = 'phpoop';
		public $con;
		
	function __construct(){
		$this->connect();	
	}

	private function connect(){
		$this->con = new mysqli($this->host, $this->user, $this->pass, $this->db);
		
		if(!$this->con){
			echo 'Database failed to connect: '. $this->con->connect_error();
		}
	}
	
	public function select($query){
		$result = $this->con->query($query);
		if($result->num_rows > 0){
			return $result;
		}
		else{
			return false;
		}
	}
	
	public function insert($query){
		$result = $this->con->query($query);
		if($result){
			header('location: index.php?msg=Inserted Successfully!');
		}
		else{
			echo 'Not Inserted';
		}
	}
	
	public function update($query){
		$result = $this->con->query($query);
		if($result){
			header('location: index.php?msg=Updated Successfully!');
		}
		else{
			echo 'Not Updated';
		}
	}
	
	public function delete($query){
		$result = $this->con->query($query);
		if($result){
			header('location: index.php?msg=Deleted Successfully!');
		}
		else{
			echo 'Not Deleted';
		}
	}
	
	
	
	
	
	
		
		
		
		
		
	}
?>