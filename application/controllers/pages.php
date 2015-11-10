<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function __construct()
       {
            parent::__construct();
            $this->load->database();
        }
/**
 * gets data for the main page
 * @return string [description]
 */
	public function index()
	{
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
		$data['title'] = "VanHorn page";
		$this->load->view('head/headfam',$data);
		$this->load->view('include/nav2');
		$this->load->view("pages/van");
		$this->load->view("foot/footer");
	}

	public function bos()//main bostick page
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

	public function notes()
	{
		$family = "VanHorn";
		$family2 = "Bostick";
		$this->db->select("family, rel_name, note, year")->from("notes")->where("family", $family)->group_by("year");
		$query = $this->db->get();
		if ($query->result()) {
			$data1['notes'] = $query->result();
		}
		$family2 = "Bostick";
		$this->db->select("family, rel_name, note, year")->from("notes")->where("family", $family2)->group_by("year");
		$query = $this->db->get();
		if ($query->result()) {
			$data1['notes2'] = $query->result();
		}
		$data['title'] = "Notes page";
		$this->load->view('head/headfam',$data);
		$this->load->view('include/nav2');
		$this->load->view("pages/notes", $data1);
		$this->load->view("foot/footer");
	}

	public function vannames()
	{
		$name = "VanHorn";
		$this->db->distinct();
		$this->db->select("family, male, female, relationship, year")->from("primary")->where("family", $name)->group_by("year", "asc");
		$query = $this->db->get();
		if ($query->result()) {
			$data1['folks'] = $query->result();
		}
		$data['title'] = "VanHorn Names";
		$this->load->view('head/headfam',$data);
		$this->load->view('include/nav2');
		$this->load->view("pages/vannames", $data1);
		$this->load->view("foot/footer");
	}
	public function bosdna()
	{
		$data = [];
		$data['title'] = "Bostick DNA";
		$this->load->view('head/headfam',$data);
		$this->load->view('include/nav2');
		$this->load->view("pages/bosdna");
		$this->load->view("foot/footer");
	}

	public function bosnames()
	{
		$name = "Bostick";
		$this->db->distinct();
		$this->db->select("family, male, female, relationship, year")->from("primary")->where("family", $name)->group_by("year", "asc");
		$query = $this->db->get();
		if ($query->result()) {
			$data1['folks'] = $query->result();
		}
		$data['title'] = "Bostick Names";
		$this->load->view('head/headfam',$data);
		$this->load->view('include/nav2');
		$this->load->view("pages/bosnames", $data1);
		$this->load->view("foot/footer");
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */