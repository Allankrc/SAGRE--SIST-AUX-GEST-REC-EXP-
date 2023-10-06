<!DOCTYPE html>


<h1> Buscas</h1>


<form >
<label> Nome <input type="text" name="nome"> </input></label> 
<label> Regional <input type="text" name="regional"> </input></label>
<label> Data <tr> <input type="date" name="data"> </input></label>
<label> Cidade <input type="text" name="cidade"> </input></label>
<br> <br>
<div class="form-group">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>    
<a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-primary">Editar</a>
    <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger">Remover</a>
  </div>