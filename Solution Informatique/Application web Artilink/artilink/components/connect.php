<?php



// Connexion à la base de données
$bd_name = 'mysql:host=localhost;dbname=artilink_bd';
$bd_user_name = 'root';
$bd_user_pass = '';

try {
    $conn = new PDO($bd_name, $bd_user_name, $bd_user_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Journaliser l'erreur au lieu de l'afficher
    error_log('Erreur de connexion : ' . $e->getMessage());
    die('Erreur de connexion à la base de données');
}

function unique_id(){
    return bin2hex(random_bytes(10)); // Génère une chaîne de 20 caractères hexadécimaux
}



// Connexion a la base de donnee

// $bd_name = 'mysql:host=localhost;dbname=artilink_bd';
// $bd_user_name = 'root';
// $bd_user_pass = '';

// try {
//     $conn = new PDO($bd_name, $bd_user_name, $bd_user_pass);
// } catch (PDOException $e) {
//     print'Error :'.$e->getMessage()."</br>";
// }



// function unique_id(){
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < 20; $i++) {
//         $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
//     }
//     return $randomString;
// }


?>