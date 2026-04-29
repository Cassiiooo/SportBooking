<?php
include "db.php";

$idUtente=$_POST["idUtente"];
$idCampo=$_POST["idCampo"];
$data=$_POST["data"];
$ora=$_POST["ora"];

$sql="INSERT INTO prenotazioni(idUtente,idCampo,data,ora)
VALUES('$idUtente','$idCampo','$data','$ora')";

if($conn->query($sql))
echo "Prenotazione effettuata";
else
echo "Errore";
?>