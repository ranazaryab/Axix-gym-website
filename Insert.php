<html>
<head><title>Insert data</title>
<style>
	body{
			background-image: url(img/gallery/gallery-4.jpg);
			background-size:cover;
			background-position:center;
		}
	td{
		color:Black;
		font-size: 30px;
		text-align:center;
	}
	
</style>
</head>
<body><br><br><br><br><br><br><br><br>
	<form method="post" action="">
<table width="500"  border="2" align="center">
<tr>
<td  colspan="6"><h2><i>Insert New Data</i></h2></td>
</tr>
<tr>
<td align="center"><input type="text" placeholder="First Name" name="fname" /required></td>
</tr>
<tr>
<td align="center"><input type="text" placeholder="Middle Name" name="mname" ></td>
<tr>
<tr>
<td align="center"><input type="text" placeholder="Last Name" name="lname" /required></td>
</tr><tr>
<td align="center"><input type="text" placeholder="CNIC" name="cnic" /required></td>
</tr><tr>
<td align="center"><input type="email" placeholder="Email" name="mail" /required></td>
</tr><tr>
<td align="center"><input type="password" placeholder="Password" name="pass" /required></td>
</tr><tr>
<td align="center"><input type="password" placeholder="Confirm Password" name="conpass" /required></td>
</tr><tr>
<td align="center"><input type="text" placeholder="03094479011" name="number" /required></td>
</tr><tr>
<td align="center"><input type="text" placeholder="Address" name="address" /required></td>
</tr>
<td align="center" colspan="6"><input type="submit" name="submit" value="Insert">
</tr>
</table>
</form>
</body>
</html>

<?php
	
	$con = mysqli_connect("localhost","root","","admin");
	if($con)
	{
		echo"Connection SuccessFully";
	}
	else
	{
		echo"Error";
	}
	if(isset($_POST['submit']))
	{
		// Variables Defined
		
		$fname= $_POST['fname'];
		$mname= $_POST['mname'];
		$lname= $_POST['lname'];
		$cnic= $_POST['cnic'];
		$email= $_POST['mail'];
		$password= $_POST['pass'];
		$confirmpass= $_POST['conpass'];
		$contact= $_POST['number'];
		$add= $_POST['address'];
		
		$query_email = "select*from create_account where Email='$email' ";
		$query = mysqli_query($con,$query_email);
		$email_row = mysqli_num_rows($query);
		if($email_row>0)
		{
			?>
				<script>
					alert("This Email is already Registered   !!!!");
				</script>
			<?php
		}
		else
		{
			if($password==$confirmpass)
			{
				$insert = "insert into create_account(First_Name,Middle_Name,Last_Name,CNIC,Email,Password,Confirm_Password,Contact,Address) values('$fname','$mname','$lname','$cnic','$email','$password','$confirmpass','$contact','$add')";
				$insertquery = mysqli_query($con,$insert);
				if($insertquery)
				{
					?>
						<script>
							alert("SuccessFully Inserted");
						</script>
					<?php
					header("location:admindash.php");
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
							alert("Your Password not match");
						</script>
				<?php
			}
		}
	}
?>
