<?php
include 'lib/config.php';

$sql = "SELECT * FROM aluguel";
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
    <title>Listar: Formulário PHP - SQL</title>
</head>

<body>
    <div id="main-container">
        <!-- Brand Area -->
        <span class="brand-area">
            <b class="title">carloc</b>
            <i class="subtitle">registros salvos</i>
        </span>
        <a href="index.php" class="btn btn-outline-success" style="margin-top:10px;">Voltar</a>
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
    </div>
</body>

</html>