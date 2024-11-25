<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location:connexion-client.php");
    exit;
}

include "components/connect.php";

// Déterminer le point de départ pour la pagination
$start = isset($_POST['start']) ? intval($_POST['start']) : 0;
$limit = 4; // Nombre d'articles à afficher par chargement

// Fonction de récupération des articles
function getArticles($conn, $start, $limit, $query = '') {
    $sql = "SELECT * FROM `inscri_artisan`";
    if ($query) {
        $sql .= " WHERE CONCAT_WS(' ', nom, prenom, metier, ville, experiences) LIKE :query";
    }
    $sql .= " ORDER BY `date` DESC LIMIT $start, $limit";
    
    $stmt = $conn->prepare($sql);
    
    if ($query) {
        $stmt->bindValue(':query', '%' . $query . '%');
    }
    
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Traitement de la recherche
$search_query = isset($_POST['query']) ? $_POST['query'] : '';

// Récupérer les articles
$articles = getArticles($conn, $start, $limit, $search_query);

// Si c'est une requête AJAX, envoyer les articles en réponse
if (isset($_POST['start'])) {
    echo json_encode([
        'articles' => $articles
    ]);
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>ArtiServices</title>
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" href="css/trouver-artisan.css"> 
</head>
<body>
  <!-- début entête -->
  <?php include 'header-articonnect.php'; ?>
  <!-- fin entête -->
  <section class="tout-savoir">
      <h2 class="en-tete"><span>Tous</span> les artisans inscrits</h2>

      <div class="filtre">
          <div class="search-container">
          <i class="fas fa-search search-icon"></i>
              <input type="text" class="search-input" id="search" placeholder="Recherche...">
          </div>
      </div>

    <div id="articles-container" class="box-container">
        <!-- Ne pas inclure les articles ici pour éviter le doublon -->
    </div>

      <button id="load-more" class="load-more-btn">Voir plus</button>
  </section>
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    let start = 0;
    const limit = 4; // Nombre d'articles à afficher par chargement
    const $articlesContainer = $('#articles-container');
    const $loadMoreBtn = $('#load-more');

    // Fonction pour charger les articles
    function loadArticles(query = '') {
        $.ajax({
            type: 'POST',
            url: '', // L'URL du script PHP actuel
            data: {
                start: start,
                limit: limit,
                query: query // Inclure la requête de recherche si elle existe
            },
            dataType: 'json',
            success: function(response) {
                const articles = response.articles;
                // Ajouter chaque nouvel article au conteneur sans réécrire le HTML existant
                articles.forEach(article => {
                    $articlesContainer.append(`
                        <div class="actu">
                            <img src="./upload/${article.images}" alt="">
                            <div class="detail-sur">
                                <p class="nom">${article.nom} ${article.prenom}</p>
                                <h6><a href="detail-sur-artisan.php">${article.metier}</a></h6>
                                <h5>Ville ou Commune : ${article.ville}</h5>
                                <p>Experiences : ${article.experiences}</p>
                                <div class="btn-group">
                                    <a href="./boutique-client.php?id=${article.id}" class="btn-tel"><i class="fas fa-store"></i> Voir Boutique</a>
                                    <a href="https://api.whatsapp.com/send?phone=225${article.num_what}" class="what-btn"><i class="fab fa-whatsapp"></i> Discuter</a>
                                </div>
                            </div>
                        </div>
                    `);
                });
                start += limit;
                if (articles.length < limit) {
                    $loadMoreBtn.hide(); // Masquer le bouton si moins d'articles sont renvoyés
                }
            }
        });
    }

    // Charger les articles au démarrage
    loadArticles();

    // Événement de clic sur le bouton "Voir plus"
    $loadMoreBtn.on('click', function() {
        loadArticles($('#search').val());
    });

    // Événement de recherche
    $('#search').on('keyup', function() {
        start = 0;
        $articlesContainer.empty(); // Vider le conteneur des articles pour la nouvelle recherche
        loadArticles($(this).val());
    });
});
</script>
</body>
</html>
