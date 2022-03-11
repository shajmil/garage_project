<!DOCTYPE HTML>
<html>
<?PHP 
session_start() ;



?>


<!DOCTYPE HTML>
<html>

<head>

    <style>
    a:link {
        color: #E5B840;
    }

    a:visited {
        color: #E5B840;
    }

    a:hover {
        color: grey;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="Garage/css/style.css" rel="stylesheet">

    <title>Stock Notifications</title>
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
                <li><a href="SupHome.php">Home</a></li>
                <li><a href="MarkAttendence.php">Mark Attendence</a></li>
                <li class="active"><a href="viewat.php">View Attendence</a></li>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="wrap">
        <div class="content" style="position:relative; top:20px;>
				<div class=" section group">
            <div class="heading">
                <h4 style="position:relative; left:-50px;">View Attendence</h4>

                <!--p style="font-size:25px; font-family:Rockwell Extra Bold; font-weight:bold; padding-top:30px; padding-left:60px; color:white; position:absolute; left:800px; top:20px; ">LOYALTY POINTS</p>
						<p style="font-size:45px; font-family:arvo; font-weight:bold; padding-top:30px; padding-left:60px; color:white; position:absolute; left:870px; top:60px; ">200</p>
						-->
            </div>
            <div class="clear"></div>

            <form method="post" action=" "
                style="font-size:20px; font-family:arvo; font-weight:bold; padding-top:30px; padding-left:60px; color:#E5B840;">



                <table>
                    <thead>
                        <tr>
                            <th> Employee id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th> Employee name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
                            <th>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
                            <th>Status
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    
// $amount=$_POST['amount'];
// $OT=$_POST['OT'];
//$ETF=$_POST['ETF'];
//$EPF=$_POST['EPF'];
// $Bonus=$_POST['bonus'];
$conn=mysqli_connect("localhost","root","","garage_management_system");

$sql= " SELECT   attendence.attId,attendence.eid, attendence.status, attendence.date, employee.name FROM `attendence`
inner join employee on attendence.eid=employee.eid 
order by attendence.attId DESC  ";
//    echo $sql;
$query= mysqli_query($conn,$sql);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);
                        foreach($result as $row) {
                        ?>

                        <tr>
                            <TD>&nbsp;&nbsp;</TD>

                        </tr>
                        <tr>

                            <td><?php echo $row['eid']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['date']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td><?php echo $row['status']; ?></td>

                        </tr>

                        <?php } ?>
                    </tbody>
            </form>

        </div>
    </div>
    </div>



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