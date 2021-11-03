<?php defined('BASEPATH') OR exit('No direct script access allowed');

use OpenBoleto\Banco\BancoDoBrasil;
use OpenBoleto\Agente;

class Boleto extends CI_Controller {



	function __construct() 
	{
	parent::__construct(); 
		$this->load->helper('date');
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language', 'url','array'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}




	public function emite($id)
	{
	$now = time();
	$human = unix_to_human($now);
	
	base_url('third_party/openboleto/autoloader.php');

	//Informação do Candidato
	$candidato 		= $this->db->get_where('candidatos', array('idcandidatos' => $id))->row();
	//Informação do Responsável
	$responsavel	= $this->db->get_where('users', array('id' => $candidato->id_responsavel))->row();
	//CMCG
	utf8_encode($col = 'Colégio Militar de Campo Grande');
	//Data de Vendimento
	$vencimento  	= $this->db->get_where('conf', array('idconf' => '1'))->row();
	
	

	//CORE DE GERAçÃO DO BOLETO
	$sacado = new Agente($candidato->candidato_nome, '023.434.234-34', $responsavel->logradouro, $responsavel->cep, $responsavel->cidade, $responsavel->estado);
	$cedente = new Agente($col, '09.549.096/0002-05', 'Avenida Presidente Vargas 2800', '79.115-810', 'Campo Grande', 'MS');
 
	$boleto = new BancoDoBrasil(array(
    // Parâmetros obrigatórios
    'dataVencimento' => new DateTime($vencimento->boleto_vencimento),
    'valor' => $vencimento->boleto_valor,
    'sequencial' => $candidato->idcandidatos, // Para gerar o nosso número
    'sacado' => $sacado,
    'cedente' => $cedente,
    'agencia' => 2576, // Até 4 dígitos
    'carteira' => 18,
    'conta' => 333013, // Até 8 dígitos
    'convenio' => 2907642, // 4, 6 ou 7 dígitos


    'contaDv' => 3,
    'agenciaDv' => 3,
    'descricaoDemonstrativo' => array( // Até 5
    'Concurso de admissão ao Colégio Militar de Campo Grande 2017/2018',
    'CANDIDATO: ' . $candidato->candidato_nome, 'DOC IDENTIDADE: '. $candidato->identidade
    ),
    'instrucoes' => array( // Até 8
    ' Sr(s) Caixas não receber após o vencimento.',
    ),
	));
 
	
	$data['boleto'] =$boleto;
	$data['concurso'] = 'Concurso para o Colégio Militar de Campo Grande 2017/2018. ' ;
	$data['info'] = $human;
	$this->load->view('boleto' , $data);
	}



	public function formupboleto()
	{
	
            $data['mensgagem'] = 'Processar aquivo';

			$this->load->view('admin/admin_header');
			$this->load->view('admin/admin_menu');
			$this->load->view('admin/formuploadboleto', $data);
			$this->load->view('admin/admin_footer');
		
	}


	public function getboleto()
	{


				 

				$config['upload_path']          = '/var/www/concurso_cmcg/application/views/admin/downloads';
                $config['allowed_types']        = 'ret|txt';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());


                        print_r($error);

                      
                }
                else
                {
                        //$data = array('upload_data' => $this->upload->data());
                		//$data['upload_data'] = $this->upload->data('full_path');

                		$caminho = $this->upload->data('full_path');

                		$trimmed = file($caminho  , FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);




                		$contador=0;
    $registro = array();
    $DataPagamentoEfetivado = array();
    $ValorPagamentoEfetivo = array();

    /*
    echo '<pre>';
    print_r($trimmed);
    echo '</pre>';
    */



    echo "<pre>";

    foreach ($trimmed as $line_number => $lin) {

    	//Codigo do Banco de Compensação
    	//print_r($lin);

    	// echo "Linha Número<b> {$line_number}</b> :  " . htmlspecialchars($lin) . "<br>\n";
    //Codigo do Banco de Compensação
    $bb= substr($lin,0,3);
    // Lote
    $lote_servico = substr($lin,4,7);
    //Tipo de Registro
    $tipo_registro = substr($lin,7,1);
    // Cpf Or CNPJ
    $tipo_inscricao = substr($lin,17,1);
    //Numero de Inscrição Da Om
    $n_inscricao = substr($lin,18,32);
    //Número do Cônvenio
    $convenio = substr($lin, 33,8);
    //Cobrança Cedente
    $cobranca_cedente = substr($lin, 41,4);
    //Número de  Carteira da Cobrança
    $agencia_mantenedora = substr($lin, 53,4);
    $dg_agencia_mantenedora = substr($lin, 57,1);
    $conta_corrente = substr($lin, 59,11);
    $dg_conta_corrente = substr($lin, 70,1);
    $om_name = substr($lin,72,30);
    $banco_name = substr($lin, 102,30);
    $cod_retorno = substr($lin,142,1);
    $file_data_creater =  substr($lin, 143,8);
    $file_hr_creater = substr($lin,151,6);
    $sequencial = substr($lin,157,6);

    //echo "<hr>";
    
   

     
    switch ($tipo_registro) {
    case 0:

    /*
    echo "Linha Número<b> {$line_number}</b> :  " . htmlspecialchars($lin) . "<br>\n";   
    echo "<h2>Leitura do Header de Arquivo</h2>"; 
    echo "Codigo do Banco de Compensação<b>:" .  $bb. "</b><br>";
    echo "Lote de Serviço <b>:" . $lote_servico . "</b><br>";
    echo "Tipo de Registro<b>:" . $tipo_registro . "</b><br>";
    echo "Tipo de Inscrição<b>:" . $tipo_inscricao ."</b> (1=CPF / 2=CNPJ)<br>";
    echo "Número da Inscrição<b>:" . $n_inscricao . "</b> //NumerodaInscrição+NúmerodoConvênio+CodicoCedente<br>";
    echo "Número do Convênio<b>:" . $convenio . "</b>  //Zero a esquerda são ignorados<br>";
    echo "Cobrança Cedente <b>:" . $cobranca_cedente  . "</b>  //0014<br>";
    echo "Agencia Mantenedora<b>:" . $agencia_mantenedora  . "</b><br>";
    echo "Digito da Agencia Mantenedora<b>:" . $dg_agencia_mantenedora  . "</b><br>";
    echo "Conta Corrente<b>:" . $conta_corrente  . "</b>  //Zero a esquerda são ignorados<br>";
    echo "Digito da Conta Corrente<b>:" . $dg_conta_corrente  . "</b><br>";
    echo "Nome da OM<b>:" . $om_name  . "</b><br>";
    echo "Unidade Financeira<b>:" . $banco_name  . "</b><br>";
    echo "Código de Remessa/Retorno<b>:" . $cod_retorno  . "</b><br>";
    echo "Data de Criaçaõ do Arquivo<b>:" . $file_data_creater  . "</b> //DDMMAAAA<br>";
    echo "Hora de Criaçaõ do Arquivo<b>:" . $file_hr_creater  . "</b> //HHMMSS<br>";
    echo "Sequencial<b>:" . $sequencial  . "</b><br>";
  
    echo "<hr>";

    */









    break;
    case 1:
       


    //echo "Linha Número<b> {$line_number}</b> :  " . htmlspecialchars($lin) . "<br>\n";
    //echo "<h2>Leitura Header de Lote</h2>";
    //Linha depois da 0 Linha Lote 
    $header_CodBancoCompensacao= substr($lin,0,3);
    //Linha Lote de Serviço
    $header_lote_servico = substr($lin,3,4);
    //Tipo de Registro
    $header_TipoRegistro = substr($lin,7,1);
    //Tipo de Operação
    $header_TipoOperacao = substr($lin,8,1);
    //Versão do layout
    $header_VersaoLayout = substr($lin,13,3);
    //Tipo de Inscrição 
    $header_TipoInscricaoEmpresa = substr($lin,17,1);
    //Numero de Inscrição da Empresa
    $header_NumeroInscricaoEmpresa = substr($lin,19,14);
    //Número do Convênio Comppleto
    $header_NumeroConvenioCompleto = substr($lin, 33, 17);
    //Número do Convênio 
    $header_NumeroConvenio = substr($lin, 33, 9);
    //Cobrana Cedente 0014
    $header_CobrancaCedente = substr($lin, 42, 4);
    //Agencia Mantenedora da Conta
    $header_AgenciaMantenedora = substr($lin, 53, 5);
    //Digito Verificador da Conta
    $header_DigitoVerificadordaConta = substr($lin,58,1);
    //Numero da Conta Corrente
    $header_NumeroConta = substr($lin,59,12);
    //Digito Verificador Da Conta Corrente
    $header_DigitoVerificadordaContab=substr($lin,71,1);
    //Digito Verificador da Ag/Conta
    $header_DigitoVerificadorAgConta = substr($lin,72,1);
    //Nome da Empresa
    $header_NomedaEmpresa = substr($lin,72,31);
    //Número Remessa/Retorno
    $header_NumeroRemessaRetorno = substr($lin,183,8);
    //Data de Gravação Remessa/Retorno
    $header_DataGravacaoRetorno = substr($lin,191,8);





    //echo "Linha Número<b> {$line_number}</b> :  " . htmlspecialchars($lin) . "<br>\n"; 
    /*
    echo "Codigo do Banco de Compensação<b>:" . $header_CodBancoCompensacao. "</b><br>";
    echo "Lote de Serviço <b>:" . $header_lote_servico . "</b><br>";
    echo "Tipo de Registro <b>:" . $header_TipoRegistro . "</b><br>";
    echo "Tipo de Operação <b>:" . $header_TipoOperacao . "</b> //R=Para arquivo Remessa T=Arquivo Retorno.<br>";
    echo "Versionamento Layout <b>:" . $header_VersaoLayout . "</b><br>";
    echo "Tipo de Inscrição <b>:" . $header_TipoInscricaoEmpresa . "</b> (1=CPF / 2=CNPJ)<br>";
    echo "Tipo de Inscrição da OM <b>:" . $header_NumeroInscricaoEmpresa . "</b><br>";
    echo "Numero do Convenio Completo <b>:" . $header_NumeroConvenioCompleto . "</b> //NumeroDoConvenio+0014(CobrancaCedente)+NumerodaCarteira(CC)<br>";
    echo "Numero do Convenio <b>:" . $header_NumeroConvenio . "</b> <br>";
    echo "Cobrance Cedente <b>:" . $header_CobrancaCedente . "</b> <br>";
    echo "Agencia Mantenedora Da Conta <b>:" .  $header_AgenciaMantenedora . "</b> <br>";
    echo "Dígito Verificador da Conta <b>:" .  $header_DigitoVerificadordaConta . "</b> <br>";
    echo "Numero da Conta Corrente <b>:" .  $header_NumeroConta . "</b> <br>";
    echo "Dígito Verificador da Conta <b>:" .  $header_DigitoVerificadordaContab . "</b> <br>";
    echo "Dígito Verificador da Ag/Conta <b>:" .  $header_DigitoVerificadorAgConta . "</b> <br>";
    echo "Nome da OM<b>:" .  $header_NomedaEmpresa . "</b> <br>";
    echo "Número Remessa/Retorno<b>:" .  $header_NumeroRemessaRetorno . "</b> <br>";
    echo "Data de Gravação Remessa/Retorno<b>:" .  $header_DataGravacaoRetorno . "</b> <br>";
    echo "<hr>";

    */

















        break;
        case 3:
        //echo "Linha Número<b> {$line_number}</b> :  " . htmlspecialchars($lin) . "<br>\n";
        //Numero sequencial do Arquivo de Lote
        $segmentoSequenciaLote = substr($lin, 9, 4);

        //Segmento do Registro Detalhe
        $segmentoRegistroDetalhe = substr($lin,13,1);

       
        
        switch ($segmentoRegistroDetalhe) 
        {
        case 'T':
        $contador++;


        //Código de Movimento Retorno
        $t_CodigoMovimentoRetorno = substr($lin,15,2);
        //Agencia Mantenedora da Conta
        $t_AgenciaMantenedoraConta = substr($lin, 17,5);
        //Digito Verificador da Agência
        $_DigitoVerificadorAgencia = substr($lin,22,1);
        //Número da Conta Corrente
        $t_NumeroContaCorrente = substr($lin,24,11);
        //Digito Verificado da Conta
        $t_DigitoVerificadorConta = substr($lin,35,1);
        //Digito Verificador da Ag/Conta
        $t_DigitoVerificadorAgConta = substr($lin,36,1);
        //Identificação do Título
        $t_IdentificacaoTitulo = substr($lin,37,20);
        //Identificando Número do Convenio
        $t_IdtNumConvenio = substr($lin,37,7);
        //Identificando o ID do Candidato no CACMS
        $t_IdentificadorCandidato = substr($lin,44,10);
        $t_IdentificadorCandidato_final = substr($lin,50,4);
        //Codigo da Carteira
        $t_CodigoCarteira = substr($lin,57,1);
        //Número de Documento de Cobrança
        $t_NumeroDocCobranca = substr($lin,58,15);
        //Data de Vencimento do Titulo
        $t_DataVencimentoTitulo = substr($lin,73,8);
        //Valor do Titulo
        $t_ValorDoTitulo = substr($lin,81,13);
        //Número do Banco
        $t_NumerodoBanco = substr($lin,96,3);
        //Agencia Cobradora/Recebedora
        $t_AgenciaCobradoraRecebedora = substr($lin,99,5);
        //Digito Verificador da Agencia
        $t_DigitoVerificarAgencia = substr($lin,104,1);
        //Identificador Do Titulo da Empresa
        $t_IdentificadorTituloEmpresa = substr($lin,105,25);

        /*
        echo "Número Sequencial Registro no Lote:<b> " .  $segmentoSequenciaLote . "</b> <br>";//Retorno Linha 184 (case 3)
        echo "Segmento do Registro Detalhe: <b>" .  $segmentoRegistroDetalhe . "</b> <br>";    //Retorno Linha 186
        echo "Código de Movimento Retorno: <b>"  .  $t_CodigoMovimentoRetorno . "</b> <br>";
        echo "Agencia Mantenedora da Conta: <b>"  .  $t_AgenciaMantenedoraConta . "</b> <br>";
        echo "Digito Verificador da Agência: <b>"  .  $_DigitoVerificadorAgencia . "</b> <br>";
        echo "Número da Conta Corrente: <b>"  .  $t_NumeroContaCorrente . "</b> <br>";
        echo "Digito Verificador da Conta: <b>"  .  $t_DigitoVerificadorConta . "</b> <br>";
        echo "Digito Verificador da Ag/Conta: <b>"  .  $t_DigitoVerificadorAgConta . "</b> <br>";
        echo "Identificação de Titulo : <b>"  .  $t_IdentificacaoTitulo . "</b> //Convenio+Identificador Matricula do Candidato<br>";
        echo "Identificação do Convenio : <b>"  .  $t_IdtNumConvenio . "</b> <br>";
        echo "Identificação do Candidato no Sistema : <b>"  .  $t_IdentificadorCandidato . "</b> <br>";
        echo "Codigo Carteira : <b>"  .  $t_CodigoCarteira . "</b> <br>";
        echo "Número do Documento de Cobrança : <b>"  .  $t_NumeroDocCobranca . "</b> <br>";
        echo "Data de Vencimento de Titulo : <b>"  .  $t_DataVencimentoTitulo . "</b> <br>";
        echo "Valor do Titulo : <b>"  .  $t_ValorDoTitulo . "</b> <br>";
        echo "Número do Banco : <b>"  .  $t_NumerodoBanco . "</b> <br>";
        echo "Agencia Cobradora/Recebedora : <b>"  .  $t_AgenciaCobradoraRecebedora . "</b> <br>";
        echo "Digito Verificador da Agencia : <b>"  .  $t_DigitoVerificarAgencia . "</b> <br>";
        echo "Identificador Do Titulo da Empresa : <b>"  .  $t_IdentificadorTituloEmpresa . "</b> <br>"; */
       //Dados Passados para Rotina de Registro de Pagamento
       $registro[$contador]=$t_IdentificadorCandidato;
      
      
       
        break;
        case 'U':
        //Código Movimento Retorno
        $u_CodigoMovimentoRetorno =  substr($lin,15,2);
        //Juros Multa Encargos
        $u_JurosMultasEncargos = substr($lin,17,13);
        //Valor do Desconto Concedido
        $u_DescontoConcedido = substr($lin,32,13);
        //Valor do Abatimento Concedido
        $u_ValorAbatimentoConcedido = substr($lin,47,13);
        //Valor do IOF
        $u_ValIof = substr($lin,62,13);
        //Valor Pago Pelo Sacado
        $u_ValorPagoSacado = substr($lin,77,13);
        //Valor Liquido a ser creditado
        $u_ValorLiquidoCreditado = substr($lin,92,13);
        //Valor de Outras Despesas
        $u_ValorOutrasDespesas = substr($lin,107,13);
        //Valor de Outros Creditos
        $u_ValorDeOutroCreditos = substr($lin, 122,13);
        //Data Da Ocorrencia
        $u_DataOcorrencia = substr($lin,137,8);
        //Data da Efetivação do Crédito
        $u_DataEfetivacaoCredito = substr($lin,145,8);
        //Codigo da Ocorrencia
        $u_CodigoOcorrencia = substr($lin,153,4);




        /*
        echo "Número Sequencial Registro no Lote: <b> " .  $segmentoSequenciaLote . "</b> <br>"; //Retorno Linha 184 (case 3)
        echo "Segmento do Registro Detalhe: <b>" .  $segmentoRegistroDetalhe . "</b> <br>";      //Retorno Linha 186
        echo "Código Movimento Retorno : <b>"  .  $u_CodigoMovimentoRetorno . "</b> <br>";
        echo "Juros / Multas / Encargos : <b>"  .  $u_JurosMultasEncargos . "</b> <br>";
        echo "Valor do Desconto Concedido : <b>"  .  $u_DescontoConcedido . "</b> <br>";
        echo "Valor do Abatimento Concedido : <b>"  .  $u_ValorAbatimentoConcedido . "</b> <br>";
        echo "Valor do IOF : <b>"  .  $u_ValIof . "</b> <br>";
        echo "Valor Pago Pelo Sacado : <b>"  .  $u_ValorPagoSacado . "</b> <br>";
        echo "Valor Liquido a ser Creditado : <b>"  .  $u_ValorLiquidoCreditado . "</b> <br>";
        echo "Valor de outras Despesas : <b>"  .  $u_ValorOutrasDespesas . "</b> <br>";
        echo "Valor de outros créditos : <b>"  .  $u_ValorDeOutroCreditos . "</b> <br>";
        echo "Data da Ocorrencia : <b>"  .  $u_DataOcorrencia . "</b> <br>";
        echo "Data Efetivação do Credito : <b>"  .  $u_DataEfetivacaoCredito . "</b> <br>";
        echo "Código da Ocorrência : <b>"  .  $u_CodigoOcorrencia . "</b> <br>";
        */
        $DataPagamentoEfetivado[$contador]  =   $u_DataEfetivacaoCredito;
        $ValorPagamentoEfetivo[$contador]   =   $u_ValorPagoSacado;  
        break;
        }//Fim do Switch Segmento

















        break;

        case 5:
        //echo "Linha Número<b> {$line_number}</b> :  " . htmlspecialchars($lin) . "<br>\n";
        //Tipo de Registro
        $trailer_TipoRegistro = substr($lin,7,1);
        //Quantidade de Lotes do Arquivo
        $trailer_QuantidadeLotes = substr($lin,17,6);

        //echo "Tipo de Registro : <b>"  .  $trailer_TipoRegistro . "</b> <br>";
        //echo "Quantidade de Lotes do Arquivo : <b>"  .  $trailer_QuantidadeLotes . "</b> <br>";
        break;

        case 9:
       // echo "Linha Número<b> {$line_number}</b> :  " . htmlspecialchars($lin) . "<br>\n";
        //Tipo de Registro
        $arquivo_TipoRegistro = substr($lin,7,1);
        //Quantidade de Lotes do Arquivo
        $arquivo_QuantidadeLotes = substr($lin,17,6);
        //Quantidade de Conta p/ Conc (Lotes)
        $arquivo_QuantidadeContasConc = substr($lin,29,6);

        /*
         echo "Tipo de Registro : <b>"  .  $arquivo_TipoRegistro . "</b> <br>";
         echo "Quantidade de Lotes do Arquivo : <b>"  .  $arquivo_QuantidadeLotes . "</b> <br>";
         echo "Quantidade de Conta p/ Conc (Lotes) : <b>"  .  $arquivo_QuantidadeContasConc . "</b> <br>";
        */


        }//Fim do Switch Tipo de Registro


        }  


      //  echo "Total de Pagamento " . $contador;
      //  echo "<br>";
       // echo $t_IdentificadorCandidato_final;
      //  echo "<br><hr>";


         	//$this->db->get_where('candidatos', array('idcandidatos' => $t_IdentificadorCandidato_final));
        	
			
			



        

         /*
       
        for ($i=0;$i<=sizeof($contador);$i++)
        {
                 //$Identificado4Digitos[$i];
                 //$Identificado4Digitos[$i] = substr($registro[$i], 5,9);  
                

                 $I = array(
                    'aluno' =>sizeof(substr($registro[$i], 5,9)) 

                    );


                 
                print_r($I);
            
         
        
        
       

        

      



        }

        	



        	//print_r($registro);
    */




        
            


			foreach ($registro as $key => $value) {
			//echo $key . '-' . $value . '<br>';
            $aluno[$key] = substr($registro[$key], 5,9);
            if ($query = $this->db->get_where('candidatos', array('idcandidatos' => $aluno[$key]))) {
            $status = array
            (
                'status' => 1,
                'data_pgt'  =>  $u_DataEfetivacaoCredito
                );
            $this->db->where('idcandidatos', $aluno[$key]);
            $this->db->update('candidatos', $status);





                foreach ($query->result() as $key) 
                {
                    echo 'IDENTIFICAÇÃO DO CANDIDATO / NUMERO DA MATRICULA :<b><font color="blue">' . $key->idcandidatos . '</b></font>';
                    echo '<br>';
                    echo 'CANDIDATO :<b><font color="blue">' . $key->candidato_nome . '</b></font>';
                    echo '<br>';
                    echo 'CPF :<b><font color="blue">' .$key->cpf . '</b></font>';
                     echo '<br>';
                    echo 'STATUS ALTERADO PARA :' . '<b><font color="red">PAGO </b></font>' . ' Em : ' .$u_DataEfetivacaoCredito ;
                    echo '<br>';
                   
                    echo '<hr>';
                     echo '<br>';

                   
                }
               
                }  
                else 
                { echo 'SEM ALUNOS PARA BAIXAR'; }

                }
           
           //$this->load->view('/admin/success_msg', $data);       
                }
                  echo anchor('boleto/formupboleto', 'VOLTAR', 'title="Powered Sgt Luiz Augusto - CMCG"');
	               }


                   public function relatorio()
                   {

                    $data['relatorio']  = $this->db->get('candidatos');

                    $this->load->view('admin/admin_header');
                    $this->load->view('admin/admin_menu');
                    $this->load->view('admin/admin_relatorio_financeiro', $data);
                    $this->load->view('admin/admin_footer');
                    
                   }

                   public function pago()
                   {
                    
                    $var['x'] = $this->db->get_where('candidatos', array('status' => 1));
                    $this->load->view('admin/admin_header');
                    $this->load->view('admin/admin_menu');
                    $this->load->view('admin/admin_relatorio_financeiro_pago', $var);
                    $this->load->view('admin/admin_footer');
                    
                   }

                   public function estatistica()
                   {

                    $data['pagos']       =   $this->db->get_where('candidatos', array('status' => 1))->num_rows();
                    $data['isento']      =   $this->db->get_where('candidatos', array('status' => 3))->num_rows();
                    $data['sempagamento']        =   $this->db->get_where('candidatos', array('status' => 0))->num_rows();
                    $data['candidatos']  =   $this->db->get('candidatos')->num_rows();
                    $data['contador']   =   $this->db->get('users')->num_rows();
                    $this->load->view('admin/admin_header');
                    $this->load->view('admin/admin_menu');
                    $this->load->view('admin/estatisticas',$data);
                    $this->load->view('admin/admin_footer'); 
                   }


                   public function devedor()
                   {
                    
                    $var['x'] = $this->db->get_where('candidatos', array('status' => 0));
                    $this->load->view('admin/admin_header');
                    $this->load->view('admin/admin_menu');
                    $this->load->view('admin/admin_relatorio_financeiro_dev', $var);
                    $this->load->view('admin/admin_footer');
                    
                   }



                    public function mudastatus($id=NULL)
                    {



                    $query = $this->db->get_where('candidatos', array('idcandidatos' => $id));


                    foreach ($query->result() as $key ) {
                      
                    if($key->status == '0')
                    {
                    $this->db->set('status', '3');
                    $this->db->where('idcandidatos', $id);
                    // $query = $this->db->get_where('candidatos', array('idcandidatos' => $id));
                    $this->db->update('candidatos');
                    $data['relatorio']  = $this->db->get('candidatos');
                    echo $key->status;
                    
                    $this->load->view('admin/admin_header');
                    $this->load->view('admin/admin_menu');
                    $this->load->view('admin/admin_relatorio_financeiro', $data);
                    $this->load->view('admin/admin_footer');
                    
                    }

                    if($key->status =='3')
                    {
                    $this->db->set('status', '0');
                    $this->db->where('idcandidatos', $id);
                    // $query = $this->db->get_where('candidatos', array('idcandidatos' => $id));
                    $this->db->update('candidatos');
                    $data['relatorio']  = $this->db->get('candidatos');
                     echo $key->status;
                    
                    $this->load->view('admin/admin_header');
                    $this->load->view('admin/admin_menu');
                    $this->load->view('admin/admin_relatorio_financeiro', $data);
                    $this->load->view('admin/admin_footer');
                    
                    }

                    }

                    }


                public function cci($id=NULL)
                {
               $data['informacao'] = $this->db->get_where('candidatos', array('idcandidatos' => $id));
               
               
               
               $this->load->view('cci', $data);
                }






}
