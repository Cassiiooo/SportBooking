<?php
include "db.php";

$sql="SELECT * FROM campi";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
echo json_encode($row);
echo "<br>";
}
?>