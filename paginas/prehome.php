<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>
  <title>Prestações</title>
</head>
<body>
  

<?php
      switch(@$_REQUEST["page"]) 
      {
        case "PRE_01":
          include("PRE_01.php");
          break;
        case "PRE_02":
          include("PRE_02.php");
          break;
        case "PRE_03":
          include("PRE_03.php");
            break;
        case "voltar":
          include("index.php");
            break;
  
            default: 

            print"<p style='text-align: left; color:blue' >Prestação de cotas - </p> </div>";    
            print "<div class='container text-left'><h1> Escolha seu perfil para Prestação de Contas</h1> </div>"; 
            print "<br>" ;   
            print "<br>" ; 
      }   
?>
<br>




<button type="button" id="pre01"  class="btn btn-primary btn-lg btn-block"> <a  href="?pages=PRE_01.php"> Veículo da Empresa  </a> </button>  
<button type="button" id="pre02" href="?page=PRE_02" class="btn btn-primary btn-lg btn-block"><a  href="?page=PRE_02"> </a>Veículo Próprio</button> 
<button type="button" id="pre03" href="?page=PRE_03" class="btn btn-primary btn-lg btn-block">Superentendentes</button> <a class="nav-link" href="?page=PRE_03"> </a>
<button type="button" id="pre04" href="?page=voltar"class="btn btn-primary btn-lg btn-block">Outros</button> <a class="nav-link" href="?page=sol"> </a>



</body>
</html>
