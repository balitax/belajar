<?php if(!defined('BASEPATH')) exit('Kesalahan !');

class C_login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}
	
	function index(){
		$data = array(
			'judul'		=> 'Login Aplikasi Informasi Media Belajar',
			'level'		=> $this->M_login->ambiluser()->result_array(),
		);
		$this->load->view('v_login',$data);
	}
	function eror(){
		$data = array(
			'judul'		=> 'Terjadi Kesahalan',
		);
		$this->load->view('v_eror',$data);
	}
	
	function auth(){
		if($_POST){
			$username	= $this->input->post('username');
			$password	= $this->encrypt->sha1($this->input->post('password'));
			$level		= $this->input->post('level');
			
			$temp		= $this->M_login->login("where username = '$username' and password = '$password' 
							and level = '$level'")->result_array();
		
			if($temp != NULL){
				$data	= array(
					'username'	=> $temp[0]['username'],
					'password'	=> $temp[0]['password'],
					'level'		=> $temp[0]['level'],
					'pengguna'	=> $temp[0]['nama_lengkap'],
				);
				$this->session->set_userdata('loginya',$data);
				session_start();
				redirect("dashboard");
			}
			else {
				redirect("");
			}
		}
		else {
			redirect('eror');
		}
	}
}


?>