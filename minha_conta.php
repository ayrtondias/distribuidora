<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_conta.css">
    <title>Minha cesta</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    include("logica-usuario.php");

    
    if(isset($_SESSION["success"])) { ?>
        <p class="alert-success"><?=$_SESSION["success"]?></p>
    <?php }

    unset($_SESSION["success"]);

    if(isset($_SESSION["danger"])) { ?>
        <p class="alert-danger"><?=$_SESSION["danger"]?></p>
    <?php } ?>

    <?php
    unset($_SESSION["danger"]); //não mostrar o alerta de "não poder acessar" a pagina home.

    if(usuarioEstaLogado()){
    ?>
    

    <div class="topo">
        <a href="index.php">
            <img class="logo" src="img/dp.png">    
        </a>  
    </div>


    <div class="corpo">
        <div class="opcoes">
        <div class="btn_opcoes">
                <a href="minha_conta.php" style="color: black;">
                    <img class="icones" src="img/icones/172628_user_male_icon.png" alt="">
                    Minha conta
                </a>
            </div>
            <div class="btn_opcoes" style="margin-top: 5px;">
                <a href="" style="color: black;">
                    <img class="icones" src="img/icones/9245770_business_store_buy_online_e_icon.png" alt="">
                    Pedidos
                </a>
            </div>

            <div class="btn_opcoes" style="margin-top: 5px;">
                <a href="" style="color: black;">
                    <img class="icones" src="img/icones/1814104_favorite_heart_like_love_icon.png" alt="">
                    Favoritos
                </a>
            </div>

            <div class="btn_opcoes" style="margin-top: 5px;">
                <a href="" style="color: black;">
                    <img class="icones" src="img/icones/4544838_business_comerce_coupon_delivery_shop_icon.png" alt="">
                    Vales
                </a>
            </div>

            <div class="btn_opcoes" style="margin-top: 5px;">
                <a href="enderecos.php" style="color: black;">
                    <img class="icones" src="img/icones/1814106_location_map_marker_icon.png" alt="">
                    Endereços
                </a>
            </div>

        </div>

        <div class="tela">            
            
        </div>  
    </div>

    <?php }
    else { 
        header('Location: login.php');
    exit();

        ?>

    <?php } ?>

    
</body>
</html>