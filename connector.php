<?php
class DatabaseManager{
protected $db_host="localhost";
protected $db_username="root";
protected $db_password="";
protected $db_name="contacts";
protected $con;
	public function __construct(){
		if(!@$this->Connect($this->db_host,$this->db_username,$this->db_password)){
			die('Database connection failed');
		}else if($this->Connect($this->db_host,$this->db_username,$this->db_password)){
			//echo 'Success to'.$this->db_host;
		}
	}

	function Connect($db_host,$db_username,$db_password){
	$this->con=mysql_connect($db_host,$db_username,$db_password);
		if(!$this->con){
			return false;
		}else{
			return true;
		}
	}
	function CreateDB($db_name){
		// Create database
		$sql="CREATE DATABASE $db_name";
		if (mysql_query($sql)) {
		  //echo "Database .'$db_name'. created successfully";
		} else {
		  //echo "Error creating database: " . mysql_error($this->con);
		}	
	}
	function SelectDB($db_name){
		mysql_select_db($db_name);
	}
	function CreateTable($table_name){
		$sql="CREATE TABLE
		$table_name
		(
		FirstName CHAR(30),
		LastName CHAR(30),
		Phone CHAR(30),
		Email CHAR(30),
		Address CHAR(30),
		City CHAR(30),
		Zip CHAR(30),
		IsFriend CHAR(30))";
		if (mysql_query($sql)) {
		  echo "Table .'$table_name'. created successfully";
		} else {
		  echo "Error creating database: " . mysql_error($this->con);
		}	
	}
	function Insert($table,$f_name,$l_name,$phone,$email,$address,$city,$zip,$isfriend){
		$query = "INSERT INTO $table VALUES 
		('$f_name',
		'$l_name',
		'$phone',
		'$email',
		'$address',
		'$city',
		'$zip',
		'$isfriend')";
		mysql_query($query);
	}
	function Delete($table,$id){
		$query = "DELETE FROM $table WHERE id='$id'";
		$fetch=mysql_query($query);
	}
	function Read($table){
		$query = "SELECT * FROM $table";
		$fetch=mysql_query($query);
		return $fetch;
	}
}


?>