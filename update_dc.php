<?php
$update_id = $_GET['id'];
$conn=mysqli_connect("localhost","root","","garage_management_system");

$query="UPDATE `leave` SET `status`='declined' WHERE eid='$update_id'";
$result=mysqli_query($conn,$query);
header('Location: leaveView.php');


?>