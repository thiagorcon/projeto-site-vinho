<script>
    function excluir(id) {
        if (confirm('deseja realmente excluir esse produto?')) {
            location.href = 'excluir.php?id=' + id;
        }

    }
</script>
<?php


// montar instrução para trazer todo produto
$sql = "select *from produto";
// abrir conexao com o banco

include_once '../fonte/conexao.php';


// executar a consulta ao banco de dados
$rs = mysqli_query($con, $sql);

if (mysqli_num_rows($rs) > 0) { ?>
    <table class="table table-stiped">
        <tr>
            <td>Id de Venda</td>
            <td>produto</td>
            <td>Quantidade</td>
            <td>Valor unitário</td>
            <td>Valor Total</td>
            <td>Excluir</td>
            <td>Editar</td>
        </tr>
        <?php


        while ($row = mysqli_fetch_array($rs)) {
        ?>

            <tr>
                <td><?php echo $row["idvenda"]; ?></td>
                <td><?php echo $row["produto"]; ?></td>
                <td><?php echo $row["quantidade"]; ?></td>
                <?php
// resgatar os dados da tela
$id = $_POST["idvenda"];
$selecao = $_POST["selecao"];
$quantidade = $_POST["quantidade"];


// montar o sql da atualização

$sql = "UPDATE produto set Produto = ' ".$selecao." ', Quantidade  = ' ".$quantidade." ', where idproduto =".$id;

//abrir conexao com o banco de dados
include_once'../fonte/conexao.php';

//executar
if(mysqli_query($con,$sql)){
    $msg = "atualizado com sucesso!";
}else{
    $msg = "erro ao atualizar.";
}

mysqli_close($con);

echo"<script>
alert('".$msg."');
location.href='consultar.php';
</script>"

?>
                <td><?php echo $row["Valor_total"]; ?></td>
                <td>
                    <a href="#" onclick="excluir(<?php echo $row["idvenda"]; ?>)">
                        <button type="button" class="btn btn-danger">
                            Excluir
                        </button>
                    </a>
                </td>

                <td>
                    <!-- está levando o ?id -->
                    <a href="editar.php?id=<?php echo $row["idvenda"]; ?>">
                        <button type="button" class="btn btn-success">
                            Editar
                        </button>
                    </a>
                </td>
            </tr>

    <?php
        }
    } else {
        echo "Nenhum produto cadastrado!";
    }

    // fecha a conexao com o banco

    mysqli_close($con);


    
    ?>