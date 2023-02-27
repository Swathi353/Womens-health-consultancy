<?php
 
if($_SERVER['REQUEST_METHOD']=="POST")
{

include "config.php";
// Create connection
$pnm=$_POST['pname'];
$age=$_POST['age'];
$symp=$_POST['symp'];
$phno=$_POST['number'];
$email=$_POST['email'];
$docls=$_POST['docls'];
$date=$_POST['Date'];
$time=$_POST['time'];



$sql = "INSERT INTO `ancapp` (`pname`, `age`, `suffer`, `phno`, `email`,`docnm`,`date`,`time`) VALUES ('$pnm', '$age', '$symp', '$phno', '$email','$docls','$date','$time')";
$result = $conn->query($sql);

$conn->close();
}
?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>preventive appointment</title>    
    <link rel="stylesheet" type="text/css" href="cssstyle.css">    
</head>    
<title> Book appointment
</title>
<body>    <br><br><br><br>
    <h1>PREVENTIVE CARE DOCTORS APPOINTMENT</h1><br><h9><a href="file:///C:/xampp/htdocs/swati/anc.html"> back</h9></a> 
    <div class="login">
    <form action="anc_appointment.php" id="login" method="POST">  
        <label><b>Patient Name:    
        </b>    
        </label>    
        <input type="text" name="pname" id="pname" placeholder="Enter patient full name" required>    
        <br><br>        
        <label><b>Patient Age:    
        </b>    
        </label>    
        <input type="number" name="age" min=0 value=100 id="number" placeholder="Enter patient Age" required>    
        <br><br>        
        <label><b>Patient suffering from:    
        </b>    
        </label>    
        <input type="text" name="symp" id="symp" placeholder="Enter patient symptoms" required>    
        <br><br>    
        <label><b>Phone number:
        </b>    
        </label>    
        <input type="tel" name="number" id="number" pattern="[0-9]{10}" placeholder="Enter Phone number" required>
        <br><br>
        <label><b>Email:    
        </b>    
        </label>    
        <input type="email" name="email" id="Email" placeholder="Enter patient Email" required>    
        <br><br>  
        <label><b>Doctor Name:    
        </b>   
        <input list="gen-Doctors" name="docls"> 
        <datalist id="gen-Doctors">
            <option value="Dr.Vijaya Jaiswal">
            <option value="Dr.Sudarshan Ghosh">
            <option value="Dr.Vasundhara Kamineni">
            <option value="Dr.Rekha Gupta">
            <option value="Dr.Asha Gupta">
            <option value="Dr.Ruchita Malhotra">
            <option value="Dr.Anjali Chaudhary">
            <option value="Dr.Rajesh Balkrishna">
            <option value="Dr.Ritu Jain">
            <option value="Dr.Sunita Chandra">
            <option value="Dr.Ram Chavan">
            <option value="Dr.Renu Sharma">
        </datalist>
        <label>
            <br><br><b>Date of Appointment:    
        </b>    
        </label>    
        <input type="text" name="Date" id="date" placeholder="DD/MM/YY" required>   <br>
        <label>
            <br><b>Time of Appointment:    
        </b>    
        </label>    
        <input type="text" name="time" id="date" placeholder="HH:MM" required>  <br><br>
        <input type="submit" name="submit" id="bt" value="submit">         
        <input type="button" name="reset" id="reset" value="Reset"> <br><br> 
    </form>     
</div>    
</body>    
</html> 