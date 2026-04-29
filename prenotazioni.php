<?php
include "db.php";

$id=$_GET["id"];

$sql="SELECT * FROM prenotazioni WHERE idUtente='$id'";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
echo json_encode($row);
echo "<br>";
}
?>