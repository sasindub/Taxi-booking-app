<?php 
session_start();
    
    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

    $mail = $user_data['email'];
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GoWay | Your Trips</title>
	<link rel="stylesheet" href="trips.css">
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="icon" href= "mk.png" type="image/png" sizes="any">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<style>
		body{
			margin: 0;
			padding: 0;
			font-family: Arial;
			
		}
	</style>
</head>
<body>

		<!-- Navi start -->
	 	<div class="nav-div" id="navbar" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<table>

			<tr>

			<td >
				<a href="homelogin.php"><img id="img" src="GoWay-logos_transparent.png" style="height:40px;"></a>
			</td>

			<td style="text-align: right; padding-right:50px;" width=100%>
				<div class="nav-div2">
				<nav >
					
						<a href="tour.php" id="t" >Tour |</a>
						<a href="driverlog.php" id="d">Drive |</a>
						<a href="search.php" id="s">Search |</a>
						<a href="about.html" id="a">About Us |</a>
						<a href="trips.php" id="y" style="color:#107cf1;">Your Trips |</a>
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
<br><br><br>

<!-- 1 div -->
		

<table class="table caption-top" style="margin-top: 50px;">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Date</th>
      <th scope="col">Bags' Weights</th>
      <th scope="col">Vehicle</th>
      <th scope="col">Price</th>
       <th scope="col">Cancel Tour</th>

    </tr>
  </thead>
  <tbody>

		<?php 
				$i = 1;
				$query1 = "select * from tour where email = '$mail' order by id asc";
				$result = mysqli_query($con,$query1);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
						
				
			?>

    <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $row['tstart']?></td>
      <td><?php echo $row['tend']?></td>
      <td><?php echo $row['day']?></td>
      <td><?php echo $row['bagw']?></td>
      <td><?php echo $row['vtype']?></td>
      <td><?php echo $row['price']?></td>
      <td><a href="delete.php?a=<?php echo $row['id'];?> ">Remove</a></td>

   

      <?php $i++?>

 

    </tr>

<?php 
    	}
				}

				?>
  </tbody>
</table>

<!-- 1 div end -->

</body>
</html>