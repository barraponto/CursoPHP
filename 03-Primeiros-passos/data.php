<?php $texto = "Oi Mundo!"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Data de Hoje</title>
  </head>
  <body>
  <p>
    <?php
      // print date('j/m'); // Vai imprimir no formato 19/03.
      print date('j \d\e F'); // Vai imprimir no formato 19 de Março.
    ?></p>
  </body>
</html>
