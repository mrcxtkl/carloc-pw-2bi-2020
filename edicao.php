<?php
include 'lib/config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM aluguel WHERE id = $id";
$sqlQuery = mysqli_query($con, $sql);

list($id, $data_locacao, $expiracao_locacao, $cpf_locator, $placa_veiculo) = mysqli_fetch_row($sqlQuery);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Editar: Formulário PHP - SQL</title>
</head>

<body>

    <div id="main-container">
        <!-- Brand Area -->
        <span class="brand-area">
            <b class="title">carloc</b>
            <i class="subtitle">edição</i>
        </span>
        <!-- Formulário -->
        <form method="POST" action="editar.php">
            <!-- Input Area -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <label for="cpf_locator">CPF</label>
            <input name="cpf_locator" placeholder="CPF do locator" value="<?php echo $cpf_locator; ?>" minlength="11" maxlength="11" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required />

            <label for="placa_veiculo">Placa</label>
            <input name="placa_veiculo" placeholder="Placa do veículo" value="<?php echo $placa_veiculo; ?>" minlength="7" maxlength="7" required />

            <label for="expiracao_locacao">Alugado até</label>
            <input type="date" name="expiracao_locacao" min="<?php echo date('Y-m-d'); ?>" value="<?php echo $expiracao_locacao; ?>" required />
            <small>* todas as locações expiram ao meio-dia</small>

            <button class="button-form" id="submit-form" type="submit">Editar</button>
        </form>
            <a href="listar.php" style="text-align:center;">Ver registros</a>
            <a href="pesquisa.php" style="text-align:center;">Pesquisar</a>
        <div class="author"><b>marcos</b> <small style="font-size:10px;">2DS</small></div>
    </div>

    </body>

</html>