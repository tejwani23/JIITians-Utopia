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


$name=$_POST["Name"];
$email=$_POST["EMail"];
// $mobile_no=$_POST["Telephone"];
$password=$_POST["Password"];
$identity=$_POST["Subject"];
echo"<p> $name $email $password $identity </p>";

 $_SESSION['email']=$email;
  
  if($identity=="Student"){

$sql="insert into jiit_student values('$name','$email','$password',NULL)";

$c=mysqli_query($conn,$sql);

// if(!$c)
// {
// die("failed".mysql_error());
// }


echo "Successfully inserted  into a table<br><br>";

echo '<a href="pro.php">a</a>';
mysqli_close($conn);
header("location:studentportal.php");

  }


	
  else{

$sql="insert into landlord values('$name','$email','$password')";

$c=mysqli_query($conn,$sql);

if(!$c)
{
die("failed".mysqli_error());
}


echo "Successfully inserted  into a table<br><br>";

header("location:landlordportal.php");

mysql_close($conn);

  }
  

 ?>