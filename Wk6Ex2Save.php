<?php

$link = mysqli_connect("127.0.0.1", "root", "", "test");
	$sql = "SELECT * from test WHERE id= '$_GET[id]'";
	$result = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($result);

	if(isset($_GET['btnsubmit']))
	{
		$name = $_GET['txtname'];
		$phone = $_GET['txttelno'];
		$email = $_GET['txtemail'];
		$id = $_GET['id'];
		$sql = "UPDATE test SET name='$name', email='$email', phone_number='$phone' WHERE id= '$id' ";
		$result = mysqli_query($link, $sql);
	}
	else if(isset($_GET['btndelete']))
	{
		$id = $_GET['id'];

		$sql = "DELETE FROM test WHERE id= '$id'";
		$result = mysqli_query($link, $sql);		
	}

?>
<html>
<body>
<form action='Wk6Ex2.php' method=”post”>

	The task has been completed.

	<input type=submit name=btnreturn value="Return"/>
</form>
</body>