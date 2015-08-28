<?php
class Database_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function get_data()
	{
		$query = $this->db->get('user');
		return $query->result_array();		
	}
	
	public function get_data_where($nis = null)
	{
		$query = $this->db->get_where('user', array('username'=>$nis));
		return $query->result_array();
	}
}
