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
    <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
     <!-- CSS -->
     <link rel="stylesheet" href="css/styles.css"> 
     <link rel="stylesheet" href="css/profil-arti.css"> 
    <title>Artilink - Profil Artisan</title>
    <style>
  
    </style>
</head>
<body>
 <!-- Header -->
 <?php include 'header-articonnect.php'; ?>
    <!-- Main Content -->
<section class="profil">
    <h2 class="titre">Profil Artisan</h2>
    
    <form action="" method="post" class="photo-profil">
        <img src="images/a-min.jpg" alt="Photo de Profil">
        <input type="file" id="photo-profil" name="photo-profil" accept=".jpg,.jpeg,.png">
        <label for="photo-profil"><i class="fas fa-camera"></i></label>
    </form>
    <?php
    // Vérifier si la session contient bien les informations de l'utilisateur
    if (isset($_SESSION['user_id']['id'])) {
        $id = $_SESSION['user_id']['id'];

        // Préparer et exécuter la requête SQL
        $select = $conn->prepare("SELECT * FROM `inscri_artisan` WHERE id = :id");
        $select->execute([':id' => $id]);
        $fetch = $select->fetchAll(PDO::FETCH_ASSOC);

        // Vérifier s'il y a des résultats
        if ($select->rowCount() > 0) {
            foreach($fetch as $fetch_artisan) {       
    ?>    
    <div class="details">
        <p>Nom: <span><?= htmlspecialchars($fetch_artisan['nom']) ?></span></p>
        <p>Prénom: <span><?= htmlspecialchars($fetch_artisan['prenom']) ?></span></p>
        <p>Numéro de téléphone: <span><?= htmlspecialchars($fetch_artisan['num_tel']) ?></span></p>
        <p>Numéro WhatsApp: <span><?= htmlspecialchars($fetch_artisan['num_what']) ?></span></p>
        <p>Sexe: <span><?= htmlspecialchars($fetch_artisan['sexe']) ?></span></p>
        <p>Métier: <span><?= htmlspecialchars($fetch_artisan['metier']) ?></span></p>
        <p>Années d'expérience: <span><?= htmlspecialchars($fetch_artisan['experiences']) ?> ans</span></p>
        <p>Type de pièce d'identité: <span><?= htmlspecialchars($fetch_artisan['type_piece']) ?></span></p>
    </div>
    <div class="btn">
        <a href="modif-profil-artisan.php?id=<?= htmlspecialchars($fetch_artisan['id']) ?>" class="modifier">Modifier le Profil</a>
    </div>
    <?php
            }
        } else {
            echo "<p>Aucun profil trouvé pour cet utilisateur.</p>";
        }
    } else {
        echo "<p>Erreur : utilisateur non connecté ou session invalide.</p>";
    }
    ?>
</section>

      <!-- section footer -->
      <?php include 'footer.php'; ?>
    <!--  -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>
