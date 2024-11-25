<?php
    session_start();
    
    include 'components/connect.php';
    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mon propre CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Artilink - Profil Artisan</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profil {
            max-width: 800px;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            text-align: center;
        }

        .titre {
            font-size: 2rem;
            color: #009640;
            margin-bottom: 20px;
        }

        .photo-profil {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .photo-profil img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .photo-profil input[type="file"] {
            display: none;
        }

        .photo-profil label {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #009640;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .photo-profil label:hover {
            background-color: #007530;
        }

        .details {
            text-align: left;
            margin-bottom: 20px;
        }

        .details p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .details span {
            font-weight: bold;
        }

        .btn {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn a{
            text-decoration: none;
        }

        .modifier {
            background-color: #E30613;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .modifier:hover {
            background-color: #b3040f;
        }
    </style>
</head>
<body>


    <section class="profil">
        <h2 class="titre">Profil Artisan</h2>
        
        <form action="" method="post" class="photo-profil">
            <img src="images/a-min.jpg" alt="Photo de Profil">
            <input type="file" id="photo-profil" name="photo-profil" accept=".jpg,.jpeg,.png">
            <label for="photo-profil"><i class="fas fa-camera"></i></label>
        </form>
        <?php

            $id = $_SESSION['user_id']['id'];

            $select = $conn->prepare("SELECT * FROM `inscri_artisan` WHERE id = :id");
            $select->execute([':id' => $id]);
            $fetch = $select->fetchAll(PDO::FETCH_ASSOC);
               
            if ($select->rowCount() > 0) {

                foreach($fetch as $fetch_artisan){       
        ?>    
        <div class="details">
                <p>Nom: <span><?= $fetch_artisan['nom']?></span></p>
                <p>Prénom: <span><?= $fetch_artisan['prenom']?></span></p>
                <p>Numéro de téléphone: <span><?= $fetch_artisan['num_tel']?></span></p>
                <p>Numéro WhatsApp: <span><?= $fetch_artisan['num_what']?></span></p>
                <p>Sexe: <span><?= $fetch_artisan['sexe']?></span></p>
                <p>Métier: <span><?= $fetch_artisan['metier']?></span></p>
                <p>Années d'expérience: <span><?= $fetch_artisan['experiences']?> ans</span></p>
                <p>Type de pièce d'identité: <span><?= $fetch_artisan['type_piece']?></span></p>
        </div>
            <div class="btn">
                <a href="modif-profil-artisan.php?id=<?= $fetch_artisan['id'];?>" class="modifier">Modifier le Profil</a>
            </div>
        <?php
                }
            }
        ?>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>
