<?php
$hostname = "127.0.0.1:3306";
$username = "root";
$psw = "";
$db = "techome";
$conn = new mysqli($hostname, $username, $psw, $db);
if ($conn -> connect_errno) {
    echo "Errore durante la connessione al database: " . $conn -> connect_error;
    exit();
}
?>
