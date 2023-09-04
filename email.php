<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "atthie27@gmail.com"; 
    $sujet = "Nouveau message de $nom";
    $headers = "De: $email";
    
    mail($to, $sujet, $message, $headers);
    
    header("Location: index.html");
} else {
    echo "Accès non autorisé.";
}
?>
