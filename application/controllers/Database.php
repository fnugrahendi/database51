<?php
class Database extends CI_Controller{
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->library('javascript');
		$this->load->view('header');
		$this->load->view('search');
	}
	
	public function cari()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('header');
		$nis = $this->input->post('nis');
		$this->load->model('database_model');
		$data['dbs'] = $this->database_model->get_data_where($nis);
		$this->load->view('dbview',$data);	
		//$data['oke'] = $this->database_model->get_nis($nis);
		//$this->load->view('dbtes',$data);	
	}
	
	function get_nis_auto()
	{
		$this->load->model('database_model');
		if(isset($_GET['term']))
		{
			$q = ($_GET['term']);
			$this->database_model->get_nis($q);
		}
	}
	
	public function edit($id=null)
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->model('database_model');
		$data['dbs'] = $this->database_model->get_data_byId($id);
		$this->load->view('dbedit',$data);
	}
}
?>
