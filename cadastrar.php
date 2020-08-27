<?php
  include "lib/config.php";

  foreach ($_POST as $i => $value) {
    $$i = trim(strip_tags($value));
  }

  $cpf_locator = intval($cpf_locator);
  $date = date('Y-m-d');

  $sql = "INSERT INTO aluguel VALUES(0, '$date', '$expiracao_locacao', $cpf_locator, '$placa_veiculo')";
  $sqlInsert = mysqli_query($con, $sql);
    
?>
<script>alert('Cadastro efetuado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=listar.php">