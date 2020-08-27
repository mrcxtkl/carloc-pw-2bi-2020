<?php
  include "lib/config.php";

  foreach ($_POST as $i => $value) {
    $$i = trim(strip_tags($value));
  }

  $sql = "UPDATE aluguel SET expiracao_locacao = '$expiracao_locacao', cpf_locator = $cpf_locator, placa_veiculo = '$placa_veiculo' WHERE id = $id";
  $sqlUpdate = mysqli_query($con, $sql);
?>
<script>alert('Registro alterado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=listar.php">