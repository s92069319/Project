<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
 $firstname= $_POST['fname'];
 $lastname= $_POST['lname'];
 $Email= $_POST['emailadd'];
 $password= $_POST['password'];

 if(!empty($Email) && !empty($password) && !is_numeric($Email))
 {
     $query = "insert into form (fname,lname,emailadd,password) values ('$firstname','$lastname','$Email','$password')";

     mysqli_query($con,$query);

     echo "<script type='text/javascript'> alert('Successfully registerd')</script> ";
 }
 else{
     echo "<script type='text/javascript'> alert('Please Enter some valid information')</script> ";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP PAGE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <Link rel="stylesheet" href="signup.css"> 
</head>
<body>
    <img src="pictures/Ellipse 2.png" id="circle2">
    <img src="pictures/Vector 4.png" class="P1">
    <img src="pictures/Vector 2.png" class="P2">
    <div class="nav">
        <ul>
          <li><a href="policy.php" class="privacy">PRIVACY POLICY</a></li>
          <li><a href="help.php" class="help">HELP</a></li>
          <li><a href="about.php" class="about">ABOUT US</a></li>
          <li><a href="signup.php" class="signup">SIGN UP</a></li>
          <li><a href="login.php" class="login">LOGIN</a></li>
        </ul>
    </div>
    <div class="logo">
        <img src="pictures/logo.png" class="logo">
    </div>
    <p id="log">SIGN UP</p>
     <div class="container">
        <form class=""  method="post" >
            <div class="name">
            <label id="first" for="fname">FIRST NAME</label>
            <label id="last" for="lname">LAST NAME</label><br>
            <input type="text" id="fname" name="fname" required >
            <input type="text" id="lname" name="lname" required ><br>
            <label id="email" for="emailadd">EMAIL ADDRESS</label><br>
            <input type="text" id="emailadd" name="emailadd" required ><br>
            <label id="pass" for="password">PASSWORD</label><br>
            <input type="password" id="password" name="password" required ><br>
            <button id="signbtn" type="submit" name="submit">SIGN UP</button>
            <div id="fb"> 
                <img src="pictures/Facebook.png" id="facebook">
                <a id="fb1">SIGN UP WITH FACEBOOK</a>
            </div>
           <div id="google">
            <img src="pictures/google.png" id="googlepic">
                <a id="google1">SIGN UP WITH GOOGLE</a>
           </div>
           </div>
        </form>
    <p id="msg">ALREADY HAVE AN ACCOUNT ?   <a href="login.html"> LOG IN</a> </p>
    <img src="pictures/or.png" id="or">

    </div>
    <div id="smallcircle"></div>
    <div id="circle1"></div>
</body>
</html>