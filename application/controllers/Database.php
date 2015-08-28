<?php
class Database extends CI_Controller{

	public function index()
	{
		$this->load->model('database_model');
		$this->load->view('header');
		$this->load->view('search');
	}
	
	public function cari()
	{
		$this->load->model('database_model');
		$data['dbs'] = $this->database_model->get_data();		
		//echo "hello bro";
		$this->load->view('header');
		$this->load->view('dbview',$data);	
	}
}

?>
