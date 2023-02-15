<?php
	session_start();
	 include("connection.php");
    include("function.php");

    $user_data = check_login($con);

   


	if(isset($_POST['sub']))//if click submit button
	{
  
    
   

	$email = $_POST['email'];
	$pass = $_POST['ps'];

        if(!empty($email) && !empty($pass))
        {
		
         $query = "select email,pass from usr where email = '$email' limit 1";
		  $result = mysqli_query($con,$query);

		  if($result)
		  {
		  	if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);

				if($user_data['pass'] == $pass)
				{
					$_SESSION['email'] = $user_data['email'];
					header("Location: homerel.php");
	   				die;
				}
				else
				{
					echo "invalid password";
				}
			}
		  }
		
       
	   }
       else
       {
        echo "error";
       }
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GoWay | Cab and Taxi Booking</title>
	<link rel="stylesheet" href="home.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="icon" href= "mk.png" type="image/png" sizes="any">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>

	<!-- Navi start -->
	<div class="nav-div" id="navbar">
		<table>

			<tr>

			<td >
				<a href="homerel.php"><img id="img" src="GoWay-logos_transparent.png" style="height:40px;"></a>
			</td>

			<td style="text-align: right; padding-right:50px;" width=100%>
				<div class="nav-div2">
				<nav >
					
						<a href="tour.php" id="t">Tour |</a>
						<a href="driverlog.php" id="d">Drive |</a>
						<a href="search.php" id="s">Search |</a>
						<a href="about.html" id="a">About Us |</a>
						<a href="trips.php" id="y">Your Trips |</a>
						<label name="userEmail" id="h" style="margin-right:50px; margin-left: 50px; color:#107cf1"> 
<!-- 
     username --> 

 <div class="nav-item dropdown">
          <label class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
           <span class="navi-col me-3"> 
           	<?php 
           		echo $user_data['email'];
           	?>
           </span>
          </label>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style-type:none;">
            <a class="dropdown-item" href="logout.php">Log out</a>
          </div>
        </div>

        <!-- username end -->

<!-- 
						<a href="realsignup.php" id="si" style="padding-left:50px; border:1px solid #107cf1; border-radius:20px; text-align:center; padding-left:20px; padding-right:20px; padding-top:10px; padding-bottom:10px;">Sign In</a> -->
						
					
				</nav>
				</div>
			</td>	

			</tr>

		</table>
	</div>
	<!-- Navi end -->
<br><br>

<style>
	.sign{
		padding-left:50px; border:1px solid white; border-radius:25px; text-align:center; padding-left:30px; padding-right:30px; padding-top:12px; padding-bottom:14px; text-decoration: none; color:white;
		font-weight: bold; 

	}
	.sign:hover
	{
		background-color: #107cf1;
		color: black;
		border-color: #107cf1;
		opacity: 1;
	}

</style>
	<!-- area 1 -->
	<div class="div1">
	
		<!-- <img src="m123.jpg" style="height:710px;  width:1536px;"> -->
			<table>
				<tr>
					<td width=60%>
						<table width="100%">
							<tr>
								<td style="height: 100px;" ></td>
							</tr>
						</table>
						<p>The Technology<br>
						That Enables<br>
						<span style="color:#9ac1f5">FASTER, SAFER, SMARTER</span><br>
						Traveling.</p>
						<br>

						<a href="tour.php"  class="sign">Tour</a> 
					</td>

					<td style="text-align: right; padding-left: 100px; padding-top: 80px;" width=50%>
					
					</td>
				</tr>

			</table>
	</div>
	<!-- area 1 end -->

	<!-- area 2 start -->
	<div class="div2">
		<table>
			<tr>
				<td style="padding-bottom:50px; padding-top:0px ;"  height="20px">
					<img src="as.jpg" style="height:400px; padding-top: 0px;">
				</td>

				<td style="padding-left:100px; float:right;" >
					<center><h1 style="text-align: justify;">The GoWay App and <br>How It Works</h1></cetner>
						<table>
							<tr>
								<td style="height: 300px; padding-top:0px; margin-top: 0px;">
								<div style="padding-bottom:150px;">	
									<div style="border-left:4px solid gray; padding-left:10px; color:gray;">
									<h2 class="pd">Book in Just 2 Taps</h2>
									<p class="pd">Key in your pick-up and drop-off locations to get your estimated fare.</p><br>
									<h2 class="pd">Get a Driver</h2>
									<p class="pd">GoWay will find you the nearest available driver.</p><br>
									<h2 class="pd">Track Your Driver</h2>
									<p class="pd">Know your driver’s location and estimated time of arrival in real-time.</p>
								</div>
								
								</td>
								<div>
							</tr>
						</table>
				</td>
			</tr>
		</table>
		
	</div>

	
	<!-- area 2 end -->

