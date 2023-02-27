<?php
 
if($_SERVER['REQUEST_METHOD']=="POST")
{

include "config.php";
// Create connection
$pname=$_POST['pname'];
$age=$_POST['age'];
$symp=$_POST['symp'];
$phno=$_POST['number'];
$email=$_POST['Email'];
$docls=$_POST['docls'];
$date=$_POST['Date'];
$time=$_POST['time'];



$sql = "INSERT INTO `dermapp` (`pname`, `age`, `suffer`, `phno`, `email`,`docnm`,`date`,`time`) VALUES ('$pname', '$age', '$symp', '$phno', '$email','$docls','$date','$time')";
$result = $conn->query($sql);

$conn->close();
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
<body>    <br><br><br><br>
    <h1>DERMETOLOGIST DOCTORS APPOINTMENT</h1><h9><a href="file:///C:/Users/swathisingu/Desktop/swati/dermeto.html"> back</h9></a>   
    <div class="login">    
    <form action="derm_appointment.php" id="login" method="POST">    
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
        <input type="tel" name="number" pattern="[0-9]{10}" id="number" placeholder="Enter Phone number" required>    
        <br><br>
        <label><b>Email:    
        </b>    
        </label>    
        <input type="email" name="Email" id="Email" placeholder="Enter patient Email" required>    
        <br><br>  
        <label><b>Doctor Name:    
        </b>   
        <input list="derm-Doctors" name="docls"> 
        <datalist id="derm-Doctors">
            <option value="Dr.S.R.Shukla">
            <option value="Dr.Col Rajagopal">
            <option value="Dr.sameer shaikh">
            <option value="Dr.Vijay Tannu">
            <option value="Dr.Kamal Mehara">
            <option value="Dr.Naresh Bhargava">
            <option value="Dr.Anju Mangla">
            <option value="Dr.Anshul Warman">
            <option value="Dr.Arun Agarwal">
        </datalist>
        <label>
            <br><br><b>Date of appointment:    
        </b>    
        </label>    
        <input type="text" name="Date" id="date" placeholder="DD/MM/YY" required>   <br>
        <label>
            <br><b>Time of appointment:    
        </b>    
        </label>    
        <input type="text" name="time" id="date" placeholder="HH:MM" required>  <br><br>
        <input type="submit" name="gdate" id="bt" value="submit">         
        <input type="button" name="reset" id="reset" value="Reset"> <br><br> 
    </form>     
</div>    
</body>    
</html> 