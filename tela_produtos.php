<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        $(".wish-icon i").click(function(){
          $(this).toggleClass("fa-heart fa-heart-o");
        });
      });
      
      var stars = document.querySelectorAll('.star-icon');
                  
      document.addEventListener('click', function(e){
        var classStar = e.target.classList;
        if(!classStar.contains('ativo')){
          stars.forEach(function(star){
            star.classList.remove('ativo');
          });
          classStar.add('ativo');
          console.log(e.target.getAttribute('data-avaliacao'));
        }
      });
    </script>

</head>
<body>
    <div class="topo">
      <img class="logo" src="img/dp.png">
      
        <div class="search-box">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <img src="img/icones/search.png" class="search-icon" alt="">
            </form>
        </div>
    </div>
  


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFF112; width: 100vw">
  <div class="dropdown">
    <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #FFF112; border: none; color:black">
      <span class="navbar-toggler-icon"></span>
      CATEGORIAS
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">PISOS E REVESTIMENTOS</a>
      <hr>
      <a class="dropdown-item" href="#">FERRAMENTAS</a>
      <hr>
      <a class="dropdown-item" href="#">ELÉTRICA</a>
      <hr>
      <a class="dropdown-item" href="#">ASSETAMENTO E REJUNTAMENTO</a>
      <hr>
      <a class="dropdown-item" href="#">BANHEIRO</a>
      <hr>
      <a class="dropdown-item" href="#">COZINHA E LAVANDERIA</a>
      <hr>
      <a class="dropdown-item" href="#">FERRAGENS</a>
      <hr>
      <a class="dropdown-item" href="#">HIDRÁULICA</a>
      <hr>
      <a class="dropdown-item" href="#">ILUMINAÇÃO</a>
      <hr>
      <a class="dropdown-item" href="#">PINTURA</a>
      <hr>
      <a class="dropdown-item" href="#">PORTAS E JANELAS</a>
    </div>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">PISOS E REVESTIMENTOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FERRAMENTAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ELÉTRICA</a>
      </li>
    </ul>
  </div>
</nav>

<h1 class="cat">PISOS E REVESTIMENTOS</h1>

<div class="corpo"> 
  <div class="subCat">
    <ul class="textop">Sub-categorias

      <li class="texcorpo">Porcelanato ()</li>
      <li class="texcorpo"> ()</li>
      <li class="texcorpo"> ()</li>
      <li class="texcorpo"> ()</li>
      <li class="texcorpo"> ()</li>
    </ul>
    <br>
    <ul class="textop">Marcas
      <li class="texcorpo"> ()</li>
      <li class="texcorpo"> ()</li>
      <li class="texcorpo"> ()</li>
      <li class="texcorpo"> ()</li>
    </ul>
  </div>              

 



  <div class="container-fluid ml-0">
  <div class="row"></div>
    <div class="row">

      <div class="col-xl-2 col-lg-3 col-md-6 col-sm-8  align-items-stretch">
          <div class="card text-left bg-light">
            <a href="" class="position-absolute right-0 p-2 text-danger">
              <svg class="bi" width="24" height="24" fill="currentColor">
                <use xlink:href="/bi.svg#suit-heart" />
              </svg>
            </a>

            <img class="card-img-top" src=".../100px180/" alt="Imagem do card">

            <div class="descricao">
              <label class="card_text">Nome do Produto</label>

              <ul class="avaliacao">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
              </ul>
              <div class="valores">
                <label class="v_antigo"><s>R$ 399,90</s></label>
                <label class="v_novo">R$ 299,90</label>
                <label class="parcelas">10x de R$ 29,99</label>
              </div>
            </div>
          </div>
      </div>


      <div class="col-xl-2 col-lg-3 col-md-6 col-sm-8  align-items-stretch">
          <div class="card text-left bg-light">
            <a href="" class="position-absolute right-0 p-2 text-danger">
              <svg class="bi" width="24" height="24" fill="currentColor">
                <use xlink:href="/bi.svg#suit-heart" />
              </svg>
            </a>

            <img class="card-img-top" src=".../100px180/" alt="Imagem do card">

            <div class="descricao">
              <label class="card_text">Nome do Produto</label>

              <ul class="avaliacao">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
              </ul>
              <div class="valores">
                <label class="v_antigo"><s>R$ 399,90</s></label>
                <label class="v_novo">R$ 299,90</label>
                <label class="parcelas">10x de R$ 29,99</label>
              </div>
            </div>
          </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-6 col-sm-8  align-items-stretch">
          <div class="card text-left bg-light">
            <a href="" class="position-absolute right-0 p-2 text-danger">
              <svg class="bi" width="24" height="24" fill="currentColor">
                <use xlink:href="/bi.svg#suit-heart" />
              </svg>
            </a>

            <img class="card-img-top" src=".../100px180/" alt="Imagem do card">

            <div class="descricao">
              <label class="card_text">Nome do Produto</label>

              <ul class="avaliacao">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
              </ul>
              <div class="valores">
                <label class="v_antigo"><s>R$ 399,90</s></label>
                <label class="v_novo">R$ 299,90</label>
                <label class="parcelas">10x de R$ 29,99</label>
              </div>
            </div>
          </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-6 col-sm-8  align-items-stretch">
          <div class="card text-left bg-light">
            <a href="" class="position-absolute right-0 p-2 text-danger">
              <svg class="bi" width="24" height="24" fill="currentColor">
                <use xlink:href="/bi.svg#suit-heart" />
              </svg>
            </a>

            <img class="card-img-top" src=".../100px180/" alt="Imagem do card">

            <div class="descricao">
              <label class="card_text">Nome do Produto</label>

              <ul class="avaliacao">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
              </ul>
              <div class="valores">
                <label class="v_antigo"><s>R$ 399,90</s></label>
                <label class="v_novo">R$ 299,90</label>
                <label class="parcelas">10x de R$ 29,99</label>
              </div>
            </div>
          </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-6 col-sm-8 align-items-stretch">
          <div class="card text-left bg-light">
            <a href="" class="position-absolute right-0 p-2 text-danger">
              <svg class="bi" width="24" height="24" fill="currentColor">
                <use xlink:href="/bi.svg#suit-heart" />
              </svg>
            </a>

            <img class="card-img-top" src=".../100px180/" alt="Imagem do card">

            <div class="descricao">
              <label class="card_text">Nome do Produto</label>

              <ul class="avaliacao">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
              </ul>
              <div class="valores">
                <label class="v_antigo"><s>R$ 399,90</s></label>
                <label class="v_novo">R$ 299,90</label>
                <label class="parcelas">10x de R$ 29,99</label>
              </div>
            </div>
          </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-6 col-sm-8 align-items-stretch">
          <div class="card text-left bg-light">
            <a href="" class="position-absolute right-0 p-2 text-danger">
              <svg class="bi" width="24" height="24" fill="currentColor">
                <use xlink:href="/bi.svg#suit-heart" />
              </svg>
            </a>

            <img class="card-img-top" src=".../100px180/" alt="Imagem do card">

            <div class="descricao">
              <label class="card_text">Nome do Produto</label>

              <ul class="avaliacao">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
              </ul>
              <div class="valores">
                <label class="v_antigo"><s>R$ 399,90</s></label>
                <label class="v_novo">R$ 299,90</label>
                <label class="parcelas">10x de R$ 29,99</label>
              </div>
            </div>
          </div>
      </div>

      
      
          
 

  </div>



  



  </div>
</div>
    
</body>
</html>