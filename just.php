<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call of Duty Mobile</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <header>
        <h1>Call of Duty Mobile</h1>

        <nav>
            <a href="http://">Blog</a>
            <a href="http://">NOTES DE CORRECTIF</a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Jeux </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">MODERN WARFARE III</a></li>
                    <li><a class="dropdown-item" href="#">MODERN WARFARE II</a></li>
                    <li><a class="dropdown-item" href="#">COD: WARZONE</a></li>
                    <li><a class="dropdown-item" href="#">VANGUARD</a></li>
                    <li><a class="dropdown-item" href="#">COD: WARZONE MOBILE</a></li>
                    <li><a class="dropdown-item" href="#">CALL OF DUTY: MOBILE</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>

            <a href="http://">Blog</a>
            <a href="http://">Blog</a>
        </nav>

    </header>

    <main>
        <section id="game-info">
            <h2>Informations sur le jeu</h2>
            <p>Call of Duty Mobile est un jeu de tir à la première personne développé pour les appareils mobiles.</p>
        </section>
        <section id="game-screenshots">
            <h2>Captures d'écran</h2>
            <!-- Insérez ici des images de captures d'écran du jeu -->
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>
























<!-- <header>
    <h1>Blog Call of Duty</h1>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <article>
        <h2>Titre de l'article</h2>
        <p>Date de publication</p>
        <p>Contenu de l'article...</p>
    </article>
    <!-- Répéter la structure pour d'autres articles -->
</main>
<footer>
    <p>&copy; 2023 Blog Call of Duty. Tous droits réservés.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="script"></script>

</body>

</html> -->





// Modal DELETE -
        <div class="modal fade" id="delete' . $coms['id_commentaires'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer un article</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">';
    
                    echo 'Veut-tu vraiment supprimer le commentaire ' . $coms['contenu'] . ' id: ' . $coms['id_commentaires'] . ' de la base de donnée ?';
                    echo '
    
                    <!-- form codepen -->
                    <div class="login-page">
    
                        <div class="form">
    
                            <form method="POST" action="delete_commentaire.php" id="delete_commentaire' . $coms['id_commentaires'] . '">
                                <input name="id_delete" type="number" value="' . $coms['id_commentaires'] . '" hidden />
                            </form>
    
                        </div>
                    </div>
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button form="delete_commentaire' . $coms['id_commentaires'] . '" type="submit" class="btn btn-primary">Supprimer le commentaire</button>
                </div>
            </div>











<!-- Modal DELETE -->
<div class="modal fade" id="delete' . $coms['id_commentaires'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer un articles</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                echo 'Veut-tu vraiment supprimer le commentaire ' . $coms['contenu'] . ' id: ' . $coms['id_commentaires'] . ' de la base de donnée ?';
                echo '
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <a href="delete_commentaire.php?id=<?php echo $coms['id_commentaires']; ?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="delete' . $coms['id_commentaires'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer un article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">';

                echo 'Veut-tu vraiment supprimer le commentaire ' . $coms['contenu'] . ' id: ' . $coms['id_commentaires'] . ' de la base de donnée ?';
                echo '

                <!-- form codepen -->
                <div class="login-page">

                    <div class="form">

                        <form method="POST" action="delete_commentaire.php" id="delete_commentaire' . $coms['id_commentaires'] . '">
                            <input name="id_delete" type="number" value="' . $coms['id_commentaires'] . '" hidden />
                        </form>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button form="delete_commentaire' . $coms['id_commentaires'] . '" type="submit" class="btn btn-primary">Supprimer le commentaire</button>
            </div>
        </div>