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

	function login()
	{
		$this->db->select('*');
        $this->db->from('personal');
        $this->db->where(array('student_id' => $studentid, 'password' => $password));            
        $query = $this->db->get();

        $user = $query->row();
    
            if ($user->student_id ) {
                $this->session->set_flashdata("success", "เข้าสู่ระบบสำเร็จ");
    
                $_SESSION['student_id'] = $user->student_id;
                $_SESSION['name'] = $user->name;
                $_SESSION['password'] = $user->password;


    
                redirect("welcome/homelogin", "refresh");
            } else {
                $this->session->set_flashdata("error", "ไม่มีชื่อศิษย์เก่านี้ โปรดลงทะเบียน");
                echo '<script> alert("รหัสนักศึกษาหรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง") </script>';
                redirect("welcome/login", "refresh");
			}
			
		/*$this->db->select('student_id, password');
		$result = $this->db->get('user');
		return $result;*/


	}

	function update_personal($datapersonal,$id){
		$this->db->where('student_id',$id);
		$this->db->update('personal', $datapersonal);
  	}
  	function update_alumni($dataalumni,$id){
		$this->db->where('student_id',$id);
		$this->db->update('alumni', $dataalumni);
  	}
  	function update_work($dataworkinformation,$id){
		$this->db->where('student_id',$id);
		$this->db->update('workinformation', $dataworkinformation);
  	}

  	function showone($id)
	{
		$result =	$this->db->select('*')
			->from('personal')
			->join('alumni','alumni.student_id = personal.student_id')
			->join('workinformation','workinformation.student_id = personal.student_id')
			->where('personal.student_id',$id)
			->get();
			return $result;

			
		}

	  	function showone2()
	{
		$result =	$this->db->select('*')
			->from('personal')
			->join('alumni','alumni.student_id = personal.student_id')
			->join('workinformation','workinformation.student_id = personal.student_id')
			->get();
			return $result;

			
		}
	
}
