<html>
<head><title>Admin Login</title></head>
<body><br><br><br><br><br><br><br><br>
	<form method="post" action="admin.php">
<table width="500" bgcolor="sky blue" border="2" align="center">
<tr>
<td align="center" bgcolor="pink" colspan="6"><h2><i>Administration Login form</i></h2></td>
</tr>
<tr>
<td align="center"><input type="email" placeholder="Email" name="mail" /required></td>
</tr>
<tr>
<td align="center"><input type="password" placeholder="Password" name="pass" /required></td>
<tr>
<td align="center" colspan="6"><input type="submit" name="submit" value="Login">
</tr>
</table>
</form>
</body>
</html>

<?php
	
	$con = mysqli_connect("localhost","root","","admin");
	if(isset($_POST['submit']))
	{
		// Variables Defined
		
		$mail= $_POST['mail'];
		$pass= $_POST['pass'];
		
		$sql="select * from admin_login where Email='$mail' AND Password='$pass'";
		$query = mysqli_query($con,$sql);
		if(mysqli_num_rows($query)>0)
		{
			header("Location:admindash.php");
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