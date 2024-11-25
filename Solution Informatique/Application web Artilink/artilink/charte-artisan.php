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
        <link rel="stylesheet" href="css/charte-artisan.css"> 
    <style>
      
    </style>
    <title>Charte d'Utilisation</title>
</head>
<body>
 <!-- debut entete -->
 <?php include 'header.php'; ?>
    <!-- fin entete -->
<div class="charte-container">
    <h1>Charte d'Utilisation d'Artilink</h1>
    
    <h2>1. Introduction</h2>
    <p>Bienvenue sur Artilink, la plateforme dédiée à la promotion des artisans en Côte d'Ivoire. En utilisant notre site web, vous acceptez de respecter les présentes conditions d'utilisation. Cette charte vise à garantir une utilisation sécurisée et respectueuse de la plateforme pour tous les utilisateurs.</p>

    <h2>2. Définitions</h2>
    <ul>
        <li><strong>Artilink</strong> : La plateforme web de promotion des artisans.</li>
        <li><strong>Utilisateur</strong> : Toute personne utilisant la plateforme, qu'elle soit artisan ou client.</li>
        <li><strong>Artisan</strong> : Toute personne inscrite sur Artilink pour promouvoir ses services.</li>
        <li><strong>Client</strong> : Toute personne utilisant la plateforme pour rechercher des services artisanaux.</li>
    </ul>

    <h2>3. Conditions d'Utilisation</h2>
    <h3>3.1 Inscription et Compte</h3>
    <ul>
        <li>Pour devenir artisan sur Artilink, vous devez créer un compte et fournir des informations exactes et complètes.</li>
        <li>Vous êtes responsable de la sécurité de votre compte et de la confidentialité de votre mot de passe.</li>
        <li>L'inscription est ouverte uniquement aux personnes âgées de 18 ans et plus.</li>
    </ul>

    <h3>3.2 Comportement des Utilisateurs</h3>
    <ul>
        <li>Les utilisateurs doivent utiliser la plateforme de manière légale et respectueuse.</li>
        <li>Il est interdit de publier du contenu offensant, diffamatoire, ou inapproprié.</li>
        <li>Les utilisateurs doivent respecter les droits des autres utilisateurs et les lois en vigueur.</li>
    </ul>

    <h3>3.3 Propriété Intellectuelle</h3>
    <ul>
        <li>Les contenus et matériaux présents sur Artilink sont protégés par les lois sur la propriété intellectuelle.</li>
        <li>Vous ne pouvez pas utiliser ces contenus sans autorisation préalable d'Artilink ou des titulaires des droits.</li>
    </ul>

    <h2>4. Droits et Obligations des Utilisateurs</h2>
    <ul>
        <li>Les artisans doivent fournir des services de qualité et respecter leurs engagements envers les clients.</li>
        <li>Les utilisateurs doivent signaler tout contenu ou comportement inapproprié sur la plateforme.</li>
        <li>Les utilisateurs sont responsables des informations qu'ils publient et de leurs interactions sur la plateforme.</li>
    </ul>

    <h2>5. Droits et Obligations d'Artilink</h2>
    <ul>
        <li>Artilink s'engage à protéger les données personnelles des utilisateurs conformément à notre politique de confidentialité.</li>
        <li>Artilink se réserve le droit de modifier ou de suspendre des comptes en cas de non-respect des conditions d'utilisation.</li>
        <li>Artilink peut effectuer des modifications sur la plateforme pour améliorer les services ou se conformer aux exigences légales.</li>
    </ul>

    <h2>6. Sécurité et Confidentialité</h2>
    <ul>
        <li>Artilink met en œuvre des mesures de sécurité pour protéger les informations des utilisateurs.</li>
        <li>Les utilisateurs sont responsables de la sécurité de leurs informations de connexion.</li>
        <li>Les données personnelles des utilisateurs ne seront pas partagées avec des tiers sans leur consentement, sauf en cas de nécessité légale.</li>
    </ul>

    <h2>7. Sanctions et Résiliation</h2>
    <ul>
        <li>En cas de non-respect de la charte, Artilink se réserve le droit de suspendre ou de résilier le compte de l'utilisateur fautif.</li>
        <li>Les utilisateurs peuvent résilier leur compte à tout moment en contactant le support d'Artilink.</li>
    </ul>

    <h2>8. Modifications de la Charte</h2>
    <ul>
        <li>Artilink peut modifier cette charte d'utilisation à tout moment. Les modifications seront notifiées aux utilisateurs via le site web et prendront effet immédiatement.</li>
        <li>Les utilisateurs sont invités à consulter régulièrement la charte pour se tenir informés des mises à jour.</li>
    </ul>

    <h2>9. Contact</h2>
    <ul>
        <li>Email : <a href="mailto:contact@artilink.ci">contact@artilink.ci</a></li>
        <li>Téléphone : +225 07-48-00-43-19</li>
        <li>Adresse : Rue des Artisans, Abidjan, Côte d'Ivoire</li>
    </ul>

    <div class="modal"> 
    <button id="closeButton">J'adhère</button>
    </div>
</div>
 <!-- section footer -->
 <?php include 'footer.php'; ?>
    <!--  -->
 <!-- fin script -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script>
        document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('modalOverlay').style.display = 'none';
        });
    </script>
</body>
</html>
