<?php
// definition de la fonction both qui contiendra les deux parametre
  function both($chars, $number) {
    // retour de la concaténation
    return $chars. $number;
  };
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exercice 5</title>
  </head>
  <body>
    <p>
      <?php
      //  affichage du résultat
        echo both('Hi', 5);
       ?>
    </p>
  </body>
</html>
