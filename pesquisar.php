<?php
include 'lib/config.php';
$param = $_POST['param'];
$sql = "SELECT * FROM aluguel WHERE (placa_veiculo LIKE '%$param%' OR cpf_locator LIKE '%$param%')";
$sqlQuery = mysqli_query($con, $sql);
$resultado = mysqli_fetch_all($sqlQuery);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Atividade PW: Formulário PHP - SQL</title>
</head>

<body>
    <div id="main-container">
        <!-- Brand Area -->
        <span class="brand-area">
            <b class="title">carloc</b>
            <i class="subtitle">aluguel de automóveis</i>
        </span>
        <a href="pesquisa.php" class="btn btn-outline-success" style="margin-top:10px;">Voltar</a>

        <?php
            if (mysqli_num_rows($sqlQuery) == 0) {
        ?> 
        <b style="color:#f00;text-shadow: #00000066 1px 2px;margin-top: 5px;font-size:20px">dados não encontrados</b>
        <?php
            } else {
        ?>

        <table class="table table-hover table-dark table-bordered text-center text-white mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">DataLocação</th>
                    <th scope="col">Placa</th>
                    <th scope="col">CPF_Locador</th>
                    <th scope="col">Expiração</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultado as list($id, $data_locacao, $expiracao_locacao, $cpf_locator, $placa_veiculo)) {
                ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $data_locacao; ?></td>
                        <td><?php echo $placa_veiculo; ?></td>
                        <td><?php echo $cpf_locator; ?></td>
                        <td><?php echo $expiracao_locacao; ?></td>
                        <td><a href="edicao.php?id=<?php echo $id; ?>" class="btn btn-outline-success"><i class="fa fa-edit"></i></a></td>
                        <td><a href="excluir.php?id=<?php echo $id; ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <?php
            }
        ?>
    </div>
</body>

</html>