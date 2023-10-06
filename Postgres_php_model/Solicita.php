<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    

    <title>SOLICITAÇÃO</title>
</head>
<body>
    <?php 
$dir_ref = 75;
$dir_hot = 100;
?>

<h1> Painel de Solicitações </h1>
<h3  style="color:#9900FF"> Realização dos pedidos de viagem </h3>

<form>
    <label> Nome <input type = "text" id="nome"  class="form-control"></label>

<!-- Aqui era bom um select com o campo para importar as info 

Escolheu o nome:

Importa regional
Importa regional 
Importa Tipo
importa viagem_N ++i

-->

<!--    	<input type="text" name="nome"></input> <br>
    <label>$Reg </label>	
    <select name="estado' id="estado> 
<option value="0" > Escolha</option>
<option value="1" > ESTADO 1</option>
<option value="2" > ESTADO 2</option>
<option value="3" > ESTADO 3</option>
<option value="4" > ESTADO 4</option>
<option value="5" > ESTADO 5</option>
<option value="6" > ESTADO 6</option>
<option value="7" > ESTADO 7</option>
<option value="8" > ESTADO 8</option>
<option value="9" > ESTADO 9</option>
<option value="10" > ESTADO 10</option>
<option value="11" > ESTADO 11</option>
<option value="12" > ESTADO 12</option>
<option value="13" > ESTADO 13</option>
<option value="14" > ESTADO 14</option>
<option value="15" > ESTADO 15</option>
<option value="16" > ESTADO 16</option>
<option value="17" > ESTADO 17</option>
<option value="18" > ESTADO 18</option>
<option value="19" > ESTADO 19</option>
<option value="20" > ESTADO 20</option>
<option value="21" > ESTADO 21</option>
<option value="22" > ESTADO 22</option>
<option value="23" > ESTADO 23</option>
<option value="24" > ESTADO 24</option>
<option value="25" > ESTADO 25</option>
<option value="26" > ESTADO 26</option>
    </select> <br>


    <label>$Tipo</label>
        <select name="tipo' id="tipo> 
<option value="0" > Escolha</option>
<option value="1" > Superintendente</option>
<option value="2" > CLT Veículo empresa</option>
<option value="3" > CLT Veículo próprio</option>
<option value="4" > OUTRO</option>
</select> <br>


<label>$Viagem_N</label>	
<select name="viagem_n' id="viagem_n> 
        <option value="0" > 0001</option>
        <option value="1" > 0002</option>
        <option value="2" > 0003</option>
        <option value="3" > 0004</option>
        <option value="4" > 0005</option>
    </select> <br>
-->    	
    <br><br>
    <label>Data de Solicitação (now) <input type="date" id="d_sol" class="form-control"> </input> </label>	
   
    <label> Data de Saída <input type="date" id="d_saida" class="form-control"> </input> </label>	
    
    <label> Data de Chegada <input type="date" id="d_chega" class="form-control"> </input> </label>	
    <br>
<!--   hidden  $Tempo= $D_saida-$D_chega -->
    <br>
    <label>  Previsão de Hospedagem (R$)<input type="number" id="prev_hosp" class="form-control">	</label>	
    
    <label> Previsão de Refeições (R$)<input type="number" id="prev_ref" class="form-control"></label>	
    
    <label> Previsão de Outros (R$)<input type="number" id="prev_outros" class="form-control"></label>
    <br> <br>
    <label> Previsão de Combustível (R$)<input type="number" id="prev_com" class="form-control"></label> <p  style="color:#9900FF"> <i> Para uso de Veículo Corporativo ou Gestores </i></p>	
    <br>
    <label> Previsão de Kilometragem (KM)<input type="number" id="prev_km" class="form-control"></label> <p  style="color:#9900FF"> <i> Para uso de CLT com Veículo Próprio</i> </p>
    <br>
    	
    
    <!-- $Prev_total = $Prev_com + $Prev_ref + $Prev_hosp + $Prev_km + $Prev_out -->	
    
   <!-- <label>$Vcode (PRIMARY KEY)</label>	-->
    
    <label>Estado <select name="estado' id="estado class="form-control"> 
<option value="0" > Escolha</option>
<option value="1" > ESTADO 1</option>
<option value="2" > ESTADO 2</option>
<option value="3" > ESTADO 3</option>
<option value="4" > ESTADO 4</option>
<option value="5" > ESTADO 5</option>
<option value="6" > ESTADO 6</option>
<option value="7" > ESTADO 7</option>
<option value="8" > ESTADO 8</option>
<option value="9" > ESTADO 9</option>
<option value="10" > ESTADO 10</option>
<option value="11" > ESTADO 11</option>
<option value="12" > ESTADO 12</option>
<option value="13" > ESTADO 13</option>
<option value="14" > ESTADO 14</option>
<option value="15" > ESTADO 15</option>
<option value="16" > ESTADO 16</option>
<option value="17" > ESTADO 17</option>
<option value="18" > ESTADO 18</option>
<option value="19" > ESTADO 19</option>
<option value="20" > ESTADO 20</option>
<option value="21" > ESTADO 21</option>
<option value="22" > ESTADO 22</option>
<option value="23" > ESTADO 23</option>
<option value="24" > ESTADO 24</option>
<option value="25" > ESTADO 25</option>
<option value="26" > ESTADO 26</option>
    </select>
</label> <br>
   <br> 




    <select multiple class="form-control" id="cidades" class="form-control">
  <option value="cidades">Selecione as cidades</option>
</select>
 
 

<br><br><br>

    
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">ENVIAR</button>

</form>
<br>





<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</body>
</html>