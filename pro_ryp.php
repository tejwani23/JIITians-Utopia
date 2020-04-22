<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	 <script> 
function validate()                                    
{ 
    
    var what =  document.forms["sign_up2"]["Subject"];  
    var phone = document.forms["sign_up2"]["Telephone"]; 
    var address = document.forms["sign_up2"]["Address"]; 
      

    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        name.focus(); 
        return false; 
    } 


      if (phone.value == "")                           
    { 
        window.alert("Please enter the rent"); 
        phone.focus(); 
        return false; 
    } 

   
    if (what.selectedIndex < 1)                  
     { 
        alert("Please enter your locality."); 
        what.focus(); 
        return false; 
    } 
   
    return true; 
}</script> 
	<title>RENT YOUR PLACE</title>
</head>
<style >
	body{
	margin: 0;
	padding: 0;
	background-image: url(images/room6.jpg);
	background-size: cover;
	~webkit-background-size: cover;
	font-family: Tahoma ,sans-serif;
}
.form-area{
	position: absolute;
	top: 50%;
	left :50%;
	transform: translate(-50%,-50%);
	width: 500px;
	height: 500px;
	box-sizing: border-box;
	background :rgba(0,0,0,0.5);
	padding: 40px;
}

h3{
	margin: 0;
	padding: 0 0 20px;
	font-weight: bold;
	color: #ffffff; 
	font-size: 20px;
}

.form-area p{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #ffffff;
}

.form-area input,select{
	margin-bottom: 10px;
	width: 100%;

}

.form-area input[type="text"],
.form-area input[type="password"],
.form-area input[type="email"],
.form-area input[type="number"]

{
	border: none;
	border-bottom: 1px solid #ffffff;
	background-color: transparent;
	outline: none;
	height: 40px;
	color: #ffffff;
	display: 16px;
}

/*.form-area select{
	background-color: transparent;
	color: #ffffff;

}*/
/*.form-area option{
	text-align: center;
}*/


.form-area select{
		margin-top: 20px;
		padding: 10px 0;
		border-radius: 20px;
		text-align: center;
}

.form-area button[type="submit"]{
	width: 100%;
	border: none;
	height: 40px;
	outline: none;
	color: #ffffff;
	font-size: 15px;
	background-color: tomato;
	cursor: pointer;
	border-radius: 20px;
}

form-area input[type="submit"]:hover{
	background-color: cyan;
	color: #ffffff;
}




</style>
<body>
<div class="form-area">
        <h3>RENT YOUR PLACE</h3>
        <form  method="post" action="pro_ryp2.php" name ="sign_up2">
       <p>LOCALITY :</p>
    <select name="loc" required>
    <option value="Sector 62">Sector 62</option>
    <option value="Indirapuram">Indirapuram</option>
    <option value="Sector 63">Sector 63</option>

    </select>

        <p>RENT:</p>
        <input type="text" name="rent">
        <br><br>
        <p>ADDRESS:</p>
        <input type="text" name="address">
        <br><br>
        IMAGE:<input type="file" name="image" accept="image/*">
        <br><br>
        <button type="submit" formtarget="http://localhost/project/landlordportal.php">POST</button>
    </form>
    </div>

	<!-- <h1>RENT YOUR PLACE</h1>
	<form  method="post" action="pro_ryp2.php">

		
		LOCALITY:
		

		    <input type="radio" name="loc" value="Sector 62">Sector 62
		    <input type="radio" name="loc" value="Indirapuram">Indirapuram
		    <input type="radio" name="loc" value="Sector 63">Sector 63 
		<br><br>
		RENT:<input type="textbox" name="rent">
	    <br><br>
		ADDRESS:<input type="textbox" name="address">
		<br><br>
		IMAGE:<input type="file" name="image" accept="image/*">

		<button type="submit">POST</button>
	</form> -->
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>RENT YOUR PLACE</title>
</head>
<body>
	<h1>RENT YOUR PLACE</h1>
	<form  >
		FULL NAME:<input type="text" name="p_name">
		EMAIL:<input type="email" name="p_email">
		MOBILE NO:<input type="number" name="p_mobile">
		TYPE OF PROPERTY:<input type="dropdown" name="p_top" value="Apartment">
		<input type="dropdown" name="p_top" value="Student Hostel">
		<input type="dropdown" name="p_top" value="Service Apartment">
		NO OF BEDROOMS:<input type="number" name="p_nob>
	
		<button type="submit"></button>
	</form>
</body>
</html> -->