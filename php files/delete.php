<?php 

    
    include("connection.php");
    include("function.php");
   

    $id = $_GET['a'];
    $query = "delete from tour where id = '$id' ";
    $data = mysqli_query($con,$query);

    if($data)
    {
    	echo "delete database";
    }
    else
    {
    	echo "no";
    }

    header("Location: trips.php");
?>