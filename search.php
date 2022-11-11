<?php
	session_start();
?>
<html>
<head>
	<title>Search Data</title>
	<style>
		h1{
			text-align:center;
			font-size:50px;
			color:blue;
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
	<h1>Search Data </h1><br><br>
	
	<a href="admindash.php"> Back </a>
	<a href="logout.php"> Logout </a>
	<br><br><center>
	<form method="POST" action="">
			<input type="text" placeholder="Search Data" name="id" /required>
			<input type="submit" name="search" value="Search">
	</form>
	</center>
	
	<table>
		
		<tr>
			<th>#</th>
			<th>ID</th>
			<th>First_Name</th>
			<th>Middle_Name</th>
			<th>Last_Name</th>
			<th>CNIC</th>
			<th>Email</th>
			<th>Password</th>
			<th>Contact</th>
			<th>Address</th>
		</tr>
	
	</table>
</body>
</html>

<?php
	$con = mysqli_connect("localhost","root","","admin");
	if(isset($_POST['search']))
	{
		$id=$_POST['id'];
	?>
	<?php
		$query_search="select *from create_account where id='$id' ";
		$query_result = mysqli_query($con,$query_search);
		$a=1;
		while($row=mysqli_fetch_array($query_result))
		{
			?>
			<table>
			<tr>
				<td><?php echo $a?></td>
				<td><?php echo $row['ID']?></td>
				<td><?php echo $row['First_Name']?></td>
				<td><?php echo $row['Middle_Name']?></td>
				<td><?php echo $row['Last_Name']?></td>
				<td><?php echo $row['CNIC']?></td>
				<td><?php echo $row['Email']?></td>
				<td><?php echo $row['Password']?></td>
				<td><?php echo $row['Contact']?></td>
				<td><?php echo $row['Address']?></td>
			
			</tr>
			<?php $a++;
		}?>
		</table><?php
	}
	
?>