<br><br>
<hr style="margin-right: 100px; margin-left: 100px;">
<br><br>


<!-- area 3 start -->
		<div class="div-whyBook">

			<h2>Why GoWay for Cab Booking?</h2>
			<br><br>

			<table>
				<tr>
					<td>
						<img src="extensive.png"/>
						
					</td>
					<td>
						<img src="great-value.png">
						
					</td>
					<td>
						<img src="easy-booking.png">
						
						
					</td>
					<td>
						<img src="customer.png">
						
					</td>
				</tr>

				<tr>
					<td><h3>Extensive Options</h3>
						</td>
					<td><h3>Convenient</h3>
						</td>
					<td><h3>Easy & flexible booking</h3>
						</td>
					<td><h3>24/7 customer </h3>
						</td>

				</tr>

				<tr>
					<td class="padd" >
						<p>Wide range of quality,safe & licensed vehicles</p>
						<table>
							<tr>
								<td style="height: 25px;"></td>
							</tr>
						</table>
					</td>
					<td class="padd" ><p>Enjoy a high-quality transfer experience at <br>surprisingly low prices</p>
							<table>
							<tr>
								<td style="height: 14px;"></td>
							</tr>
						</table>
					</td>
					<td class="padd" ><p>Booking online is easy and only take 5<br> minutes, cancellations are free of charge up <br>to 24 hours before the transfer.</p></td>
					<td class="padd" ><p>service
					Our office is staffed 24 hours a day, 365 days<br> a year- we're always here to help you.</p>
					<table>
							<tr>
								<td style="height: 14px;"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			
		</div>

		<br><br><br>
<!-- area 3 end -->

	<!-- area 4 start -->
	<div class="div3">
		<img src="mg2.jpg" style="width:400px; margin-right: 100px;">
		<h2>Tour</h2>
		<p style="margin-bottom: 20px; line-height: 22px;">GoWay Ride-Hailing includes the largest fleet of vehicles in Sri Lanka offering both on-demand and pre-booking features at the best rates, including TUK-TUKs Flex, Minis, Cars, Minivans, and Vans offering you comfort, convenience and safety, covering the entire island nation.<br><br>

		Booking a taxi is easy with GoWay Cabs. No matter the time of day, you can depend on us to be at your service when you need safe and reliable transport. Book your taxi online or over the phone.
		<br><br>
			Want to know how much it’ll cost to reach your destination? GoWay Cabs will provide you with a fixed price fare when you make a booking. Choosing our taxi service allows you to avoid surprise surges (we never surge) and other hidden fees – you won’t have to worry about getting hit with crazy prices because we never surcharge our rates, regardless of how busy it gets.

We’ll tell you the price of your fare upfront, so you won’t have to wonder about the costs involved with getting where you need to go.
	</p>

		<br><br><br>
		<img src="h1.jpg" style="width:400px; float:right; margin-left: 120px; ">
		<h2>Drive</h2>
		<p style="line-height: 22px; ">Be part of a team that takes pride in service excellence and uplift your living standards with YOGO. If you are interested in becoming a service provider at YOGO contact our main HOTLINE or fill the application form and press send button. You will be contacted by a GoWay recruitment officer within 24 hours.
<br><br>
As a GoWay service provider you will enjoy a host of benefits since we stand tall to create a pleasant working experience with us. Furthermore, you will receive an intensive training in order to offer our passengers a service standard on par with international standards.
<br><br>
<span style="font-weight: bold;">Opportunities are Endless with GoWay
</span><br><br>
If you own a Bike, Tuk, Car, Van or even a Truck, We got rides for you! Join the largest network of drivers in the country & make driving fun while you earn over 100,000 Rupees per month.


</p>

	</div>

	<br><br><br>
	<!-- area 4 end -->

	<!-- area 5 start -->

		<div class="div5">
			<h1 style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">Safe Ride With Covid 19</h1>
			<table>
				<tr>
					<td style="width:55%; ">
						
						<h2>Transporting Passengers Safely</h2>
<p>
<ul>
<li> Promote prevention measures to passengers on reducing risk to drivers and themselves on your 
website and through outgoing telephone messages. Posters can be posted in the vehicle.</li>
<li><span style="font-weight: bold;">Install barriers:</span> Consider installing plastic screens or plexiglass shields as a physical barrier 
between the driver and passenger in the back seat. Ensure that these barriers do not create any 
new safety hazards such as visual obstructions for the driver.</li> 
<li><span style="font-weight: bold;">Wear a mask:</span> The use of masks or face coverings by drivers and passengers is required in all 
indoor public spaces, including vehicles operating as part of a business or organization, under a 
City of Toronto bylaw.</li>


