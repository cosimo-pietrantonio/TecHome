<!DOCTYPE html>
<html lang="it">

<head>




    <style type="text/css">

        html
        {
          scroll-behavior: smooth;
          scroll-padding-top: 150px;
        }

    </style>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registrazione</title>

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet">
</head>

<body>

    <!--L'elemento HTML Content Division (<div>) è un contenitore generico per contenuti di flusso. 
        Non ha alcun effetto sui contenuti fin quando non viene stilizzato attraverso CSS. 
        In quanto contenitore "puro", l'elemento <div> di suo non rappresenta nulla. 
        E' utilizzato piuttosto per raggruppare contenuti in modo da essere facilmente stilizzato attraverso gli attributi class o id,
        o per contrassegnare una sezione di un documento scritta in una lingua diversa (utilizzando l'attributo lang), e così via. -->
<div class="bg-gra-01">
    <div class="p-t-180 p-b-150 font-poppins"> 
    <!--la classe bg-gra-01 assegna il colore di sfondo,
        la classe p-t-180 mi definisce la distanza dal margine superiore (top)
        la classe p-b-100 definisce invece la distanza del nostro contenitore dal margine inferiore (bottom)
        Infine la calsse font-poppins definisce il font da usare per tutti gli elementi.
    Ricordiamo che vale il concetto di vicinanza cioè se due classi agiscono sullo stesso attributo, predomna quella più vicina.-->

        <div class="wrapper wrapper--w780">

            <div class="card-3">
                <!-- con il tag div stiamo creando un contenitore che al suo interno contiene tutto cio chè racchiuso tra <div>...</div>
                Notiamo che al suo interno contiene altri due contenitori: il primo è vuoto è assume le proprietà specificate da 
                card-hrading, mentre il secondo assume le proprietà specificate da card-body e non è vuoto ma contiene al suo interno altri 
                elementi tra cui anche altri contenitori--> 

                <div class="card-heading card-support">
                    <div class="wrapperM font-poppins">
                        <label>Benvenuto in Techome, siamo lieti di averti tra noi. Registrandoti, avrai la possibilità di ordinare tutto quello che vuoi, quando vuoi.
                               Ti basterà un click e al resto pensiamo noi. Se fai parte dello staff di Techome e ti occupi della gestione dei prodotti,
                               allora <a href="#reg-soci">clicca qui</a> per passare alla registrazione per soci.</label>
                    </div>    
                </div> 
                
                <div class="card-body"> <!--contiene il form-->
                    
                    <h2 class="title">Registrazione Clienti</h2>
                    <form action="controlli_registrazione.php" method="POST" autocomplete="off" >

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="nome">
                            <!--Notiamo che è stato usato il parametro placeholder piuttosto che value, questo perche usando placeholder diamo un valore 
                                iniziale di esempio al campo, che verrà rimosso non appena inseriamo il valore richiesto mentre usando value non c'è questa
                                rimozione automatica del valore di esempio-->
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Cognome" name="cognome">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                        </div>

                        <div class="p-t-10">
                            <button id="sc" class="btn btn--smussato btn--color" type="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Inizia qui il form della registrazione per il socio-->

    <div class="p-t-300 p-b-150 font-poppins">
        <div class="wrapper wrapper--w780">

            <div class="card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    
                    <h2 id="reg-soci" class="title">Registrazione Soci</h2>
                    <form action="controlli_registrazione.php" method="POST" autocomplete="off">

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Cognome" name="cognome">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="P.IVA" name="iva"> 
                        </div>

                        <div class="p-t-10">
                            <button id="so" class="btn btn--smussato btn--color" type="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




</body>

<!--Con questo pezzo d codice PHP, prelevo dalla variabile superglobale $_GET il parametro 'errore' che la funzione header
    nel file dbconn.php invia in caso di errore per email già esistente. Successivamente inserisco una linea di codece javascript per
    segnalare l'alert -->

<?php
    if($_GET['esito']=="email gia in uso")
    {
        echo  '<script>alert("L\' email inserita è gia in uso. Riprova con un\'altra email")</script>';
    }
    elseif ($_GET['esito']=="registrato")
    {
        echo  '<script>alert("Registrazione effettuata con successo.")</script>';
    }
    elseif ($_GET['esito']=="campi vuoti")
    {
        echo '<script>alert("Tutti i campi sono necessari per la registrazione. Per favore, compila i campi vuoti")</script>';
    }
    elseif ($_GET['esito']=="password errata")
    {
        echo '<script>alert("ATTENZIONE, la password deve contenere minimo 5 caratteri tra cui numeri e lettere con al più i simboli * _ #.")</script>';
    }

?>
</html>
