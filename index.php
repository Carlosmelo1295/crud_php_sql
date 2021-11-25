<?php
include 'bancoDados/bancoDados.php';
#cabeçalho
include 'header.php';

include 'botao_chamar_form.php';


#conteudo
if (isset($_GET['pagina'])) {

    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}

switch ($pagina) {
    case 'home':
        include 'paginas/home.php';
        include 'inserir_tarefa.php';
        break;
    case 'sobre':
        include 'paginas/sobre.php';
        break;
    case 'contatos':
        include 'paginas/contatos.php';
        break;
}


#Rodapé
include 'footer.php';
