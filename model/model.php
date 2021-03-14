<?php

class Model
{
	
	var $conn;
	private function connect()
	{
			
			$servername = "localhost:3306";			
			$username = "karme484_db";			
			$password = "Be4curMsCASdLqQ";			
			$dbname = "karme484_db";
			
				// Create connection
			$this->conn = new mysqli($servername, $username, $password, $dbname);
				mysqli_set_charset($this->conn, "utf8");
			// Check connection
			if ($this->conn->connect_error) 
			{
				die("Connection failed: " . $this->conn->connect_error);
			} 	
	}
    public function count($tab,$parametr="")
	{
		$this->connect();
			
		$sql = "SELECT COUNT(1) FROM ".$tab." ".$parametr;
		$result = $this->conn->query($sql);
   		
   		
		  while($row = $result->fetch_assoc()) 
            {
				
             	
               return $row["COUNT(1)"];
                
            }

		
		
	}
	
	public function select($colum,$tab,$parametr="")
	{
		$this->connect();
			
		$sql = "SELECT ".$colum." FROM ".$tab." ".$parametr;
		$result = $this->conn->query($sql);
   		$i=0;

		
        if ($result->num_rows > 0) 
        {      
            while($row = $result->fetch_assoc()) 
            {				
             	$sel[$i]=$row[$colum];			
              	$i++;
            } 
			
        }
			
		return $sel;
		
	}
	public function select0($colum,$tab,$parametr="")
	{
		$this->connect();
			
		$sql = "SELECT ".$colum." FROM ".$tab." ".$parametr;
		$result = $this->conn->query($sql);
   		$i=0;

		
        if ($result->num_rows > 0) 
        {      
            while($row = $result->fetch_assoc()) 
            {				
             	$sel[$i]=$row[$colum];			
              	$i++;
            } 
			
        }
			
		return $sel[0];
		
	}
	
	public function insert($data, $table)
	{
		$this->connect();
		
		$column_txt = implode(" , ",$data->column);
		$value_txt = implode("' , '",$data->value);
		
		$sql = "INSERT INTO ".$table." (".$column_txt.") VALUES ('".$value_txt."')";
		$result = $this->conn->query($sql);
		
		
		if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			} 
		//echo "Error: " . $sql . "<br>" .$this->conn->error;   
		return $this->conn->insert_id;
	}
	
	public function insert_city($name, $district)
	{
		$this->connect();
		
		$sql = "INSERT INTO city (name, district_id) VALUES ('".$name."', '".$district."')";
		$result = $this->conn->query($sql);
		// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			} 
	}
	public function insert_organization($name)
	{
		$this->connect();
		
		$sql = "INSERT INTO organization (name) VALUES ('".$name."')";
		$result = $this->conn->query($sql);
		// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			} 
	}
	
	public function insert_test($val)
	{
		$this->connect();
		
		$sql = "INSERT INTO test (value) VALUES ('".$val."')";
		$result = $this->conn->query($sql);
		// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			} 
	}
	
	public function insert_question($text,$test)
	{
		$this->connect();
		
		$sql = "INSERT INTO question (text, test) VALUES ('".$text."','".$test."')";
		$result = $this->conn->query($sql);
		// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			} 
	}
	public function insert_options($text,$question)
	{
		$this->connect();
		
		$sql = "INSERT INTO options (text, question) VALUES ('".$text."','".$question."')";
		$result = $this->conn->query($sql);
		// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			} 
	}
	public function insert_request($test,$id,$status)
	{
		$this->connect();
		
		$sql = "INSERT INTO request (test, client, status) VALUES ('".$test."','".$id."','".$status."')";
		$result = $this->conn->query($sql);
		// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			} 
	}
	
	public function insert_result($client,$test)
	{
		$this->connect();
		
		$sql = "INSERT INTO result (test, client) VALUES ('".$test."','".$client."')";
		$result = $this->conn->query($sql);
		// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			} 
			return $this->conn->insert_id;
	}
	public function insert_details($result, $question, $options, $true_options)
	{
		$this->connect();
		
		$sql = "INSERT INTO details (result, question, options, true_options ) VALUES ('".$result."','".$question."','".$options."','".$true_options."')";
		$res = $this->conn->query($sql);
		// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			}
		
	}
	
	public function update_question($question, $number_question)
	{
		$this->connect();
		
		$sql = "UPDATE question SET text='$question' WHERE id='$number_question'";
		$result = $this->conn->query($sql);
		  	// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			}  
	}
	
	public function update_option($option, $number_option)
	{
		$this->connect();
		
		$sql = "UPDATE options SET text='$option' WHERE id='$number_option'";
		$result = $this->conn->query($sql);
		  	// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			}  
	}
	public function update_check($option, $number_option)
	{
		$this->connect();
		
		$sql = "UPDATE options SET check_='$option' WHERE id='$number_option'";
		$result = $this->conn->query($sql);
		  	// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			}  
	}
	public function update_request($id, $value)
	{
		$this->connect();
		
		$sql = "UPDATE request SET status='$value' WHERE id='$id'";
		$result = $this->conn->query($sql);
		  	// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			}  
	}
	
	public function update_resolution($client, $test, $value)
	{
	    $status=$this->select0('status','resolution',"WHERE client ='".$client."' AND  test ='".$test."'");
	  
	    if ($status==null)
	        $sql = "INSERT INTO resolution (test, client, status) VALUES ('".$test."','".$client."','".$value."')";
	   else
	        $sql = "UPDATE resolution SET status='$value' WHERE client ='".$client."' AND  test ='".$test."'";
	        
	     $result = $this->conn->query($sql);
	     
    	  if ($this->conn->error) 
    			{
    				die("failed: " . $this->conn->error);
    			}  
	}
	public function update_result($id, $value)
	{
		$this->connect();
		
		$sql = "UPDATE result SET result='$value' WHERE id='$id'";
		$result = $this->conn->query($sql);
		  	// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			}  
	}
	
	public function update_client($column, $value, $id)
	{
		$this->connect();
		
		$sql = "UPDATE client SET $column ='$value' WHERE id='$id'";
		$result = $this->conn->query($sql);
		  	// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			}  
	}
	
	public function insert_person($name, $position)
	{
		$this->connect();
		
		$sql = "INSERT INTO person (name, position) VALUES ('".$name."','".$position."')";
		$res = $this->conn->query($sql);
		// Check 
			if ($this->conn->error) 
			{
				die("failed: " . $this->conn->error);
			}
		
	}

}

?>























