<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar: Formulário PHP - SQL</title>
</head>

<body>
    <div id="main-container">
        <!-- Brand Area -->
        <span class="brand-area">
            <b class="title">carloc</b>
            <i class="subtitle">aluguel de automóveis</i>
        </span>
        <!-- Formulário -->
        <form method="POST" action="cadastrar.php">
            <!-- Input Area -->
            <label for="nome_locator">Locator</label>
            <input name="nome_locator" placeholder="Nome do locator" minlength="1" maxlength="100" required />

            <label for="cpf_locator">CPF</label>
            <input name="cpf_locator" placeholder="CPF do locator" minlength="11" maxlength="11" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required />

            <label for="placa_veiculo">Placa</label>
            <input name="placa_veiculo" placeholder="Placa do veículo" minlength="7" maxlength="7" required />

            <label for="expiracao_locacao">Alugado até</label>
            <input type="date" name="expiracao_locacao" min="<?php echo date('Y-m-d'); ?>" required />
            <small>* todas as locações expiram ao meio-dia</small>

            <button class="button-form" id="submit-form" type="submit">Cadastrar</button>
        </form>
            <a href="listar.php" style="text-align:center;">Ver registros</a>
            <a href="pesquisa.php" style="text-align:center;">Pesquisar</a>
        <div class="author"><b>marcos</b> <small style="font-size:10px;">2DS</small></div>
    </div>
    </script>
    </body>

</html>