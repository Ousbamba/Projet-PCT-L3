<?php
    session_start();
     


    include 'components/connect.php';

    

    if (isset($_POST['envoyer'])) {

        $nom = $_POST['nom'];
        $nom = htmlspecialchars($_POST['nom']);
        $email = $_POST['email'];
        $email = htmlspecialchars($_POST['email']);
        $message = $_POST['message'];
        $message = htmlspecialchars($_POST['message']);

        $insert_message = $conn->prepare("INSERT  INTO contactez_nous_arti(nom, email, messages) VALUES (?, ?, ?)");
        $insert_message->execute([$nom, $email, $message]);
        $success_msg[] = 'Message envoyé avec succes !';
    }

?>

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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" href="css/accueil-artisan.css"> 

    <style>
/* Modal overlay */
.modal-overlay {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Overlay semi-transparent */
    z-index: 1000;

}

/* Modal container */
.modales {
    margin-top: 70px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 350px;
    padding: 20px;
    text-align: center;
    position: relative;
}

/* Modal header */
.modales-header {
    margin-bottom: 20px;
}

.modales-header h2 {
    margin: 0;
    font-size: 1.5em;
    color: #333;
}

/* Price container */
.price-container {
    margin: 10px 0;
}

.price {
    font-size: 2em;
    color: #E30613;
    font-weight: bold;
}

/* Welcome icon */
.welcome-icon {
    display: block;
    margin: 10px auto 0;
    width: 50px;
    height: 50px;
}

/* Modal text */
p {
    font-size: 1em;
    color: #666;
    margin: 20px 0;
}

/* Button */
button {
    background-color: #009640;
    border: none;
    color: #fff;
    padding: 10px 20px;
    font-size: 1em;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #E30613;
}


    </style>

    <title>Accueil Artisans - Artilink</title>
</head>
<body>
    <!-- Modal -->
    <div class="modal-overlay" id="modal-overlay">
        <div class="modales">
            <div class="modales-header">
                <h2>Pack Publicitaire Artilink</h2>
                <div class="price-container">
                    <span class="price">0 FCFA</span>
                </div>
                <img src="./images/ar.jpg" alt="Icône de Bienvenue" class="welcome-icon">
            </div>
            <p>Bienvenue sur Artilink ! 🎉 Nous sommes ravis de vous aider à promouvoir votre artisanat. Artilink met à
                votre disposition une plateforme gratuite pour faire connaître vos services et atteindre de nouveaux
                clients. Seules les formations sont payantes. Nous sommes impatients de collaborer avec vous !</p>
            <button id="closeButton">J'adhère</button>
        </div>
    </div>

    <!-- Header -->
    <?php include 'header-articonnect.php'; ?>

    <!-- Main Content -->
    <div class="home">
        <div class="home-overlay"></div>
        <div class="home-content">
            <h2>Bienvenue sur Artilink</h2>
            <p>Découvrez des ressources, des formations et des opportunités pour développer votre métier d'artisan.</p>
            <a href="boutique-artisan.php" class="btn">Gérer ma boutique</a>
        </div>
    </div>

    <!-- News Section -->
    <section class="services">
        <h2 class="en-tete">Arti<span>News</span></h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/a.jpg" alt="Service 1">
                    <h3>L'Artisanat en Côte d'Ivoire : Un Héritage Culturel Riche</h3>
                    <p>L'artisanat en Côte d'Ivoire est profondément enraciné dans les traditions culturelles du pays. Des sculptures en bois aux tissus traditionnels, chaque pièce raconte une histoire unique et perpétue des savoir-faire ancestraux. Les artisans ivoiriens jouent un rôle clé dans la préservation et la transmission de ces compétences à travers les générations.</p>
                </div>
                <div class="swiper-slide">
                    <img src="./images/Lois.jpg" alt="Service 2">
                    <h3>L'Impact Économique de l'Artisanat en Côte d'Ivoire</h3>
                    <p>L'artisanat constitue une source importante de revenus pour de nombreuses familles en Côte d'Ivoire. En offrant des emplois et en soutenant des micro-entreprises locales, l'artisanat contribue au développement économique régional. Les produits artisanaux, souvent exportés, ajoutent également une valeur significative à l'économie nationale.</p>
                </div>
                <div class="swiper-slide">
                    <img src="./images/fruite-item-1.jpg" alt="Service 3">
                    <h3>Les Marchés de l'Artisanat : Découvrez les Joyaux Locaux</h3>
                    <p>Les marchés artisanaux en Côte d'Ivoire sont des lieux vibrants où l'on peut découvrir une variété de produits faits main. Ces marchés, tels que le marché de Treichville à Abidjan, sont réputés pour leurs pièces uniques, allant des bijoux en perles aux objets en cuir. Ils offrent aux visiteurs une chance de rencontrer les artisans et d'apprécier leurs créations en personne.</p>
                </div>
            </div>
            <!-- Ajouter des boutons de navigation si nécessaire -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Actualités Section -->
    <section class="services">
        <h2 class="en-tete">Arti<span>Skills</span></h2>
        <div class="services-container">
            <div class="service">
                <img src="./images/Education.jpg" alt="Service 1">
                <h3>Formations Juridiques</h3>
                <p>Accédez à des formations sur les lois et règlementations en vigueur pour les artisans.</p>
            </div>
            <div class="service">
                <img src="./images/alphabetisation.jpg" alt="Service 2">
                <h3>Alphabétisation</h3>
                <p>Améliorez vos compétences en lecture et écriture pour mieux gérer votre entreprise.</p>
            </div>
            <div class="service">
                <img src="./images/tutoriel.jpg" alt="Service 3">
                <h3>Tutos Pratiques</h3>
                <p>Découvrez des tutoriels pratiques pour perfectionner vos techniques artisanales.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <div class="contact-form">
            <form action="" method="post">
                <h2>Contactez-nous</h2>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
     <!-- JavaScript -->
     <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modalOverlay = document.getElementById('modal-overlay');
            const closeButton = document.getElementById('closeButton');

            closeButton.addEventListener('click', () => {
                modalOverlay.style.display = 'none'; // Cacher la modal lorsque le bouton est cliqué
            });

            modalOverlay.addEventListener('click', (e) => {
                if (e.target === modalOverlay) {
                    modalOverlay.style.display = 'none'; // Cacher la modal en cliquant en dehors
                }
            });
        });
    </script>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
         // Swiper initialization
         var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
      

       
    </script>
</body>
</html>
