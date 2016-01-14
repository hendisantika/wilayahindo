<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_login extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
  
		function ambilPengguna($username, $password, $status) {
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->where('status', $status);
			$query = $this->db->get();
    
			return $query;
		}
  
		function dataPengguna($username) {
			$this->db->select('username');
			$this->db->select('nama');
			$this->db->where('username', $username);
			$query = $this->db->get('user');
   
			return $query->row();
		}
	}
?>
