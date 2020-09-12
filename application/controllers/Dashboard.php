<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('dashboard_model');
	// }
	
	public function index()
	{

			$data['main_view']      = 'dashboard_view';
            $this->load->view('template', $data);
            // $this->load->view('template');
	}

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */