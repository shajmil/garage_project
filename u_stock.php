<?php
$stock = $_POST['stock'];
$update_id=$_POST['id'];
$conn=mysqli_connect("localhost","root","","garage_management_system");

$query="UPDATE `stock` SET `qty`='$stock' where sid='$update_id'";
echo$query;
$result=mysqli_query($conn,$query);
header('Location: notify.php');


?>