<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = "";
$bd = 'crud';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

#UPDATE `dados_alunos` SET `nascimento` = '11/12/1995' WHERE `dados_alunos`.`id` = 1;

$query = 'SELECT id, tarefa, data_tarefa FROM tarefa';
$consulta = mysqli_query($conexao, $query);
