<?php defined('BASEPATH') or exit('No direct script access allowed');
class Manage_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function head_insert($headend)
	{
		$this->db->insert('head_end',$headend);
	}

	function mid_insert($mid)
	{
		$this->db->insert('mid_station',$mid);
	}

	function des_insert($des)
	{
		$this->db->insert('destination',$des );
	}

	function view()
	{
		$this->db->select('*');
		$this->db->from('head_end');
		$this->db->join('mid_station', 'mid_station.t_id = head_end.t_id');
		$this->db->join('destination', 'destination.t_id =  head_end.t_id');
		$this->db->where('destination.time_in <=' ,"12:00");
		$data = $this->db->get('');
		return $data;
	}

	
	
}
