<?php
class Database extends CI_Controller{

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('search');
	}
	
	public function cari()
	{
		$this->load->helper('url');
		$nis = $this->input->post('nis');
		$this->load->model('database_model');
		$data['dbs'] = $this->database_model->get_data_where($nis);	
		$this->load->view('header');
		$this->load->view('dbview',$data);	
	}
}

?>
