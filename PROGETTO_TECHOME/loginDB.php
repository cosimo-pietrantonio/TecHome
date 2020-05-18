<?php

include("dbconn.php");


$email = $_POST['email'];
$pwd = $_POST['password'];
$tipo = $_POST['tipo'];

$nome = '';
$cogome = '';
$id = -1;
$isValid = False;



if($tipo=="cliente") {

    $queryEmail = "SELECT Id_Cliente, Nome_Cliente, Cognome_Cliente, Password_Cliente FROM clienti WHERE Email_Cliente = '$email'";
    $result = mysqli_query($conn,$queryEmail);

    if(mysqli_num_rows($result) > 0){
        $row = $result->fetch_assoc();
        $id = $row["Id_Cliente"];
        $nome = $row["Nome_Cliente"];
        $cognome = $row["Cognome_Cliente"];

        if ($row["Password_Cliente"] == $pwd) {
            $isValid = True;
            session_start();

            $_SESSION['nome'] = $nome;
            $_SESSION['cognome'] = $cognome;
            $_SESSION['accedi'] = true;

            echo "success";
        }


    }
    else echo "Email o password errata!";
}
else if($tipo=="socio")
{


    $queryEmail = "SELECT Id_Socio, Nome_Socio, Cognome_Socio, Password_Socio FROM soci WHERE Email_Socio = '$email'";
    $result = mysqli_query($conn,$queryEmail);

    if(mysqli_num_rows($result) > 0)
    {
        $row = $result->fetch_assoc();
        $id = $row["Id_Socio"];
        $nome = $row["Nome_Socio"];
        $cognome = $row["Cognome_Socio"];



        if ($row["Password_Socio"] == $pwd) {
            $isValid = True;
            //TODO inserisci avvio sessione

            session_start();

            $_SESSION['nome'] = $nome;
            $_SESSION['cognome'] = $cognome;
            $_SESSION['accedi'] = true;

            echo "success";
            //echo "<meta HTTP-EQUIV='REFRESH' content='0; url=index.php'>";
            //Header('Location:index.php');



        }


echo "Email o password errata!";
    }

}


$conn->close();
?>

