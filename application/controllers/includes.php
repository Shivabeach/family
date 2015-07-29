<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Includes extends CI_Controller {

	public function complete() //this just tells me who I have already entered in the family insert page
	{
		$data = array();
		$this->db->select("relative, family, male, female");
		$this->db->order_by("id", "desc");
		$query = $this->db->get("primary");
		if ($query->result()) {
			$data['done'] = $query->result();
		}
		$data['statement'] = "Results to Date";
		$this->load->view('include/done', $data);

	}

}

/* End of file includes.php */
/* Location: ./application/controllers/includes.php */