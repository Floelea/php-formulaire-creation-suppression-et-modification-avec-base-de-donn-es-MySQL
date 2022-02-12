<?php
require_once 'logique.php';

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://bootswatch.com/5/sketchy/bootstrap.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">MESSAGES</a>
      </div>
    </nav>

<form action="createMessage.php" method="post" class="d-flex align-items-center justify-content-center flex-column mt-5">

<input type="text" name="auteurMessagePoste"  class="text" placeholder="auteur">
<textarea name="descriptionMessagePoste"  id="" cols="30" rows="10" placeholder="message"></textarea>
<input type="submit">



</form>

  
    <div class="container">

      <?php   foreach ($messages as  $message) {  ?>
        
             

      <hr />
      <h3><?= $message['auteur']  ?></h3>
      <p><?= $message['description']  ?></p>

      <form action="deleteMessage.php" method="post">

<button type="submit" name="supprimerMessage" value="<?= $message['id']?>" >X</button>

</form>


<form action="unMessage.php" >

<button type="submit" name="id" value="<?= $message['id']?>">AFFICHER LE MESSAGE</button>

</form>


      <hr />


      <?php        }         ?>


    </div>
  </body>
</html>
