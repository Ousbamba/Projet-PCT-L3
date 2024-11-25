<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: connexion-client.php");
    exit;
}

include 'components/connect.php';

// Calculer la date actuelle
$current_date = date('Y-m-d'); // Format de date : AAAA-MM-JJ

// if (isset($_POST['supprimer'])) {
//     $product_id = $_POST['product_id'];
//     $product_id = htmlspecialchars($product_id);
    
//     $supprimer_post = $conn->prepare("DELETE FROM `ajout_boutik` WHERE id = ?");
//     $supprimer_post->execute([$product_id]);
    
//     if ($supprimer_post->rowCount() > 0) {
//         $_SESSION['success_msg'] = 'Supprimé avec succès!';
//     } else {
//         $_SESSION['warning_msg'] = 'Produit déjà supprimé!';
//     }

//     header("Location: boutique-artisan.php");
//     exit;
// }
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
<style>
    .btn-group{
        text-align:center;
    }
     .btn-group .what-btn {
        background-color: white !important;
       color: #009640 !important;
       display: inline-flex;
       align-items: center;
       font-size: 0.875rem;
       padding: 0.4rem 0.8rem;
       border-radius: 5px;
       border: 2px solid #009640 !important;
   }

  .btn-group .what-btn:hover {
    background-color: #009640 !important;
    color: white !important;
    border: 2px solid #009640;
}
.btn-group .tel-btn {
        background-color: white !important;
       color: #312783;
       display: inline-flex;
       align-items: center;
       font-size: 0.875rem;
       padding: 0.4rem 0.8rem;
       border-radius: 5px;
       border: 2px solid #312783;
   }
   .btn-group a {
        text-decoration:none;
       
        
   }


  .btn-group .tel-btn:hover {
    background-color: #312783!important;
    color: white !important;
    border: 2px solid #312783;
}
</style>
<body>

<!-- section header -->
<?php include 'header-connect.php'; ?>

<section class="tout-savoir">
    <?php
        // Récupérer l'ID de l'artisan depuis l'URL
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $id_artisan = intval($_GET['id']); // Assurez-vous que l'ID est un entier

            // Préparer et exécuter la requête pour récupérer les informations de l'artisan
            $select_artisan = $conn->prepare("SELECT * FROM `inscri_artisan` WHERE id = :id_artisan");
            $select_artisan->execute([':id_artisan' => $id_artisan]);

            if($select_artisan->rowCount() > 0) {
                $artisan = $select_artisan->fetch(PDO::FETCH_ASSOC);

                // Afficher les informations de l'artisan
                echo "<h2 class=\"en-tete\">Bienvenue dans la boutique de <span><p>{$artisan['nom']} {$artisan['prenom']}</p></span></h2>";
            } else {
                echo "<h2 >Aucun artisan trouvé.</h2>";
            }
        } else {
            echo "<h2 >ID de l'artisan non spécifié.</h2>";
        }
    ?>

    <div class="box-container">
        <?php
            if(isset($id_artisan)) {
                $select_boutik = $conn->prepare("SELECT * FROM `ajout_boutik` WHERE id_artisan = :id_artisan");
                $select_boutik->execute([':id_artisan' => $id_artisan]);

                if ($select_boutik->rowCount() > 0) {
                    while ($fetch_artisan = $select_boutik->fetch(PDO::FETCH_ASSOC)) {
        ?>
                        <form action="" method="post" class="actu">
                            <input type="hidden" name="product_id" value="<?= $fetch_artisan['id']; ?>">
                            <img src="upload/<?= $fetch_artisan['img']; ?>" alt="">
                            <div class="detail-sur">
                                <p class="time"><?= date('d-m-Y'); ?></p>
                                <h4><?= $artisan['metier']; ?></h4>
                                <p><?= $artisan['nom'] . ' ' . $artisan['prenom']; ?></p>
                                <h6><?= $fetch_artisan['titre']; ?></h6>
                                <details>
                                    <summary>En savoir plus</summary>
                                    <p><?= $fetch_artisan['desc_article']; ?></p>
                                </details>
                                <div class="btn-group">
                                    <a href="tel:<?= $artisan['num_tel']; ?>" class="tel-btn"><i class="fa-solid fa-phone"></i>Appeller</a>&nbsp;&nbsp;
                                    <a class="what-btn" href="https://api.whatsapp.com/send?phone=225<?= htmlspecialchars($artisan['num_what']); ?>"><i class="fab fa-whatsapp"></i> Discuter</a>
                                </div>
                            </div>
                        </form>
        <?php
                    }
                } else {
                    echo '<p class="vide">Aucun produit !</p>';
                }
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
