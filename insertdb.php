<html>
<body>
<?php
    $user='';
    $age='';
    $address='';
    $gender='';
    $image='';
    $email='';
    
    
if(isset($_POST["name"])&&$_POST["age"]&&$_POST["address"]&&$_POST["image"]&&$_POST["email"]){    
$user=$_POST["name"];    
$age=$_POST["age"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$image=$_POST["image"];
$email=$_POST["email"];  
  }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assign";

// Create connection
$conn= mysqli_connect("localhost","root","") or die(mysqli_error()); 
mysqli_select_db($conn,"assign"); 


$sql = "INSERT INTO user(name,age,email,gender,address,image) VALUES  ('$user', $age, '$email','$gender','$address','$image')";
$result=mysqli_query($conn,$sql); 
    echo "<h3 align='center'>Data added</h3><br/>"; 
$sql1= "select * from user"; 
$records=mysqli_query($conn,$sql1); 
    
echo "<table border='1' align='center'>	
<tr><th>Name</th> <th>Age</th><th>Email</th><th>Gender</th><th>Addresss</th><th>Image</th></tr> " ;
while($row=mysqli_fetch_array($records))
{
echo "<tr>" ;
echo "<td>".$row['name'] ."</td>" ; 
echo "<td>". $row['age'] ."</td>" ; 
echo "<td>".$row['email']."</td>" ; 
echo "<td>". $row['gender']." </td>" ;
echo "<td>". $row['address']." </td>" ; 
echo "<td><img src=".$row['image']."> </td>" ;    
    
echo "</tr>" ;
}
echo "</table></br>"; 
    
echo "<h3 align='center'>You will be directed to home page in 10 Seconds.</h3>";
header ("refresh:10; assignment.html");    
mysqli_close($conn);  
    
?>
    </body>
</html>