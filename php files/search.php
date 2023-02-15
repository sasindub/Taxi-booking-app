<?php 

session_start();
    
    include("connection.php");
    include("function.php");

     $user_data = check_login($con);
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GoWay | Search</title>
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="icon" href= "mk.png" type="image/png" sizes="any">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
</head>
<body>

<!-- Navi start -->
	 	<div class="nav-div" id="navbar" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<table>

			<tr>

			<td >
				<a href="homerel.php"><img id="img" src="GoWay-logos_transparent.png" style="height:40px;"></a>
			</td>

			<td style="text-align: right; padding-right:50px;" width=100%>
				<div class="nav-div2">
				<nav >
					
						<a href="tour.php" id="t" >Tour |</a>

						<a href="trips.php" id="y" style="" >Your Trips |</a>
						
						<label id="si" name="userEmail" style="text-transform:lowercase; color:#107cf1; padding-left: 100px;">
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
<br><br><br><br>

<style>
.txt {
	width: 100%;
	border-radius: 5px;
	border:  2px solid gray;
	float: left;
	border-right: 2px solid gray;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;



}

button{
	border: 2px solid gray;
	float: right;
	padding-top: 1.7px;
	padding-bottom: 1.7px;
	font-weight: bold;
	background-color: white;
	border-radius: 5px;
	border-left: 2px solid gray;
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;

}

button:hover
{
	background-color: #107cf1;
	color: white;
	border-color: #107cf1;
}

table{
	width: 100%;
}
</style>


<div class="container">
	
	<form method="get">
	<table>
		<tr>
			<td  width=100%;>
		<input type="text" name="sch" id="sh" class="txt" placeholder="Search for a vehicle (District,Vehicale)">
	</td>
			<td >
		<button type="submit" name="sub" id="submit">Search</button>
		</td>
			</tr>
	</table>

	</form>

</div><br><br>
<!-- 
table start -->
<table class="table table table-dark table-striped container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">E-mail</th>
      <th scope="col">Mobile</th>
      <th scope="col">Vehicale Type</th>
      <th scope="col">Model</th>
      <th scope="col">District</th>
    </tr>
  </thead>
  <tbody>
  		<?php 
  			if(isset($_GET['sch']))
  			{
  				$i = 1;
  				$filtervalue = $_GET['sch'];
  				$query = "SELECT * FROM drive WHERE CONCAT(vtype,vmodel,district) LIKE '%$filtervalue%' ";
  				$query_run = mysqli_query($con,$query);

  				if(mysqli_num_rows($query_run) > 0)
  				{
  					foreach($query_run as $row)
  					{
  				
  				
  			
  		?>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $row['dmail']?></td>
      <td><?php echo $row['mobile']?></td>
      <td><?php echo $row['vtype']?></td>
      <td><?php echo $row['vmodel']?></td>
      <td><?php echo $row['district']?></td>
     
    </tr>


    <?php 
			$i++;

			}
		}

		else
  				{

    ?>

      <th scope="row"></th>
      <td></td>
      <td></td>
      <td><?php echo "no data"?></td>
      <td></td>
      <td></td>

    <?php 
    	}
    }
    ?>


  </tbody>
</table>

<!-- 
table end -->

</body>
</html>