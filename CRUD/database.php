<?php
  
class database{

	public $host  =DB_HOST;
	public $user  =DB_USER;
	public $pass  =DB_PASS;
	public $dbname=DB_NAME;

	public $link;
	public $error;

	public function __construct(){
		$this->connectdb();
	}

    //DATABASE CONNECTION 
	private function connectdb(){
		$this->link=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if(!$this->link){
			$this->error="connection fail".$this->link->connect_error;
			return false;
		}
	}

    //READ DATA FROM DATABASE 
	public function select($query){
		$result=$this->link->query($query) or die ($this->link->erro.__LINE__);
		if($result->num_rows>0){
			return $result;
		}
		else{
			return false; 
		}
	}
	
	//CREATE/INSERT DATA INTO DATABASE
	public function insert($query){
		$result=$this->link->query($query) or die ($this->link->erro.__LINE__);
		if($result){
			header("Location: index.php?msg=".urldecode('Data inserted successfully.'));
			exit();
		}
		else{
			die("Error :(".$this->link->errno.")".$this->link->error);
		}
	}
    
    //UPDATE DATA INTO DATABASE
	public function update($query){
		$updt=$this->link->query($query) or die ($this->link->erro.__LINE__);
		if($updt){
			header("Location: index.php?msg=".urldecode('Data updated successfully.'));
			exit();
		}
		else{
			die("Error :(".$this->link->errno.")".$this->link->error);
		}
	}

	
	//DELETE DATA FROM DATABASE
	public function delete($query){
		$dlt=$this->link->query($query) or die ($this->link->erro.__LINE__);
		if($dlt){
			header("Location: index.php?msg=".urldecode('Data Deleted successfully.'));
			exit();
		}
		else{
			die("Error :(".$this->link->errno.")".$this->link->error);
		}
	}
}

?>
