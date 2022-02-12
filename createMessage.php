<?php   


require_once "bd.php";

if (isset($_POST['auteurMessagePoste']) && isset($_POST['descriptionMessagePoste']) && !empty(($_POST['auteurMessagePoste'])) && !empty(($_POST['descriptionMessagePoste']))){


    $auteurInput = $_POST['auteurMessagePoste'];
    $descriptifInput = $_POST['descriptionMessagePoste'];


    $auteurInput = htmlspecialchars($auteurInput);
    $descriptifInput = htmlspecialchars($descriptifInput);


    

    $maRequetePoster = "INSERT INTO messages (auteur, description)
    VALUES ('$auteurInput', '$descriptifInput')";

    $verificationRequete = mysqli_query($maConnection, $maRequetePoster);

    header('Location: index.php');

}else {
    header('Location: index.php');
}




















?>