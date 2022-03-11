<!DOCTYPE HTML>
<html>

<head>
    <link href="Garage/css/style.css" rel="stylesheet">
    <title>Mark Attendence</title>
</head>

<body>


    <div class="wrap">
        <div class="header">

        </div>

        <input type='button' name='logout' value='Logout'
            style='position:absolute; top:50%; left:90%; background-color:ash; color:black; width:100px; height:30px; border-radius:45px; border-style:none;'>


        <div class="header-bottom" style="position:relative; top:20px;">
            <div class="menu">
                <li><a href="SupHome.php">Home</a></li>
                <li class="active"><a href="MarkAttendence.php">Mark Attendence</a></li>
                <li><a href="viewat.php">View Attendence</a></li>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="wrap">
        <div class="content" style="position:relative; top:20px;>
				<div class=" section group">
            <div class="heading">
                <h4 style="position:relative; left:-50px;">Mark Attendence</h4>
            </div>
            <div class="clear"></div>


            <form action="markat.php" method="post"
                style="font-size:20px; font-family:arvo; font-weight:bold; padding-top:30px; padding-left:100px; color:#E5B840;">
                <tr>
                    <td>
                        <p style="color:#E5B840; padding-bottom:30px;">Employee ID : <input
                                style="position:absolute; top:120px; left:260px;" type="text" list="browsers" name='eid'
                                id="eid" required>
                            <datalist id="browsers">

                                <?php
$conn=mysqli_connect("localhost","root","","garage_management_system");
$sql = 'SELECT * FROM `employee` ';
$query = mysqli_query($conn,$sql);

$results = mysqli_fetch_all($query,MYSQLI_ASSOC);
foreach($results as $row) {
?>

                                <option value="<?php echo $row["eid"]; ?>"><?php echo $row["name"]; ?>

                                    <?php } ?>
                            </datalist>
                        </p>
                    </td>


                </tr>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840; padding-bottom:30px;">Date : <input
                                style="position:absolute; top:175px; left:260px;" type="date" name="date" required></p>
                    </td>
                </tr>
                <div class="clear"></div>

                </tr>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840; padding-bottom:30px;">Status : </p>
                    </td>
                    <select style="position:absolute; top:230px; left:260px; padding-left:80px; text-align:center;"
                        class="form-input" placeholder="Select Option" name="status" required>
                        <option>None</option>
                        <option>Present</option>
                        <option>Absent</option>
                    </select>
                </tr>
                <input type='submit' value='Submit'
                    style='width:150px; height:30px; border-radius:45px; border-style:none; font-family:avro; font-size:16px; position:absolute; left:500px; top:230px;'>
                <div class="clear"></div>
            </form>
            <!-- <tr>
                    <td>
                        <p style="color:#E5B840; position:absolute; top:320px; left:300px;">Employee ID</p>
                    </td>
                    <p style="padding-top:80px; padding-left:180px;">1)</p>
                    <p style="padding-top:30px; padding-left:180px;">2)</p>
                    <p style="padding-top:30px; padding-left:180px;">3)</p>
                </tr>
                <div class="clear"></div>
                <div class="clear"></div> -->
            <!-- <tr>
                    <td>
                        <p style="color:#E5B840; position:absolute; top:320px; left:500px;">Employee Name</p>
                    </td>
                </tr>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840; position:absolute; top:320px; left:750px;">Date</p>
                    </td>
                </tr>
                <div class="clear"></div>
                <tr>
                    <td>
                        <p style="color:#E5B840; position:absolute; top:320px; left:850px;">Status</p>
                    </td>
                </tr>
                <div class="clear"></div> -->

        </div>
    </div>
    </div>








</body>