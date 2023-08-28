
<?php

?>

<!DOCTYPE html>
<body>
<H1> CADASTRO DE USUÁRIO </H1>

<H2> Informações Básicas </h2>
<form action="recebe.php" >

<label for="fname">NOME:</label><br>
    <input type="text" placeholder="Digite o nome" name="nome"> </input><br>
 
    <br>   <!-- <input type="text" placeholder="Digite a sua senha" name="senha"> </input><br> -->

    <label for="fname">SITUAÇÃO:</label><br><br>
        <select name="tipoR">
        <option value="cltvp">CLT (Veículo Próprio)</option>
        <option value="cltvc"> CLT (Veículo Corporativo)</option>
        <option value="sup">Superintendente</option>
        <option value="dir">Diretor</option>
        <option value="otr">Outro</option>  
        </select> 
    <br>
    <br>
    
    <label for="rname">REGIONAL:</label> <br><br>
        <select name="slEstado" id="slEstado"> 
                <option value="">Selecione</option> 
                <option value="ac">Acre</option> 
                <option value="al">Alagoas</option> 
                <option value="am">Amazonas</option> 
                <option value="ap">Amapá</option> 
                <option value="ba">Bahia</option> 
                <option value="ce">Ceará</option> 
                <option value="df">Distrito Federal</option> 
                <option value="es">Espírito Santo</option> 
                <option value="go">Goiás</option> 
                <option value="ma">Maranhão</option> 
                <option value="mt">Mato Grosso</option> 
                <option value="ms">Mato Grosso do Sul</option> 
                <option value="mg">Minas Gerais</option> 
                <option value="pa">Pará</option> 
                <option value="pb">Paraíba</option> 
                <option value="pr">Paraná</option> 
                <option value="pe">Pernambuco</option> 
                <option value="pi">Piauí</option> 
                <option value="rj">Rio de Janeiro</option> 
                <option value="rn">Rio Grande do Norte</option> 
                <option value="ro">Rondônia</option> 
                <option value="rs">Rio Grande do Sul</option> 
                <option value="rr">Roraima</option> 
                <option value="sc">Santa Catarina</option> 
                <option value="se">Sergipe</option> 
                <option value="sp">São Paulo</option> 
                <option value="to">Tocantins</option> 
        </select>
</form>

    
    
