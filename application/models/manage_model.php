<?php defined('BASEPATH') or exit('No direct script access allowed');
class Manage_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function personal_insert($datapersonal)
	{
		$this->db->insert('personal', $datapersonal);
	}

	function alumni_insert($dataalumni)
	{
		$this->db->insert('alumni', $dataalumni);
	}

	function workinformation_insert($dataworkinformation)
	{
		$this->db->insert('workinformation', $dataworkinformation);
	}

	function personal_view()
	{
		$this->db->select('*');
		$this->db->from('personal');
		$this->db->join('alumni', 'alumni.student_id = personal.student_id');
		$this->db->join('workinformation', 'workinformation.student_id = personal.student_id');
		$data = $this->db->get('');
		return $data;
	}

	function info_list_m($id)
	{
		$this->db->select('*');
		$result = $this->db->get_where('personal', array('student_id' => $id));
		return $result->result();
	}

	function check_login($student_id, $password)
	{
		// $this->db->select('email,password');
		$this->db->where('student_id','password');
		$result = $this->db->get('personal');
		$message = '';
		if ($result->num_rows() > 0) {
			$message = true;

			// $this->load->view('list');

		} else {
			$message = false;
		}
		$data = array(
			"message"=>$message,"data"=>$result->result()

		);
		return $data;
	}
}
