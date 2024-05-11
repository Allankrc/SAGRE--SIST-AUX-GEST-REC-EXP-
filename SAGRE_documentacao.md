1 ESPECIFICACOES
    1.1 INFORMACAO REQURIDA
    1.2 CONFRMACAO DE DEMANDA
    1.3 OBJETIVOS
    1.4 CONCEITOS
    1.5 DISPONIBILIDADE DOS DADOS
    1.6 PLANO DE ACOMPANHAMENTO

2 PLANEJAMENTO
    2.1 RESULTADOS REQUERIDOS
    2.2 DEFINIR AS TABELAS & VARIAVEIS
        2.2.2 VARIAVEIS
        2.2.1 TABELAS
    2.3 METODOLOGIA DE COLETA
    2.4 CADASTRO & PLANO AMOSTRAL
    2.5 PROCESSAMENTO & ANALISE
    2.6 SISTEMA DE PRODUCAO
3 CONSTRUCAO
    3.1 CRIAR INSTRUMENTO DE COLETA
    3.2 CRIAR INSTRUMENTO DE PROCESSAMENTO
    3.3 CRIAR INSTRUMENTO DE DISSEMINACAO
    3.4 REFINAR FLUXO DE TRABALHO
    3.5 CRIAR SIS DE PRODUCAO
    3.6 TESTAR PROCESSO DE PRODUCAO
    3.7 FINALIZAR OS SISTEMAS DE PRODUCAO

4 COLETAR
    4.1 OBTER & CADASTRAR
    4.2 SELECIONAR A AMOSTRA
    4.3 PREPARAR A COLETA
    4.4 EXECUTAR A COLETA
    4.5 FINALIZAR A COLETA    

5 PROCESSAR













2.2 DEFINIR AS TABELAS & VARIAVEIS RMV
#TABLE AGENTES
$NOME
$REG ()
$TIPO CASES(superintendente => $sup, agente_sem_veiculo_empresa => $asve, agente_com_veiculo_empresa => $acve, tercerizados => $beta)

#TABELA SOLICITACAO DE VIAGEM
$NOME = nome
$REG = regional
$TIPO = tipo

$DIR_REF = valor_diario_refeicao
$DIR_HOT = valor_diario_hotel


$VIAGEM_N = numero_viagem
$D_SOL = data_solicitacao
$D_SAÍDA = data_inicial
$D_CHEGA = data_fim
$TEMPO = duracao_cada_viagem = MINUS(data_de_saida; data_de_chegada)
$PREV_HOS = previsto_gasto_hotel
$PREV_REF = previsto_gasto_refeicao
$PREV_COM = previsto_gasto_combustivel
$PREV_KM = previsto_distancia_pecorrer
$PREV_OUT = previsto_gasto_outros
$PREV_TOTAL
$Array_cid	= cidades_pretendidas







#TABELA PRESTACAO DE CONTAS
$VIAGEM_N
$NOME
$VIAGEM_N

$REAL_HOT = soma_notas_hotel
$REAL_REF = soma_notas_refeicao
$REAL_OUT = soma_notas_outros

$REAL_COM = SE ($TIPO = $asve) print($RSXKM) 
            SE ($TIPO = $acve || $SUP || $beta) print($SOMA_COM)  

$SOMA_COM = soma_notas
$REAL_KM = kilometros_realizados
$RSXKM = $REAL_KM * $FATORKM 
$FATORKM = preco_km

$REAL_TOTAL = SE ($TIPO = $asve) print ($RSXKM + $REAL_HOS + $REAL_REF +$REAL_OUT) 
            SE ($TIPO = $acve || $SUP || $beta) print ($REAL_COM + $REAL_HOS + $REAL_REF +$REAL_OUT)

$ACERTO_FIN = SE ($REAL_TOTAL > $PREV_TOTAL) print('RMV') ELSE print('SOLICITANTE') 
              SE ($REAL_TOTAL == $PREV_TOTAL) print('NAO HA')

$S_FINAL = $REAL_TOTAL - $PREV_TOTAL






