<?php

$membros = ['capi', 'gus', 'gabi'];

ob_start();

if (!empty($_GET['membro']) && in_array($_GET['membro'], $membros)) {
  require_once $_GET['membro'] . '.php';
  require_once 'curriculo-membro.php';
} else {
  $name = 'Confira os curriculos da nossa equipe';
  require_once 'curriculo-opcoes.php';
}

$conteudo = ob_get_clean();

require_once 'layout.php';
