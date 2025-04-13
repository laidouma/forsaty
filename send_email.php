<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse du destinataire (ton email)
    $to = "groupforsaty@gmail.com";

    // Sujet de l'email
    $subject = "Nouveau message via le formulaire de contact Forsaty";

    // Corps du message
    $body = "Nom : $name\nEmail : $email\n\nMessage :\n$message";

    // En-têtes
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Merci ! Votre message a bien été envoyé.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer plus tard.";
    }
}
?>
