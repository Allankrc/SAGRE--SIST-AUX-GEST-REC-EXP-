<?php
session_start();
ob_start();

include_once "conex.php";
$arquivo = $_FILES['arquivo'];
var_dump($arquivo);
$primeira_linha = true;
$linhas_importadas = 0;
$linhas_nao_importadas = 0;
$usuarios_nao_imporatados ="";
if($arquivo['type'] == "text/csv"){
    $dados_arquivo = fopen($arquivo['tmp_name'], "r" );
   
    while($linha = fgetcsv($dados_arquivo, 1000, ";")){
     
        if($primeira_linha){
        $primeira_linha = false;
        continue;
       }

        array_walk_recursive($linha, 'converter');
        var_dump($linha);   

                   
        $query_usuario = "INSERT INTO `aula` (ponto, Longitude, Latitude) VALUES (:ponto, :latitude, :longitude)"; 
  
    $cad_usuario = $conn-> prepare ($query_usuario);
    $cad_usuario ->bindValue(':ponto', ($linha[0] ?? "NULL"));
    $cad_usuario ->bindValue(':longitude', ($linha[1] ?? "NULL"));
    $cad_usuario ->bindValue(':latitude', ($linha[2] ?? "NULL"));
 //$cad_usuario ->bindValue(':ponto', ($linha[0] ?? "NULL"));
        $cad_usuario ->execute();

        if($cad_usuario->rowCount()){
            $linhas_importadas++;}
        else{
         $linhas_não_importadas++;
         $usuarios_nao_imporatados = $usuarios_nao_imporatados . ",".($linha[0] ?? "NULL");
        }

}

if(!empty($usuarios_nao_imporatados)){
    $usuarios_nao_imporatados = "Usuarios não importados: $usuarios_nao_imporatados.";
};

$_SESSION['msg'] = "<p style='color: green;' >$linhas_importadas linha(s) importada(s), $linhas_não_importadas não importada(s).</p>" ;

header("location: entrada.php");

}else{
    $_SESSION['msg'] = "<p style='color: #f00;' > Necessário CSV </p>";
header("location: entrada.php");


};



function converter (&$dados_arquivo){

   $dados_arquivo= mb_convert_encoding($dados_arquivo, "UTF8");
}