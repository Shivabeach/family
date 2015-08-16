<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Includes extends CI_Controller {

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

}

/* End of file includes.php */
/* Location: ./application/controllers/includes.php */