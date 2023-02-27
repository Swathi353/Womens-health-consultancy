<?php
 
if($_SERVER['REQUEST_METHOD']=="POST")
{

include "config.php";
// Create connection
$frnm=$_POST['frnm'];
$lsnm=$_POST['lsnm'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$age=$_POST['age'];
$passwd=$_POST['passw'];

$sql = "INSERT INTO `login` (`fname`, `lname`, `email`, `phno`, `age`, `password`, `srno`) VALUES ('$frnm', '$lsnm', '$email', '$phno', '$age', '$passwd', NULL)";
$result = $conn->query($sql);

$conn->close();
}
?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Doctors sign-up</title>    
    <link rel="stylesheet" type="text/css" href="cssstyle.css">    
</head>    
<title>Signup page
</title>
<body><br><br><br></br>    
    <h1>DOCTORS SIGN-UP</h1>   
    <div class="login">    
    <form action="signup.php" id="login" method="POST">    
        <label><b>First name:    
        </b>    
        </label>    
        <input type="text" name="frnm" id="fsnm" placeholder="Enter first name" required>    
        <br><br>    
        <label><b>Last name:    
        </b>    
        </label>    
        <input type="text" name="lsnm" id="lsnm" placeholder="Enter second name" required>    
        <br><br>    
        <label><b>E-mail:    
        </b>    
        </label>    
        <input type="email" name="email" id="email" placeholder="Enter your email" required>    
        <br><br>    
        <label><b>Phone Number:
        </b>    
        </label>    
        <input type="tel" name="phno" id="phno" pattern="[0-9]{10}" placeholder="Enter your phone number" required>    
        <br><br>    
        <label><b>Age:
        </b>    
        </label>    
        <input type="text" name="age" id="age" placeholder="Enter your age" required>    
        <br><br>    
        <label><b>Password:
        </b>    
        </label>    
        <input type="Password" name="passw" id="passw" placeholder="Enter your password" required>    
        <br><br>
        <input type="submit" name="bt" id="bt" value="Submit"> 
        <input type="button" name="bt" id="rt" value="Reset"><br><br>
        <label>Already have an account?
        <a href="http://localhost/swati/signin.php"> sign-in</label>  </a>   
           
    </form>     
</div>    
</body>    
</html> 












  ?>