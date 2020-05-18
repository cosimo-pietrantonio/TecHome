<!DOCTYPE html>

<html>
<head>

    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Lo store online del tuo negozio di FIDUCIA">
    <meta name="author" content="Techome">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!-- Website Title -->
    <title>TECHOME</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Login modal -->
    <link href="css/login-register.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="js/bootstrap-login.js" type="text/javascript"></script>
    <script src="js/login-register.js" type="text/javascript"></script>

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

</head>




<body data-spy="scroll" data-target=".fixed-top">

<?php
    session_start();
?>

<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader -->


<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <a class="navbar-brand logo-image" href="index.php"><img src="images/logo2.png" alt="alternative"></a>


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
                <a class="nav-link dropdown-toggle page-scroll" href="#details" id="navbarDropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">DETTAGLI</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="terms-conditions.html"><span
                            class="item-text">TERMINI E CONDIZIONI</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">CONTATTI</a>
            </li>

            <?php
            if (isset($_SESSION['accedi']))
            {
                $nome= $_SESSION['nome'];
                $cognome= $_SESSION['cognome'];
                //$tipo = $_SESSION['tipo'];
                echo "<li class=\"nav-item\">
                        <a class=\"nav-link page-scroll\" >Benvenuto, $nome $cognome  <span class=\"sr-only\">(current)</span></a>
                      </li>
                      <li class=\"nav-item\">
                        <a href='logout.php' class=\"nav-link page-scroll\" href=\"#features\">LOGOUT</a>
                      </li>";
            } else {
                echo "<li class=\"nav-item\">
                        <a class=\"nav-link page-scroll\" name='login' href='javascript:void(0)' onclick=\"openLoginModal();\">ACCEDI</a>
                      </li>
                      <li class=\"nav-item\">
                        <a href='registrazione.php' class=\"nav-link page-scroll\">REGISTRAZIONE</a>
                      </li>";
            }
            if (isset($_POST['logout']))
            {
                unset($_SESSION['login']);
                header('location:index.php');
            }
            ?>

            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.facebook.com/gianluka.renna">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://twitter.com/login?lang=it">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
        </span>

        </ul>

    </div>
</nav>

<!--login popup -->
<div class="modal fade login" id="loginModal">
    <?php include ("loginModal.php") ?>
</div>


<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                </div>

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col">
                    <h4>GRUPPO TECHOME</h4>
                    <p>Noi siamo appassionati sulla ricerca e sviluppo delle sempre pi� aggiornabili tecnlogie e dalla
                        nostra passione ne abbiamo fatto un lavoro che viene tramandato ormai di generazione in
                        generazione.</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>LAVORA CON NOI</h4>
                    <p>Sei un aspirante informatico o sei un esperto del settore? Ti sei appena laureato e cerchi
                        un'azienda dover poter fare esperienza? Cosa aspetti? Mandaci subito un email o contattaci al
                        numero 0802030405.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright &copy Techome</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
