<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Manage_model');
    }

	public function index(){
		
	$this->load->view('input_train');
		
	}

public function view()
    {
        $data['view'] = $this->Manage_model->view();
        $this->load->view('view', $data);
    }
}
