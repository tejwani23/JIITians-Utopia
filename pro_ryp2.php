<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
{
die("failed".mysql_error());
}

echo "success <br>";



$sql=mysqli_select_db($conn,'PROJECT');

if(!$conn)
{
die("failed".mysql_error());
}

echo "success <br>";



$locality=$_POST["loc"];
$rent=$_POST["rent"];
$address=$_POST["address"];
echo"<p> $locality $rent $address </p>";
$primary=$_SESSION['email'];
$image=$_POST['image'];
echo"<p> $primary </p>";
echo"<p> $image </p>";
$sql="insert into ROOMS(L_EMAIL,LOCATION,RENT,ADDRESS,IMAGE,RENTED_TO)"."values('$primary','$locality','$rent','$address','$image',NULL)";

$c=mysqli_query($conn,$sql);

if(!$c)
{
	die("failed".mysqli_error($conn));
}

echo "Successfully inserted  into a table<br><br>";

header('location: landlordportal.php');
mysql_close($conn);

?>
