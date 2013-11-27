<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
    <form action="curriculo.php" method="GET">
      <label for="membro">
        Selecione um dos membros para ver seu curriculo.
      </label>
      <select class="form-control" name="membro">
        <?php foreach ($membros as $membro): ?>
          <option value="<?= $membro ?>">
            <?= uc_words($membro) ?>
          </option>
        <?php endforeach; ?>
      </select>
    </form>
    </div><!-- /container -->
  </body>
</html>
