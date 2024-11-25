<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: connexion-artisan.php");
    exit;
}

include 'components/connect.php';

// Calculer la date actuelle
$current_date = date('Y-m-d'); // Format de date : AAAA-MM-JJ

if (isset($_POST['supprimer'])) {
    $product_id = $_POST['product_id'];
    $product_id = htmlspecialchars($product_id);
    
    $supprimer_post = $conn->prepare("DELETE FROM `ajout_boutik` WHERE id = ?");
    $supprimer_post->execute([$product_id]);
    
    if ($supprimer_post->rowCount() > 0) {
        $_SESSION['success_msg'] = 'Supprimé avec succès!';
    } else {
        $_SESSION['warning_msg'] = 'Produit déjà supprimé!';
    }

    header("Location: boutique-artisan.php");
    exit;
}
?>


  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/boutique-arti.css">
    <title>Artilink</title>
</head>
<body>

<!-- section header -->
<?php include 'header-articonnect.php'; ?>


<section class="tout-savoir">
    <h2 class="en-tete">Bienvenue dans Arti<span>Place</span></h2>

    <div class="aut-buttons">
        <a href="addarticle.php">Ajouter un article</a>
    </div>
    

    <div class="box-container">

        <?php

            $id_artisan = $_SESSION['user_id']['id'];

            $select_ = $conn->prepare("SELECT * FROM `ajout_boutik` WHERE id_artisan = :id_artisan");
            $select_->execute([':id_artisan' => $id_artisan]);

            $select = $conn->prepare("SELECT * FROM `inscri_artisan`");
            $select->execute();
            $fetch = $select->fetch(PDO::FETCH_ASSOC);
            
            if ($select_->rowCount() > 0) {
                
                while ($fetch_artisan = $select_->fetch(PDO::FETCH_ASSOC)) { 
                                
        ?>

        <form action="" method="post" class="actu">
            <input type="hidden" name="product_id" value="<?= $fetch_artisan['id'] ;?>">
            <img src="upload/<?= $fetch_artisan['img']; ?>" alt="">
            <div class="detail-sur">
            
            <p class="time"><?= $current_date; ?></p>
                <h4><?= $_SESSION['user_id']['metier']; ?></h4>
                <p><?=$_SESSION['user_id']['nom']?> <?=$_SESSION['user_id']['prenom']?></p>
                <h6><?= $fetch_artisan['titre']; ?></h6>
                <details>
                    <p></p>
                    <p><?= $fetch_artisan['desc_article']; ?></p>
                    <summary>En savoir plus</summary>
                </details>
                <div class="btn-group">
                    <a href="modif-article-boutique.php" class="what-btn"><i class="fas fa-pencil-alt"></i> Modifier</a> 
                    <button type="submit" class="btn-tel" name="supprimer" onclick="return confirm('Voulez-vous supprimer le produit?')"><i class="fas fa-trash-alt"></i> Supprimer</button>  
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



<!-- Footer -->
<?php include 'footer.php'; ?>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>
<?php include 'components/alert.php'; ?>
</body>
</html>
