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
    <link rel="stylesheet" href="css/apropos.css">
    <title>Nos Services - Artilink</title>
</head>
<body>
<style>
   

</style>
<!-- debut header -->
<?php include 'header-articonnect.php'; ?>
<!-- fin header -->
<!-- section apropose -->
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="image mb-4 mb-md-0">
                    <img src="./images/about.jpg" alt="À propos d'Artilink" class="img-fluid rounded">
                </div>
            </div>

            <!-- Text Content -->
            <div class="col-md-6">
                <div id="about-content" class="content-section">
                    <h1 class="display-4 mb-3"><span> Artilink :</span> La Révolution Artisanale en Côte d'Ivoire</h1>
                    <p class="lead mb-4">Artilink n'est pas simplement une plateforme ; c'est une révolution dans le monde de l'artisanat ivoirien. Nous avons créé un espace unique où le savoir-faire traditionnel rencontre l'innovation numérique pour offrir une expérience sans précédent aux artisans et à leurs clients.</p>
                </div>
            </div>
        </div>
        <h3 style="">Pourquoi Artilink est unique ?</h3>
        <div class="unique-features">
            <div class="feature">
                <h3>Connectivité Instantanée</h3>
                <p>Grâce à Artilink, vous avez un accès direct aux services des artisans locaux, simplifiant ainsi la recherche et la connexion avec des experts du métier.</p>
            </div>
            <div class="feature">
                <h3>Mise en Valeur du Savoir-Faire</h3>
                <p>Nous mettons en avant le talent et le savoir-faire des artisans ivoiriens, vous offrant une vitrine numérique pour découvrir des créations uniques et authentiques.</p>
            </div>
            <div class="feature">
                <h3>Simplicité et Efficacité</h3>
                <p>Notre plateforme est conçue pour rendre l'expérience utilisateur aussi fluide que possible, vous permettant de trouver rapidement les services dont vous avez besoin et de les commander en quelques clics.</p>
            </div>
        </div>
        <!-- Stats -->
        <div class="stats d-flex justify-content-between">
            <div class="stat text-center">
                <h3 class="display-4 mb-2">500+</h3>
                <p class="lead mb-0">Artisans enregistrés</p>
            </div>
            <div class="stat text-center">
                <h3 class="display-4 mb-2">1000+</h3>
                <p class="lead mb-0">Clients satisfaits</p>
            </div>
            <div class="stat text-center">
                <h3 class="display-4 mb-2">24/7</h3>
                <p class="lead mb-0">Support disponible</p>
            </div>
        </div>
    </div>
</section>
<!-- fin -->
<!--  -->
<?php include 'footer.php'; ?>
<!--  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
