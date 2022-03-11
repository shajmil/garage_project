<?php
$Employee_ID=$_POST['eid'];
$date=$_POST['date'];
$status=$_POST['status'];

$conn=mysqli_connect("localhost","root","","garage_management_system");

$query="INSERT INTO `attendence`( `date`, `status`, `eid`) VALUES ('$date','$status','$Employee_ID')";
echo "$query";
$result=mysqli_query($conn,$query);
if($result)
{
$Q="SELECT attId FROM `attendence`ORDER BY attId DESC LIMIT 1";
$results=mysqli_query($conn,$Q);
$row=mysqli_fetch_array($results);
$a=$row[0];
$aid='AT00'.$a;
$quer="UPDATE `attendence` SET `AID`='$aid' WHERE attId = '$a'";
mysqli_query($conn,$quer);
echo $quer;
header('Location: viewat.php');
}?>