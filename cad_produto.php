<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_adm.css">
    <title>Cadastrar Produto</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="topo">
      <img class="logo" src="img/dp.png">
    </div>
    <div class="tela-principal">
        <div class="menu_lateral">
            <div class="Box-menu">Novos pedidos</div>
            <div class="Box-menu">Pedidos</div>
            <div class="Box-menu">Cadastrar produtos</div>
            <div class="Box-menu">Produtos</div>
            <div class="Box-menu">Promoções</div>
        </div>

        <div class="tela-info">
            <h1>Cadastrar produtos</h1>
            <hr class="linha">

            <div class="form-group mb-2">
                <label for="">Nome</label>
                <input type="text" class="form-control" name="nome" style="width: 400px;">
                <label for="">Marca</label>
                <input type="text" class="form-control" name="marca" style="width: 400px;">
                <div >
                    <label for="">Preço de Padrão</label>
                    <input type="text" class="form-control" name="preco" style="width: 100px;">
                    <label for="">Preço com Venda</label>
                    <input type="text" class="form-control" name="preco-desc" style="width: 100px;">
                </div>
                <label for="">Unidade de Medida (litros, metros, unidades)</label>
                <input type="text" class="form-control" name="medida" style="width: 400px;">

                
            </div>

        </div>
    </div>
    
</body>
</html>