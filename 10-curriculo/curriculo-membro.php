<div class="jumbotron clearfix">
  <h1>
    Olá, eu sou <?= $nome ?>.
    <span class="small">Eu sou um <?= $profissao ?> com foco em <?= $especialidade ?>.</span>
  </h1>
  <div class="pull-right">
    <?php foreach ($contato as $canal => $url): ?>
      <a class="btn btn-primary btn-lg" href="<?= $url ?>">
        <?= $canal ?>
      </a>
    <?php endforeach; ?>
  </div>
</div>

<div class="row">
  <div class="col-sm-12 col-md-4">
    <h2>Formação e Experiência</h2>
    <?php
      foreach (array_merge($formacao, $experiencia) as $item): ?>
      <?php if (!$item['termino']) { $item['termino'] = 'Atual'; } ?>
      <h3>
        <?= $item['ocupacao'] ?>
        <span class="small">
          <?= $item['inicio'] . '&mdash;' . $item['termino'] . ': ' . $item['instituicao'] ?>
        </span>
      </h3>
    <?php endforeach; ?>
    </div><!-- /col -->

  <div class="col-sm-6 col-md-4">
  <h2>Portfolio</h2>
  <?php foreach ($portfolio as $item): ?>
    <div class="media">

      <?php if (!empty($item['foto'])): ?>
        <figure class="pull-left">
          <img class="media-object" src="<?= $item['foto'] ?>" />
        </figure>
      <?php endif; ?>

      <div class="media-body">
        <h3 class="media-heading">
          <?= $item['titulo'] ?>
            <small>
              <?= $item['ano'] ?>
              <?php if (!empty($item['url'])): ?>
                &mdash;
                <a href="<?= $item['url'] ?>">Ver site</a>
              <?php endif; ?>
            </small>
        </h3>
      </div><!-- /media-body -->

    </div><!-- /media -->
  <?php endforeach; ?>
  </div><!-- /col -->

  <div class="col-sm-6 col-md-4">
  <h2>Proficiências e Habilidades</h2>
    <?php foreach ($profhabil as $habilidade => $valor): ?>
      <div class="progress">
        <div class="progress-bar" style="width:<?= $valor ?>%">
          <?= $habilidade ?>
          <span class="sr-only"><?= $habilidade . ': ' . $valor . '%' ?></span>
        </div>
      </div>
    <?php endforeach; ?>
  </div><!-- col -->
</div><!-- row -->
