<?php

$membros = ['capi', 'gus', 'gabi'];

if (!empty($_GET['membro']) && in_array($_GET['membro'], $membros)) {
  require_once $_GET['membro'] . '.php';
  require_once 'curriculo-membro.php';
} else {
  require_once 'curriculo-opcoes.php';
}
