<?php

include('Maconnexion.php');

session_start([
    'cookie_lifetime' => 8 // Durée de vie du cookie de session (en secondes)
]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">
    <title>blog call of duty</title>
    <link rel="stylesheet" href="style.css">
    <link href=" https://fonts.cdnfonts.com/css/noasarck " rel="stylesheet">


</head>

<body>
    <header>

        <!-- section pour navbar -->


        <section>
            <!-- Balise <video> -->
            <video autoplay loop muted playsinline class="back-video">
                <source src="video/Bande-annonce-Call-of-Duty-Modern-Warfare-III.mp4" type="video/mp4">
            </video>

            <div class="container">
                <header>
                    <div class="left">
                        <a href="index.php"><img src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/global/cod-logo.svg" alt="Logo Call of Duty"></a>
                    </div>
                </header>

                <div class="right">
                    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
                        <div class="bg-dark p-4">
                            <h5 class="text-body-emphasis h4">hamburger</h5>
                            <span class="text-body-secondary">Toggleable via the navbar brand.</span>
                        </div>
                    </div>

                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="jeux.php">Jeux</a>
                                    </li>


                                    <li class="nav-item dropdown">

                                        <?php
                                        // Déclaration du tableau $jeux:
                                        $jeux = array(
                                            'Boutique' => 'https://www.callofduty.com/playnow/modernwarfare3',
                                            'Modern Warfare III' => 'https://www.callofduty.com/modernwarfare3',
                                            'Warzone' => 'https://www.callofduty.com/playnow/warzone',
                                            'Call of Duty' => 'https://www.callofduty.com/mobile'
                                        );

                                        // Générer les éléments de la liste avec les liens
                                        foreach ($jeux as $texte => $url) {
                                            echo '<li><a href="' . $url . '">' . $texte . '</a></li>';
                                        }
                                        ?>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="forminscription.php">Inscription Connexion </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>


                </div>
            </div>

            <div class="content">
                <img class="imgcentre" src="image/Call-of-Duty_Next_img.png" alt="Image Call of Duty">
            </div>

            <div class="container1">
                <!-- Lien YouTube -->
                <a href="https://www.youtube.com/watch?v=9o2bxsRvvEE&rco=1" target="_blank" aria-label="Regarder la rediffusion" class="cta-link">
                    <img src="img/NextPlayButton.png" alt="Mini logo">
                </a>
            </div>

            <div class="box">
                <!-- Lien vers une vidéo -->
                <a href="Multiplayer Trailer Call of Duty Modern Warfare III.mp4"></a>
            </div>
        </section>

        <span class="glint"></span>
        <span class="glint"></span>



    </header>



    <!--//////////Section2/////////////  -->


    <div class="section2">


        <div class="card text-bg-dark">
            <img src="img\S06_HP_PrimaryTout_2X (2).jpg" min-width="600.02px" class="card-img" alt="Call of duty Logo">
            <div class="card-img-overlay">
                <h2 class="card-title">Black Cell</h2>
                <p class="card-text">Lancez-vous dans la Saison 6 avec la nouvelle apparence d'opérateur V4L3RIA et d'autres récompenses d'élite.</p>

            </div>
        </div>
    </div>

    <div class="section-right">
        <div class="hub-news aem-GridColumn aem-GridColumn--default--12">

            <link rel="stylesheet" href="/apps/atvi/callofduty/hub/components/hub/hub-2023/hub-news/clientlibs.2c5e9f730012107b9185b93d5a4c93c2.css" type="text/css">
            <script type="text/javascript" src="/apps/atvi/callofduty/hub/components/hub/hub-2023/hub-news/clientlibs.48fef32a8c1d9491b8cb394b5bdb8dd3.js" defer=""></script>


            <div class="cod-hub-news">

            
                <div class="news-list">

                    <ul>
                        <li>

                            <div class="card-1text-bg-dark">
                                <img src="https://imgs.callofduty.com/content/dam/atvi/callofduty/cod-touchui/blog/body/mwiii/MWIII-GAME-LIVE-NOW-004.jpg/jcr:content/renditions/cq5dam.thumbnail.319.319.png" min-width="600.02px" class="card-img" alt="Call of duty Logo">
                                <div class="card-img-overlay">
                                    <h2 class="card-title">MWIII</h2>
                                    <p class="card-text">Libérez le guerrier qui sommeille en vous avec le pack CODE Warrior.</p>

                                </div>
                            </div>

                        </li>
                    </ul>


                    <ul>

                        

                        <li>



                            <a href="/blog/2023/11/call-of-duty-modern-warfare-iii-play-now-officially-live-worldwide" data-test="standard">

                                <div class="news-thumbnail">


                                    <img src="https://imgs.callofduty.com/content/dam/atvi/callofduty/cod-touchui/blog/body/mwiii/MWIII-GAME-LIVE-NOW-004.jpg/jcr:content/renditions/cq5dam.thumbnail.319.319.png" alt="">

                                </div>

                                <div class="news-content">

                                    <div class="news-title">
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Call of Duty : Modern Warfare III – Jouez maintenant !</font>
                                            </font>
                                        </p>
                                    </div>

                                    <div class="news-details">

                                        <div class="news-game-icons">

                                            <ul>

                                                <li>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">


                                                            MWIII

                                                        </font>
                                                    </font>
                                                </li>

                                            </ul>

                                        </div>

                                        <div data-date="November 10, 2023" class="news-published">
                                            <span class="date-ph">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">il y a 9 </font>
                                                </font>
                                            </span> <span class="days-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">jours</font>
                                                </font>
                                            </span>
                                        </div>

                                    </div>

                                </div>

                            </a>

                        </li>

                        <li>



                            <a href="https://www.callofduty.com/en/patchnotes/2023/11/call-of-duty--modern-warfare-iii-launch-patch-notes" data-test="standard">




                                <div class="news-thumbnail">


                                    <img src="https://imgs.callofduty.com/content/dam/atvi/callofduty/cod-touchui/patchnotes/body/mwiii/mp/MWIII_Scrapyard_Action_1.png/jcr:content/renditions/cq5dam.thumbnail.319.319.png" alt="">

                                </div>

                                <div class="news-content">

                                    <div class="news-title">
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Notes de mise à jour de lancement de Call of Duty&nbsp;: Modern Warfare III</font>
                                            </font>
                                        </p>
                                    </div>

                                    <div class="news-details">

                                        <div class="news-game-icons">

                                            <ul>

                                                <li>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">


                                                            MWIII


                                                        </font>
                                                    </font>
                                                </li>

                                            </ul>

                                        </div>

                                        <div data-date="November 09, 2023" class="news-published">
                                            <span class="date-ph">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">il y a 10 </font>
                                                </font>
                                            </span> <span class="days-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">jours</font>
                                                </font>
                                            </span>
                                        </div>

                                    </div>

                                </div>

                            </a>

                        </li>


                        <li>



                            <a href="/blog/2023/11/call-of-duty-ricochet-anti-cheat-modern-warfare-III-progress-report" data-test="standard">




                                <div class="news-thumbnail">


                                    <img src="https://imgs.callofduty.com/content/dam/atvi/callofduty/cod-touchui/blog/hero/mwiii/MWIII-LAUNCH-PROGRESS-REPORT-TOUT.jpg/jcr:content/renditions/cq5dam.thumbnail.319.319.png" alt="">

                                </div>

                                <div class="news-content">

                                    <div class="news-title">
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">#TeamRICOCHET&nbsp;: une technologie d'apprentissage automatique pour lutter contre le jeu déloyal</font>
                                            </font>
                                        </p>
                                    </div>

                                    <div class="news-details">

                                        <div class="news-game-icons">

                                            <ul>

                                                <li>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">


                                                            MWIII



                                                        </font>
                                                    </font>
                                                </li>

                                            </ul>

                                        </div>

                                        <div data-date="November 09, 2023" class="news-published">
                                            <span class="date-ph">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">il y a 10 </font>
                                                </font>
                                            </span> <span class="days-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">jours</font>
                                                </font>
                                            </span>
                                        </div>

                                    </div>

                                </div>

                            </a>

                        </li>


                    </ul>

                </div>

                <div class="cta-container">
                    <div class="sideline left"></div>
                    <div class="news-cta">
                        <span class="glint"></span>
                        <span class="glint"></span>
                        <span class="glint"></span>
                        <span class="glint"></span>
                        <a href="https://www.callofduty.com/blog" class="atvi-cta-item">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Obtenez plus de nouvelles</font>
                            </font>
                        </a>
                    </div>
                    <div class="sideline right"></div>
                </div>

            </div>
        </div>






    </div>
    <span class="glint"></span>
    <span class="glint"></span>








    <footer>
        &copy; NOSILE John . Tous droits réservés.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


</body>

</html>