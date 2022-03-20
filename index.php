<?php
require 'Funcionario.class.php';

$funcionario = new Funcionario();
$funcionario->setNome('Fulano');
$funcionario->setSalarioBase(1000);
$funcionario->setHorasExtras(10);
$funcionario->setValorDaHora(20);

echo $funcionario->getSalarioEfetivo();

