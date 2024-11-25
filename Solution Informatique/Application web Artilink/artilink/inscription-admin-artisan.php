<?php
session_start();
include "components/connect.php";

if (isset($_POST['inscrire'])) {
    $user_id = unique_id();
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $num_tel = htmlspecialchars($_POST['num_tel']);
    $num_what = htmlspecialchars($_POST['num_what']);
    $num_piece = htmlspecialchars($_POST['num_piece']);
    $sexe = htmlspecialchars($_POST['sexe']);
    $metier = htmlspecialchars($_POST['metier']);
    $ville = htmlspecialchars($_POST['ville']);
    $experiences = htmlspecialchars($_POST['experiences']);
    $type_piece = htmlspecialchars($_POST['type_piece']);
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT); 
    $terms = htmlspecialchars($_POST['terms']);

    // Vérification de l'image
    $images = $_FILES['images']['name'];
    $images = htmlspecialchars($_FILES['images']['name']);
    $ext = pathinfo($images, PATHINFO_EXTENSION);
    $rename = unique_id().'.'.$ext;
    $images_tmp_name = $_FILES['images']['tmp_name'];
    $images_size = $_FILES['images']['size'];
    $images_folder = 'upload/'.$rename;

    $select_ = $conn->prepare("SELECT * FROM `inscri_artisan` WHERE num_tel = ?");
    $select_->execute([$num_tel]);

    if ($images_size > 2000000) {
        $warning_msg[] = 'La taille de l\'image est très grande!';
    } elseif ($select_->rowCount() > 0) {
        $error_msg[] = 'Ce numéro existe déjà!';
    } else {
        $insert_artisan = $conn->prepare("INSERT INTO `inscri_artisan`(user_id, nom, prenom, num_tel, num_what, sexe, metier, ville, experiences, type_piece, num_piece, mdp, images, terms) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $insert_artisan->execute([$user_id, $nom, $prenom, $num_tel, $num_what, $sexe, $metier, $ville, $experiences, $type_piece, $num_piece, $mdp, $rename, $terms]);
        move_uploaded_file($images_tmp_name, $images_folder);

        $select_artisan = $conn->prepare("SELECT * FROM `inscri_artisan` WHERE num_tel = ?");
        $select_artisan->execute([$num_tel]);
        $row = $select_artisan->fetch(PDO::FETCH_ASSOC);

        if ($select_artisan->rowCount() > 0) {
            $_SESSION['user_id'] = $row['user_id'];
            header("Location:connexion-artisan.php");
            exit;
        }
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
        <!-- CSS -->
        <link rel="stylesheet" href="css/styles.css"> 
        <link rel="stylesheet" href="css/inscription-artisan.css"> 
    
    <title>Artilink - Inscription Artisan</title>
    
    </style>
</head>
<body>
      <!-- debut entete -->
      <?php include 'header.php'; ?>
    <!-- fin entete -->
    <section class="inscription">
        <h2 class="titre">Inscription</h2>
        <form action="" method="post" class="box-form" enctype="multipart/form-data" id="myForm">
            <div class="box">
                <div class="user-detail">
                    <div class="input-box">
                        <p>Nom</p>
                        <input type="text" id="username" maxlength="50" name="nom" placeholder="Votre nom" required class="champ-input">
                        <span id="error"></span>
                    </div>

                    <div class="input-box">
                        <p>Prénom</p>
                        <input type="text" id="username" maxlength="50" name="prenom" placeholder="Votre prénom" required class="champ-input">
                    </div>

                    <div class="input-box">
                        <p>Numéro de téléphone</p>
                        <input type="phone"  maxlength="14" name="num_tel"  placeholder="Votre numéro de téléphone" required class="champ-input">
                    </div>

                    <div class="input-box">
                        <p>Numéro WhatsApp</p>
                        <input type="tel"  maxlength="14" name="num_what" placeholder="Votre numéro WhatsApp" required class="champ-input" >
                    </div>
                    <div class="input-box-2">
                        <p>Mot de passe</p>
                        <input type="password" name="mdp" placeholder="****" required  class="champ-input">
                    </div>
                    <div class="input-box-2">
                        <p>Villes</p>
                        <select name="ville" required class="champ-input">
                            <option value="">Choisir...</option>
                            <option value="abidjan">Abidjan</option>
                            <option value="bouake">Bouake</option>
                        </select>
                    </div>
                </div>

                <div class="user-detail">
                    <div class="input-box-2">
                        <p>Sexe</p>
                        <select name="sexe" required class="champ-input">
                            <option value="">Choisir...</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                    </div>
                    <div class="input-box-2">
                        <p>Métier</p>
                        <select name="metier" required class="champ-input">
                            <option value="">Choisir...</option>
                            <option value="couture">Couture</option>
                            <option value="artisanat d’art et de décoration">Artisanat d’art et de décoration</option>
                            <option value="mecanique ">Mécanique </option>
                            <option value="agroalimentaire, alimentation, restauration ">Agroalimentaire, alimentation, restauration </option>
                            <option value="maçonnerie ">Maçonnerie </option>
                            <option value="transport">Transport</option>
                            <option value="menuiserie/charpenterie">Menuiserie/Charpenterie</option>
                            <option value="coiffure">Coiffure</option>
                            <option value="vente de marchandises">Vente de marchandises</option>
                            <option value="electronique (réparateur TV, portable, etc) ">Electronique (réparateur TV, portable, etc) </option>
                            <option value="tapisserie">Tapisserie</option>
                            <option value="audiovisuel et communication ">Audiovisuel et communication </option>
                            <option value="boucherie">Boucherie</option>
                            <option value="bijouterie">Bijouterie</option>
                            <option value="hygiène et soins corporels ">Hygiène et soins corporels </option>
                            <option value="briqueterie">Briqueterie</option>
                            <option value="spécialiste en froid">Spécialiste en froid</option>
                            <option value="vitrerie">Vitrerie</option>
                            
                            <!-- Ajouter d'autres options ici -->
                        </select>
                    </div>
                    <div class="input-box-2">
                        <p>Années d'expérience</p>
                        <input type="number" name="experiences" placeholder="Votre expérience" required class="champ-input">
                    </div>
                    <div class="input-box-2">
                        <p>Type de pièce d'identité</p>
                        <select name="type_piece" required class="champ-input">
                            <option value="">Choisir...</option>
                            <option value="extrait_naissance">Extrait de naissance</option>
                            <option value="cni">Carte nationale d'identité (CNI)</option>
                            <option value="passeport">Passeport</option>
                            <option value="attestation_identite">Attestation d'identité</option>
                        </select>
                    </div>
                    <div class="input-box-2">
                        <p>Numero de la piece</p>
                        <input type="text" maxlength="30"  name="num_piece" placeholder="CI0101010101" required  class="champ-input">
                    </div>
                    <div class="input-box-2">
                        <p>Une image pour votre Activité</p>
                        <input type="file" name="images" required accept=".pdf,.jpg,.jpeg,.png" class="champ-input">
                    </div>
                </div>
            </div>
            
            <!-- Case à cocher pour les termes et conditions -->
            <div class="terms-policy">
                
                <input type="checkbox" name="terms" id="terms" required>
                <p>En vous inscrivant, vous acceptez nos <a href="charte-artisan.php">conditions générales</a> et notre <a href="charte-artisan.php">politique de confidentialité</a>.</p>
            </div>

            <div class="btn">
                <button type="submit" name="inscrire" class="inscrire">S'inscrire</button>
            </div>
            <div class="question-si">
                <p>Avez-vous un compte ? <a href="connexion-artisan.php">Se connecter</a></p>
            </div>
        </form>
    </section>
  <!-- section footer -->
  <?php include 'footer.php'; ?>
    <!--  -->  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>
