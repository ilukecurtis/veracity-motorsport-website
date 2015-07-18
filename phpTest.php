<?php
 
// Create connection
$con=mysqli_connect("localhost","veraprvo","sjlc0212","veraprvo_test");
 
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
$sql = "SELECT * FROM drivers";

$resultArray = array();
$tempArray = array(); 
// Check if there are results
if ($result = mysqli_query($con, $sql))
{
	// If so, then create a results array and a temporary one
	// to hold the data
	
 
	// Loop through each row in the result set
	 while($row = $result->fetch_assoc())
	{
		// Add each row into our results array
		$tempArray = $row;
	    array_push($resultArray, $tempArray);
	}
 
	// Finally, encode the array to JSON and output the results
	echo json_encode($resultArray);
}
 
// Close connections
mysqli_close($con);
?>