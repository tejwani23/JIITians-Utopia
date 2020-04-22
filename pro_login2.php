<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);

if(!$conn)
{
die("failed".mysql_error());
}

echo "success <br>";


$sql=mysql_select_db('PROJECT',$conn);

if(!$conn)
{
die("failed".mysql_error());
}

echo "success <br>";


$email=$_POST["email"];
$identity=$_POST["Subject"];
$password=$_POST["pass"];

echo"<p>$email $password $identity </p>";


  
   if($identity=="Student"){

 $sql="SELECT * FROM jiit_student WHERE email='$email' AND password='$password'";
   $result=mysql_query($sql,$conn);
   $row=mysql_fetch_array($result,MYSQL_ASSOC);
   $count=mysql_num_rows($result);
 
if ($count== 1)
 {
      echo "success";
       $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location:studentportal.php');
}
else{
  echo "fail";
}
}
else{
    $sql="SELECT L_NAME FROM landlord WHERE L_EMAIL='$email' AND L_PASSWORD='$password'";
 $result=mysql_query($sql,$conn);
 $row=mysql_fetch_array($result,MYSQL_ASSOC);
 $count=mysql_num_rows($result);
 
if ($count== 1)
 {
      echo "success";
       $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: landlordportal.php');
}
else{
  echo "fail";
}

}
?>