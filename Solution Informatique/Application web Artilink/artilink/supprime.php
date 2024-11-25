<!-- clients -->

<?php
include 'components/connect.php';

// Vérifiez si l'ID du client est passé en paramètre
if (isset($_GET['client_id'])) {
    $id = $_GET['client_id'];

    // Requête SQL pour supprimer le client
    $sql_delete = "DELETE FROM `users` WHERE `id` = :id";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt_delete->execute()) {
        $_SESSION['message'] = 'Client supprimé avec succès';
    } else {
        $_SESSION['error'] = 'Erreur lors de la suppression de client';
    }
}

// Redirection vers la page d'origine
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>

?>