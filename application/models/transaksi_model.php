<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	function get_transaksi()
	{		
		return $this->db->get('tb_transaksi');
	}
}
