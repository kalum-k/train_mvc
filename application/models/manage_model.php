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
		$this->db->from('personal');
		$this->db->join('alumni', 'alumni.student_id = personal.student_id');
		$this->db->join('workinformation', 'workinformation.student_id = personal.student_id');
		$result = $this->db->where(array('personal.student_id' => $id, 'alumni.student_id' => $id, 'workinformation.student_id' => $id) );
		$result = $this->db->get('');
		return $result->result();
	}
}