<li>If physical distancing and/or separation via a physical barrier cannot be maintained, drivers should 
wear both a mask (preferably medical mask) and eye protection (goggles or face shield). Ensure 
that any eye protection that is used does not create visual obstructions for the driver.</li>
<li>Clean your hands before putting on personal protective equipment, and after taking it off. </li>
<li><span style="font-weight: bold;">Physical distance:</span> Ask passengers to sit in the back seat to maintain physical distance.</li>
<li>When there are four or more passengers, use a larger vehicle with more seating, such as a min van, or multiple vehicles be used so that individuals do not sit next to the driver. Passengers 
should only travel in the same vehicle with people they live with.</li></p>
					</ul>
					</td>

					<td style="padding-left: 100px; border-left:1px solid white;">
						<h2> Cleaning and disinfection</h2>
<p><ul>
	<li>In addition to routine cleaning, surfaces that have frequent contact with hands should be 
cleaned and disinfected at the following times:</li>
<ul style="list-style-type: square; padding:0px; margin:0px; ">
<li>at least once per day</li>
<li>when visibly dirty</li>
<li>after transporting medical patients (e.g. to and from hospital and other health care settings)</li>
<li>after transporting passengers who display respiratory symptoms (e.g. coughing, sneezing).</li> </ul>

<li> Employers/vehicle owners should provide all drivers with the appropriate cleaning 
products/disinfectant wipes for their vehicles.</li>
</ul></p>

<h2>Staff attendance and operations</h2>
<p><ul> <li>Employers must ensure staff complete a COVID-19 screening questionnaire before each work 
shift.</li></ul></p>
					</td>
				</tr>
			</table>
		</div>
<br><br><br>
	<!-- area 5 end -->

	<!-- area 6 start -->
	
	<div class="div6">

		
		<h1>CUSTOMER COMMENTS</h1>
		<center><img src="t.png" style="text-align: center; width: 130px; padding-top: 0; margin-top:0; margin-bottom: 50px; margin-top: 12px;"></center>


		<table>
			<tr>
				<td>
					<div class="divRate">
						
						<img src="pi.jpg">
						<h3>Samsan Jay</h3>
						<p>"The driver was <br>really good & very professional, the guide was super <br>friendly and really helpful<br> in every way."</p>
					</div>
				</td>

				<td>
					<div class="divRate">
						
						<img src="pi.jpg">
						<h3>Ram Kaush</h3>
						<p>"We booked a ride<br> from Sigiriya to Kandy with a stop at herbal <br>garden and lunch.<br> Everything went smooth."</p>
					</div>
				</td>
				<td>
					<div class="divRate">
						
						<img src="pi.jpg">
						<h3>Kamal Sri</h3>
						<p>"100% satisfied with the <br>service😎❤️. Clean vehicles provided and they have<br> set of very experienced drivers<br> as well. Highly recommend."</p>
					</div>
				</td>
			</tr>
		</table>

	</div>
	<br><br>
	<!-- area 6 end -->

	<!-- area 7 start -->
		<div class="div7">
			<h2>Experience The Amazing With Us</h2>
			<p>If you want to have an amazing experience as a driver or as <br>a customer please make sure to join with us. </p><br>
			<a href="tour.html">Tour</a>
			<a href="driverlog.html">Drive</a>
		</div>
	<!-- area 7 end -->

<!-- 	footer start -->
		<section class="footer">
		
				<div class="social">
						<a href="#"><i class="fab fa-google"></i></a>
						<a href="#"><i class="fab fa-linkedin"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-facebook"></i></a>
				</div>

				<ul class="list">
					<li>
						<a href="#">Home</a>
					</li>

					<li>
						<a href="tour.html">Tour</a>
					</li>

					<li>
						<a href="driverlog.html">Drive</a>
					</li>

					<li>
						<a href="#">About Us</a>
					</li>

					<li>
						<a href="#">Your Trips</a>
					</li>

					<li>
						<a href="#">Search</a>
					</li>
				</ul>


		</section>
<!-- footer end -->

<!-- end start -->
		<div class="end-div">
			<p> © Copyright © 2022 - Ishan | Bawantha | Sasindu | Nimshi | Janith (Pvt) Ltd. All rights reserved.</p>
			
		</div>
<!-- end end -->

<!-- navbar scroll -->




	


</body>
</html>