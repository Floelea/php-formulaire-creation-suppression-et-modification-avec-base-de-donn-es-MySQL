

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



            

  
                <div class="container">


                    <hr />
                    <h3><?= $message['auteur']  ?></h3>
      


<?php if($modeEdition) { ?>

   

    <form action="updateMessage.php" method='post'>

        <textarea name="descriptionAModifier" id="" cols="30" rows="10">

        <?= $message['description'] ?>
        </textarea>
        <button type="submit" name="idAModifier" value="<?= $message['id'] ?>">ENREGISTREZ LES MODIFICATIONS</button>
    </form>


<?php } else { ?>

    <p><?= $message['description']  ?></p>


    <?php } ?>   

    <form action="deleteMessage.php" method="post">

        <button type="submit" name="supprimerMessage" value="<?= $message['id']?>" >X</button>

    </form>

    <form  >

        <button type="submit" name="id" value="<?= $message['id']?>" >MODIFIER LE MESSAGE</button>
        <input type="hidden" name ="edition" value="">

    </form>

        



      <hr />


    


    </div>
  </body>
</html>


