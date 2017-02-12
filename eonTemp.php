<?php

	//connect to db
	$link = mysqli_connect("server", "user", "password", "database");

	if (!$link) {
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    	exit;
	}

	//preapre data values
	$temp = filter_input(INPUT_GET,"temp",FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	//upload to db
	if( $temp!=NULL )
	{
		$sql = "INSERT INTO eonTemp (temp) VALUES (".$temp.");";

		if (mysqli_query($link, $sql) === TRUE) {
    		printf("Query correct.". PHP_EOL);
		}
	}
	
//test host/url/eonTemp.php?temp=23.0

	//close db
	mysqli_close($link);
?>