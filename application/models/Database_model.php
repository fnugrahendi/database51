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
		$query = $this->db->get_where('user', array('fullname'=>$nis));
		return $query->result_array();
	}
	
	public function get_data_byId($id = null)
	{
		$query = $this->db->get_where('user', array('id'=>$id));
		return $query->result_array();
	}
	
	public function get_nis($q)
	{
		$this->db->select('fullname');
		$this->db->like('fullname', $q);
		$query = $this->db->get('user');
		if($query->num_rows() > 0)
		{
			foreach ($query->result_array() as $row)
			{
				$row_set[] = htmlentities(stripslashes($row['fullname'])); //create an array
			}
			echo json_encode($row_set); //format to json
		}
		//return json_encode($row_set);
	}
}
