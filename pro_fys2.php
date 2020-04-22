<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
{
die("failed".mysql_error());
}

//echo "success <br>";

$sql=mysqli_select_db($conn,'PROJECT');

if(!$conn)
{
die("failed".mysql_error());
}

//echo "success <br>";

$location=$_POST["location"];
$budget=$_POST["budget"];
?>
<head>
<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
<style type="text/css">
	h1{
		text-align: center;
		font-family: 'Lato', sans-serif;
		font-size: 250%;
		color: white;
	}
	.room{
		border: solid 2px white;
		width: 880px;
		background-color: rgba(0,0,0,0.8);
		position: relative;
		left: 50%;
		transform: translate(-50%,0);
	}
	.desc{
		color: white;
		text-align: center;
		font-family: 'Lato', sans-serif;
		font-size: 200%;
		margin: 0;
	}
</style>
</head>
<?php
echo "<body style='background-image:url(images/background/img3.jpg);'>
<h1 >SHOWING RESULTS OF:</h1>
     <p class='desc'> LOCATION=$location <br>
          BUDGET=$budget </p><br>";

$sql="select LOCATION , RENT ,ADDRESS ,IMAGE, ROOM_ID from ROOMS WHERE LOCATION='$location' AND RENT<$budget AND RENTED_TO IS NULL";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result))
{
	//echo "<span><img src='$row['IMAGE']'></span>";
	//echo $row['LOCATION']." ".$row['RENT']." ".$row['ADDRESS']."<br>";
	echo "<div class='room'>";
	echo '<a href="pro_fys3.php?room=' . $row['ROOM_ID'] . '" ><img src="images/' . $row['IMAGE'] . '" alt="image not found" class="image" 
	 height="450px" width="880px"><br><br><br></a>';
	 echo "<p class='desc'>";
	echo "PRICE: " . (string)$row['RENT'];
	echo "</p>";
	echo "</div>";
	echo "<br>";
}
mysqli_close($conn);

?>
