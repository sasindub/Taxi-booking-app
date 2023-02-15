<?php 

		session_start();
	 include("connection.php");
    include("function.php");

	if(isset($_POST['sub']))
	{
		$email = $_POST['email'];
		$pass = $_POST['ps'];
		$passCon = $_POST['pascon'];
		$error;

		if(!empty($email) | !empty($pass) | !empty($passCon))
		{
			$query = "select * from usr where email = '$email' limit 1";
			$result = mysqli_query($con,$query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);

					if($user_data['email'] == $email)
					{
						
						$query1 = "update usr set pass = '$pass' where email = '$email'";
						mysqli_query($con,$query1);
						header("Location: homelogin.php");
					}
					else
					{
						$error = "invalid email";
					}
				}
			}

		}

		else
		{
			$error = "error";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GoWay | Password Reset</title>
	<link rel="stylesheet" href="nav.css">
	<style>
	body{
		margin: 0;
		padding: 0;
		font-family: Arial;
		background-image: url(pexels-ono-kosuki-5647588.jpg);
		background-size: cover;

	}
	</style>
</head>
<body>
	<style>


.div-login
{
	background-color: white;
	
	padding-bottom: 40px;
	padding-top: 17px;
	padding-left: 50px;
	padding-right: 50px;
	border-radius: 8px;
	text-align: center;


	 
	

}

.div-login input
{
	padding: 8px;
	/*padding-right: 100px;*/
	border-radius: 5px;
	/*border: 1px solid gray;*/
	background-color: white;

	width: 330px;
   	padding: 0.5rem;
    font-size: 1rem;
    color: #333;
   	/*margin: .6rem 0;*/
  	border: 2px solid rgba(0,0,0,.3);
    text-transform: none
    



}

.div-login label{
	color: red;
	font-size: 9pt;
	float: left;
	margin-bottom: 7px;
}


.div-login a{
	text-decoration: none;
	font-family: sans-serif;

}
.div-login a:hover
{
	text-decoration: underline;
}

.div-login button
{
	padding: 8px;
	width: 350px;
	border-radius: 5px;
	border: 1px solid gray;
	font-size: 14pt;
	font-weight: bold;
	color: white;
	background-color: #107cf1;
	cursor: pointer;
	font-family: sans-serif;
	




}

.div-login button:hover
{
	background-color: #0d6fd9;
}

.pd{
	margin-top: 210px;
	margin-right: 500px;
	margin-left: 500px;
}

	</style>


<div class="nav-div " id="navbar">
		<table>

			<tr>

			<td >
				<a href="homelogin.php"><img id="img" src="GoWay-logos_transparent.png" style="height:40px;"></a>
			</td>

			<td style="text-align: right; padding-right:50px;" width=100%>
				<div class="nav-div2">
				<nav >
					
						<a href="homelogin.php" id="t">Tour |</a>
						<a href="driverlog.php" id="d">Drive |</a>
						<a href="search1.php" id="s">Search |</a>
						<a href="about.html" id="a">About Us |</a>
						<a href="homelogin.php" id="y">Your Trips |</a>
						<a href="realsignup.php" id="si" style="padding-left:50px; border:1px solid #107cf1; border-radius:20px; text-align:center; padding-left:20px; padding-right:20px; padding-top:10px; padding-bottom:10px; margin-left:100px;">Sign In</a>
						
						
					
				</nav>
				</div>
			</td>	

			</tr>

		</table>
	</div>
	<!-- Navi end -->
<br><br>


	<div class="div-login pd" id="div">
							<form name="reset" method="POST">
								<center><h1 style="font-family: Century Gothic; font-weight: 100; font-size:20pt">Reset Password</h1>
								<label id="error" name="err" style="margin-left: 50px;">
									
									<?php 
										$error;
									?>
								</label><br>
								<input type="email" placeholder="E-mail" id="uname" name="email">
								<br><br>
								 <input type="password" placeholder="Password" id="pswd" name="ps">
								<br><br> 
								 <input type="password" placeholder="Confirm Password" id="pscon" name="pascon">
								<br><br> 
								<button type="submit" id="lgin" name="sub" onclick="rset()">Reset</button>
								<br><br>
								
								 </center>
							</form>
						</div>
						<script src="reset.js"></script>
</body>
</html>