<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylenavbar.css">
    <link rel="stylesheet" href="form.css">
    <title>Navbar</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <header>
        <!-- section pour navbar -->
        <section>
            <video autoplay loop muted plays-inline class="back-video">
                <source src="video\Bande-annonce-Call-of-Duty-Modern-Warfare-III.mp4" type="video/mp4">
            </video> <!-- permet de met une video avant la nav -->

            <div class="container">

                <header>
                    <div class="left">
                        <a href="blog.php"><img src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/global/cod-logo.svg" alt=""> <!-- Permet d'ajouter img ou logo au debut de ma page a gauche -->
                    </div>

                </header>

                <div class="right">
                    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">

                        <div class="bg-dark p-4">
                            <h5 class="text-body-emphasis h4">humbergeur</h5>
                            <span class="text-body-secondary">Toggleable via the navbar brand.</span>
                        </div>

                    </div>

                    <nav>
                        <div class="nav-link-left">
                            <a class="nav-link dropdown-toggle" href="article.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Jeux </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">MODERN WARFARE III</a></li>
                                <li><a class="dropdown-item" href="#">MODERN WARFARE II</a></li>
                                <li><a class="dropdown-item" href="#">COD: WARZONE</a></li>
                                <li><a class="dropdown-item" href="#">COD: WARZONE MOBILE</a></li>
                                <li><a class="dropdown-item" href="#">CALL OF DUTY: MOBILE</a></li>

                            </ul>

                        </div>

                        <a href="http://">Nouvelles</a>

                        <div class="nav-link">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> EASPORT </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Call of Duty League</a></li>
                                <li><a class="dropdown-item" href="#">Call of Duty Mobile World Championship</a></li>
                                <li><a class="dropdown-item" href="#">World Series of Warzone</a></li>

                            </ul>
                            </a>
                        </div>


                        


                    </nav>
                </div>


            </div>

            <div class=" content">
                <img class="imgcentre" src="image\Call-of-Duty_Next_img.png" alt="img">

            </div>

            <div class="container1">

                <a href="https://www.youtube.com/watch?v=9o2bxsRvvEE&rco=1" target="_blank" aria-label="Regarder la rediffusion" class="cta-link">
                    <img src="img\NextPlayButton.png" alt="minilogo">

                </a>
            </div>

            <div class=box>
                <a href="Multiplayer Trailer  Call of Duty Modern Warfare III.mp4"></a>
            </div>

        </section>

        <span class="glint"></span>
        <span class="glint"></span>



    </header>









    <footer>
        &copy; NOSILE John . Tous droits réservés.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>
</body>

</html>
<!-- section pour navbar -->
<section>
    <video autoplay loop muted plays-inline class="back-video">
        <source src="video\Bande-annonce-Call-of-Duty-Modern-Warfare-III.mp4" type="video/mp4">
    </video> <!-- permet de met une video avant la nav -->

    <div class="container">

        <header>
            <div class="left">
                <a href="blog.php"><img src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/global/cod-logo.svg" alt=""> <!-- Permet d'ajouter img ou logo au debut de ma page a gauche -->
            </div>

        </header>

        <div class="right">
            <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">

                <div class="bg-dark p-4">
                    <h5 class="text-body-emphasis h4">humbergeur</h5>
                    <span class="text-body-secondary">Toggleable via the navbar brand.</span>
                </div>

            </div>

            <nav>
                <div class="nav-link-left">
                    <a class="nav-link dropdown-toggle" href="article.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Jeux </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">MODERN WARFARE III</a></li>
                        <li><a class="dropdown-item" href="#">MODERN WARFARE II</a></li>
                        <li><a class="dropdown-item" href="#">COD: WARZONE</a></li>
                        <li><a class="dropdown-item" href="#">COD: WARZONE MOBILE</a></li>
                        <li><a class="dropdown-item" href="#">CALL OF DUTY: MOBILE</a></li>

                    </ul>

                </div>

                <a href="http://">Nouvelles</a>

                <div class="nav-link">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> EASPORT </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Call of Duty League</a></li>
                        <li><a class="dropdown-item" href="#">Call of Duty Mobile World Championship</a></li>
                        <li><a class="dropdown-item" href="#">World Series of Warzone</a></li>

                    </ul>
                    </a>
                </div>
                <div class="container">
                    <h2 style="text-align: center;">Formulaire connexion</h2>
                    <!-- Modal INSCRIPTION -->
                    <form action="verification.php" class="Formulaire_de_connexion-left" method="POST" action="connexion.php" id="form_inscription">

                        <span></span>

                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1cg">Nom</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example3cg">Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cg">mdp</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cdg">confirme password</label>
                        </div>


                        <div class="d-flex justify-content-center">
                            <button form="form_inscription" type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Enregistrer</button>
                            <button form="connexion" type="submit" class="btn btn-modal">CONNEXION</button>
                            <!-- <button form="form_inscription" type="submit" class="btn btn-modal">S'INSCRIRE</button> -->
                        </div>

                    </form>

                </div>

                <span></span>
                <span></span>
                <span></span>
                <hr>


                <div class="container">

                    <form class="right" action="verification.php" method="POST">
                        <p class="text">Vous avez déjà un compte ? <a href="verification.php" class="text-body"><u>connexion</u></a></p>
                        <h2>Connexion</h2>
                        <div class="form-group">
                            <label for="nom_utilisateur">Nom d'utilisateur:</label>
                            <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>
                        </div>
                        <div class="form-group">
                            <label for="mot_de_passe">Mot de passe:</label>
                            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
                        </div>
                        <button type="submit">Se connecter</button>
                    </form>
                </div>



            </nav>
        </div>