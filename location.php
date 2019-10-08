
<?php
session_start();
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'recycle';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
//echo 'Connected successfully<br/>';  
$location1=$_POST["location2"];
$address1=$_POST["address"];
$time1=$_POST["time"];
$sql = "SELECT * FROM buyerinfo where location='$location1'";  
$retval=mysqli_query($conn, $sql);  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval))
 { echo '<br>';
    	echo "BUYER NAME : {$row['username']}  ".  
            " CONTACT NUMBER: {$row['contactnumber']} ";
		$_SESSION['username1']=$row['username'];
		$_SESSION['location3']=$location1;
$_SESSION['address2']=$address1;
$_SESSION['time2']=$time1;
	echo "<form method='post' action='action.php' name='action'>
	<input type='submit' name='submit'>
</form>";
 }
}else{  
echo "No Buyers in your locality";  
}  
mysqli_close($conn);  
?>  

 