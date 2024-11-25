<?php
    session_start();

    include "components/connect.php";

    
if (isset($_GET['id'])) {
    // Vérifiez que l'ID est un nombre valide
    $id = intval($_GET['id']);
    
    // Vérifiez que les champs POST sont définis et non vides
    if (isset($_POST['num_tel'], $_POST['num_what'], $_POST['num_piece'], $_POST['experiences'], $_POST['type_piece'])) {
        
        // Récupérez et échappez les données des formulaires
        $num_tel = htmlspecialchars($_POST['num_tel']);
        $num_what = htmlspecialchars($_POST['num_what']);
        $num_piece = htmlspecialchars($_POST['num_piece']);
        $experiences = htmlspecialchars($_POST['experiences']);
        $type_piece = htmlspecialchars($_POST['type_piece']);
        
        // Préparez et exécutez la requête de mise à jour
        $modifier_profil = $conn->prepare("UPDATE `inscri_artisan` SET num_tel = ?, num_what = ?, num_piece = ?, experiences = ?, type_piece = ? WHERE id = ?");
        $modifier_profil->execute([$num_tel, $num_what, $num_piece, $experiences, $type_piece, $id]);
        $success_msg[] = 'Modification réussie !';
    
    }
} 





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
     <link rel="stylesheet" href="css/modifi-arti.css"> 
    <title>Artilink - Profil Artisan</title>
    <style>
  
    </style>
</head>
<body>
 <!-- Header -->
 <?php include 'header-articonnect.php'; ?>
    <!-- Main Content -->

    <section class="profil">
        
        
        <form action="" method="post">
            <h2 class="titre">Modification profil</h2>
            <div action="" method="post" class="photo-profil">
                <img src="images/a-min.jpg" alt="Photo de Profil">
                <input type="file" id="photo-profil" name="photo-profil" accept=".jpg,.jpeg,.png">
                <label for="photo-profil"><i class="fas fa-camera"></i></label>
            </div>
            
            <div class="details">
                <p>Numéro de téléphone:</p>
                <input type ="tel" name="num_tel" maxlength="10" placeholder="votre numero de telephone">
                <p>Numéro WhatsApp:</p>
                <input type ="tel" name="num_what" maxlength="10"  placeholder="votre numéro WhatsApp">
                <p>Numéro pieces:</p>
                <input type ="text" name="num_piece" maxlength="50"  placeholder="votre numéro pieces">
                <p>Années d'expérience: </p>
                <input type ="number" name="experiences"  placeholder="votre années d'expérience">
                <div class="input-box-2">
                    <p>Type de pièce d'identité:</p>
                    <select name="type_piece"  class="champ-input">
                        <option value="">Choisir...</option>
                        <option value="extrait_naissance">Extrait de naissance</option>
                        <option value="cni">Carte nationale d'identité (CNI)</option>
                        <option value="passeport">Passeport</option>
                        <option value="attestation_identite">Attestation d'identité</option>
                    </select>
                </div>
            </div>
            <div class="btn">
                <button type="submit" name="modifier" class="modifier">Modifier le Profil</button>
            </div>
        </form>
        
    </section>
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
