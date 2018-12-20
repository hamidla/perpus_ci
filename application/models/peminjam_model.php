<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peminjam_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function get_peminjam()
	{		
		return $this->db->get('tb_peminjam');
	}
}
