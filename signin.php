<?php 
include "config.php";

if($_SERVER['REQUEST_METHOD']=="POST")
{
// Create connection
$frnm=$_POST['uname'];
$password=$_POST['password'];

$sql = "SELECT * FROM `login`";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
if(($row['email']==$frnm) and ($row['password']==$password))
{
    echo "successfuly login";
    header("Location: booked_app.html");
}
else
{
    echo "Invalid details!!";
}

$conn->close();
}

?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>Doctors sign-in</title>    
    <link rel="stylesheet" type="text/css" href="cssstyle.css">    
</head>    
<title>Signup page
</title>
<body>    <br><br><br><br>
    <h1>DOCTORS SIGN-IN</h1><br>    
    <div class="login">    
    <form action="signin.php" method="POST" id="login">    
        <label><b>Email:    
        </b>    
        </label>    
        <input type="email" name="uname" id="Uname" placeholder="Enter user name" required>    
        <br><br>    
        <label><b>Password:
        </b>    
        </label>    
        <input type="Password" name="password" id="pass" placeholder="Enter your password" required>    
        <br><br>
        <input type="submit" name="log" id="bt" value="Login">          
        <input type="button" name="res" id="rt" value="Reset"> <br><br>    
        <label>Don't have an account?<a href="http://localhost/swati/signup.php"> Sign-up</a></label>
    </form>     
</div>    
</body>    
</html> 