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
		$this->load->view('head/headfam',$data1);
		$this->load->view('include/nav2');
		$this->load->view("pages/primary",$data);
		$this->load->view("foot/footer");

	}

	public function fam()
	{
		$data['title'] = 'Family Insertion';
		$this->load->view('admin/family-insert', $data);
	}

	public function van()
	{
		$name = "VanHorn";
		$this->db->distinct();
		$this->db->select('family, male,female')->where('family', $name)->group_by('male');
		$query = $this->db->get('primary');
		If($query->result())
		{
			$data1['famnames'] = $query->result();
		}
		$data['title'] = "VanHorn page";
		$this->load->view('head/headfam',$data);
		$this->load->view('include/nav2');
		$this->load->view("pages/van", $data1);
		$this->load->view("foot/footer");
	}

	public function bos()
	{
		$data['title'] = "Bostick page";
		$this->load->view('head/headfam',$data);
		$this->load->view('include/nav2');
		$this->load->view("pages/bos");
		$this->load->view("foot/footer");
	}

	public function dat()
	{
		$this->db->distinct();
		$this->db->select("family, male, female, relationship, year")->from("primary")->group_by("year", "asc");
		$query = $this->db->get();
		if ($query->result()) {
			$data1['folks'] = $query->result();
		}
		$data['title'] = "Data page";
		$this->load->view('head/headfam',$data);
		$this->load->view('include/nav2');
		$this->load->view("pages/data", $data1);
		$this->load->view("foot/footer");
	}

	public function vandna()
	{
		$data = [];
		$data['title'] = "VanHorn DNA";
		$this->load->view('head/headfam',$data);
		$this->load->view('include/nav2');
		$this->load->view("pages/vandna");
		$this->load->view("foot/footer");
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */