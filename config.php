
<?php
class cont{
	
	public $host = 'localhost'; 
	public $user = 'root'; 
	public $password = ''; 
	public $database = 'intern_project'; 
	public $conn;

	public function connect()
	{
		$this->conn = new mysqli( $this->host, $this->user, $this->password, $this->database );
		if ( mysqli_connect_errno() )
		 {
			echo("Connection failed:".$mysqli_connect_error());
		 }


		return $this->conn;
	}

}
?>