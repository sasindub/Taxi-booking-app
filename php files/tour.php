<?php 
	   session_start();
    
    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

    	$mail = null;
    	$tstart = null;
    	$tend = null;
    	$day = null;
    	$vtype = null;
    	$bag = null;
    	$bagw = null;

    	$tele = null;
    	$km = null;
  

    

    	$total = null;
    	$bprice = null;
    	$dprice = null;
    	$chk = null;
    

    if(isset($_POST['booknow']))
    {
    	$kamath = "ka";
    	
    	$mail = $user_data['email'];
    	$email = $_POST['mail'];
    	$tstart = $_POST['pick'];
    	$tend = $_POST['drop'];
    	$day = $_POST['day'];
    	$vtype = $_POST['vtype'];
    	$bag = $_POST['bagqu'];
    	$bagw = $_POST['weiBag'];

    	$tele = $_POST['tele'];
    	$km = $_POST['kilometer'];
    	$bchk = $_POST['bagchk'];

    

    	$total ;
    	$bprice;
    	$dprice;
    	$chk;



	if($km > 0 && $km <= 1)
	{
		$dprice = 60;
	}
	if($km > 1 && $km <= 10)
	{
		$dprice = 60 + (($km-1) * 45);
	}
	if($km > 10)
	{
		$dprice = 60 + (($km - 10) * 30) + (45 * 9);
	}


	// bag weight calculate

	if($bagw > 2 && $bagw <= 5)
	{
		$bprice = 250;
	}
	if($bagw > 5)
	{
		
		$bprice = 250 + (($bagw - 5) * 50);
	}

	



	$total = $bprice; + $dprice;
	$t = $total;



    	if(isset($bchk))
    	{
    		$chk = "yes";
    	}
    	else
    	{
    		$chk = "no";
    	}


						
    $query1 = "insert into tour(email,tstart,tend,day,vtype,bag,bagw,price) values('$mail','$tstart','$tend','$day','vtype',$bag,$bagw,'$t');";
						mysqli_query($con,$query1);
						// header("Location: homelogin.php");

					
						
					
				
			

    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GoWay | Faster And Smart Drive</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="tour.css">
		<link rel="stylesheet" href="nav.css">
		<link rel="icon" href= "mk.png" type="image/png" sizes="any">

    </head>
    <body>
       
	   
	   	<div class="nav-div" id="navbar" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<table>

			<tr>

			<td >
				<a href="homelogin.php"><img id="img" src="GoWay-logos_transparent.png" style="height:40px;"></a>
			</td>

			<td style="text-align: right; padding-right:50px;" width=100%>
				<div class="nav-div2">
				<nav >
					
						<a href="tour.php" id="t" style="color:#107cf1;">Tour |</a>
						<a href="driverlog.php" id="d">Drive |</a>
						<a href="search.php" id="s">Search |</a>
						<a href="about.html" id="a">About Us |</a>
						<a href="trips.php" id="y">Your Trips |</a>
						<label id="si" name="userEmail" style="text-transform:lowercase; padding-left: 100px;">
							<?php 
							echo $user_data['email'];
							
							?>
						</label>
						
					
				</nav>
				</div>
			</td>	

			</tr>

		</table>
	</div>
	<!-- Navi end -->
	   
	   
        
        <video src="car1.mp4" id="vedio-slider" loop autoplay muted style="height:1030px;"></video>
		
		<table style="width:100%;">
		<tr>
		<td style="width:50%;padding:100px;">
		
			<div style=" background-color:#212529; padding:50px; opacity:1; border-radius:10px; " id="comdiv" name="confirmDiv">
			
			<center><h1 style="color:white;">I N V O I C E</h1></center><br>
			<form method="post">
			<label class="lbl" id="from" name="frm">
				<?php 
					echo $tstart;
				?>
			</label>
			<label class="lblleft">FROM</label>

			<br>
			<label class="lbl" id="to" name="too">
					<?php 
					echo $tend;
				?>
			</label>
			<label class="lblleft">TO</label>
			<br>
			<label class="lbl" id="day" name="dayy">
					<?php 
					echo $day;
				?>
			</label>
			<label class="lblleft">DATE</label>
			<br>
			<label class="lbl" id="vehicle" name="veh">
				<?php 
					echo $vtype;
				?>
			</label>
			<label class="lblleft">VEHICLE TYPE</label>
			<br>
			<label class="lbl" id="email1" name="em" style="text-transform:lowercase;">
				<?php 
					echo $mail;
				?>
			</label>
			<label class="lblleft">E-MAIL</label>
			<br>
			<label class="lbl" id="mob" name="mobile">
				<?php 
					echo $tele;
				?>
			</label>
			<label class="lblleft">MOBILE</label>
			<br>
			<label class="lbl" id="kilm" name="kilo">
					<?php 
					echo $km;
				?>
			</label>
			<label class="lblleft">KiloMeters</label>
			<br>
			<label class="lbl" id="bagyes" name="bgyes">
					<?php 
					echo $chk;
				?>
			</label>
			<label class="lblleft">BAGGAGE</label>
			<br>
			<label class="lbl" id="bagqu" name="bgqu">
					<?php 
					echo $bag;
				?>
			</label>
			<label class="lblleft">BAGS</label>
			<br>
			<label class="lbl" id="bagwei" name="bgwei">
					<?php 
					echo $bagw." kg";
				?>
			</label>
			<label class="lblleft">BAGS' WEIGHTS</label>
			<br><br>
			<label class="lbl" id="bprice" name="bagprice" style="color:#8fbaff">
					<?php 
					echo $bprice;
				?>
			</label>
			<label class="lblleft" style="color:#8fbaff">COST FOR BAGS</label>
			<br>
			<label class="lbl" id="dprice" name="disprice" style="color:#8fbaff">
					<?php 
					echo $dprice;
				?>
			</label>
			<label class="lblleft" style="color:#8fbaff">COST FOR DISTANCE</label>
			<br><br>
			<label  class="lbl" style="font-size:20pt;" id="total" name="tot">
					<?php 
					echo $total;
				?>
			</label>
			<label class="lblleft" style="font-size:20pt;">TOUR COST</label>
			<br><br>
			<center><a href="homerel.php" class="cbtn" type="submit" id="sub" name="subtil" onclick="confirm()">DONE</a></center>
			</form>
			</div>
			
			
		</td>
		
		<td style="width:50%; padding-left:85px;">
		
        <div style="padding-left:70px;"  >
		
            <form action="" id="form1" method="post">
                <section class="copy">
                    <br><br>
                    <h2 style="font-size: 20pt; margin-top: 50px; padding-left:100px;">Plan Your Travel</h2>
					<label style="color:red; font-size:10pt; text-transform:lowercase;" id="invalid" name="invld">all fields are required*</label><br>
                    <div class="login-form-container">
                    
                    </div> 
                </section>

                <div class ="input" >
                      <input type ="pick_location" class="box" id="pick_loc" name="pick" placeholder="Enter your Pick-up Location" required>
                </div>
                <br>
                
                <div class ="input">
                   <input type="drop_location" class="box" id="drop-loc" name="drop" placeholder="Enter the Drop Location ">
               </div>
               <br>
            
                <div class ="input">
                   <input type="date" class="box" id="date_of" name = "day" placeholder="Enter the Date">
               </div>
               <br>

                <div class ="input">
                   <input type="text" class="box" id="vehi_type" name="vtype" placeholder="Enter the vehical type">
               </div>
               <br>
     
                <div class ="input">
                   <input type="email" class="box" id="email" name="mail" placeholder="Enter the Email">
               </div>
               <br>
               
               <div class ="input">
                <input type="tele" class="box" id="tele_num" name="tele" placeholder="Enter the Mobile No (070 0000 000)">
               </div>
                <br>
                <br>
                  <table><tr>
				  
				  <td>
				  
				  <label class="container">Baggage
				<input type="checkbox" checked="checked" id="bgchk" name="bagchk" value="yes" onclick="bags()">
				<span class="checkmark"></span>
			
				</label>
				
				</td>
					
					<td style="text-align:right; padding-left:53px;">
					 <div class ="input" style="padding-bottom:0px; margin-bottom:0px;">
                <input type="number" min="1" class="box" style="width:80%;" id="kilom" name="kilometer" placeholder="KiloMeters" style="padding-bottom:0px; margin-bottom:0px;"/>
				<span style="font-size:17pt; font-weight:400; margin-left:5px;" style="padding-bottom:0px; margin-bottom:0px;">KM</span>
               </div>
					</td>
				</tr></table>
				
				
                    
                   
                    <br><br>

                <div class="dropDown" id="qudrop">
                <select style="font-family: 'Nunito', sans-serif ;  font-size: 1.7rem; color: rgb(61, 60, 60); text-transform: none;"; name="bagqu" id="bgqu">
                    <option value="0">Quantity Of Bags </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="5">8</option>
                    <option value="6">9</option>
                    <option value="7">10</option>
                 </select>
                </div>
                <br>

                <div class="dropDown" id="wdrop">
                    <select style="font-family: 'Nunito', sans-serif ;  font-size: 1.7rem; color: rgb(61, 60, 60); text-transform: none;"; name="weiBag" id="wbags">
                        <option value="0">Weight (Kg)</option>
                        <option value="1">1 Kg </option>
                        <option value="2">2 Kg</option>
                        <option value="3">3 Kg</option>
                        <option value="4">4 Kg</option>
                        <option value="5">5 Kg</option>
                        <option value="6">6 Kg</option>
                        <option value="7">7 Kg</option>
                        <option value="5">8 Kg</option>
                        <option value="6">9 Kg</option>
                        <option value="7">10 Kg</option>
                     </select>
                    </div>
                    <br>
              
                <input type="submit" id="book" name="booknow" value ="BOOK NOW" class="btn" onclick="addtour()">
                <br><br><br><br>
            </form>
            
           </div>
       </div>
	  <td>
	  </tr> 
	  </table>
  
   
   
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
 
	<script src="tour.js"></script>
	<!-- <script src="addtour.js"></script> -->
 
    </body>
	</html>