#TABLE ARMAZENAMENTO CONTROLE INDIVIDUAL    
RMV_tabela_variaveis_controle_individual = {[($'$VCODE', '$VIAGEM_N, '$REG', '$D_SAÍDA', '$D_CHEGA', '$D_SOL', '$V_ADIA', '$D_PREST', '$V_GASTO', '$D_QUIT', '$V_SALDO', '$V_PAG', '$V_REC', '$S_FINAL', '$OBS')]}

$$VCODE = PRYMARY KEY
$VIAGEM_N = viagem 
$REG = regional
$D_SAÍDA = data_de_saida
$D_CHEGA = data_de_chegada
$TEMPO = duracao_cada_viagem = MINUS(data_de_saida; data_de_chegada)
$TTEMPO = duracao_total_viagem_indivudial = SUMcoluna(duracao_cada_viagem)

$D_SOL = data_solicitacao
$D_PREST = data_prestacao
$D_QUIT = data_de_quitacao
$T_QUIT = tempo_dura_processo => MINUS($D_SOL; $D_QUIT)
$V_ADIA = valor_adiantado
$V_GASTO = valor_gasto 

$V_SALDO = valor_saldo => MINUS(valor_adiantado; valor_gasto)
$V_PAG = valor_pagar IF( valor_adiantado < valor gasto) $POST ($V_SALDO) 
$V_REC = valor_receber IF( valor_adiantado > valor gasto) $POST ($V_SALDO)

$S_FINAL = saldo_final => MINUS()
$OBS = obs


>>>operacoes
SUN($GASTO) = soma_valor_total_gasto
COUNT(#VIAGEM_N) = total_viagens 
MINUS($D_SAÍDA; $D_CHEGA) = duracao_viagem 
MINUS($D_SOL ; $DPRESTAÇÃO) = duracao do processo




 	

==============================================================================================================================================================


##Mandacaru




MAND_tabela_variaveis_controle_individual = [#$VCODE #VIAGEM_N	$REG $D_SAÍDA	$D_CHEGA $D_SOL  $V_ADIA $DPRESTAÇÃO $V_GASTO  $D_QUIT	 $V_SALDO 	 $V_PAG $V_REC 	$S_FINAL	$OBS]

#$VCODE
#VIAGEM_N
$REG $D_SAÍDA	
$D_CHEGA $D_SOL  
$V_ADIA
$DPRESTAÇÃO 
$V_GASTO  
$D_QUIT	 
$V_SALDO = valor_saldo => MINUS($V_ADIA ; $V_GASTO) 
$V_PAG
$V_REC 	
$S_FINAL	
$OBS

op

#$$VCODE Cout(#VIAGEM_N)
MINUS($D_SAÍDA ; $D_CHEGA)
	 MINUS($D_SOL ; $DPRESTAÇÃO)
      Sun($GASTO)
        
$V_SALDO =  
    $D_QUIT	 $V_SALDO 	 $V_PAG $V_REC 	$S_FINAL	$OBS




$$VCODE $PROSP_AGENTE #REG $VIAGEM_N $DATA_PAG. $OBSERVAÇÃO $PPROSPECTOR  
> Sum(#) Sum($VIAGEM_N)  



# 



#   TABELA ARMAZENAMENTO CONSULTAS PARA BI
##Mandacaru

UF	Agente	Gasto	Adiantado	Gasto / Cadastrado*	%INST/CAD	% Gasto	Viagens Fin	Média / Viagem	Instalado	Liberado	Cadastrado	CUSTO POR LIBERAÇÃO








### ACOMPANHAMENTO DE VENCIMENTOS

[query #VIAGEM_N]	/V1            /  V2	       /  V3	       / V4 	      / V5	         / V6           /V7	            /V8	            /V9            /	V10
[query $AGENTE]    / $D_CHEGA(+2) / $D_CHEGA(+2)  / $D_CHEGA(+2)  / $D_CHEGA(+2) / $D_CHEGA(+2) / $D_CHEGA(+2) / $D_CHEGA(+2)  / $D_CHEGA(+2)  / $D_CHEGA(+2) / $D_CHEGA(+2) 
