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
	 $intcon = mysqli_connect("localhost","tomeldar","1234abcd","RVSQL");
		if (!$intcon){	die('Could not connect: ' . sql_error());}



	$username=$_POST['user'];
	$password=$_POST['pass'];
	echo $username;
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
	$Result=mysqli_query($intcon, $sql);
	$row=mysqli_fetch_array($Result);
	if ($row) {
		//We found the user
		echo "User Found<BR>";
		//echo $row[0] . "<br>" . $row[1];
		//echo "<BR>";
		if ($row[3] == $hash_pass){
			echo "Password Match!!!";
		} else {
			echo "Invalid Password:(";
		}
 	} 
	//Close the DB
	mysqli_close($intcon)
?>
	</body>
</html>