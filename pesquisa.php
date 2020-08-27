<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Pesquisar: Formulário PHP - SQL</title>
</head>
<body>
    <div id="main-container">
        <!-- Brand Area -->
        <span class="brand-area">
            <b class="title">carloc</b>
            <i class="subtitle">pesquisar registros</i>
        </span>
        <!-- Formulário -->
        <form method="POST" action="pesquisar.php">

            <label>Pesquisar por</label>
            <select name="tipo_pesquisa" id="tipo_pesquisa" onchange="adjustinputs(this)">
                <option value="placa">Placa</option>
                <option value="cpf">CPF</option>
            </select>

            <label class="search-label">Placa</label>
            <input class="search-input" type="text" placeholder="ABC1234" id="param" name="param" maxlength="7" onkeypress required >

            <button class="button-form" id="submit-form" type="submit">Pesquisar</button>
           <a class="button-form" href="index.php" style="background-color:#6666ff;">Voltar</a>
        </form>
        <div class="author"><b>marcos</b> <small style="font-size:10px;">2DS</small></div>
    </div>

</body>
<script>
    function adjustinputs(obj) {
        const label = document.querySelector(`.search-label`)
        const input = document.querySelector(`.search-input`)

        label.innerText = obj.value.replace(/^.(PF)?/ig, c => c.toUpperCase())
        input.value = ''

        const [ ...inputAttrs ] = input.getAttributeNames().filter(att => !['class', 'type', 'id', 'name', 'required'].includes(att))
        
        const newValues = obj.value === 'cpf' 
            ? [ '12345678910', '11', 'return event.charCode >= 48 && event.charCode <= 57']
            : [ 'ABC1234', '7', ''];
        
        inputAttrs.some((c, i) => input.setAttribute(c, newValues[i]))
    }
</script>
</html>