<form action="recebe.php" method="post">

    <br>

    <h3> INFORMAÇÕES BANCÁRIAS:</h3> <br>

    

    <label for="fname">INFORMAÇÕES BANCÁRIAS:</label><br>
        <input type="text" name="cpf" placeholder="INFORME SEU CPF"></input><br> <br>
   
        <label for="fname">SELECIONE SEU BANCO:</label><br>
            <select name="slBank" id="slBank">
                <option value="0">ESCOLHA SEU BANCO</option>
                <option value="1">BANCO DO BRASIL S.A (BB)</option>
                <option value="237">BRADESCO S.A</option>
                <option value="335">Banco Digio S.A</option>
                <option value="260">NU PAGAMENTOS S.A (NUBANK)</option>
                <option value="290">Pagseguro Internet S.A</option>
                <option value="323">Mercado Pago – conta do Mercado Livre</option>
                <option value="237">NEXT BANK (UTILIZAR O MESMO CÓDIGO DO BRADESCO)</option>
                <option value="637">BANCO SOFISA S.A (SOFISA DIRETO)</option>
                <option value="77">BANCO INTER S.A</option>
                <option value="341">ITAÚ UNIBANCO S.A</option>
                <option value="104">CAIXA ECONÔMICA FEDERAL (CEF)</option>
                <option value="33">BANCO SANTANDER BRASIL S.A</option>
                <option value="212">BANCO ORIGINAL S.A</option>
                <option value="756">BANCOOB (BANCO COOPERATIVO DO BRASIL)</option>
                <option value="655">BANCO VOTORANTIM S.A</option>
                <option value="655">NEON PAGAMENTOS S.A (OS MESMOS DADOS DO BANCO VOTORANTIM)</option>
                <option value="41">BANRISUL – BANCO DO ESTADO DO RIO GRANDE DO SUL S.A</option>
                <option value="389">BANCO MERCANTIL DO BRASIL S.A</option>
                <option value="422">BANCO SAFRA S.A</option>
                <option value="70">BANCO DE BRASÍLIA (BRB)</option>
                <option value="136">UNICRED COOPERATIVA</option>
                <option value="741">BANCO RIBEIRÃO PRETO</option>
                <option value="739">BANCO CETELEM S.A</option>
                <option value="743">BANCO SEMEAR S.A</option>
                <option value="100">PLANNER CORRETORA DE VALORES S.A</option>
                <option value="96">BANCO B3 S.A</option>
                <option value="747">Banco RABOBANK INTERNACIONAL DO BRASIL S.A</option>
                <option value="748">SICREDI S.A</option>
                <option value="752">BNP PARIBAS BRASIL S.A</option>
                <option value="91">UNICRED CENTRAL RS</option>
                <option value="399">KIRTON BANK</option>
                <option value="108">PORTOCRED S.A</option>
                <option value="757">BANCO KEB HANA DO BRASIL S.A</option>
                <option value="102">XP INVESTIMENTOS S.A</option>
                <option value="348">BANCO XP S/A</option>
                <option value="340">SUPER PAGAMENTOS S/A (SUPERDITAL)</option>
                <option value="364">GERENCIANET PAGAMENTOS DO BRASIL</option>
                <option value="84">UNIPRIME NORTE DO PARANÁ</option>
                <option value="180">CM CAPITAL MARKETS CCTVM LTDA</option>
                <option value="66">BANCO MORGAN STANLEY S.A</option>
                <option value="15">UBS BRASIL CCTVM S.A</option>
                <option value="143">TREVISO CC S.A</option>
                <option value="62">HIPERCARD BM S.A</option>
                <option value="74">BCO. J.SAFRA S.A</option>
                <option value="99">UNIPRIME CENTRAL CCC LTDA</option>
                <option value="25">BANCO ALFA S.A.</option>
                <option value="75">BCO ABN AMRO S.A</option>
                <option value="40">BANCO CARGILL S.A</option>
                <option value="190">SERVICOOP</option>
                <option value="63">BANCO BRADESCARD</option>
                <option value="191">NOVA FUTURA CTVM LTDA</option>
                <option value="64">GOLDMAN SACHS DO BRASIL BM S.A</option>
                <option value="97">CCC NOROESTE BRASILEIRO LTDA</option>
                <option value="16">CCM DESP TRÂNS SC E RS</option>
                <option value="12">BANCO INBURSA</option>
                <option value="3">BANCO DA AMAZONIA S.A</option>
                <option value="60">CONFIDENCE CC S.A</option>
                <option value="37">BANCO DO ESTADO DO PARÁ S.A</option>
                <option value="159">CASA CREDITO S.A</option>
                <option value="172">ALBATROSS CCV S.A</option>
                <option value="85">COOP CENTRAL AILOS</option>
                <option value="114">CENTRAL COOPERATIVA DE CRÉDITO NO ESTADO DO ESPÍRITO SANTO</option>
                <option value="36">BANCO BBI S.A</option>
                <option value="394">BANCO BRADESCO FINANCIAMENTOS S.A</option>
                <option value="4">BANCO DO NORDESTE DO BRASIL S.A.</option>
                <option value="320">BANCO CCB BRASIL S.A</option>
                <option value="189">HS FINANCEIRA</option>
                <option value="105">LECCA CFI S.A</option>
                <option value="76">BANCO KDB BRASIL S.A.</option>
                <option value="82">BANCO TOPÁZIO S.A</option>
                <option value="286">CCR DE OURO</option>
                <option value="93">PÓLOCRED SCMEPP LTDA</option>
                <option value="273">CCR DE SÃO MIGUEL DO OESTE</option>
                <option value="157">ICAP DO BRASIL CTVM LTDA</option>
                <option value="183">SOCRED S.A</option>
                <option value="14">NATIXIS BRASIL S.A</option>
                <option value="130">CARUANA SCFI</option>
                <option value="127">CODEPE CVC S.A</option>
                <option value="79">BANCO ORIGINAL DO AGRONEGÓCIO S.A</option>
                <option value="81">BBN BANCO BRASILEIRO DE NEGOCIOS S.A</option>
                <option value="118">STANDARD CHARTERED BI S.A</option>
                <option value="133">CRESOL CONFEDERAÇÃO</option>
                <option value="121">BANCO AGIBANK S.A</option>
                <option value="83">BANCO DA CHINA BRASIL S.A</option>
                <option value="138">GET MONEY CC LTDA</option>
                <option value="24">BCO BANDEPE S.A</option>
                <option value="95">BANCO CONFIDENCE DE CÂMBIO S.A</option>
                <option value="94">BANCO FINAXIS</option>
                <option value="276">SENFF S.A</option>
                <option value="137">MULTIMONEY CC LTDA</option>
                <option value="92">BRK S.A</option>
                <option value="47">BANCO BCO DO ESTADO DE SERGIPE S.A</option>
                <option value="144">BEXS BANCO DE CAMBIO S.A.</option>
                <option value="126">BR PARTNERS BI</option>
                <option value="301">BPP INSTITUIÇÃO DE PAGAMENTOS S.A</option>
                <option value="173">BRL TRUST DTVM SA</option>
                <option value="119">BANCO WESTERN UNION</option>
                <option value="254">PARANA BANCO S.A</option>
                <option value="268">BARIGUI CH</option>
                <option value="107">BANCO BOCOM BBM S.A</option>
                <option value="412">BANCO CAPITAL S.A</option>
                <option value="124">BANCO WOORI BANK DO BRASIL S.A</option>
                <option value="149">FACTA S.A. CFI</option>
                <option value="197">STONE PAGAMENTOS S.A</option>
                <option value="142">BROKER BRASIL CC LTDA</option>
                <option value="389">BANCO MERCANTIL DO BRASIL S.A.</option>
                <option value="184">BANCO ITAÚ BBA S.A</option>
                <option value="634">BANCO TRIANGULO S.A (BANCO TRIÂNGULO)</option>
                <option value="545">SENSO CCVM S.A</option>
                <option value="132">ICBC DO BRASIL BM S.A</option>
                <option value="298">VIPS CC LTDA</option>
                <option value="129">UBS BRASIL BI S.A</option>
                <option value="128">MS BANK S.A BANCO DE CÂMBIO</option>
                <option value="194">PARMETAL DTVM LTDA</option>
                <option value="310">VORTX DTVM LTDA</option>
                <option value="163">COMMERZBANK BRASIL S.A BANCO MÚLTIPLO</option>
                <option value="280">AVISTA S.A</option>
                <option value="146">GUITTA CC LTDA</option>
                <option value="279">CCR DE PRIMAVERA DO LESTE</option>
                <option value="182">DACASA FINANCEIRA S/A</option>
                <option value="278">GENIAL INVESTIMENTOS CVM S.A</option>
                <option value="271">IB CCTVM LTDA</option>
                <option value="21">BANCO BANESTES S.A</option>
                <option value="246">BANCO ABC BRASIL S.A</option>
                <option value="751">SCOTIABANK BRASIL</option>
                <option value="208">BANCO BTG PACTUAL S.A</option>
                <option value="746">BANCO MODAL S.A</option>
                <option value="241">BANCO CLASSICO S.A</option>
                <option value="612">BANCO GUANABARA S.A</option>
                <option value="604">BANCO INDUSTRIAL DO BRASIL S.A</option>
                <option value="505">BANCO CREDIT SUISSE (BRL) S.A</option>
                <option value="196">BANCO FAIR CC S.A</option>
                <option value="300">BANCO LA NACION ARGENTINA</option>
                <option value="477">CITIBANK N.A</option>
                <option value="266">BANCO CEDULA S.A</option>
                <option value="122">BANCO BRADESCO BERJ S.A</option>
                <option value="376">BANCO J.P. MORGAN S.A</option>
                <option value="473">BANCO CAIXA GERAL BRASIL S.A</option>
                <option value="745">BANCO CITIBANK S.A</option>
                <option value="120">BANCO RODOBENS S.A</option>
                <option value="265">BANCO FATOR S.A</option>
                <option value="7">BNDES (Banco Nacional do Desenvolvimento Social)</option>
                <option value="188">ATIVA S.A INVESTIMENTOS</option>
                <option value="134">BGC LIQUIDEZ DTVM LTDA</option>
                <option value="641">BANCO ALVORADA S.A</option>
                <option value="29">BANCO ITAÚ CONSIGNADO S.A</option>
                <option value="243">BANCO MÁXIMA S.A</option>
                <option value="78">HAITONG BI DO BRASIL S.A</option>
                <option value="111">BANCO OLIVEIRA TRUST DTVM S.A</option>
                <option value="17">BNY MELLON BANCO S.A</option>
                <option value="174">PERNAMBUCANAS FINANC S.A</option>
                <option value="495">LA PROVINCIA BUENOS AIRES BANCO</option>
                <option value="125">BRASIL PLURAL S.A BANCO</option>
                <option value="488">JPMORGAN CHASE BANK</option>
                <option value="65">BANCO ANDBANK S.A</option>
                <option value="492">ING BANK N.V</option>
                <option value="250">BANCO BCV</option>
                <option value="145">LEVYCAM CCV LTDA</option>
                <option value="494">BANCO REP ORIENTAL URUGUAY</option>
                <option value="253">BEXS CC S.A</option>
                <option value="269">HSBC BANCO DE INVESTIMENTO</option>
                <option value="213">BCO ARBI S.A</option>
                <option value="139">INTESA SANPAOLO BRASIL S.A</option>
                <option value="18">BANCO TRICURY S.A</option>
                <option value="630">BANCO INTERCAP S.A</option>
                <option value="224">BANCO FIBRA S.A</option>
                <option value="600">BANCO LUSO BRASILEIRO S.A</option>
                <option value="623">BANCO PAN</option>
                <option value="204">BANCO BRADESCO CARTOES S.A</option>
                <option value="479">BANCO ITAUBANK S.A</option>
                <option value="456">BANCO MUFG BRASIL S.A</option>
                <option value="464">BANCO SUMITOMO MITSUI BRASIL S.A</option>
                <option value="613">OMNI BANCO S.A</option>
                <option value="652">ITAÚ UNIBANCO HOLDING BM S.A</option>
                <option value="653">BANCO INDUSVAL S.A</option>
                <option value="69">BANCO CREFISA S.A</option>
                <option value="370">BANCO MIZUHO S.A</option>
                <option value="249">BANCO INVESTCRED UNIBANCO S.A</option>
                <option value="318">BANCO BMG S.A</option>
                <option value="626">BANCO FICSA S.A</option>
                <option value="270">SAGITUR CC LTDA</option>
                <option value="366">BANCO SOCIETE GENERALE BRASIL</option>
                <option value="113">MAGLIANO S.A</option>
                <option value="131">TULLETT PREBON BRASIL CVC LTDA</option>
                <option value="11">C.SUISSE HEDGING-GRIFFO CV S.A (Credit Suisse)</option>
                <option value="611">BANCO PAULISTA</option>
                <option value="755">BOFA MERRILL LYNCH BM S.A</option>
                <option value="89">CCR REG MOGIANA</option>
                <option value="643">BANCO PINE S.A</option>
                <option value="140">EASYNVEST – TÍTULO CV S.A</option>
                <option value="707">BANCO DAYCOVAL S.A</option>
                <option value="288">CAROL DTVM LTDA</option>
                <option value="101">RENASCENCA DTVM LTDA</option>
                <option value="487">DEUTSCHE BANK S.A BANCO ALEMÃO</option>
                <option value="233">BANCO CIFRA</option>
                <option value="177">GUIDE</option>
                <option value="633">BANCO RENDIMENTO S.A</option>
                <option value="218">BANCO BS2 S.A</option>
                <option value="292">BS2 DISTRIBUIDORA DE TÍTULOS E INVESTIMENTOS</option>
                <option value="169">BANCO OLÉ BONSUCESSO CONSIGNADO S.A</option>
                <option value="293">LASTRO RDV DTVM LTDA</option>
                <option value="285">FRENTE CC LTDA</option>
                <option value="80">B&T CC LTDA</option>
                <option value="753">NOVO BANCO CONTINENTAL S.A BM</option>
                <option value="222">BANCO CRÉDIT AGRICOLE BR S.A</option>
                <option value="754">BANCO SISTEMA</option>
                <option value="98">CREDIALIANÇA CCR</option>
                <option value="610">BANCO VR S.A</option>
                <option value="712">BANCO OURINVEST S.A</option>
                <option value="10">CREDICOAMO</option>
                <option value="283">RB CAPITAL INVESTIMENTOS DTVM LTDA</option>
                <option value="217">BANCO JOHN DEERE S.A</option>
                <option value="117">ADVANCED CC LTDA</option>
                <option value="336">BANCO C6 S.A – C6 BANK</option>
                <option value="654">BANCO DIGIMAIS S.A</option>
            </select> <br>
<br>
    <br> <input type="text" name="age" placeholder="Agência"> </input> <br>
<br>
    <br> <input type="text" name="conta" placeholder="Conta"></input><br>
<br>    
   <br> <input type="text" name="op" placeholder="Operação"></input><br>
<br>
    <label for="fname">TIPO DE CONTA:</label> <br>
        <select name="sltconta" id="sltconta"> 
        <option value="">Selecione</option> 
        <option value="ccor">Conta Corrente</option> 
        <option value="ppc">Poupança</option> 
</select>
<br>
    <br>

    <h3>INFORMAÇÕES REGIÃO:</h3><br>

    <label for="fname">CIDADE EM QUE RESIDE:</label><br>

    <input type="text" name="residencia" placeholder="Onde você Mora?"></input><br>




</form>
<br>
<button type="submit" class="btn btn-primary">Enviar</button>
 <br>
<button type="button" name="clean"> Limpar </button>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</body>
