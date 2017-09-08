<?php
$db = mysqli_connect('localhost','root','','project2')
 or die('Error connecting to MySQL server.');

$UserID=$_POST['UserID'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$sex=$_POST['Sex'];
$Add=$_POST['Address'];
$Pno=$_POST['Cnumber'];

$query = "INSERT INTO library_user
		(`IDNUM`, `Fname`, `Lname`, `Sex`, `Address`, `Contact`) 
			VALUES 
		('$UserID', '$Fname', '$Lname', '$sex', '$Add', '$Pno')";

$result = mysqli_query($db, $query) or die('Error querying database.');

mysqli_close($db);

echo "<script type='text/javascript'>
		alert('Succesfuly add person');
		
 		</script>";
 		require_once 'index2.html';
?>


