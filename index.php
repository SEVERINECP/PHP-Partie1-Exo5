<?php
$answer = 'yes';
$answer = 'no';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHPPartie1Exo5IfElse</title>
  </head>
  <body>
        <?php
      if ($answer='yes'){
        echo 'Vous avez répondu \'oui\'';
      }else{
        echo 'Vous avez répondu \'non\'';
      }
        ?>
  </body>
</html>
