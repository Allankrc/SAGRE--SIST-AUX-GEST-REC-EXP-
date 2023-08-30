<?php

// Sample file: Never send your credentials to git

// host
$host = 'http://localhost/projetos';

// db
$db_name = 'sarge';
$db_host = 'localhost:3306';
$db_user = 'root';
$db_pass = '';

try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}

