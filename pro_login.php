<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style >
	body{
	margin: 0;
	padding: 0;
	background-image: url(images/hh.jpg);
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
	height: 400px;
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
h6{
	color: white;
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
<form  method="post" action="pro_login2.php" name ="login">
	<h3>LOGIN</h3>
<!-- 
	<p>You're a ? :</p>
            <input type="radio" name="id" value="Landlord" required>Landlord</option>
            <input type="radio" name="id" value="Student" required>Student</option> -->
	<p>Email:</p>
	<input type="email" name="email" required>
	<p>YOU'RE A ? :</p>
    <select name="Subject" name="id" required>
    <option value="Landlord">Landlord</option>
    <option value="Student">Student</option>
    </select>
  
	<p>Password:</p>
	<input type="Password" name="pass" required>
	 <button type="submit">LOGIN</button>
</form>
    <h6>Not yet registered <a href="pro_signup.php">SIGN UP</a></h6>
</div>
<!-- <form  method="post" action="pro_login2.php" name ="sign_up">
	<h3>LOGIN</h3>
	<p>Email:</p>
	<input type="email" name="email" required>
	You're a ? :
            <input type="radio" name="id" value="Landlord" required>Landlord</option>
            <input type="radio" name="id" value="Student" required>Student</option>
	<p>Password:</p>
	<input type="Password" name="pass" required>
	 <button type="submit">LOGIN</button>
</form> -->
</body>
</html>
