<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Includes extends CI_Controller {
	$this->load->database();

	public function complete() //this just tells me who I have already entered in the family insert page
	{
		$data = array();
		$this->db->select("relative")->from("primary")->order_by("id","desc");
		$query = $this->db->get();
		if ($query->result()) {
			$data['display'] = $query->result();
		}else {
			echo "no return";
		}
		//$this->load->view('include/done', $data);
	}
	public function get_country()
	{
		$this->db->distinct("country");
		$query = $this->db->get("primary");
		if ($query->result())
		{
			$data['countrys'] = $query->result();
		}
		$this->load->view("include/nav_country", $data);



	}

}
/* End of file includes.php */
/* Location: ./application/controllers/includes.php */