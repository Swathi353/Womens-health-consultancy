<!DOCTYPE html>
<html>
<head>
	<title>General database</title>
</head>
<style>
    <link rel="stylesheet" type="text/css" href="cssstyle1.css">
    </style>
<body>
	<h1>BOOKED GENERAL APPOINTMENTS</h1>
<table border="2">
<tr>       
	        <th>Patient name</th>
            <th>Patient age</th>
            <th>Patient suffering from</th>         
            <th>Patient Phone number</th>
            <th>Patient Email</th>
            <th>apppointed Doctor name</th>
            <th>appointment Date</th>
            <th>appointment Time</th>     
</tr>


<?php
include("Config.php");
error_reporting(0);
$query="SELECT * FROM generalapp";
$query="SELECT * FROM ancapp";
$data= mysqli_query($conn,$query);
$total= mysqli_num_rows($data);
//echo $result['pname']." ".$result['age']." ".$result['suffer']." ".$result['phno']." ".$result['email']." ".$result['docnm']." ".$result['date']." ".$result['time'];
//echo $total;
if($total!=0)
{
    $result =mysqli_fetch_assoc($data);
    while(($result=mysqli_fetch_assoc($data))) {
    	echo "
    	<tr>
    	<td>".$result['pname']."</td>
    	<td>".$result['age']."</td>
    	<td>".$result['suffer']."</td>
    	<td>".$result['phno']."</td>
    	<td>".$result['email']."</td>
    	<td>".$result['docnm']."</td>
    	<td>".$result['date']."</td>
    	<td>".$result['time']."</td>
    	";
    }
	//echo "table has records";
}
else
{
	echo " no records found ";
}
?>
</table>
</body>
</html>