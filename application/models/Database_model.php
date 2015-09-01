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
	
	public function update_data()
	{
		$fullname = $this->input->post('nama');
		$nickname = $this->input->post('nama-pgl');
		$id = $this->input->post('id');
		$x = $this->input->post('x');
		$xi = $this->input->post('xi');
		$xii = $this->input->post('xii');
		$alamat_asal = $this->input->post('alamat');
		$hp1 = $this->input->post('hp1');
		$hp2 = $this->input->post('hp2');
		$email1 = $this->input->post('email');
		$data = array(
			'fullname' => $fullname,
			'nickname' => $nickname,
			'x' => $x, 'xi' => $xi, 'xii' => $xii,
			'alamat_asal' => $alamat_asal,
			'hp1' => $hp1, 'hp2' => $hp2,
			'email1' => $email1
			);
		$where = "id = ".$id;
		$str = $this->db->update_string('user', $data, $where);
		$run = $this->db->query($str);
		if ($run == TRUE)
		{
			$query = $this->db->get_where('user', array('id'=>$id));
			return $query->result_array();
		}
	}
}
