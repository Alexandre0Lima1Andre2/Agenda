<?php include_once "header.php" ?>
<?php include_once "conexao.php" ?>
<div id="geral">
    <?php
    $dados=$conn->query('select * from Tarefa');
    while($row=$dados->fetch(PDO::FETCH_OBJ)){
        
        echo $row->descricao_tarefa.'<br>';
        ?>
        <div class="hidden">
        <?php
        echo 'Inicio: '.$row->data_inico_tarefa.'<br>';
        echo 'Fim:'.$row->data_fim_tarefa.'<br><br>';
        ?>
        </div><div id="color"></div>
        <?php
       
    }
    ?>
    </div>
<?php include_once "footer.php" ?>


<?php?>