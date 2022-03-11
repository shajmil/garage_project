<html>

<head>
    <link href="Garage/css/style.css" rel="stylesheet">
    <title>Add Employee</title>
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
                <li class="active"><a href="addEmp.php">Add Employee</a></li>
                <li><a href="viewEmp.php">View Employee</a></li>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="wrap">
        <div class="content" style="position:relative; top:20px;>
				<div class=" section group">
            <div class="heading">
                <h4 style="position:relative; left:-50px;">Add Employee</h4>
            </div>
            <div class="clear"></div>

            <form method='post' action=''
                style="font-size:20px; font-family:arvo; font-weight:bold; padding-top:30px; padding-left:60px; color:#E5B840;">
                <tr>
                    <td>
                        <p style="color:#E5B840;">Name : <input style="position:absolute; top:125px; left:320px;"
                                type="text" name='name'></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840; padding-top:30px;">NIC : <input
                                style="position:absolute; top:175px; left:320px;" type="text" name='nic'></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:30px;">Username : <input
                                style="position:absolute; top:230px; left:320px;" type="text" name='uname'></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:30px;">Password: <input
                                style="position:absolute; top:280px; left:320px;" type="text" name='pass'></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:30px;">Date Of Birth : <input
                                style="position:absolute; top:340px; left:320px;" type="date" name='dob'></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:33px;">Address : <input
                                style="position:absolute; top:390px; left:320px;" type="text" name='address'></p>
                    </td>
                </tr>
                <div class="clear"></div>
                <div class="clear"></div>

                <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:43px;">Mobile : <input
                                style="position:absolute; top:450px; left:320px;" type="text" name='phn'
                                pattern="[789][0-9]{9}"></p>
                    </td>
                </tr>

                <div class="clear"></div>
                <div class="clear"></div>

                <tr>
                    <td>
                        <p style="color:#E5B840;  padding-top:42px;">Basic salary : <input
                                style="position:absolute; top:510px; left:320px;" type="text" name='sal'
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </p>
                    </td>
                </tr>

                <div class="clear"></div>




                <!--tr>
							<td><p style="color:#E5B840;  padding-top:30px;">Type : </p></td>
							<select style="position:absolute; top:450px; left:320px;" class="form-input" name="Mechanic" placeholder="Select Mechanic">
							<option value="1">Mechanic</option>
							<option value="2">Supervisor</option>
							
					
				</select>
						</tr-->

                <div class="clear"></div>

                <tr>
                    <td><input type='submit' name='add' value='Add Employee'
                            style='width:150px; height:30px; border-radius:45px; border-style:none; font-family:avro; font-size:16px; position:absolute; left:500px; top:550px;'>
                    </td>
                </tr>
                <div class="clear"></div>
            </form>

        </div>
    </div>
    </div>
</body>

<?php

include('addEmpPhp.php');

if(($_SERVER['REQUEST_METHOD'])=='POST')
{
	if(isset($_POST['add']))
	{
		$name=$_POST['name'];
		$nic=$_POST['nic'];
		$uname=$_POST['uname'];
		$pass=md5($_POST['pass']);
		$dob=$_POST['dob'];
		$address=$_POST['address'];
		$phn=$_POST['phn'];
        $sal=$_POST['sal'];
		
		if(empty($name)||empty($nic)||empty($uname)||empty($pass)||empty($dob)||empty($address)||empty($phn))
		{
			echo"<script>alert('One or more fileds are empty')</script>";
		}
		
		else
		{
			$adde=new Employee();
			$adde->add($name,$nic,$uname,$pass,$dob,$phn,$address,$sal);
		}
		
	}
}



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