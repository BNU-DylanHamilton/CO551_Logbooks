<?php

	$link = mysqli_connect("127.0.0.1", "root", "", "test");

	$sql = "INSERT INTO test (name,email,phone_number) VALUES ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";
	$result = mysqli_query($link, $sql);
	// Connect to server and select database

	// Execute sql statement		

	$sql = "SELECT * from test";

	$result = mysqli_query($link,$sql);
	
	// Execute sql statement
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
	mysqli_free_result($result);
	mysqli_close($link);
?>
