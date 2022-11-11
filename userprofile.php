<?php
	$con = mysqli_connect("localhost","root","","admin");
	session_start();
	$data= $_SESSION['Email'];
?>
<html>
<head>
<title>Profile</title>
	<link rel="stylesheet" href="dash_board stylesheet.css">
	<style>
		center{
			font-size: 20px;
			color:blue;
		}
		b{
			font-size: 22px;
		}
	
		h1{
			text-align:center;
			font-size: 50px;
		}
		a{
			width:100%;
			background:none;
			border:1px solid red;
			border-radius:3px;
			padding: 6px 10px;
			box-sizing: border-box;
			margin-bottom: 20px;
			color:red;
		}
	
	</STYLE>
	</style>
</head>
<body >
	<center>
	<b style="font-size:50px"><center>PROFILE DATA</b></center><br>
	<br>
    <a class="active" href="dashboard.php">Dash Board</a>
    <a href="logout.php">Logout</a>
	</center>
<br><br>
</body>

</html>

	
<?php
		$query ="select *from create_account where Email='$data' ";
		$query_run = mysqli_query($con,$query);
		while($row=mysqli_fetch_array($query_run))
		{?>
			<center><b>First Name :</b> <?php echo $row['First_Name']?><br><br></center>
			<center><b>Middle Name :</b> <?php echo $row['Middle_Name']?><br><br></center>
			<center><b>Last Name : </b><?php echo $row['Last_Name']?><br><br></center>
			<center><b>CNIC: </b><?php echo $row['CNIC']?><br><br></center>
			<center><b>Email : </b><?php echo $row['Email']?><br><br></center>
			<center><b>Password :</b> <?php echo $row['Password']?><br><br></center>
			<center><b>Age:</b> <?php echo $row['Age']?><br><br></center>
			<center><b>Contact : </b><?php echo $row['Contact']?><br><br></center>
			<center><b>Address : </b><?php echo $row['Address']?><br><br></center>
			
		<?php
		}
?>