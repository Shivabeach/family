<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_data extends CI_Model {

	function getData($parent)
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get_where("posts", array("parent" => $parent));
		return $query->result();
	}

}

/* End of file get_data.php */
/* Location: ./application/models/get_data.php */