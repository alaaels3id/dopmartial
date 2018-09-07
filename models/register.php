<?php

/*
 *Registration class 
 */

class Register
{
	private $uname;
	private $upassword;
	private $email;
	private $phone;
	private $cxn;

	function __construct($data){
		if(is_array($data)) $this->setData($data);
		else throw new Exception("Error : Data must be in an array!!");

		//Connect To Database
		$this->connectToDB();

		//insert the data
		$this->insertData();
	}
	
	private function setData($data){
		$this->uname     = $data['username'];
		$this->upassword = $data['password'];
		$this->email     = $data['email'];
		$this->phone     = $data['phone'];
	}

    private function connectToDB(){
        include 'database.php';
        $this->cxn = new Database('info.php');
    }
    
    private function insertData(){    	
        $conn = $this->cxn->Connect();
        $query = "INSERT INTO `users` VALUES ('', '$this->uname', '$this->upassword', '$this->email', '$this->phone', '')";
        
        $sql_exec = mysqli_query($conn, $query);
        
        if($sql_exec) echo "Registration Successfully!!";
        else throw new Exception("Error : Registration Failed");
    }
    private function Close(){
    	$this->cxn->Close();
    }
}
?>