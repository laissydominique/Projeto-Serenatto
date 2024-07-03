<?php
require "src/modelo/Produto.php";
require "src/conexao-bd.php";
require "src/repositorio/ProdutoRepositorio.php";


$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtos = $produtoRepositorio->buscarTodos();
?>

<style>
  table {
    width: 90%;
    margin: auto 0;
  }

  table,
  th,
  td {
    border: 3px solid #000;
    font-size: 20px;
    ;

  }

  table th {
    padding: 11px 0 11px;
    font-weight: bold;
    font-size: 18px;
    text-align: left;
    padding: 8px;
    color: #333b1E;


  }

  table tr {
    border: 1px solid #000;
  }

  table td {
    font-size: 18px;
    padding: 8px;
  }

  .container-admin-banner h1 {
    margin-top: 40px;
    font-size: 30px;
  }
</style>
<table>
  <thead>
    <tr>
      <th>Produto</th>
      <th>Tipo</th>
      <th>Descricão</th>
      <th>Valor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($produtos as $produto) : ?>
      <tr>
        <td><?= $produto->getNome() ?></td>
        <td><?= $produto->getTipo() ?></td>
        <td><?= $produto->getDescricao() ?> </td>
        <td><?= $produto->getPrecoFormato() ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>