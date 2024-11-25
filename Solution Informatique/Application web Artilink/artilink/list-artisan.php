<?php
session_start();
include 'components/connect.php';

// Requête SQL pour récupérer les informations des artisans
$sql_artisans = "SELECT `id`, `nom`, `prenom`, `sexe`, `metier`, `experiences`, `num_tel`, `num_what`, `ville`, `date` FROM `inscri_artisan`";
$stmt_artisans = $conn->prepare($sql_artisans);
$stmt_artisans->execute();
$artisans = $stmt_artisans->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin - Artilink</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <!-- début entête -->
    <?php include 'header-admin.php'; ?>
    <!-- fin entête -->

    <div class="container">
        <div class="table-container">
            <h2>Informations des Artisans</h2>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Métier</th>
                        <th>Expériences</th>
                        <th>Numéro</th>
                        <th>Whatsapp</th>
                        <th>Ville</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($artisans as $artisan): ?>
                        <tr>
                            <td><?= htmlspecialchars($artisan['id']); ?></td>
                            <td><?= htmlspecialchars($artisan['nom']); ?></td>
                            <td><?= htmlspecialchars($artisan['prenom']); ?></td>
                            <td><?= htmlspecialchars($artisan['sexe']); ?></td>
                            <td><?= htmlspecialchars($artisan['metier']); ?></td>
                            <td><?= htmlspecialchars($artisan['experiences']); ?></td>
                            <td><?= htmlspecialchars($artisan['num_tel']); ?></td>
                            <td><?= htmlspecialchars($artisan['num_what']); ?></td>
                            <td><?= htmlspecialchars($artisan['ville']); ?></td>
                            <td><?= htmlspecialchars($artisan['date']); ?></td>
                            <td>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?= htmlspecialchars($artisan['id']); ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal de confirmation -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmation de Suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûr de vouloir supprimer cet artisan ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <a href="#" id="confirmDelete" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Affiche le modal si un message est présent
        document.addEventListener('DOMContentLoaded', function() {
    var deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Button that triggered the modal
        var artisanId = button.getAttribute('data-id'); // Extract info from data-* attributes
        var confirmDelete = document.getElementById('confirmDelete');
        confirmDelete.href = 'supprimer.php?artisan_id=' + artisanId;
    });
});
    </script>
</body>
</html>
