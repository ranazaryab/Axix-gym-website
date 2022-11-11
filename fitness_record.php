<?php
	session_start();
	$user=$_SESSION['Email'];
?>
<html>
<head>
<title>Dash Board</title>
	<link rel="stylesheet" href="dash_board stylesheet.css">
	<style>
		
		table,th,td{
			color:black;
			border: 2px solid gray;
			width:1350px;
		}
		
		h1{
			font-size: 50px;
			color:white;
			text-align:center;
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
		
	</style>
</head>
<body ><br>
<div class="header">
  <center><b style="font-size:40px">WELCOME TO THE Fitness Information RECORD</b></center>
  
   <br><a href="Apply.php">Back</a><a href="logout.php">Logout</a>
</div>

	
</body>

</html>


<?php
	$con = mysqli_connect("localhost","root","","admin");
	?>
		<center><h1> APPLICATION RECORD</h1></center>
		<table>
		<tr>
		<th>#</th>
		<th>Age</th>
		<th>Current Weight</th>
		<th>Height</th>
		<th>Goal Weight</th>
		<th>Gym Purpose</th>
		<th>Email</th>
		</tr> <br>
		<?php
		$query_data="select *from gym where Email='$user' ";
		$query1=mysqli_query($con,$query_data);
		$a=1;
		while($row=mysqli_fetch_array($query1))
		{
			?>
			<tr>
				<td><?php echo $a?></td>
				<td><?php echo $row['Age']?></td>
				<td><?php echo $row['Current_Weight']?></td>
				<td><?php echo $row['Height']?></td>
				<td><?php echo $row['Goal_Weight']?></td>
				<td><?php echo $row['Gym_Purpose']?></td>
				<td><?php echo $row['Email']?></td>
			</tr>
			<?php $a++;
		}?>
		</table><?php
	
?>