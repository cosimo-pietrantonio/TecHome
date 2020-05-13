<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'techome';
// connessione al DB utilizzando MySQLi
$cn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// verifica su eventuali errori di connessione
if ($cn->connect_errno) {
    echo "Connessione fallita: ". $cn->connect_error . ".";
    exit();
}