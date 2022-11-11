<?php
	
	$con = mysqli_connect("localhost","root","","admin");
	session_start();
	$data=$_SESSION['Email'];
	$query1 = "select *from create_account where Email='$data'";
	$query_run1 =mysqli_query($con,$query1);
	$row1=mysqli_fetch_array($query_run1);
	if($query_run1)
	{
		?><br><center><h1>WELCOME TO THE AXIX<?php echo " ".$row1['First_Name']. " ".$row1['Middle_Name']. " ".$row1['Last_Name']." ";?></h1></center><?php
	}
?>
<html>
<head><title>Dash Board</title>
	<STYLE>
	h1{
		text-align:center;
		font-size: 50px;
	}
	body
	{
		background-image: url(img/bl.jpg);
		background-size: cover;
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
	center{
			font-size: 20px;
			color:red;
		}
		b{
			font-size: 22px;
		}
	
		h1{
			text-align:center;
			font-size: 50px;
		}
		
	
	</STYLE>
</head>
<body>
	<center>
	<a href="dashboard.php"> Home </a>
	<a href="Apply.php" > More </a>
	<a href="logout.php"> Logout </a>
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
			<center><b>Contact : </b><?php echo $row['Contact']?><br><br></center>
			<center><b>Address : </b><?php echo $row['Address']?><br><br></center>
			
		<?php
		}
?>