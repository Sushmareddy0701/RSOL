<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'recycle';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$username1=$_SESSION["username"]; 
$sql = "SELECT * FROM userinfo where username='$username1'";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval))
 { 
   echo "NAME: " . $row["username"]."<br>" ."EMAIL: " . $row["email"]. "<br>" ." PHONE NUMBER: " . $row["contactnumber"]. "<br> " ." LOCATION: ". $row["location"]. "<br>";
 }
 
}else{  
echo "0 Results";  
}  
mysqli_close($conn);  
?>