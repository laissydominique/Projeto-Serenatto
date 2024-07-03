<?php

require "src/modelo/Produto.php";
require "src/conexao-bd.php";
require "src/repositorio/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_POST['id']);

header("Location: admin.php");