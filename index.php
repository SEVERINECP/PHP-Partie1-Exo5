<?php
//Déclaration d'une seule variable est suffisante dans ce cas
$answer = 'non';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHPPartie1Exo5IfElse</title>
  </head>
  <body>
    <p>
      <?php
        if ($answer=='yes'){
          echo 'Vous avez répondu \'oui\'';
        }else{
          echo 'Vous avez répondu \'non\'';
        }
      ?>
    </p>
    // On peut aussi coder ainsi, et c'est mieux! Car le texte est inscrit dans le html
    <?php
    // Déclaration de l'instruction if. Si la réponse est oui alors on affiche le message suivant(vous avez...)
    if ($answer=='Oui'){
      ?>
      <p>Vous avez répondu oui</p>
      <?php
    // Sinon la réponse est non alors on affiche le message suivant (vous avez...)
    }else{
      ?>
      <p>Vous avez répondu non</p>
    <?php } ?>
  </body>
</html>
