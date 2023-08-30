<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>


    <title>HOME</title>
</head>
<body>

<H1>SAGRE 1.0</H1>


<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link" role="tab" href="?page=pre"> testao</a>  
    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="?page=cad" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cadastrar</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="?page=pre" role="tab" aria-controls="v-pills-messages" aria-selected="false">Prestação</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="?page=sol" role="tab" aria-controls="v-pills-settings" aria-selected="false">Solicitação</a>
      <a class="nav-link" id="v-pills-his-tab" data-toggle="pill" href="?page=hist" role="tab" aria-controls="v-pills-settings" aria-selected="false">Histórico</a>
    </div>
  </div>

</div>



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
            print "<div class='container text-center'><h1> Olá, bem vindo ao Sistema.</h1> </div>";
      }
    ?>

    </div>
  </div>
</div>


<div class="container text-center">
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