<?php
                      $conn=mysqli_connect("localhost","root","","garage_management_system");


$update_id = $_GET['id'];

$sql = "SELECT * FROM employee where EMPID='$update_id'";
// ECHO$sql;
 $query = mysqli_query($conn,$sql);

 $result = mysqli_fetch_assoc($query);
// print_r($result);
?><html>

<head>
    <link href="Garage/css/style.css" rel="stylesheet">
    <title>Update Employee</title>
</head>

<body>


    <div class="wrap">
        <div class="header">

        </div>
        <form method="post" action=" ">
            <input type='submit' name='logout' value='Log Out'
                style='position:absolute; top:5%; left:87%; background-color:ash; color:black; width:100px; height:30px; border-radius:45px; border-style:none;'>;

        </form>
        <div class="header-bottom" style="position:relative; top:20px;">
            <div class="menu">
                <li><a href="ManagerHome.php">Home</a></li>
                <li class="active"><a href="UpdateEmp.php">Update Employee</a></li>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="wrap">
        <div class="content" style="position:relative; top:20px;>
				<div class=" section group">
            <div class="heading">
                <h4 style="position:relative; left:-50px;">Update Employee</h4>
            </div>
            <div class="clear"></div>

            <form method='post' action='UpdateEmpPhp.php'
                style="font-size:20px; font-family:arvo; font-weight:bold; padding-top:30px; padding-left:60px; color:#E5B840;">
                <tr>
                    <td>
                        <p style="color:#E5B840;">NIC : <input style="position:absolute; top:125px; left:320px;"
                                type="text" name='nic' value="<?php echo $result['NIC']; ?>"></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <!--tr>
							<td><p style="color:#E5B840; padding-top:30px;">Name : <input style="position:absolute; top:175px; left:320px;" type="text"></p></td>
						</tr>
						<div class="clear"></div>
						<tr>
							<td><p style="color:#E5B840; padding-top:30px;">NIC : <input style="position:absolute; top:230px; left:320px;" type="text"></p></td>
						</tr-->
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:30px;">name : <input
                                style="position:absolute; top:175px; left:320px;" type="text" name='uname'
                                value="<?php echo $result['name']; ?>"></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <div class="clear"></div>
                <!-- <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:30px;">Password: <input
                                style="position:absolute; top:230px; left:320px;" type="password" name='pass'
                                value="<?php echo $result['password']; ?>"></p>
                    </td>
                </tr> -->
                <div class="clear"></div>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:30px;">Date Of Birth : <input
                                style="position:absolute; top:230px; left:320px;" type="date" name='dob'
                                value="<?php echo $result['DOB']; ?>"></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:30px;">Address : <input
                                style="position:absolute; top:285px; left:320px;" type="text" name='add'
                                value="<?php echo $result['address']; ?>"></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <div class="clear"></div>
                <input type="hidden" name="update_id" value="<?php echo $update_id; ?>">

                <!--tr>
							<td><p style="color:#E5B840;  padding-top:30px;">Type : </p></td>
							<select style="position:absolute; top:500px; left:320px;" class="form-input" name="Mechanic" placeholder="Select Mechanic">
							<option value="1">Mechanic</option>
							<option value="2">Supervisor</option>
							
					
				</select>
						</tr-->

                <div class="clear"></div>

                <tr>
                    <td><input type='submit' name='update' value='Update Employee'
                            style='width:150px; height:30px; border-radius:45px; border-style:none; font-family:avro; font-size:16px; position:absolute; left:500px; top:300px;'>
                    </td>
                </tr>
                <div class="clear"></div>
            </form>

        </div>
    </div>
    </div>

</body>

<?php


?>

<?php
include('UserM.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['logout']))
	{
		$lg=new User();
		$lg->logout();
	}
}
?>