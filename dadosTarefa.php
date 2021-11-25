<?php
include './bancoDados/bancoDados.php';

$nome_tarefa = $_POST['tarefa'];
$data_tarefa = $_POST['data_tarefa'];


$query = "INSERT INTO tarefa(tarefa, data_tarefa)values('$nome_tarefa', '$data_tarefa')";


mysqli_query($conexao, $query);


header('Location: index.php?pagina=home');
