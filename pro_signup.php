<!DOCTYPE html>
<html>
<head>
  <script> 
function validate()                                    
{ 
    var name = document.forms["sign_up"]["Name"];               
    var email = document.forms["sign_up"]["EMail"];    
    var phone = document.forms["sign_up"]["Telephone"];  
    var what =  document.forms["sign_up"]["Subject"];  
    var password = document.forms["sign_up"]["Password"];  
    var confpass= document.forms["sign_up"]["Confirm password"];
    
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
   
     
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    
   
    if(password.value == "")
{

alert('Please input Password');

document.form1.txtPassword.focus();    

return false;

}  

 

if(confpass.value == "")

{

alert('Please input Confirm Password');

document.form1.txtConPassword.focus();     

return false;

}  

 

if(password.value != confpass.value)

{

alert('Confirm Password Not Match');

document.form1.txtConPassword.focus();     

return false;

}  
   
   
    return true; 
}</script> 
    <title>Sign Up</title>
    <style>
            body{
    margin: 0;
    padding: 0;
    background-image: url(images/room5.jpg);
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
    height: 520px;
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
</head>
<body>
<div class="form-area">
<form  method="post" action="pro_signup2.php" name ="sign_up">
<h3>Sign Up Form</h3>
    <p> FULL NAME: </p>
       <input type="text" name="Name" required="Please">
   <p> EMAIL:</p>
       <input type="email" name="EMail" required="">   
<!--    <p>MOBILE NO:</p>
    <input type="number" name="Telephone" required="">
     -->
    <p>YOU'RE A ? :</p>
    <select name="Subject" required="">
    <option value="Landlord">Landlord</option>
    <option value="Student">Student</option>
    </select>
  
    <p>PASSWORD:</p>
        <input type="password" name="Password" required="">
   <p> CONFIRM PASSWORD:</p>
   <input type="password" name="Confirm password" required="">
    <button type="submit" onclick="validate()">SIGN UP</button>
 </form>
</div>
<!-- <form  method="post" action="pro_signup2.php" name ="sign_up">
    FULL NAME: <input type="text" name="Name" required ><br><br>
    EMAIL:<input type="email" name="EMail" required><br><br>
    MOBILE NO:<input type="number" name="Telephone" required><br><br>
    <p>YOU'RE A ? :</p>
    <select name="Subject">
    <option value="Landlord">Landlord</option>
    <option value="Student">Student</option>
    </select>
    <br>
    YOU'RE A ? :
        
            <input type="radio" name="Subject" value="Landlord" required>Landlord</option>
            <input type="radio" name="Subject" value="Student" required>Student</option>
        <br><br>
    PASSWORD:<input type="password" name="Password" required><br><br>
    CONFIRM PASSWORD:<input type="password" name="Confirm password" required><br><br>
    <button type="submit" onclick="validate()">SIGN UP</button>
 </form> -->

</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form  method="post" action="pro_signup2.php">
	FULL NAME: <input type="text" name="name"><br><br>
    EMAIL:<input type="email" name="email"><br><br>
    MOBILE NO:<input type="number" name="mobile"><br><br>
    YOU'RE A ? :
		
      		<input type="radio" name="id" value="Landlord">Landlord</option>
   			<input type="radio" name="id" value="Student">Student</option>
   		<br><br>
    PASSWORD:<input type="password" name="pass1"><br><br>
    CONFIRM PASSWORD:<input type="password" name="pass2"><br><br>
    <button type="submit">SIGN UP</button>
 </form>

</body>
</html>
 -->