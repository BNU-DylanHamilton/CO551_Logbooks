<?php
  
  $conn = mysqli_connect("127.0.0.1", "root", "", "multimedia");

$sql = "select id from monster;";

$result = mysqli_query($conn, $sql);


echo "<table align='center' border='1'>";
echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

while($row = mysqli_fetch_assoc($result)){
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td><a href='Getwav.php?id=" . $row['id']. "'>Click to play</a></td>";
  echo "<td><img src='Getjpg.php?id=" . $row['id']. "' height='100' width='100'</td>";
  echo "</tr>";
}

echo "</table>";


mysqli_close($conn);
?>
