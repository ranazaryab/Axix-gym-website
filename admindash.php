<?php
	$con = mysqli_connect("localhost","root","","admin");
	$query_select="select *from create_account ";
	$query=mysqli_query($con,$query_select);
?>
<html>
<head><title>Dashboard</title>
<style>
	h1{
		text-align:center;
		font-size:50px;
		color:blue;
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
		a{
				width:100%;
				background:none;
				border:1px solid blue;
				border-radius:3px;
				padding: 6px 10px;
				box-sizing: border-box;
				margin-bottom: 20px;
				color:red;
			
		}
</style>
</head>
<body><br>
<h1> WELCOME TO THE ADMIN DASHBOARD</h1><br><br>

<a href="search.php">Search</a>
<a href="insert.php">Insert Data</a>
<a href="del.php">Delete Data</a>
<a href="logout.php">Logout</a><br>
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
<br>
	<?php 
	$a=1;
	while($row= mysqli_fetch_assoc($query))
	{?>
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
	<?php
	if(isset($_POST['delete']))
	{
		
	
		$query_search="delete from create_account where ID='$a'";
		$query_result = mysqli_query($con,$query_search);
	}
?>
	<?php
	
		$a++;
	}?>
</table>
</body>
