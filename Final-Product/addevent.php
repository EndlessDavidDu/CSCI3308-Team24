<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<body>
<?php 
	//Define custom handler so if there is an error we get more information
	function customError ($errno, $errstr, $error_file, $error_line, $error_context)
	{
		echo "<br><b>Error:</b> [$errno] $errstr<br />";
		echo "Error: $error_file $error_line <br>";
		echo "Error: $error_context <br>";
		echo "Ending Script";
		die();
	}
	set_error_handler ("customError");
	//Connect to the Database
	 $conn = mysqli_connect("localhost","tomeldar","1234abcd","RVSQL");
		if (!$conn){	die('Could not connect: ' . sql_error());}
	$title=$_POST['title'];
	$descr=$_POST['descr'];
	$startTime=$_POST['startTime'];
	$startDate=$_POST['startDate'];
	$endTime=$_POST['endTime'];
	$endDate=$_POST['endDate'];
	$venue = $_POST['venue'];
	$city = $_POST['city'];
	$stateCode = $_POST['stateCode'];
	
	//$startDateTime = $startDate + $startTime;
	//$endDateTime = $endDate + $endTime;
	//echo $username;
	echo "<BR>";
	//Check if the even already exists in the DB
	$sql = "SELECT * FROM Event WHERE description='".$title."'";
	//echo $sql;
	//echo "<BR>";
	$result=mysqli_query($conn, $sql);

	if (!$result)
	{
		printf("ERROR: %s\n", mysqli_error($conn));
		exit();
	}
	$row=mysqli_fetch_array($result);
	if ($row) {
		//We found the user
		echo "Event already exists<BR>";
		//echo $row[0] . "<br>" . $row[1];
		//echo "<BR>";
	}
	else {
 		//We did not find an event so we will create it. 
 		//
		echo "Creating new Event<BR>";
		$sql = "INSERT INTO Event(eventType, title, description, isClosed, startDate, startTime, endDate, endTime, venue, city, stateCode) VALUES 
			('2' , '".$title."' , '".$descr."' , '0', '".$startDate."' , '".$startTime."', '".$endDate."' , '".$endTime."' , '".$venue."', '".$city."', '".$stateCode."');";  
				echo $sql;
		$Result=mysqli_query($conn, $sql);
 	}
	
	//Close the DB
	mysqli_close($conn)
?>
	</body>
</html>
