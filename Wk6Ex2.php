<?php	

	// Connect to server and select database
	$link = mysqli_connect("127.0.0.1", "root", "", "test");
	$sql = "SELECT * from test";
	// Execute sql statement
	$result = mysqli_query($link, $sql);

?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"Wk6Ex2Action.php?id=$row[name]\">$row[name]</a></br>";  	
}
mysqli_free_result($result);
?>
</body>
</html>
