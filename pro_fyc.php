<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>HTML, CSS Email Contact Form - reusable form</title>
       <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >
        
        <link rel="stylesheet" href="form1.css" > -->

<style >
    body{
    margin: 0;
    padding: 0;
    background-image: url(images/room10.jpg);
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
    height: 450px;
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

.form-area label{
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
.form-area input[type="mobile no."],
.form-area input[type="tenantid"]


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
    <body >
            <div class="form-area">
                <h3>
                    File Your Complaint
                </h3>
                <form method="post" id="reused_form" action="dbms2.html" >
                    <label for="name">Your Name:</label>
                    <input id="name" type="text" name="Name" required maxlength="50" class="resizedTextbox" >
                    <label for="email">Email Address:</label>
                    <input id="email" type="email" name="Email" required maxlength="50" class="resizedTextbox">
                    <label for="mobile no.">Mobile number:</label>
                     <input id="mobile no." type="mobile no." name="Mobile Number" required maxlength="10" class="resizedTextbox">
                     <label for="tenantid">House id:</label>
                     <input id="tenantid" type="tenantid" name="Tenant id" required maxlength="50" class="resizedTextbox">
                     
                    
                    <button class="button-primary" type="submit" >File Your Complaint</button>
                </form>
                <div id="success_message" style="display:none">
                    <h3>Submitted the form successfully!</h3> 
                    <p> We will get back to you soon. </p>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
        </div>
    </body>
</html>