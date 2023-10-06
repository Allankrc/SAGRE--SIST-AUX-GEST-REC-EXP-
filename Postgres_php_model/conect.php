<?php
$endereco     = "localhost";
$banco        = "postgres";
$user         = "postgres";
$pass         = "postgres";

try{
// sgbd:host;port;dbname


$pdo = new PDO("pgsql:host= $endereco; port=5432;dbname=$banco", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

echo "---------------------- ✔ Serviço Conectato ao Banco de Dados ✔--------------------  ";

} catch(PDOException $e) {
echo "----------------------Não foi possível conectar! ☢---------------------";
die($e->getMessage());
}




/*

// Inserir dados
$sql =<<<EOF
      INSERT INTO users (NOME,REG,TIPO,USER,CPF,BANCO,AG,CONTA)
      VALUES ('$nome', '$reg', '$tipo', '$user', '$cpf', '$banco', '$ag', '$conta');
EOF;

$ret = pg_query($db, $sql);
if(!$ret) {
   echo pg_last_error($db);
} else {
   echo "Dados inseridos com sucesso\n";
}

// Selecionar dados
$sql =<<<EOF
      SELECT * from SUA_TABELA;
EOF;

$ret = pg_query($db, $sql);
if(!$ret) {
   echo pg_last_error($db);
   exit;
}
while($row = pg_fetch_row($ret)) {
   echo "NOME = ". $row[0] . "\n";
   // Adicione aqui os outros campos
}

// Atualizar dados
$sql =<<<EOF
      UPDATE SUA_TABELA set NOME = 'novo_nome' where USER = 'seu_user';
EOF;

$ret = pg_query($db, $sql);
if(!$ret) {
   echo pg_last_error($db);
} else {
   echo "Dados atualizados com sucesso\n";
}

// Deletar dados
$sql =<<<EOF
      DELETE from SUA_TABELA where USER = 'seu_user';
EOF;
$ret = pg_query($db, $sql);
if(!$ret) {
   echo pg_last_error($db);
} else {
   echo "Dados deletados com sucesso\n";
}

pg_close($db);
*/
?>