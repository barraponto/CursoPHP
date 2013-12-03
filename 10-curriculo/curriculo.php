<?php

require 'funcoes-auxiliares.php';

$membros = ['capi', 'gus', 'gabi'];

ob_start();

if (!empty($_GET['membro']) && in_array($_GET['membro'], $membros)) {
  require_once $_GET['membro'] . '.php';

  if (!empty($_GET['atuais'])) {
    $experiencia = itens_atuais($experiencia);
    $formacao = itens_atuais($formacao);
  }

  require_once 'curriculo-membro.php';
} else {
  $name = 'Confira os curriculos da nossa equipe';
  require_once 'curriculo-opcoes.php';
}

$conteudo = ob_get_clean();

require_once 'layout.php';
