<?php
    session_start();
     
    if (!isset($_SESSION['user_id'])) {
        header("Location:connexion-artisan.php");
        exit;
    }
    
    include 'components/connect.php';

    
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f2f2f2;
        }

        

        /* Header styles */
        header, footer {
            background-color: #fff;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            position: relative;
        }

        header {
            background-color: #fff;
            color: #fff;
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            height: 50px;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        header .nav-links {
            display: flex;
            gap: 20px;
            margin-left: 9.5rem; /* Ajouter un espacement entre le logo et les liens de navigation */
        }

        header .nav-links a {
            color: #009640;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
        }

        header .nav-links a:hover {
            color: #E30613;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
            margin-right: 50px; /* Ajuster la marge à droite pour déplacer vers la gauche */
            max-width: calc(100% - 280px); /* Limiter la largeur maximale des boutons */
        }

        header .auth-buttons a {
            color: #E30613;
            background-color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            border: 1px solid #E30613;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        header .auth-buttons a:hover {
            background-color: #E30613;
            color: #fff;
        }

        /* Footer */
        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #009640;
            color: white;
        }

        footer .social-links a {
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
            color: white;
        }

        footer .social-links a:hover {
            color: #E30613;
        }

        footer p.copyright {
            margin: 0;
            font-size: 0.875rem;
            margin-left: 100px; /* Ajouter de l'espacement entre le logo et le copyright */
        }

        /* Tout savoir section */
        .tout-savoir {
    padding: 6rem 2rem 2rem; /* Ajout de 6rem de padding en haut */
}


        .tout-savoir .en-tete {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .tout-savoir .en-tete span {
            color: #E30613;
        }

        .tout-savoir .aut-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 1rem;
        }

        .tout-savoir .aut-buttons a {
            color: #fff;
            background-color: #E30613;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            border: 1px solid #E30613;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .tout-savoir .aut-buttons a:hover {
            background-color: #009640;
            color: #E30613;
        }

        .tout-savoir .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 1rem;
        }

        .tout-savoir .actu {
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .tout-savoir .actu:hover {
            transform: translateY(-5px);
        }

        .tout-savoir .actu img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .tout-savoir .detail-sur {
            padding: .5rem 1rem;
        }

        .tout-savoir .detail-sur h6 {
            color: #E30613;
            text-decoration: none;
            font-size: 1rem;
            font-weight: bold;
        }

        .tout-savoir .detail-sur summary {
            color: #777;
        }

        .tout-savoir .detail-sur .time{
            color: #009640;
            font-size: .8rem;
        }

        .tout-savoir .detail-sur p {
            color: #777;
        }

        .tout-savoir .detail-sur .btn-group {
    display: flex;
    align-items: center; /* Aligner les éléments verticalement */
}

.tout-savoir .detail-sur .btn-tel,
.tout-savoir .detail-sur .what-btn {
    display: inline-flex; /* Utiliser flexbox pour aligner l'icône et le texte */
    align-items: center; /* Aligner les éléments verticalement */
    padding: 0.5rem 1rem;
    background-color: #fff; /* Fond blanc */
    color: #E30613; /* Texte et icône rouges */
    text-decoration: none;
    border: 2px solid #E30613; /* Bordure rouge de 2px */
    border-radius: 5px;
    margin-right: 0.5rem;
    margin-bottom: 0.5rem;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.tout-savoir .detail-sur .btn-tel:hover,
.tout-savoir .detail-sur .what-btn:hover {
    background-color: #E30613; /* Fond rouge au survol */
    color: #fff; /* Texte et icône blancs */
}

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            header .nav-links {
                flex-direction: column;
                gap: 10px;
            }


            .tout-savoir {
                padding: 1rem;
            }

            .tout-savoir .box-container {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .tout-savoir .filtre {
                flex-direction: column;
            }

            .tout-savoir .filtre-g,
            .tout-savoir .filtre-d {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Artilink</title>
</head>
<body>

<!-- section header -->
<header>
        <img src="images/logo.png" alt="Logo">
        <div class="nav-links">
            <a href="afterconnexion/accueil.php">Accueil</a>
            <a href="afterconnexion/services.php">Services</a>
            <a href="afterconnexion/contact.php">Contact</a>
            <a href="afterconnexion/apropos.php">À propos</a>
            <a href="afterconnexion/trouver-artisan.php">Trouver un Artisan</a>
            <a href="inscription-artisan.php">Devenir Artisan</a>
        </div>
        <div class="auth-buttons">
    <a href="profile-artisan.php"><i class="fas fa-user"></i> Voir le profil</a>
    <a href="components/deconnexion.php">Déconnexion</a>
</div>

    </header>

<section class="tout-savoir">
    <h2 class="en-tete">Bienvenue dans Arti<span>Place</span></h2>
    <div class="box-container">

            <?php

                if (isset($_GET['id'])) {
                    $id_artisan = $_GET['id'];
                }

                
                

                $select_ = $conn->prepare("SELECT * FROM `ajout_boutik` WHERE id_artisan = :id_artisan ");
                $select_->execute([':id_artisan' => $id_artisan]);

                $select = $conn->prepare("SELECT * FROM `inscri_artisan` WHERE id = :id_artisan");
                $select->execute([':id_artisan' => $id_artisan]);
                $fetch = $select->fetch(PDO::FETCH_ASSOC);

                $num_what = $fetch['num_what'];
                $country_code = "+225";

                // Vérifier si le numéro commence par le code du pays
                if (strpos($num_what, $country_code) !== 0) {
                    // Ajouter le code du pays au début du numéro
                    $num_what = $country_code . $num_what;
                }
                
                if ($select_->rowCount() > 0) {
                    
                    while ($fetch_artisan = $select_->fetch(PDO::FETCH_ASSOC)) { 
                                    
            ?>

            <form action="" method="post" class="actu">
                <input type="hidden" name="product_id" value="<?= $fetch_artisan['id'] ;?>">
                <img src="upload/<?= $fetch_artisan['img']; ?>" alt="">
                <div class="detail-sur">
                
                    <p datetime="2024-07-23" class="time"><?= $fetch_artisan['date_pub'];?></p>
                    <h4><?= $fetch['metier']; ?></h4>
                    <p><?=$fetch['nom']?> <?=$fetch['prenom']?></p>
                    <h6><?= $fetch_artisan['titre']; ?></h6>
                    <details>
                        <p></p>
                        <p><?= $fetch_artisan['desc_article']; ?></p>
                        <summary>En savoir plus</summary>
                    </details>
                    <div class="btn-group">
                        <a href="tel:<?= $fetch['num_tel']; ?>" class="what-btn"><i class="fa-solid fa-phone"></i>Appeller</a> 
                        <a href="https://api.whatsapp.com/send?phone=+225<?= $fetch['num_what']; ?>" class="btn-tel"><i class="fab fa-whatsapp"></i>Discuter</a>
                    </div>
                </div>
            </form>

            <?php
                            
                    }
                }else{
                    echo '<p class="vide">Aucun produit !</p>';
                }
            ?>
    </div>
</section>


<footer>
        <img src="images/logo.png" alt="Logo" style="height: 50px;">
        <p class="copyright">&copy; 2024 Artilink. Tous droits réservés.</p>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>
