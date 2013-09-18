<?php
class C_admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		if($this->session->userdata('loginya') != TRUE){
			redirect('');
		}
	}
	
	function index(){
		$sesinya	= $this->session->userdata('loginya');
		$data		= array(
			'judul'		=> 'Halaman Administrator Learning Apps',
			'log'		=> $sesinya['pengguna'],
		);
		$this->load->view('v_dash',$data);
	}
	
	function logout(){
		$this->session->sess_destroy();
		session_destroy();
		redirect('');
	}
}
?>