<!DOCTYPE HTML>
<html>
<?PHP session_start() ; ?>

<head>
    <link href="Garage/css/style.css" rel="stylesheet">
    <title>Payroll</title>



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
                <li class="active"><a href="payroll.php">Payroll</a></li>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="wrap">
        <div class="content" style="position:relative; top:20px;">
            <div class=" section group">
                <div class="heading">
                    <h4 style="position:relative; left:-50px;">Payroll</h4>
                </div>
                <div class="clear"></div>

                <form method="post" action="payroll copy.php "
                    style="font-size:20px; font-family:arvo; font-weight:bold; padding-top:30px; padding-bottom:500px; padding-left:60px; color:#E5B840;">
                    <tr>
                        <td>
                            <p style="color:#E5B840;">Employee ID :


                                <!-- <input style="position:absolute; top:125px; left:320px;" type="text" name='eid' id="eid"
                                    onkeyup="setTotal()"> -->


                                <input type="text" list="browsers" name='eid' id="eid" /></label>
                                <datalist id="browsers">

                                    <?php
         $conn=mysqli_connect("localhost","root","","garage_management_system");
            $sql = 'SELECT * FROM `employee` ';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>

                                    <option value="<?php echo $row["EMPID"]; ?>"><?php echo $row["name"]; ?>

                                        <?php } ?>
                                </datalist>



                            </p>
                        </td>
                    </tr>





                    <td>
                        <!-- <p style="color:#E5B840;  position:absolute; top:355px; left:1000px;">Total -->
                    </td>
                    </tr>
                    <div class="clear"></div>
                    <div style="padding-bottom:100px;"></div>
                    <tr>
                        <td><input type='submit' name="cal" value='Calculate salary'
                                style='width:150px; height:30px; border-radius:45px; border-style:none; font-family:avro; font-size:16px; position:absolute; left:520px; top:280px;'>


                        </td>
                    </tr>
                    <div class="clear"></div>
                </form>

            </div>
        </div>
    </div>


</body>

</html>



















<?php
include('payrollPhp.php');

if(($_SERVER['REQUEST_METHOD'])=='POST')
{
	if(isset($_POST['cal']))
	{
		$Employee_ID=$_POST['eid'];
		$amount=$_POST['amount'];
		$OT=$_POST['OT'];
		//$ETF=$_POST['ETF'];
		//$EPF=$_POST['EPF'];
		$Bonus=$_POST['bonus'];
		?>
<script type="text/javascript">
var eid = document.getElementById('eid');




document.getElementById('amount').value = <?php echo $Employee_ID ?>;
</script>
<?php 

// if(empty($Employee_ID)||empty($amount)||empty($OT) && $OT!=0||empty($Bonus) && $Bonus!=0)
// {
// echo"<script>
// alert('One or more fileds are empty')
// </script>";
// }

// else if(!is_numeric($amount)||!is_numeric($OT)||!is_numeric($Bonus))
// {
// if(!is_numeric($amount))
// {
// echo"<script>
// alert('Non-numeric value entered for amount')
// </script>";
// }
// else if(!is_numeric($OT))
// {
// echo"<script>
// alert('Non-numeric value entered for OT hours')
// </script>";
// }
// else
// {
// echo"<script>
// alert('Non-numeric value entered for bonus')
// </script>";
// }
// }

// else
// {
// $addp=new Salary();
// $addp->add($Employee_ID,$amount,$OT,$Bonus);
// }

//echo "sasd";



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