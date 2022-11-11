<html>
<head><title>Admin Login</title>
<style>
	body{
			background-image: url(img/gallery/gallery-4.jpg);
			background-size:cover;
			background-position:center;
		}
	td{
		color:white;
		font-size: 30px;
		text-align:center;
	}
	h2{
		
		font-size: 30px;
		text-align:center;
		color: white;
	}
	
	
</style>
 <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body><br><br><br><br><br><br><br><br>
<h2>Administration Login form
</h2>
	<form method="post" action="admin.php">
<table width="500"  border="2" align="center">

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
 <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.html">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li> <a href="./index.html">Home</a></li>
                            
                            
                            
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
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