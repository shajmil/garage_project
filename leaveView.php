<!DOCTYPE HTML>
<html>

<head>
    <link href="Garage/css/style.css" rel="stylesheet">
    <title>View Leave</title>
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
</head>

<body>


    <div class="wrap">
        <div class="header">

        </div>

        <input type='button' name='logout' value='Logout'
            style='position:absolute; top:50%; left:90%; background-color:ash; color:black; width:100px; height:30px; border-radius:45px; border-style:none;'>


        <div class="header-bottom" style="position:relative; top:20px;">
            <div class="menu">
                <li><a href="ManagerHome.php">Home</a></li>
                <li class="active"><a href="leaveView.php">View leave</a></li>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="wrap">
        <div class="content" style="position:relative; top:20px;">
            <div class=" section group">
                <div class="heading">
                    <h4 style="position:relative; left:-50px;">View Leave</h4>
                </div>
                <div class="clear"></div>


                <form method="post" action=" "
                    style="font-size:20px; font-family:arvo; font-weight:bold; padding-top:30px; padding-left:60px; color:#E5B840;">



                    <table>
                        <thead>
                            <tr>
                                <th> Employee id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th> Employee name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
                                <th>Discription&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                                <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status
                                </th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                      $conn=mysqli_connect("localhost","root","","garage_management_system");
                        $sql =" SELECT   leave.lid, leave.description, leave.sdate, leave.edate, leave.status, leave.eid, leave.LEAVEID, employee.name FROM `leave`
						inner join employee on leave.eid=employee.eid 
						where status= 'in progress'";
					
                        $query = mysqli_query($conn,$sql);

                        $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
                        foreach($results as $row) {
                        ?>

                            <tr>
                                <TD>&nbsp;&nbsp;</TD>

                            </tr>
                            <tr>

                                <td><?php echo $row['eid']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                                <td><a class="btn btn-sm btn-primary" id="btn-update" style="color:white;"
                                        href="update_ac.php?id=<?php echo $row['eid']; ?>">
                                        Accept</a>
                                    &nbsp;&nbsp;&nbsp;</td>

                                <td> <a class="btn btn-sm btn-danger" id="btn-delete" style="color:white;"
                                        href="update_dc.php?id=<?php echo $row['eid']; ?>"><i class="fas fa-trash"></i>
                                        Decline</a></a></td>
                            </tr>

                            <?php } ?>
                        </tbody>
                </form>
            </div>
        </div>
    </div>








</body>