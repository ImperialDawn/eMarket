<?php
session_start();
if(!isset($_SESSION["utilisateur"])){
    header("location:index.html");

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing - Free Bulma template</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.x-->
    <link rel="stylesheet" href="bulma/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/landing.css">
</head>

<body>
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            <img src="http://bulma.io/images/bulma-type-white.png" alt="Logo">
                            Bienvenue: <?php 
                           
                            echo $_SESSION["utilisateur"];
                            echo "</br>";
                            echo"role: ";
                            echo $_SESSION["role"];
                            ?>
                      </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="./produit/create.php">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                  </span>
                                    
                                    <span>Gerer product</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="./category/create.php">
                                    <span class="icon">
                                        <i class="fa fa-superpowers"></i>
                                    </span>
                                    <span>Gerer category</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="./customerCar/create.html">
                                    <span class="icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <span>Gerer Client</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/landing.html">
                                    <span class="icon">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>Deconnexion

                                    
                                    </span>
                                </a>
                            </span>
                           
                        </div>
                    </div>
                </div>
            </nav>

            </div>
            

            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-6 is-offset-3">
                        <h1 class="title">
                            Coming Soon
                        </h1>
                        
                        <div class="box">
                            <div class="field is-grouped">
                                <p class="control is-expanded">
                                    <input class="input" type="text" placeholder="Rent">
                                </p>
                                <p class="control">
                                    <a class="button is-info">
                                        Notify Me
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>
