<!DOCTYPE HTML>
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


	$email=$_POST['email'];
	$username=$_POST['user'];
	$password=$_POST['pass'];
	//echo $username;
	echo "<BR>";
	//echo $password;
	//echo "<BR>";
	//Print_R (hash_algos());
	$hash_pass = hash('ripemd160',$password);
	//echo $hash_pass;
	//echo "<BR>";
	//Check if the user already exists in the DB
	$sql = "SELECT * FROM Customer WHERE custName='".$username."'";
	//echo $sql;
	//echo "<BR>";
	$result=mysqli_query($conn, $sql);
	if (!$result) {
   		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	$row=mysqli_fetch_array($result);
	if ($row) {
		//We found the user
		echo "Username taken<BR>";
		//echo $row[0] . "<br>" . $row[1];
		//echo "<BR>";
	} else {
 		//We did not find the user so we will create it
		//echo "Creating user<BR>";
		$sql = "INSERT INTO Customer (custName, userEmail, userPassword) VALUES ('".$username."','".$email."','".$hash_pass."');";
		//echo $sql;
		$result=mysqli_query($conn, $sql);
		header('Refresh:2; url=index.html');
		echo "User created";
		exit;
 	}
	
	//Close the DB
	mysqli_close($conn)
?>
	</body>
</html>
