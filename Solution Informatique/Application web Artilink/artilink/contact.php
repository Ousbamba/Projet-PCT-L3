<?php

    include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    }else{
    $user_id = '';
    };

    if (isset($_POST['envoyer'])) {

        $nom = $_POST['nom'];
        $nom = htmlspecialchars($_POST['nom']);
        $email = $_POST['email'];
        $email = htmlspecialchars($_POST['email']);
        $message = $_POST['message'];
        $message = htmlspecialchars($_POST['message']);

        $insert_message = $conn->prepare("INSERT  INTO `contactez_nous`(nom, email, messages) VALUES (?, ?, ?)");
        $insert_message->execute([$nom, $email, $message]);
        $success_msg[] = 'Message envoyé avec succes !';
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
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
        <link rel="stylesheet" href="css/contact.css"> 
    
    <title>Contact - Artilink</title>
</head>
<style>


    </style>
<body>

<!-- header -->
<?php include 'header.php'; ?>
 <!-- fin header -->

 <section class="contact-section">
    <div class="container">
        <h1>Contactez-nous</h1>
        <p>Vous avez une question ou besoin d'assistance ? N'hésitez pas à nous contacter en utilisant le formulaire ci-dessous :</p>
        <form action="" method="POST" class="contact-form">
            <div class="form-group">
                <input type="text" name="nom" placeholder="Votre Nom & Prenoms" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Votre Email" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Votre Message" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer" name="envoyer" class="btn-submit">
            </div>
        </form>
    </div>
</section>


<!-- footer -->
<?php include 'footer.php'; ?>
 <!-- fin footer -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>
