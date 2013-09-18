<?php

class M_login extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function login($where = ''){
		return $this->db->query("select * from user $where;");
	}
	
	function ambiluser(){
		return $this->db->query("select * from user");
	}
}


?>