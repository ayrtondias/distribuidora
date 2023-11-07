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
        <a href="index.php">
            <img class="logo" src="img/dp.png">
        </a>
      

      <div class="div_tela">

      <form method="POST" action="acessoLogin.php">
        <h1 class="text-center" style="color: #0D90C5; margin-top: 20px;">Entrar</h1>
        <div class="form-group mb-2">
            <input type="text" class="form-control" name="email" style="margin-top: 100px;" placeholder="E-mail">
            <input type="password" class="form-control" name="senha" placeholder="Senha">            
            <input type="submit" class="btnLogin" value="Entrar">
        </div>
        

        </form>

            <label class="labCad">Ainda não possui cadastro em nosso site?</label>
            <a type="button" class="btnCad" href="cadastrar.php">Cadastre-se</a>
      
        
        
      </div>

    
</body>
</html>