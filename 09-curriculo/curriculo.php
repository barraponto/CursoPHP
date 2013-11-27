<?php

$nome = 'Capi Etheriel';
$profissao = 'Designer de Jogos';
$especialidade = 'Jogos Digitais e Design Colaborativo';

$contato = ['Email' => 'mailto:barraponto@gmail.com',
            'Twitter' => 'http://twitter.com/barraponto',
            'Linkedin' => 'http://linkedin.com/in/barraponto',
            'Github' => 'http://github.com/barraponto'];

$formacao = [['inicio' => 2006,
              'termino' => 2012,
              'instituicao' => 'Universidade Estadual de Campinas',
              'ocupacao' => 'Bacharel em Midialogia'],
             ['inicio' => '2013',
              'termino' => FALSE,
              'instituicao' => 'TimTec',
              'ocupacao' => 'Desenvolvimento PHP']];

$experiencia = [['inicio' => 2013,
                 'termino' => FALSE,
                 'instituicao' => 'Rodada Hacker',
                 'ocupacao' => 'Hacker'],
                ['inicio' => '2013',
                 'termino' => FALSE,
                 'instituicao' => 'Quequere Jogos',
                 'ocupacao' => 'Designer de Jogos']];

$portfolio = [['titulo' => 'Rodada Hacker São Paulo',
               'foto' => 'rodada-sp.jpg',
               'ano' => 2013],
              ['titulo' => 'Cara a Cara do Legislativo',
               'url' => 'http://quequere.com.br/caraacara',
               'ano' => 2013]];

$profhabil = ['html' => 100, 'css' => 100, 'javascript' => 60, 'python' => 50];

?>

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
        <span class="small"><?= $item['inicio'] . '&mdash;' . $item['termino'] . ': ' . $item['instituicao'] ?></span>
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
  </div><!-- container -->
  </body>
</html>
