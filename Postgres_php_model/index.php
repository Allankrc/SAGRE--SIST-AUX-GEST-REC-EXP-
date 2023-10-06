
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=100, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>INDEX</title>
    </head>
    <body>




    <nav class="navbar navbar-light" style="background-color: #8109b7;">
  
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
        <a class="  dropdown-item" href="?page=crud">CRUD</a>
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
    <div class="col mt-5" margin: auto;>



    <?php
      switch(@$_REQUEST["page"])
       {
        case "cad":
          include("cadastro.php");
          break;
        case "sol":
          include("Solicita.php");
          break;
        case "pre":
          include("Presta.php");
            break;
        case "crud":
          include("crud.php");
            break;
        case "hist":
          include("historia.php");
            break;
  
            default: 
            print"<p style='text-align: left; color:blue' >Início - </p> </div>";    
            print "<div class='container text-center'><h1> Olá, bem vindo ao Sistema.</h1> </div>"; 
            print "<br> <br><br><br>";  
            print "<br>";
            print " <br> <img  src='harpia_sagre-removebg-preview.bmp'/> ";  
        }
    ?>




    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> </script>
    </html>