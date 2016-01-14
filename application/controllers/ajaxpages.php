<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxpages extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            $this->load->database();
        }

	public function inDatabase()
	{		
		echo $this->db->count_all('primary');
	}

	public function ages()
	{
		//$query = $this->db->select_avg('year')->get('primary');
		$q = $this->db->select_avg('year')->get('primary');
		foreach ($q->result_array() as $row)
		{
		    $reply = $row['year'];
		    echo round($reply);
		}
		
	}
	public function level()
	{
		//$query = $this->db->select_avg('year')->get('primary');
		$q = $this->db->select_avg('level')->get('primary');
		foreach ($q->result_array() as $row)
		{
		    $reply = $row['level'];
		    echo round($reply);
		}
		
	}

}/* End of file ajaxpages.php */


/* Location: ./application/controllers/ajaxpages.php */