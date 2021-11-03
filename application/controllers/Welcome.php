<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
		$this->load->helper(array('form','url','language', 'date'));
		$this->load->library(array('ion_auth','form_validation'));
		
		
	
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function send()
	{

		//identificadores de onde originou o registro 10 = fomulario concurso 0 = Reserva de vaga
		
		$form_conc = '10';
		$reserva_vaga = '0';

		$ano = $this->input->post('yyyy');
		$mes = $this->input->post('mm');
		$dia = $this->input->post('dd');
		$data_completa = $ano.$mes.$dia;

		$now = time();
		$human = unix_to_human($now);
		$username 	=  $this->input->post('cpf');

		$password	= $this->input->post('identidade');
		$email    = $this->input->post('email');
		
		$additional_data = array(
		
		'parentesco' 		=> $this->input->post('parentesco'),
		'nome'				=> $this->input->post('nome'),
		'cpf'				=> $username,
		'identidade' 		=> $password,
		'logradouro' 		=> $this->input->post('logradouro'),
		'numero' 			=>	$this->input->post('numero'),
		'bairro'			=>	$this->input->post('bairro'),
		'cep'				=> $this->input->post('cep'),
		'complemento'		=> $this->input->post('complemento'),
		'cidade'			=> $this->input->post('cidade'),
		'data_nascimento'	=> $data_completa,
		'estado' 			=> $this->input->post('estado'),
		'responsavel' 			=> $this->input->post('responsavel'),
		'telefone'   		=> $this->input->post('telefone_1'),
		'celular' 			=> $this->input->post('telefone_2'),
		'activation_code'	=> $form_conc,
		'creacao'			=> $human,
		'tipo' 			=> $this->input->post('forca')


			);


	



		if (!$this->ion_auth->register($username, $password, $email, $additional_data )){
			$data['msg_error'] = 'Inconsistência de informações, esse CPF já foi cadastrado.' ;
			$data['msg_error_desc'] = 'Entre com contato com a Ajudância do Corpo de Aluno no telefone 67 3368-4825.' ;
			$this->load->view('msg_error', $data);
		} else {
			$data['boleto'] = '100';
			$data['msg_success'] = 'Seu cadastro foi Realizado com Sucesso!' ;	
			$data['msg_incricao'] = 'Obrigado por realizar a inscrição. Clique no botão Abaixo para efetuar o Logon no Sistema. Lembre-se que <kbd>seu usuário é o CPF do responsável, e a senha a identidade</kbd> do mesmo. Faça Logon Para inserir informações do Candidato.';
			$this->load->view('msg_success', $data);
		}
		
	
		
	}

	public function valida()
	{
		
		$something = $this->input->post('id');
		if ($something=1){
			redirect('welcome/index');
		}
	}

	
	
}
