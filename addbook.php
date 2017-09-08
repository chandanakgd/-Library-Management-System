<?php
$db = mysqli_connect('localhost','root','','project2')
 or die('Error connecting to MySQL server.');

$bookID=$_POST['BookID'];
$PubliserID=$_POST['PublisherID'];
$Title=$_POST['Title'];
$Auther=$_POST['Auther'];
$Category=$_POST['Category'];
$Avalibility=$_POST['Avalibility'];
$LOpt=$_POST['LOpt'];

$query = "INSERT INTO reference_material
		(`BookID`, `PublisherID`, `Title`, `Author`, `LendingOption`, `Catogery`, `Avalibility`) 
			VALUES 
		('$bookID','$PubliserID', '$Title', '$Auther', '$LOpt', '$Category', '$Avalibility')";

$result = mysqli_query($db, $query) or die('Error querying database.');

mysqli_close($db);
echo "<script type='text/javascript'>
		alert('Succesfuly add person');
		
 		</script>";
 		require_once 'index2.html';
?>


