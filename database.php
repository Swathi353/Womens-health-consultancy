<?php
      include "config.php";

        $stmt = $conn->prepare("select * from generalapp");
        $stmt->execute();
        $resultSet = $stmt->get_result();
        $criminal_details = $resultSet->fetch_all(MYSQLI_ASSOC);
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		   <style>
    body  
{  
    margin: 0;  
    padding: 0,;  
    background-image:url("");
    background-repeat: no-repeat;
     
    background-size: 100% 200%;
    font-family: 'Arial';  
} 
h1{text-align: center;
color: whitesmoke;}
	.viewcriminal{  
        width: 350px;

        overflow: hidden;  
         
        margin: 50px 200px 150px 500px;  
        padding: 80px;  
        background: rgb(231, 12, 74);  
        border-radius: 150px ;  
          
} 

img {
  position: absolute;
  top: 20px;
  right: 50px;
  width: 200px;
  height: 200px;
}
#boxes {
  content: "";
  display: table;
  clear: both;
  margin-right: 30px;
}

div {
  height: 200px;
  width: 50%;
  padding: 0 10px;
}
#view {
  background-color: #a0e9ed;
  width: 43%;
  margin: 150px 50px 150px 500px;  

</style>
</head>
<body>

<div id="view" >
  <table class="table">
        <thead>
          <tr>
            
            <th>Patient name</th>
            <th>Patient age</th>
            <th>Patient suffering from</th>         
            <th>Patient Phone number</th>
            <th>Patient Email</th>
            <th>Doctor name</th>
            <th>app Date</th>
            <th>app Time</th>

            
          </tr>
        </thead>
        <tbody>
                    <tr>
                        
                        <td><?php echo $value['pname'];?></td>
                        <td><?php echo $value['age'];?></td>
                        <td><?php echo $value['suffer'];?></td>
                        <td><?php echo $value['phno'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['docnm'];?></td>
                        <td><?php echo $value['date'];?></td>
                        <td><?php echo $value['time'];?></td>
                    </tr>
                         
             
         </tbody>
      </table>
      
</div>

</body>
</html>