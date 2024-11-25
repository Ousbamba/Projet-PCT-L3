<?php


session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location:connexion-admin.php");
    exit;
}


include 'components/connect.php';
// Requête SQL pour récupérer les informations des artisans
$sql_artisans = "SELECT `id`, `nom`, `prenom`, `sexe`, `metier`, `experiences`, `num_tel`, `num_what`, `ville`, `date` FROM `inscri_artisan`";
$stmt_artisans = $conn->prepare($sql_artisans);
$stmt_artisans->execute();
$artisans = $stmt_artisans->fetchAll(PDO::FETCH_ASSOC);

// // Requête SQL pour récupérer les informations des clients
$sql_clients = "SELECT `id`, `nom_prenom`,  `num_tel` FROM `users`";
$stmt_clients = $conn->prepare($sql_clients);
$stmt_clients->execute();
$clients = $stmt_clients->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link rel="stylesheet" href="css/admin.css">
    <!-- fin -->
    <title>Super Admin - Artilink</title>
</head>
<style>
  .card  a{
        text-decoration:none !important;
        font-size:15px;
        color:white;
        border:1px solid #F9B233;
        width: 40%;
        height:30px;
        background-color:#F9B233;
        transform:translateX(50%)
    }
</style>

<body>
    <!-- debut entete -->
    <?php include 'header-admin.php'; ?>
    <!-- fin entete -->

    <!-- le corps  -->
    <!-- page d'accueil  -->
    <div class="container">
        <h1 style="color:#F9B233;font-weight:700">Bienvenue sur le Dashboard</h1>
        <div class="main">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <i class="fas fa-users icon"></i>
                        <h3>Nombre d'Artisans inscrits: <span id="artisanCount"><?= count($artisans); ?></span></h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <i class="fas fa-user icon"></i>
                        <h3>Nombre de Clients inscrits: <span id="artisanCount"><?= count($clients); ?></span></h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <i class="fas fa-user icon"></i>
                        <h3>Liste des clients<span id="clientCount"></span></h3>
                        <a href="list-clients.php">Voir la liste</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <i class="fas fa-user icon"></i>
                        <h3>Liste des artisans <span id="clientCount"></span></h3>
                        <a href="list-artisan.php">Voir la liste</a>
                    </div>
                </div>
            </div>
            
        </div>
   </div>
    <!-- debut section1 -->
    
    <!-- section footer -->
    <?php include 'footer.php'; ?>
    <!--  -->

  
    <!-- fin script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>