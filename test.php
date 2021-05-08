
<?php include 'db.php';?>


<?php
 

$sql = "SELECT * FROM cake";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " ". "<br>";
  }
} else {
  echo "0 results";
}
 
?> 