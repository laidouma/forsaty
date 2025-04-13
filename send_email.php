<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données envoyées par le formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // L'adresse email du destinataire
    $to = "ton-email@exemple.com";  // Remplace par ton adresse email

    // Sujet du mail
    $subject = "Nouveau message de contact depuis le site web";

    // Corps du message
    $body = "Vous avez reçu un nouveau message de la part de $name ($email) :\n\n$message";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        // Message de confirmation si l'email est envoyé avec succès
        echo "Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.";
    } else {
        // Message d'erreur si l'envoi échoue
        echo "Désolé, une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer plus tard.";
    }
}
?>
