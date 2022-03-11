<?php
$update_id = $_GET['id'];
$conn=mysqli_connect("localhost","root","","garage_management_system");

$query="UPDATE `leave` SET `status`='approved' WHERE eid=$update_id";
echo "$query";
$result=mysqli_query($conn,$query);
header('Location: leaveView.php');
?>