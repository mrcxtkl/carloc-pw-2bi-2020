<?php
include 'lib/config.php';

$id = $_GET['id'];
$sql = "DELETE FROM aluguel WHERE id = $id";

$sqlDelete = mysqli_query($con, $sql);
?>

<script>alert('Registro removido com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=listar.php">