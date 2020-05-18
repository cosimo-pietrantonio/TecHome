<?php

include("dbconn.php");

//Estrazione delle informazioni inserite nei campi del form
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$psw = $_POST['password'];

//Controlli sui campi
if(empty($nome)||empty($cognome)||empty($email)||empty($psw))
{
    header("Location:/registrazione/registrazione.php?esito=campi vuoti");
    exit();
}
else
{
    /*  Utilizzo la funzione preg_match per definire una regex che la password deve rispettare.
        La regex è: ^[a-z0-9A-Z_*#]{5,15}$/ e si interpreta cosi:
            Innanzitutto in PHP un qualsiasi pattern deve iniziare e terminare con il carattere /.

            Il simbolo ^ indica che la stringa deve iniziare con il pattern indicato.
            Senza questo simbolo la stringa può fare match, cioè viene identificata dal pattern,
            se il pattern si trova in qualsiasi punto della stringa.

            [a-z0-9A-Z_*#] indica che i caratteri ammessi sono tutte le lettere minuscole e maiuscole dalla a alla z,
            i numeri da 0 a 9 e i simboli _ * e #.

            {5,15} indica che deve essere di lunghezza compresa tra 5 e 15.

            Il simbolo $ indica che la stringa deve terminare con il pattern appena visto.
            Non sono quindi ammessi caratteri aggiuntivi al pattern.
    */
    if(!preg_match('/^[a-z0-9A-Z_*#]{5,15}$/',$psw))
    {
        header("Location:/registrazione/registrazione.php?esito=password errata");
    }
    else
    {
        $query1 = $connection->query("SELECT email FROM clienti WHERE email ='$email';"); //esecuzione della query
        if ($query1->num_rows) //conta le righe ottenute dalla query se sono >0 entra nell' if altrimenti entra nell'else
        {

            /*
                Reindirizzamento: tramite la funzione header è possibile impostare una nuova location verso la quale
                reindirizzare la navigazione dell'utente. Se la pagine è esterna si mette l'url mentre se è interna, cioe
                contenuta nella stessa cartella del file php in cui si applica l'header allora la sintassi è la seguente:

                    redirect verso pagina interna:
                    header("location: /nuova-pagina.php")

                Oltre a specificare che se si verifica la condizione dell'if dobbiamo essere reindirizzati alla pagina interna
                registrazione.php
            */

            header("Location:/registrazione/registrazione.php?esito=email gia in uso");
            @mysqli_close($connection);
            exit();
        }
        else
        {
            //Query per popolare il database;
            $connection->query("INSERT INTO clienti SET 
                             nome='$nome', cognome='$cognome', email='$email', password='$psw';");

            header("Location:/registrazione/registrazione.php?esito=registrato"); //reindirizzare alla pagina di login di gianluca
            exit();
            $connection->close();
        }
    }
}

?>
