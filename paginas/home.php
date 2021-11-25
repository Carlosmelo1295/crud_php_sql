
<table>

    <tr>
        <th>TAREFA</th>
        <th>QUANDO?</th>
        <th>ID</th>
     

    </tr>
    <?php
    while ($linha = mysqli_fetch_assoc($consulta)) {
        echo '<td>' . $linha['tarefa'] . '</td>';
        echo '<td>' . $linha['data_tarefa'] . '</td>';
        echo '<td>' . $linha['id'] . '</td>';
       
        ?>

        <td> <a href="deletar_tarefa.php?id=<?php echo $linha['id']; ?>"/>Deletar</a> </td></tr>
   
   <?php
    }

    ?>
    
    
