<?php 
include("conecta.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$preco_desc = $_POST['preco_desc'];
$medida = $_POST['medida'];
$txt_area = $_POST['txt_area'];
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$subCategoria = $_POST['subCategoria'];
$estoque = $_POST['estoque'];
$dimensoes = $_POST['dimensoes'];
$imagemProd = $_POST['imagemProd'];


function insereProduto($conexao, $id ,$nome, $codigo, $marca, $preco, $preco_desc, $medida, $txt_area, $categoria, $subCategoria,$estoque, $dimensoes, $imagemProd){
    $query = "insert into produto (id_prod, nome, codigo, marca, preco, preco_desc, medida, txt_area, categoria, subCategoria, estoque, dimensoes, imagemProd) 
    values ({$id}, ,'{$nome}', '{$codigo}', '{$marca}' {$preco}, {$preco_desc}, '{$medida}', '{$txt_area}', '{$categoria}', '{$subCategoria}', '{$estoque}', '{$dimensoes}', '{$imagemProd}');";
    return mysqli_query($conexao, $query);
}