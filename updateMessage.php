
<?php
require_once 'bd.php';

if(
isset($_POST['idAModifier'])
&& isset($_POST['descriptionAModifier'])
&& !empty($_POST['idAModifier'])
&& !empty($_POST['descriptionAModifier'])){

    
    $id = htmlspecialchars($_POST['idAModifier']);
    $description = htmlspecialchars($_POST['descriptionAModifier']);

    $sql = "UPDATE messages SET description = '$description' WHERE id = '$id'";

    $maRequete = mysqli_query($maConnection, $sql);

    // var_dump($maRequete);
    header("Location: unMessage.php?id=$id");






}










?>


