<?php
    session_start();

    include "components/connect.php";

    if (isset($_POST['modifier'])) {

        $titre = $_POST['titre'];
        $titre = htmlspecialchars($_POST['titre']);
        $desc_article = $_POST['desc_article'];
        $desc_article = htmlspecialchars($_POST['desc_article']);
        $id_artisan = $_POST['id_artisan'];

        $img = $_FILES['img']['name'];
        $img = htmlspecialchars($_FILES['img']['name']);
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        $rename = unique_id().'.'.$ext;
        $img_tmp_name = $_FILES['img']['tmp_name'];
        $img_size = $_FILES['img']['size'];
        $img_folder = 'upload/'.$rename;

        if ($img_size > 2000000) {
            $error_msg[] = 'la taille de l\'image est très grande!';
        }else{
            $modifier_article = $conn->prepare("UPDATE `ajout_boutik` SET titre = ?, desc_article = ?, img = ? WHERE id_artisan = ?");            
            $modifier_article->execute([$titre, $desc_article, $rename, $id_artisan]);
            move_uploaded_file($img_tmp_name, $img_folder);
            $success_msg[] = 'Modifier avec succes !';

        }   
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
        <link rel="stylesheet" href="css/add.css"> 
    <title>Contact - Artilink</title>
</head>
<body>

<!-- section header -->
 <!-- Header -->
 <?php include 'header-articonnect.php'; ?>
    <!-- Main Content -->

<section class="contact-section">
    <h1>Modification de l'article</h1>
    <p>Rendez votre boutique encore plus attrayante en ajoutant vos plus beaux articles </p>
  

    <form  action="" method="post" enctype="multipart/form-data">
        <input type="text" name="titre" placeholder="Titre captivant" required>
        <input type="hidden" name="id_artisan" value="<?= $_SESSION['user_id']['id'];?>" required>
        <textarea name="desc_article" placeholder="Entrez une description attrayante" required></textarea>
        <input type="file" name="img" placeholder="Photo descriptive" required accept=".pdf,.jpg,.jpeg,.png" class="champ-input">
        <button type="submit" name="modifier">Modifier</button>
    </form>

    
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
