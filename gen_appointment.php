<?php
 
if($_SERVER['REQUEST_METHOD']=="POST") {

include "config.php";
// Create connection
$pname=$_POST['pname'];
$age=$_POST['age'];
$symp=$_POST['symp'];
$phno=$_POST['number'];
$email=$_POST['email'];
$docls=$_POST['docls'];
$date=$_POST['Date'];
$time=$_POST['time'];

// $pname=$_GET['pname'];
// $age=$_GET['age'];
// $symp=$_GET['symp'];
// $phno=$_GET['number'];
// $email = $_GET["email"];
// $docls=$_GET['docls'];
// $date=$_GET['Date'];
// $time=$_GET['time'];


$sql = "INSERT INTO `generalapp` (`pname`, `age`, `suffer`, `phno`, `email`,`docnm`,`date`,`time`) VALUES ('$pname', '$age', '$symp', '$phno', '$email','$docls','$date','$time')";
$result = $conn->query($sql);

$conn->close();

error_reporting(0); 

// Phone NO. Validation 
function validate_number($phone_number){
if(preg_match('/^[0-9]{10}+$/', $phone_number)) {
    // the format /^[0-9]{10}+$/ will check for phone number with 10 digits and only numbers
    echo "Phone Number is Valid <br>";
}   else{
    echo "Enter Phone Number with correct format <br>";
    }
}

// Email Validation
if(validate_email($email) == FALSE){
    echo("Invalid Email");
}

function validate_email($email){
    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // Validate Email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // echo("$email is a valid email address");
        return TRUE;
    } else {
        // echo("$email is not a valid email address");
        return FALSE;
    }
}

}

?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>admin login</title>    
    <link rel="stylesheet" type="text/css" href="cssstyle.css">    
</head>    
<title> Book appointment
</title>
<body>
    <br><br><br><br>

    <h1>GENERAL DOCTORS APPOINTMENT</h1><h9><a href="file:///C:/Users/swathisingu/Desktop/swati/general.php"> back</h9></a>   
    <div class="login">
    <form action ="gen_appointment.php" method="POST">     
        <label>
            <b>Patient Name:</b>    
        </label>    
        <input type="text" name="pname" id="pname" placeholder="Enter patient full name" required>    
        <br><br>        
        <label>
            <b>Patient Age:</b>    
        </label>    
        <input type="number" min=0 value=100 name="age" id="number" placeholder="Enter patient Age" required> 
        <br><br>        
        <label>
            <b>Patient suffering from:</b>    
        </label>    
        <input type="text" name="symp" id="symp" placeholder="Enter patient symptoms" required>  
        <br><br>    
        <label>
            <b>Phone number:</b>    
        </label>    
        <input type="tel" name="number" id="number" pattern="[0-9]{10}" placeholder="Enter Phone number" required>
        <br><br>
        <label>
            <b>Email:</b>    
        </label>    
        <!-- <input type="text" name="Email" id="Email" placeholder="Enter patient Email" required>  -->
        <input type="email" name="email" placeholder="Enter Email" required>
        <br><br>  
        <label>
            <b>Doctor Name:</b>   
        <input list="gen-Doctors" name="docls" placeholder="Your Doctor"> 
        <datalist id="gen-Doctors" >
            <option value="Dr.Shekar Raman">
            <option value="Dr.pallavi Joshi">
            <option value="Dr.Pawan sharma">
            <option value="Dr.Deepa Kumari">
            <option value="Dr.Kareena shaikh">
            <option value="Dr.shifa syed">
            <option value="Dr.Manoj Bora">
            <option value="Dr.Sara Dsouza">
            <option value="Dr.Kavita Shukla">
            <option value="Dr.Satish Tathe">
        </datalist>
        <label>
            <br><br>
            <b>Date of appointment:</b>    
        </label>    
        <input type="text" name="Date" id="date" placeholder="DD/MM/YY" required><br>
        <label>
            <br><b>Time of appointment:</b>    
        </label>    
        <input type="text" name="time" id="date" placeholder="HH:MM" required>
        <br><br>
        <input type="submit" name="submit" value="submit">   
        <input type="button" name="reset" id="reset" value="Reset"> <br><br> 
    </form>     
</div>    
</body>    
</html> 