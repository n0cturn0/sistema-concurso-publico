<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');

		if (!$this->ion_auth->logged_in())
		{
			redirect('admin/login');
		}
	}




	public function novo($id=NULL)
	{
		/*
		if (!$this->ion_auth->logged_in())
		{
			redirect('admin/login');
		}
		*/
		$data['id'] = $id;
		$this->load->view('candidato', $data);

	
	}



	public function edita($id)
	{
		$data['candidato'] = $this->db->get_where('candidatos', array('idcandidatos' => $id));
		$data['user'] = $this->ion_auth->user()->row();
		$this->load->view('candidato_edit', $data);
		
	}


	public function atualizarcandidato()
	{
	$id = $this->input->post('id_candidato');		
	//$this->db->get_where('candidatos', array('idcandidatos' => $id));
	$ano = $this->input->post('yyyy');
	$mes = $this->input->post('mm');
	$dia = $this->input->post('dd');

	$dat = $ano.$mes.$dia;

	echo $dat;
	
	$atualizacao = array(
		'candidato_nome' => $this->input->post('nome'),
		'identidade'		=>  $this->input->post('identidade'),
		'cpf'		=>  $this->input->post('cpf'),
		'forca'		=>  $this->input->post('forca'),
		'serie'		=>  $this->input->post('serie'),
		'sexo' 		=>  $this->input->post('sexo'),
		'data_nascimento' => $dat

	) ;


	$this->db->where('idcandidatos', $id);
		$this->db->update('candidatos', $atualizacao);
	}

	public function cadastrado($id){
	

	$data['candidatos'] = $this->db->get_where('candidatos', array('id_responsavel' => $id));
	$data['user'] = $this->ion_auth->user()->row();
	$this->load->view('candidato_resp', $data);


	}





	public function lista()
	{
		
		$data['contador'] =   $this->db->get('candidatos')->num_rows();

		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('candidatos', 'candidatos.id_responsavel = users.id');
		
		$data['lista'] = $this->db->get();
		
		$data['stt'] = 'Relatório Geral Candidato Responsável';

		 $this->load->view('admin/admin_header');
         $this->load->view('admin/admin_menu');
         $this->load->view('admin/lista_candidato', $data);
         $this->load->view('admin/admin_footer');

	}


	public function lista_resp()
	{
			$data['contador'] =   $this->db->get('users')->num_rows();
			$data['responsavel'] = $this->db->get('users');

			$this->load->view('admin/admin_header');
	         $this->load->view('admin/admin_menu');
	         $this->load->view('admin/lista_responsavel', $data);
	         $this->load->view('admin/admin_footer');
	}



	public function statisc()
	{
	 $data['exercito']       =   $this->db->get_where('users', array('tipo' => 'Exército'))->num_rows();
	 $data['civil']       =   $this->db->get_where('users', array('tipo' => 'Civil'))->num_rows();
	 $data['fab']       =   $this->db->get_where('users', array('tipo' => 'Aeronáutica'))->num_rows();


			$this->load->view('admin/admin_header');
	         $this->load->view('admin/admin_menu');
	         $this->load->view('admin/estatistica_data', $data);
	         $this->load->view('admin/admin_footer');
	}



	public function inserir ()
	{
		

		$ano = $this->input->post('yyyy');
		$mes = $this->input->post('mm');
		$dia = $this->input->post('dd');
		$data_completa = $ano.$mes.$dia;
		$candidato 		= $this->input->post('nome');
		$candidato_cpf 	= $this->input->post('cpf');
		$data = array(

			'id_responsavel' 	=> 	$this->input->post('id_responsavel'),
			'candidato_nome'	=> 	$this->input->post('nome'),
			'sexo'				=> 	$this->input->post('sexo'),
			'identidade'		=> 	$this->input->post('identidade'),
			'cpf'				=>	$this->input->post('cpf'),
			'forca'				=>	$this->input->post('forca'),
			'data_nascimento'	=>	$data_completa,
			'status'			=>	'0', // STATUS ATIVO
			'serie'				=> $this->input->post('serie'),
			'boleto_status'		=> $this->input->post('boleto')




		);

		if ($this->db->insert('candidatos', $data)){
		$data['msg_success']	= "O candidato $candidato, Foi inserido com Sucesso";
		$data['msg_incricao'] 	= 'CPF:'.$candidato_cpf; 
		$data['boleto'] = '100';
		$this->load->view('msg_success', $data);

		}

		

	}









}
