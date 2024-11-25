<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Artilink - Actualités</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f2f2f2;
            color: #333;
            padding-top: 100px; /* Espace pour le header fixe */
            padding-bottom: 60px; /* Espace pour le footer fixe */
        }

        /* Header */
        header {
            background-color: #009640;
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

        header .nav-links {
            display: flex;
            gap: 20px;
        }

        header .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
        }

        header .nav-links a:hover {
            color: #E30613;
        }

        header .auth-buttons {
            display: flex;
            gap: 10px;
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

        /* Section Actualités */
        .tout-savoir {
            padding: 4rem 2rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 0 auto;
        }

        .en-tete {
            font-size: 2rem;
            color: #009640;
            text-align: center;
            margin-bottom: 2rem;
        }

        .en-tete span {
            color: #E30613;
        }

        .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }

        .actu {
            background: #f9f9f9;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .actu:hover {
            transform: translateY(-5px);
        }

        .actu img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .actu .flex {
            padding: 1rem;
        }

        .desc_article {
            font-size: 1.1rem;
            color: #333;
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
            transition: color 0.3s;
        }

        .desc_article:hover {
            color: #009640;
        }

        .date {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.875rem;
            color: #777;
        }

        .date p {
            margin: 0;
        }

        .date i {
            margin-right: 5px;
        }

        /* Footer */
        footer {
            background-color: #009640;
            color: white;
            text-align: center;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }

        footer img {
            height: 50px;
        }

        footer .social-links a {
            color: #fff;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        footer .social-links a:hover {
            color: #E30613;
        }

        footer .copyright {
            font-size: 0.875rem;
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
                padding: 2rem;
            }

            .box-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<!-- section header -->
<header>
    <img src="images/logo.jpg" alt="Logo">
    <nav class="nav-links">
        <a href="accueil.php">Accueil</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="apropos.php">À propos</a>
        <a href="trouver-artisan.php">Trouver un Artisan</a>
        <a href="inscription-artisan.php">Devenir Artisan</a>
    </nav>
    <div class="auth-buttons">
        <a href="connexion-client.php">Connexion</a>
        <a href="inscription-client.php">Inscription</a>
    </div>
</header>

<section class="tout-savoir">
    <h2 class="en-tete">Tous nos <span>actualités</span></h2>
    <div class="box-container">
        <!-- Utilisation d'une boucle PHP pour générer les actualités -->
        <?php for($i = 0; $i < 8; $i++): ?>
        <div class="actu">
            <img src="images/WhatsAppImage2024-06-2722.07.46_431cd496.jpg" alt="Actualité">
            <div class="flex">
                <a href="actualite.php" class="desc_article">Un peu de description Lorem ipsum dolor sit.</a>
                <div class="date">
                    <p><i class="fa-regular fa-eye"></i> 03</p>
                    <p>13/07/2024 à 09:08</p>
                </div>    
            </div>
        </div>
        <?php endfor; ?>
    </div>
</section>

<footer>
    <img src="images/logo.jpg" alt="Logo" style="height: 50px;">
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
</body>
</html>
