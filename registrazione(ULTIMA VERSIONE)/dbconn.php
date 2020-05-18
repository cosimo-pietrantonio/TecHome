<?php

    //Connessione al database

    $hostname = "localhost";
    $username = "root";
    $psw = "";
    $db = "my_techhome";
    $connection = new mysqli($hostname, $username, $psw, $db);
    if (mysqli_connect_errno())
    {
        echo "Errore durante la connessione";
        die(mysqli_connect_errno());
    }
?>