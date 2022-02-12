<?php     
require "bd.php";


if (isset($_POST['supprimerMessage'])){

$id = $_POST['supprimerMessage'];

var_dump($id);



     $supprimerRequete = "DELETE FROM messages WHERE id = $id ";

$reponse = mysqli_query($maConnection,$supprimerRequete);

     header('Location: index.php');



}







?>