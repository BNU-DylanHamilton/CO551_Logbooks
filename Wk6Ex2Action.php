<?php	

	// Connect to server and select database
	$link = mysqli_connect("127.0.0.1", "root", "", "test");
	$sql = "SELECT * from test where name = '$_GET[id]' ";
	// Execute query
	$result = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($result);

	//$cookieName = 'id';
        //setcookie($cookieName, $_GET['id']);
	
?>
<html>
<body>
<form action='Wk6Ex2Save.php' method=”post”>

	Name :
	<input type=text name=txtname value= <?php echo $row['name'] ?> />
	</br>
	Phone number :
	<input type=text name=txttelno value= <?php echo $row['phone_number'] ?> />
	</br>
	Email :
	<input type=text name=txtemail value= <?php echo $row['email'] ?> />
	</br>
	<input type="hidden" name=id value= <?php echo $row['ID'] ?> />
	<input type=submit name=btnsubmit value="save"/>
	<input type=submit name=btndelete value="Delete"/>
</form>
</body>
