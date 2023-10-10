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

if(inserCategoria($conexao, $id, $categoria,)){
    function buscaCategoria($conexao, $id){
        $query = "select * from cliente where id = {$id};";
        $resultado = mysqli_query($conexao, $query);
        $cliente = mysqli_fetch_assoc($resultado);
    
        return $cliente;
    }

}


function inserCategoria($conexao, $categoria,){
    $query = "insert into categoria (nome) values ('{$categoria}');";
    $id_cat = mysqli_insert_id($conexao);
    return mysqli_query($conexao, $query);
    return $id_cat;
}
function inserSubCategoria($conexao, $novo_id, $subCategoria,){
    $query = "insert into sub_categoria (nome, id_cat) values ('{$subCategoria}', '{$novo_id}');";
    $id_subCat = mysqli_insert_id($conexao);
    return mysqli_query($conexao, $query);
    return $id_subCat;
}
function insereProduto($conexao ,$nome, $codigo, $marca, $preco, $preco_desc, $medida, $txt_area, $estoque, $dimensoes, $imagemProd, $id_cat, $id_subCat){
    $query = "insert into produto (nome, codigo, marca, preco, precoDesc, medida, txt_area, estoque, dimensoes, imagemProd, id_cat, id_subCat) 
    values ('{$nome}', '{$codigo}', '{$marca}' {$preco}, {$preco_desc}, '{$medida}', '{$txt_area}', '{$estoque}', '{$dimensoes}', '{$imagemProd}', '{$id_cat}', '{$id_subCat}');";
    return mysqli_query($conexao, $query);
}
