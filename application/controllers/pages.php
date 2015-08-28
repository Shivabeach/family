<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
/**
 * gets data for the main page
 * @return string [description]
 */
	public function index()
	{
		$this->load->database();
		$this->load->model("get_data");
		$data["results"] = $this->get_data->getdata("vanhorn");
		$data1['title'] = "Main Page";
		$this->load->view("head/head", $data1);
		$this->load->view("include/nav");
		$this->load->view('include/main', $data);
		$this->load->view("foot/footer");

	}

	public function fam()
	{
		$data['title'] = 'Family Insertion';
		$this->load->view('admin/family-insert', $data);
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */