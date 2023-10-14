<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

    <img class="logo" src="img/dp.png">

    <div class="div_tela">
        <h1 style="color: #0D90C5; margin-top: 20px;">Cadastrar</h1>
        <div>
            <div class="form-group mb-2">
                <label for="" class="lab">Nome</label>
                <input type="text" class="form-control" name="nome" style="width: 400px;">
                <label for="" class="lab">Marca</label>
                <input type="text" class="form-control" name="marca" style="width: 400px;">

                <div>
                    <label for="" class="lab">Preço de Padrão</label>
                    <input type="text" class="form-control" name="preco" style="width: 100px;">
                    <label for="" class="lab">Preço com Venda</label>
                    <input type="text" class="form-control" name="preco_desc" style="width: 100px;">
                </div>
                <label for="" class="lab">Unidade de Medida (litros, metros, unidades)</label>
                <input type="text" class="form-control" name="medida" style="width: 400px;">
                <label for="" class="lab">Preço com Venda</label><br>
                <textarea class="txt_area"></textarea>                
            </div>

            <div class="form-group mb-3" style="margin-left: 100px;">
                <label for="" class="lab">Codigo de Referência</label>
                <input type="text" class="form-control" name="codigo" style="width: 400px;">
                <label for="" class="lab">Categoria</label>
                <input type="text" class="form-control" name="categoria" style="width: 400px;">
                <label for="" class="lab">Sub-categoria</label>
                <input type="text" class="form-control" name="subCategoria" style="width: 400px;">
                <label for="" class="lab">Quantidade do estoque atual</label>
                <input type="text" class="form-control" name="estoque" style="width: 400px;">
                <label for="" class="lab">Dimenções</label>
                <input type="text" class="form-control" name="dimensao" style="width: 400px;">
                <label for="" class="lab">Imagens do Produto</label>
                <input type="text" class="form-control" name="imagemProd" style="width: 400px;">                                    
            </div>
        </div>        
    
        <input type="button" class="btnLogin" value="Cadastrar">        
        
    </div>

    
</body>
</html>