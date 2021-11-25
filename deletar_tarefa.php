<?php

include './bancoDados/bancoDados.php';

$id_tarefa = $_GET['id'];

$query = "DELETE FROM tarefa WHERE id = $id_tarefa";

mysqli_query($conexao, $query);

header('Location: index.php?pagina=home');