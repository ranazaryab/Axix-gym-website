<?php
	
	$con = mysqli_connect("localhost","root","","admin");
	session_start();
	$data=$_SESSION['Email'];
	$query1 = "select *from create_account where Email='$data'";
	$query_run1 =mysqli_query($con,$query1);
	$row1=mysqli_fetch_array($query_run1);
	if($query_run1)
	{
		?><br><center><h1>WELCOME TO THE AXIX GYM<?php echo " ".$row1['First_Name']. " ".$row1['Middle_Name']. " ".$row1['Last_Name']." ";?></h1></center><?php
	}
?>
<html>
<head><title>Application of Gym </title>
<style>
	b{
		color: #87ceeb;
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
	center{
			font-size: 20px;
			color:blue;
		}
		
	
		h1{
			text-align:center;
			font-size: 50px;
		}
		
</style>
</head>
<body><br>
	<center>
	<a href="dashboard.php"> Back </a>
	<a href="Apply.php" > Fitness Information </a>
	<a href="Deit.php" > Deit Plan </a>
	<a href="https://www.calculator.net/bmr-calculator.html" target="_blank"> Calculate BMR </a>
	<a href="https://www.nhlbi.nih.gov/health/educational/lose_wt/BMI/bmicalc.htm" target="_blank"> Calculate BRI</a>
	<a href="logout.php"> Logout </a>
	</center><br><br>
	<form method="post" action="">
<table width="500" bgcolor="#87ceeb" border="2" align="center">
<tr>
<td align="center" bgcolor="pink" colspan="6"><h2><i>Fitness Information Form</i></h2></td>
</tr>
<tr>
<td align="center"><input type="text" placeholder="Age	" name="age" /required></td>
</tr>
<tr>
<td align="center"><input type="text" placeholder="Current Weight" name="cweight" /required></td>
</tr>
<tr>
<td align="center"><input type="text" placeholder="Height" name="height" /required></td>
</tr>
<tr>
<td align="center"><input type="text" placeholder="Goal Weight	" name="gweight" /required></td>
</tr><tr>
<td><b>Which purpose Gym</b>
<select name="gymtype" align="center">
			<option value="check">Which purpose you Join Gym</option>
			<option value="Weight Loss">Weight Loss</option>
			<option value="Body Building">Body Building</option>
			<option value="Running">Running</option>
			<option value="Streching">Streching</option>
			<option value="Gym Fitness">Gym Fitness</option>
			<option value="Body Maintaince">Body Maintaince</option>
			
</select>
</td>
</tr>
<tr>
<td align="center"><input type="email" placeholder="Enter Your Login Mail	" name="mail" /required></td>
</tr>
<tr>
<td align="center" colspan="6"><input type="submit" name="submit" value="Upload">
	
</tr>
</table>
</form>
</body>
</html>

<?php
	
	$con = mysqli_connect("localhost","root","","admin");
	
	if(isset($_POST['submit']))
	{
		$age= $_POST['age'];
		$cweight= $_POST['cweight'];
		$height= $_POST['height'];
		$gweight= $_POST['gweight'];
		$gymtype= $_POST['gymtype'];
		$mail= $_POST['mail'];
		
		
		$sql="select * from create_account where Email='$mail'";
		$query = mysqli_query($con,$sql);
		$row1=mysqli_num_rows($query);
		if($row1==1)
		{
			if($mail==$data)
			{
				$insert = "insert into gym(Age,Current_Weight,Height,Goal_Weight,Gym_Purpose,Email) values('$age','$cweight','$height','$gweight','$gymtype','$mail')";
				$insertquery = mysqli_query($con,$insert);
				if($insertquery)
				{
						?>
							<script>
								alert("SuccessFully Inserted");
							</script>
						<?php
				}
				else
				{
						?>
							<script>
								alert("Not Inserted");
							</script>
						<?php
				}
			}
			else
			{
						?>
							<script>
								alert("Please Enter Right Email");
							</script>
						<?php
			}
		}
		else
		{
			?>
				<script>
					alert("Invalid Input");
					die();
				</script>
			<?php
		}
	}
?>