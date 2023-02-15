<?php 
     session_start();
    
    include("connection.php");
    include("function.php");

    if(isset($_POST['sub']))
    {
        $mail = $_POST['email'];
         $name = $_POST['uname'];
          $mob = $_POST['mobile'];
           $vtype = $_POST['vehmodel'];
            $vmodel = $_POST['vehicle'];
             $forp = $_POST['fullopart'];
              $dis = $_POST['distrc'];

      
             $query = "insert into drive(dmail,name,mobile,vtype,forp,district,vmodel) values('$mail','$name',$mob,'$vtype','$forp','$dis','$vmodel');";
             mysqli_query($con,$query);


             header("Location: homerel.php");
             die;
    }


?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GoWay | Faster And Smart Drive</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="driver.css">
		<link rel="icon" href= "mk.png" type="image/png" sizes="any">
    </head>
    <body>
          
		<div class="nav-div" id="navbar" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<table>

			<tr>

			<td >
				<a href="homerel.php"><img id="img" src="GoWay-logos_transparent.png" style="height:40px;"></a>
			</td>

			<td style="text-align: right; padding-right:50px;" width=100%>
				<div class="nav-div2">
				<nav >
					
						<a href="tour.php" id="t">Tour |</a>
						<a href="driverlog.php" id="d" style="color:#107cf1;">Drive |</a>
						<a href="search.php" id="s">Search |</a>
						<a href="about.html" id="a">About Us |</a>
						<a href="trips.php" id="y">Your Trips |</a>
					<!-- 	<a href="realsignup.php" id="si" style="padding-left:50px; border:1px solid #107cf1; border-radius:20px; text-align:center; padding-left:20px; padding-right:20px; padding-top:10px; padding-bottom:10px;">Sign In</a> -->
						
					
				</nav>
				</div>
			</td>	

			</tr>

		</table>
	</div>
	<!-- Navi end -->
		
        <div class="split-screen">
            <div class="left">
                <section class="home">
                <section class="copy" style="padding-left : 50px;
	padding-right : 50px;">
                    
                    <h1>Opportunities are Endless with PickMe</h1>
                    <p>If you own a Bike, Tuk, Car, Van or even a Truck, We got rides for you! Join the largest network </p>
                </section>

            </div>
            <div class="right">
             <form action="" method="post">
                 <section class="copy">
                     <br><br>
                     <h2 style="font-size: 20pt;margin-top: 15px; margin-bottom:10px; margin-top:50px; ">Driver Sing up</h2>
						<label id="error" name="err" style="float:left; color:red; font-family:Arial; text-transform:lowercase;"></label>
                 </section>
					
                 <div class ="input-container-form" >
                       <input type="email" id="mail" name="email" class="box" placeholder="Enter your email">
                 </div>
                 <br>
                 
                 
                 <div class ="input-container-form">
                    <input type="name" id="name" name="uname" class="box" placeholder="Enter your name">
                </div>
                <br>
                

                 <div class ="input-container-form">
                    <input type="text" id="mob" name="mobile" class="box" placeholder="Enter your mobile No">
                </div>
                <br>
                
				
				 
                 <div class ="input-container-form">
                    <select id="vmodel" name="vehmodel" class="box">
						<option value="1">Select Vehicle Type</option>
						<option value="car">Car</option>
						<option value="van">Van</option>
						<option value="tuk">Tuk</option>
					</select>
                </div>
                <br>
				

                 <div class ="input-container-form">
                    <input type="text" id="veh" name="vehicle" class="box" placeholder="Enter the vehical model">
                </div>
                <br>
                
                               

                 <div class="input-container-form">
                 <select class="box" id="fop" name="fullopart" style="font-family: 'Nunito', sans-serif ;  font-size: 1.7rem; color: rgb(61, 60, 60); text-transform: none;"; name="workType" id="options">
                    <option value="1">Full Time or Part Time</option>
                    <option value="full time">Full Time</option>
                    <option value="part time">Part Time</option>
                  </select>
                 </div>
                 <br>
                 

                 <div class ="input-container-form">
                    <input type="Distric" class="box" placeholder="Enter the working distric" id="dis" name="distrc">
                </div>
                
               

                 <input type="submit" value ="REGISTER" class="btn" name="sub" onclick="signin()">
                 <br><br><br><br>
             </form>
             
            </div>
        </div>
    </section>
    <footer class="footer">
       <div class="inner-footer">
           <div class="social-links">
             <ul>
                <li class="social-items"><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="social-items"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                <li  class="social-items"><a href="#"><i class="fab fa-google"></i></a></li>
                <li class="social-items"><a href="#"><i class="fab fa-linkedin"></i></a></li>
             </ul>
           </div>
            <div class="label">
                COME AND VISIT
            </div>
       </div>
       <div class="outer-footer">
        © Copyright © 2022 - Ishan | Bawantha | Sasindu | Nimshi | Janith (Pvt) Ltd. All rights reserved.
       </div>
    </footer>
	
	<!-- <script src="drive.js"></script> -->
	<script src="driverSignIn.js"></script>
</body>
</html>