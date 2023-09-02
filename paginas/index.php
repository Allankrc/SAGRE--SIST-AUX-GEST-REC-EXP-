<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>



    <title>HOME</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SAGRE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="?page=sol">Solicitação</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=pre">Prestação</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=hist">Consultar</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="?page=cad">Cadastrar</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Mais
        </a>
        <div class="dropdown-menu">
        <a class="  dropdown-item" href="#">Sobre</a>
          <a class="dropdown-item" href="#">Suporte</a>
          <a class="dropdown-item" href="https://www.burgerking.com.br/">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sair</a>
        </div>
      </li>
        </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button> <pre>  </pre>
      <a class=" btn btn-info my-2 my-sm-2" type="button" href="LOG.html">Acesso</a>
    </form>
  </div>
</nav>


<div class="container text-center">
  <div class="row">
    <div class="col mt-5">
    
    <?php
      switch(@$_REQUEST["page"]) {
        case "cad":
          include("CAD.php");
          break;
        case "sol":
          include("SOL.php");
          break;
        case "pre":
          include("PRE.php");
            break;
        case "hist":
          include("HIST.php");
            break;
  
            default: 

            print"<p style='text-align: left; color:blue' >Início - </p> </div>";    
            print "<div class='container text-left'><h1> Olá, bem vindo ao Sistema.</h1> </div>"; 
            print "<br>"   ;   
          }   
    ?>

    </div>
  </div>
</div>


<div class="container text-right">
    <p> Nunca é tarde para aprender</p>

</div>

<!-- 
<div class="container text-center">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col">
      2 of 3
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>

-->

<div class="container text-center">
<div class="card">
  <div class="card-header">
  developed by @__user_null__
  </div>
  
    <footer class="blockquote-footer">  Click for <a href="https://allankrc.github.io/MyProfile/index.html">More...</a></footer>
      </div>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</body>
</html>