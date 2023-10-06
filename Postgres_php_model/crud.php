<div class="col-md-6">
  <h2>Lista de usuários</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Idade</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      </tbody>
  </table>

  <div class="form-group">
    <label for="search">Pesquisar</label>
    <input type="text" class="form-control" id="search" placeholder="Digite o nome ou e-mail do usuário">
  </div>

  <div class="form-group">
    <a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-primary">Editar</a>
    <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger">Remover</a>
  </div>
</div>

