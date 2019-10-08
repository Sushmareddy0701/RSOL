<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'recycle';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';
$email=$_POST["email"];
$contactnumber=$_POST["contactnumber"];  
$location=$_POST["location"];   
$username=$_POST["username"];   
$password=$_POST["password"];   
$sql = "INSERT INTO buyerinfo(username,password,email,contactnumber,location) VALUES ('$username', '$password','$email','$contactnumber','$location')";
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  