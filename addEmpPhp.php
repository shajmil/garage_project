<?php
class Employee
{
	
	private $conn;
	private $result;
	private $row;
	
	public function add($name,$nic,$uname,$pass,$dob,$phn,$address,$sal)
	{
		$this->conn=mysqli_connect("localhost","root","","garage_management_system");
		
		$query="INSERT INTO employee(NIC,mobile,DOB,address,username,password,name) VALUES ('$nic','$phn','$dob','$address','$uname','$pass','$name')";
		$this->result=mysqli_query($this->conn,$query);
		
		$query="SELECT eid FROM employee ORDER BY eid DESC LIMIT 1";
		$this->result=mysqli_query($this->conn,$query);
		$this->row=mysqli_fetch_array($this->result);
		$this->eid=$this->row[0];
			
		$this->val='E00'.$this->eid;
			
		$query="UPDATE employee SET EMPID='$this->val' WHERE eid='$this->eid'";
		$this->result=mysqli_query($this->conn,$query);



		$this->date=date("Y-m-d");
		$query="INSERT INTO salary(amount,eid,date) VALUES ('$sal','$this->val','$this->date')";
		$this->result=mysqli_query($this->conn,$query);
		
		
		
		
		
		$query="SELECT salId FROM salary ORDER BY salId DESC LIMIT 1";
		$this->result=mysqli_query($this->conn,$query);
		$this->row=mysqli_fetch_array($this->result);
		$this->salid=$this->row[0];
		
		$this->val='SA00'.$this->salid;
		
		$query="UPDATE salary SET SALARYID='$this->val' WHERE salId='$this->salid'";
		$this->result=mysqli_query($this->conn,$query);
		
		echo"<script>alert('Employee was added successfuly')</script>";
	}
}
?>