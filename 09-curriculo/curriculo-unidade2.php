<?php

$nome = 'Capi Etheriel';
$profissao = 'Designer de Jogos';
$especialidade = 'Jogos Digitais e Design Colaborativo';

$contato = array('Email' => 'mailto:barraponto@gmail.com',
            'Twitter' => 'http://twitter.com/barraponto',
            'Linkedin' => 'http://linkedin.com/in/barraponto',
            'Github' => 'http://github.com/barraponto');

$formacao = array(array('inicio' => 2006,
              'termino' => 2012,
              'instituicao' => 'Universidade Estadual de Campinas',
              'ocupacao' => 'Bacharel em Midialogia'),
             array('inicio' => '2013',
              'termino' => FALSE,
              'instituicao' => 'TimTec',
              'ocupacao' => 'Desenvolvimento PHP'));

$experiencia = array(array('inicio' => 2013,
                 'termino' => FALSE,
                 'instituicao' => 'Rodada Hacker',
                 'ocupacao' => 'Hacker'),
                array('inicio' => '2013',
                 'termino' => FALSE,
                 'instituicao' => 'Quequere Jogos',
                 'ocupacao' => 'Designer de Jogos'));

$portfolio = array(array('titulo' => 'Rodada Hacker São Paulo',
               'foto' => 'rodada-sp.jpg',
               'ano' => 2013),
              array('titulo' => 'Cara a Cara do Legislativo',
               'url' => 'http://quequere.com.br/caraacara',
               'ano' => 2013));

$profhabil = array('html' => 100, 'css' => 100, 'javascript' => 60, 'python' => 50);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?= $nome ?></title>
  </head>
  <body>
    <h1><?= $nome ?></h1>
    <p><?= $profissao . ' &mdash ' . $especialidade ?></p>

    <ul>
      <?php foreach ($contato as $canal => $url): ?>
        <li>
          <a href="<?= $url ?>">
            <?= $canal ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <h2>Formação</h2>
    <?php foreach ($formacao as $curso): ?>
      <?php if (!$curso['termino']) { $curso['termino'] = 'Atual'; } ?>
      <h3><?= $curso['instituicao'] ?></h3>
      <p><?= $curso['inicio'] . '&mdash;' . $curso['termino'] . ' ' . $curso['ocupacao'] ?></p>
    <?php endforeach; ?>

    <h2>Experiência</h2>
    <?php foreach ($experiencia as $curso): ?>
      <h3><?= $curso['instituicao'] ?></h3>
      <?php if (!$curso['termino']) { $curso['termino'] = 'Atual'; } ?>
      <p><?= $curso['inicio'] . '&mdash;' . $curso['termino'] . ' ' . $curso['ocupacao'] ?></p>
    <?php endforeach; ?>

    <h2>Portfolio</h2>
    <?php foreach ($portfolio as $item): ?>

      <?php if (!empty($item['foto'])): ?>
        <figure>
          <img src="<?= $item['foto'] ?>" />
        </figure>
      <?php endif; ?>

      <h3><?= $item['titulo'] . ' &mdash; ' . $item['ano'] ?></h3>

      <?php if (!empty($item['url'])): ?>
        <p>
          <a href="<?= $item['url'] ?>">Ver site</a>
        </p>
      <?php endif; ?>

    <?php endforeach; ?>

  <h2>Proficiências e Habilidades</h2>
    <?php foreach ($profhabil as $habilidade => $valor): ?>
      <div>
        <?= $habilidade . ': ' . $valor . '%' ?>
      </div>
    <?php endforeach; ?>
