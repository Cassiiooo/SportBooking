<?php
$conn = new mysqli("localhost","root","","sportbooking");

if($conn->connect_error){
die("Errore connessione");
}
?>