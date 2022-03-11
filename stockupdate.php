<html>
<?php 

$conn=mysqli_connect("localhost","root","","garage_management_system");


$update_id = $_GET['id'];

$sql = "SELECT * FROM stock where sid='$update_id'";
// ECHO$sql;
 $query = mysqli_query($conn,$sql);

 $result = mysqli_fetch_assoc($query);
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link href="Garage/css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Update Stock</title>
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
                <!-- <li class="active"><a href="stockupdate.php">Update Stock</a></li> -->
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="wrap">
        <div class="main">
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <form method="POST" action="save.php"
                            style="font-size:20px; font-family:arvo; font-weight:bold; padding-top:30px; padding-left:60px; color:#E5B840;">

                            <h3 class="header-3" style="text-align:center;">Update Stock</h3>

                        </form>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <form style="color:white;" action="u_stock.php" method="post" class="form-horizontal"
                            enctype="multipart/form-data" autocomplete="off">

                            <!--Model-->
                            <div class="form-group">
                                <label for="EngineCap" class="col-sm-3 control-label">stock</label>
                                <div class="col-sm-4">
                                    <input type="text" id="search" placeholder="" name="stock" class="form-control"
                                        value="<?php echo $result['qty']; ?> ">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $update_id; ?>">
                            <div id="here"></div>

                            <div style=" margin-bottom:10px;margin-left:320px;">
                                <input name="insert" type="submit" class="btn btn-default" value="Insert">
                                <a type="button" href="notify.php" class="btn btn-default" data-dismiss="modal">Back</a>
                            </div>
                        </form>

                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/jquery.min.js"></script>

                        <script type="text/javascript">
                        $(document).ready(function(e) {
                            $("#search").keyup(function() {
                                $("#here").show();
                                var x = $(this).val();
                                $.ajax({
                                    type: 'GET',
                                    url: 'fetch.php',
                                    data: 'q=' + x,
                                    success: function(data) {
                                        $("#here").html(data);
                                    }
                                });
                            });

                        });
                        </script>
</body>

</html>


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