    <?php
    require 'connessione.php';
    $query2="SELECT * FROM prodotti";
    $result=$cn->query($query2);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- SEO Meta Tags -->
        <meta name="description" content="Free mobile app HTML landing page template to help you build a great online presence for your app which will convert visitors into users">
        <meta name="author" content="Inovatik">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta property="og:type" content="article" />

        <!-- Website Title -->
        <title>Pietrantonio SRL</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/fontawesome-all.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">




    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Pietrantonio SRL</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#preview">PREVIEW</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#details" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DETTAGLI</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMINI E CONDIZIONI</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTATTI</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <div class="slider-1">
        <div class="container">
            <div class="row">

       <?php
         //crea array multivalore di prodotti
          $prodotti=array();
          while($riga = $result->fetch_array(MYSQLI_NUM)){//o mysql_fetch_assoc
             $ID=$riga[0];
             $nome=$riga[1];
             $prezzo=$riga[2];
             $descrizione=$riga[3];
             $immagine=$riga[4];
             $prodotti[$ID] = array('nome'=>$nome,'prezzo'=>$prezzo,'descrizione'=>$descrizione,'immagine'=>$immagine);
          }


         $array=array(1, 4, 9);


         //visualizza i prodotti


         for ($i = 1; $i <= count($prodotti); $i++) {

             echo '<div class="slider-1">';
             echo '<div class="container">';

             echo '<div class="col-lg-12">';
             //echo '<img src="image/prodotti/whatsapp.png" alt="Cannon">';
             echo '<div class="card">';
             echo '<img class="card-image" src="images/prodotti/'. $prodotti[$i]["immagine"] .'" alt="alternative">';
             echo '<p class="testimonial-text">Nome:' . $prodotti[$i]["nome"] . '</p>';
             echo '<p class="testimonial-author">Prezzo:' . $prodotti[$i]["prezzo"] . '</p>';
              if(!isset($_SESSION['email'])){
                  echo '<p><a href="login.php" role="button" class="btn-solid-reg popup-with-move-anim">Compra</a></p>';

                }
                else{
                if(check_if_added_to_cart($prodotti.[$i].[$nome])){
                    echo '<a href="#" class=btn btn-solid-reg popup-with-move-anim>Aggiungi al carrello</a>';
                }else{

                    echo '<a href="cart_add.php?id='.$prodotti.[$i].[$nome].'" class="btn-solid-reg popup-with-move-anim" name="add" value="add" class="btn btn-block btr-primary">Aggiungi al carrello</a>';

                }
                }

             echo '</div>';
             echo '</div>';

             echo '</div>';
             echo '</div>';
         }
         ?>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->

     </div>

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/cannon_eos.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price: Rs. 36000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </center>
                </div>
            </div>
        </div>

    </body>


