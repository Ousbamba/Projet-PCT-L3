<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <!-- Swiper CSS -->
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
        <link rel="stylesheet" href="css/formation.css"> 
    <style>
        /* Général */
     
    </style>
    <title>Formations - Artilink</title>
</head>
<body>


 <!-- Header -->
 <?php include 'header-articonnect.php'; ?>
    <!-- Main Content -->
     <!-- section -->
<section class="formations">
<h2 class="en-tete">Arti<span>Skills</span></h2>
    <p>Découvrez nos formations sur les lois, règlements, alphabétisations et tutoriels pour vous aider dans votre métier.</p>
    <div class="box-container">
        <div class="formation">
            <img src="./images/b.jpg" alt="Formation 1">
            <div class="flex">
                <div class="title">Formation sur les lois et règlements</div>
                <div class="description">Apprenez les règles essentielles pour exercer votre métier en toute conformité.</div>
                <div class="date">Prochainement</div>
            </div>
        </div>
        <div class="formation">
            <img src="./images/alphabetisation.jpg" alt="Formation 2">
            <div class="flex">
                <div class="title">Formation en alphabétisation</div>
                <div class="description">Améliorez vos compétences de lecture et d'écriture pour une meilleure communication avec vos clients.</div>
                <div class="date">Prochainement</div>
            </div>
        </div>
        <div class="formation">
            <img src="./images/a.jpg" alt="Formation 3">
            <div class="flex">
                <div class="title">Tutoriels pratiques</div>
                <div class="description">Explorez des tutoriels pratiques pour perfectionner vos techniques et services.</div>
                <div class="date">Prochainement</div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
    <!--  -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
