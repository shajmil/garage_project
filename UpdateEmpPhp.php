<?php
$nic=$_POST['nic'];
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$dob=$_POST['dob'];
		$add=$_POST['add'];
		$update_id=$_POST['update_id'];
		
	$conn=mysqli_connect("localhost","root","","garage_management_system");
		
		$query="SELECT * FROM employee WHERE EMPID='$update_id'";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
		
		
			if(!empty($uname))
			{
				$query="UPDATE employee SET name='$uname' WHERE EMPID='$update_id'";
				$result=mysqli_query($conn,$query);
			}
			if(!empty($pass))
			{
				$query="UPDATE employee SET password='$pass' WHERE EMPID='$update_id'";
				$result=mysqli_query($conn,$query);
			}
			if(!empty($dob))
			{
				$query="UPDATE employee SET DOB='$dob' WHERE EMPID='$update_id'";
				$result=mysqli_query($conn,$query);
			}
			if(!empty($add))
			{
				$query="UPDATE employee SET address='$add' WHERE EMPID='$update_id'";
				$result=mysqli_query($conn,$query);
			}
			echo"<script>alert('Employee Updated Successfully')</script>";
			header("Location:viewEmp.php");
			?>hii<?php
	

?>