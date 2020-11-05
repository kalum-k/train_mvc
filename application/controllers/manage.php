<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
            
            //$this->load->library('session');
            $this->load->model('Manage_model');
         
    }
    public function index(){
        

    }
    public function input_train(){
        
        $headend = array(
            't_id' => $this->input->post('t_id'),
            'station_head' => $this->input->post('station_head'),
            'time_out' => $this->input->post('time_out'),
        );
        $mid = array(
            't_id' => $this->input->post('t_id'),
            'in' => $this->input->post('in'),
            'out' => $this->input->post('out'),
        );
         $des = array(
            't_id' => $this->input->post('t_id'),
            'station_des' => $this->input->post('station_des'),
            'time_in' => $this->input->post('time_in'),
            'notation' => $this->input->post('notation'),
        );
        //print_r($);
        $this->Manage_model->head_insert($headend);
        $this->Manage_model->mid_insert($mid);
        $this->Manage_model->des_insert($des);


        redirect('Welcome/view', 'refresh');

    }
    

   
    
           
}

