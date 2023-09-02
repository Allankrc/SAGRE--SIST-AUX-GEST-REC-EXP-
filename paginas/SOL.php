<!DOCTYPE html>
<p  style="text-align: left; color:blue" >Início - Solicitações</p>
<div>
  <form action="upload.php" method="post" enctype="multipart/form-data">
 
  <div style="text-align: left;">
        <h1 style="text-align: left;">Solicitação de Viagem</h1><br><br>
        <h2 style="text-align: left;">Processo em Excel </h2><br><br>
        <h3 style="text-align: left;">📄 Selecione a Planilha:</h3><br>
            <input type="file" name="fileExcel" id="fileExcel"><br>
        <br><br>
        <h3 style="text-align: left;"> 🗺 Selecione a Proposta de Rota:</h3><br>
            <input type="file" name="fileImg" id="fileImg">
        <br>
        <br>
        <button type="submit" class="btn btn-primary btn-lg"  value="Enviar" name="submit">Enviar</button> <br>    
    </div>
  </form>
</div>

<br><br>
<hr size="20">
<br>
<div style="text-align: left;">
<h3 style="text-align: left;">Solicitação Manual</h3><br>
<form><br>

  <div class="form-group">
    <label for="exampleFormControlInput1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select de exemplo</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Exemplo de select múltiplo</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Exemplo de textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group">
    <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit" class="btn btn-primary btn-lg"  value="Enviar" name="submit">Enviar</button> <br>    
  </div>

</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


