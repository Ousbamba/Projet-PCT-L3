<?php

session_start();
     

include 'components/connect.php';

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
        <!-- CSS -->
        <link rel="stylesheet" href="css/styles.css"> 
    <!-- fin -->
    <title>Artilink</title>
</head>
<style>
 
</style>

<body>
    <!-- debut entete -->
    <?php include 'header.php'; ?>
    <!-- fin entete -->

    <!-- le corps  -->
    <!-- page d'accueil  -->
    <!-- debut section1 -->
    <section class="home">
        <div class="slide active">
            <img src="./images/Bannière.jpg" alt="">
            <div class="content">
                <h2>Bienvenue sur Artilink</h2>
                <h4>Le lien direct avec les artisans ivoiriens.<br> Recherchez, contactez et collaborez avec les
                    meilleurs artisans de Côte d'Ivoire, en un seul clic.</h4>
                <a href="inscription-client.php" class="button">Commencer</a>

            </div>
        </div>
        <div class="slide">
            <img src="./images/art.jpg" alt="">
            <div class="content">
                <h2>La plateforme des Artisans de Côte d'Ivoire</h2>
                <h4>Facilitez vos recherches d'artisans.<br> Trouvez rapidement l'artisan qu'il vous faut et <br>
                    profitez
                    d'un savoir-faire authentique pour vos projets personnalisés.</h4>
                <a href="trouver-artisan.php" class="button">Trouvez un Artisan</a>


            </div>
        </div>
        <div class="slide">
            <img src="./images/menuserie.jpg" alt="">
            <div class="content">
                <h2>La plateforme des Artisans de Côte d'Ivoire</h2>
                <h4>Votre réseau d'artisans ivoiriens.<br> Connectez-vous facilement en mettant vos réalisations en
                    valeurs
                </h4>
                <a href="inscription-artisan.php" class="button">Devenez Artisan sur Artilink</a>
            </div>
        </div>
        <div class="dots">
            <span class="dot active" onclick="showSlide(0)"></span>
            <span class="dot" onclick="showSlide(1)"></span>
            <span class="dot" onclick="showSlide(2)"></span>
        </div>

    </section>
    <!-- fin section1 -->
    <!-- section tout-savoir -->

    <section class="tout-savoir">
        <h1 class="en-tete">Tout savoir sur <span>l'Artisanat</span></h1>
        <div class="box-container">
            <div class="actu">
                <img src="./images/Tissage.jpg" alt="Image 1">
                <div class="flex">
                    <div class="desc_article">
                        <details>
                    <p></p>
                    <p>Le saviez-vous ? L'artisanat en Côte d'Ivoire joue un rôle essentiel dans la préservation des traditions culturelles et dans le développement économique. Les artisans locaux, qu'ils soient tisserands, potiers ou bijoutiers, créent des produits uniques qui racontent l'histoire et la richesse culturelle de la région.</p>
                    <summary>L'Artisanat en Côte d'Ivoire</summary>
                </details></div>
                    <div class="date">
                        <span>15 juillet 2024</span>
                        <span>12h30</span>
                    </div>
                </div>
            </div>
            <div class="actu">
                <img src="images/WhatsAppImage2024-06-2722.07.46_431cd496.jpg" alt="Image 2">
                <div class="flex">
                    <div class="desc_article"><details>
                    <p></p>
                    <p>Le saviez-vous ? De nombreuses techniques artisanales utilisées en Côte d'Ivoire sont transmises de génération en génération. La teinture à l'indigo, le tissage du pagne et la sculpture sur bois sont quelques exemples de savoir-faire qui continuent de prospérer grâce à l'engagement des artisans à préserver leur héritage culturel.</p>
                    <summary>Les Techniques Artisanales Traditionnelles</summary>
                </details></div>
                    <div class="date">
                        <span>16 juillet 2024</span>
                        <span>14h00</span>
                    </div>
                </div>
            </div>
            <div class="actu">
                <img src="images/Bijoux.jpg" alt="Image 3">
                <div class="flex">
                    <div class="desc_article"><details>
                    <p></p>
                    <p>Le saviez-vous ? L'artisanat contribue de manière significative à l'économie locale en Côte d'Ivoire. En achetant des produits artisanaux, les consommateurs soutiennent non seulement les artisans et leurs familles, mais aussi la croissance économique de leur communauté. Cela permet de créer des emplois, de promouvoir le tourisme et de valoriser les ressources locales.</p>
                    <summary>L'Impact Économique de l'Artisanat</summary>
                </details></div>
                    <div class="date">
                        <span>17 juillet 2024</span>
                        <span>16h45</span>
                    </div>
                </div>
            </div>
            <div class="actu hidden">
                <img src="images/Vannerie.jpg" alt="Image 4">
                <div class="flex">
                    <div class="desc_article"><details>
                    <p></p>
                    <p>Le saviez-vous ? La vannerie, cet art ancestral de tressage de fibres naturelles, permet de créer des paniers, des tapis et d'autres objets décoratifs durables et esthétiques. En Côte d'Ivoire, les artisans vanniers perpétuent des techniques traditionnelles tout en innovant avec des designs contemporains, contribuant ainsi à l'économie locale et à la préservation des savoir-faire culturels.</p>
                    <summary>La Vannerie</summary>
                </details></div>
                    <div class="date">
                        <span>17 juillet 2024</span>
                        <span>16h45</span>
                    </div>
                </div>
            </div>
            <div class="actu hidden">
                <img src="images/Bois.jpg" alt="Image 5">
                <div class="flex">
                    <div class="desc_article"><details>
                    <p></p>
                    <p>Le saviez-vous ? La sculpture sur bois en Côte d'Ivoire n'est pas seulement un art, mais aussi une tradition qui allie fonctionnalité et beauté. Les sculpteurs ivoiriens transforment des blocs de bois en meubles, décorations et objets d'art ornés de motifs traditionnels et modernes. Ce savoir-faire unique valorise les ressources naturelles et soutient les communautés artisanales locales.</p>
                    <summary>Le Bois Sculpté</summary>
                </details></div>
                    <div class="date">
                        <span>17 juillet 2024</span>
                        <span>16h45</span>
                    </div>
                </div>
            </div>
            <div class="actu hidden">
                <img src="images/Mode.jpg" alt="Image 5">
                <div class="flex">
                    <div class="desc_article"><details>
                    <p></p>
                    <p>Le saviez-vous ? La mode éthique en Côte d'Ivoire connaît un essor grâce à des artisans couturiers qui marient tradition et innovation. En utilisant des tissus locaux, des teintures naturelles et des techniques de couture artisanales, ces créateurs produisent des vêtements uniques et respectueux de l'environnement. Adopter la mode éthique, c'est soutenir les artisans locaux et promouvoir une consommation durable.</p>
                    <summary>La Mode Éthique</summary>
                </details></div>
                    <div class="date">
                        <span>17 juillet 2024</span>
                        <span>16h45</span>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="voir-plus">Voir plus</a>
    </section>
    <!--  -->
    <section class="main-content">
        <!-- Introduction Section -->
        <div class="ct-section">
            <h2>Pourquoi choisir Artilink ?</h2>
            <p>Artilink vous offre une plateforme simple et efficace pour trouver des artisans qualifiés dans divers
                domaines. Découvrez nos artisans et bénéficiez de services de qualité, adaptés à vos besoins.</p>
        </div>

        <!-- Featured Artisans Section -->
        <div class="section">
            <h2>Artisans en Vedette</h2>
            <div class="box-container">
                <div class="artisan-card">
                    <img src="images/coiffure.jpg" alt="Artisan 1">
                    <div class="details">
                        <h2><a href="detail-sur-artisan.php">Mario Gonzales</a></h2>
                        <p>Coiffure</p>
                        <p>Abidjan</p>
                        <p>10 ans d'expérience</p>
                    </div>
                </div>
                <div class="artisan-card">
                    <img src="images/Plombier.jpg" alt="Artisan 2">
                    <div class="details">
                        <h2><a href="detail-sur-artisan.php">Sophie Duroy</a></h2>
                        <p>Plomberie</p>
                        <p>Yamoussoukro</p>
                        <p>5 ans d'expérience</p>
                    </div>
                </div>
                <div class="artisan-card">
                    <img src="images/Mécanique.jpg" alt="Artisan 2">
                    <div class="details">
                        <h2><a href="detail-sur-artisan.php">Sophie Duroy</a></h2>
                        <p>Mécanique</p>
                        <p>Yamoussoukro</p>
                        <p>5 ans d'expérience</p>
                    </div>

                </div>
                <!-- Ajoutez d'autres cartes d'artisans -->
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="cta-section">
            <h2>Devenez Artisan avec Artilink</h2>
            <p>Inscrivez-vous aujourd'hui pour rejoindre notre réseau d'artisans et accéder à de nombreuses opportunités
                professionnelles.</p>
            <a href="inscription-artisan.php">Devenir Artisan</a>
        </div>
    </section>
    <!--  -->
    <!-- section vidéos sponsorisées -->
    <section class="vedeo-sponsorise">
        <div class="conteneur">
            <div class="row-1">
                <h1 class="en-tete">Vidéos <span>Sponsorise</span></h1>
            </div>
            <div class="box">
                <div class="row-2">
                    <video class="video" controls>
                        <source src="images/Poterie.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la balise vidéo.
                    </video>
                    <h3>Découvrez de jeunes Talents de L'artisanat</h3>
                    <div class="date">20 juillet 2024</div>
                </div>
            </div>
        </div>
    </section>

    <!-- section footer -->
    <?php include 'footer.php'; ?>
    <!--  -->

    <!-- script -->
    <!-- script -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        function showSlide(index) {
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');
            currentSlide = index;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        document.querySelector('.voir-plus').addEventListener('click', function (event) {
            event.preventDefault();

            const hiddenCards = document.querySelectorAll('.actu.hidden');

            hiddenCards.forEach((card, index) => {
                if (index < 3) {
                    card.classList.remove('hidden');
                }
            });

            if (document.querySelectorAll('.actu.hidden').length === 0) {
                document.querySelector('.voir-plus').style.display = 'none';
            }
        });


    </script>
    <!-- fin script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>