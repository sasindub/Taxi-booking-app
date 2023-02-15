<?php

     session_start();
    
    include("connection.php");
    include("function.php");


	if(isset($_POST['sub']))//if click submit button
	{
	

	$email = $_POST['mail'];
	$address = $_POST['loca'];
	$nic = $_POST['nic'];
	$tele = $_POST['tele'];
	$pass = $_POST['pass'];
    $passcon = $_POST['passCon'];

        if(!empty($email) && !empty($address) && is_numeric($nic) && is_numeric($tele) && !empty($pass) && !empty($passcon))
        {
		
         $query = "insert into usr(email,address,mobile,nic,pass) values ('".$email."','".$address."',". $tele .",".$nic.
			",'".$pass."');";
		  mysqli_query($con,$query);

		header("Location: success.html");
	   die;
       
	   }
       else
       {
        echo "error";
       }
}

	



?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GoWay | Faster And Smart Drive</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="customerSign.css">
		<link rel="stylesheet" href="nav.css">
		
    </head>
    <body>
       
         
        <div class="nav-div" id="navbar">
		<table>

			<tr>

			<td >
				<a href="homelogin.php"><img id="img" src="GoWay-logos_transparent.png" style="height:40px;"></a>
			</td>

			<td style="text-align: right; padding-right:50px;" width=100%>
				<div class="nav-div2">
				<nav >
					
						<a href="#" id="t">Tour |</a>
						<a href="driverlog.php" id="d">Drive |</a>
						<a href="search1.php" id="s">Search |</a>
						<a href="about1.html" id="a">About Us |</a>
						<a href="#" id="y">Your Trips |</a>
						<a href="signup.html" id="si" style="color:white; background-color:#107cf1 ; padding-left:50px; border:1px solid #107cf1; border-radius:0px; text-align:center; padding-left:20px; padding-right:20px; padding-top:50px; padding-bottom:40px; margin-left: 100px;">Sign In</a>
						
					
				</nav>
				</div>
			</td>	

			</tr>

		</table>
	</div>
	<!-- Navi end -->
<br><br><br><br>
		
		
    
        <div class = "age" >
        <div class="right">
            <form action="" id="form1" method="post" >
                <section class="copy">
                    <br><br>
                    <h2 style="font-size: 20pt;margin-top: 15px;color: #fff;font-weight: 1000px; margin-top:50px;"><b>SIGN UP</b></h2><br>
                    <div class="login-form-container">
                    
                    </div> 
                </section>

                <div class ="input" >
                      <input type ="location" class="box" id="loc" name="loca" placeholder="Enter your Address">
                </div>
                <br>

                <div class ="input">
                    <input type="email" class="box" id="email" name="mail" placeholder="Enter the Email">
                </div>
                <br>

                <div class ="input">
                    <input type="tele" class="box" id="tele_num" name="tele" placeholder="Enter the Mobile No">
                 </div>
                 <br>
                
                <div class ="input">
                   <input type="id" class="box" id="NIC" name="nic" placeholder="Enter your NIC Number ">
               </div>
               <br>
            
                <div class ="input">
                   <input type="password" class="box" id="password" name="pass" placeholder="Enter the password">
               </div>
               <br>

                <div class ="input">
                   <input type="password" class="box" id="com_password" name="passCon" placeholder="Comfirm your Password">
               </div>
               <br>
     
                
              
                <input type="submit" value ="SUBMIT" class="btn" name="sub">
                <br><br><br><br>
            </form>
            
           </div>
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
         <div class="hi">
             COME AND VISIT
         </div>
    </div>
    <div class="outer-footer">
      © Copyright © 2022 - Ishan | Bawantha | Sasindu | Nimshi | Janith (Pvt) Ltd. All rights reserved.
    </div>
 </footer>
  
    </body>