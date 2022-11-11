<?php
	session_start();
?>
<html>
<head>
	<title>Search Data to delete</title>
	<style>
		h1{
			text-align:center;
			font-size:50px;
			color:blue;
		}
		body{
			background-image: url(img/gallery/gallery-4.jpg);
			background-size:cover;
			background-position:center;
		}
		a{
				
				width:100%;
				background:none;
				border:1px solid gray;
				border-radius:3px;
				padding: 6px 10px;
				box-sizing: border-box;
				margin-bottom: 20px;
				color:red;
			
		}
		th{
			color: red;
			font-size:20px;
		}
		table,th,td{
			text-align:center;
			border: 2px solid gray;
			width:1350px;
		}
	</style>
</head>
<body>
	<h1>Delete Data</h1><br><br>
	
	<a href="admindash.php"> Back </a>
	<a href="logout.php"> Logout </a>
	<br><br><center>
	<form method="POST" action="">
			<input type="text" placeholder="Enter ID to Delete " name="id" /required>
			<input type="submit" name="search" value="Delete">
	</form>
	</center>
	
	
</body>
</html>

<?php
	$con = mysqli_connect("localhost","root","","admin");
	if(isset($_POST['search']))
	{
		$id=$_POST['id'];
	
		$query_search="delete from create_account where id='$id' ";
		$query_result = mysqli_query($con,$query_search);
		
			header("location:admindash.php");
	
	}
	
?>


	