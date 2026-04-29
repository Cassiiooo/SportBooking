<?php
include "db.php";

$email=$_POST["email"];
$password=$_POST["password"];

$sql="SELECT * FROM utenti WHERE email='$email'";
$result=$conn->query($sql);

if($result->num_rows>0){
$row=$result->fetch_assoc();

if(password_verify($password,$row["password"]))
echo "Login riuscito";
else
echo "Password errata";
}else{
echo "Utente non trovato";
}
?>