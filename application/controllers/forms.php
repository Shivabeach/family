<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forms extends CI_Controller {
	 public function __construct()
       {
            parent::__construct();
            $this->load->database();
        }

	public function form1() //insert family ancestry
	{
		$data = array (
			'family'        => htmlspecialchars(trim($this->input->post('family'))),
			'male'          => htmlspecialchars(trim($this->input->post('male'))),
			'female'        => htmlspecialchars(trim($this->input->post('female'))),
			'relationship' =>  htmlspecialchars(trim($this->input->post('relationship'))),
			'relative'      => htmlspecialchars(trim($this->input->post('relative'))),
			'level'         => htmlspecialchars(trim($this->input->post('level'))),
			'year'          => htmlspecialchars(trim($this->input->post('year'))),
			'branch2'       => htmlspecialchars(trim($this->input->post('branch2'))),
			'country'       => htmlspecialchars(trim($this->input->post('country'))),
			'comment'       => htmlspecialchars(trim($this->input->post('comment')))

		);
		$this->form_validation->set_rules('family', 'Family', 'required|alpha|max_length[9]');
		$this->form_validation->set_rules('male', 'Male', 'required');
		$this->form_validation->set_rules('female', 'Female', 'required');
		$this->form_validation->set_rules('relationship', 'Relationship', 'required');
		$this->form_validation->set_rules('relative', 'Relative', 'required|is_unique[primary.relative]');
		$this->form_validation->set_rules('level', 'Level', 'required|numeric');
		$this->form_validation->set_rules('year', 'Year', 'required|numeric');
		$this->form_validation->set_rules('branch2', 'Branch 2', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required|alpha|max_length[20]');
		$this->form_validation->set_rules('comment', 'Comment', 'trim');
		if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('primary', $data);
			echo "grand shit";
		}
	}


	 //end form1 insert family members
	/**
	* [posts Creates posts for main pages]
	* @return [data] [description]
	*/
	public function posts()
	{

	}

	public function relative_search()
	{
		$seek = htmlspecialchars(trim($this->input->post('name')));
		$this->form_validation->set_rules('name', 'Relative Name', 'required');
		if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
		$this->db->where('male', $seek);
		$this->db->or_where('female', $seek);
		$this->db->or_where('relationship', $seek);
		$this->db->select('family,male, female, relationship, relative, level, year, country, comment');
		$query = $this->db->get('primary');
		$num = $query->num_rows();
      	echo "<h3>Found $num records for $seek</h3>";
		if($query->num_rows() > 0) {
        	foreach ($query->result() as $row) {
             echo "<dt> <h3 class='heading'>$row->family</h3> </dt>";
             echo "<dd>Relatives:  <u>$row->male</u> - <u>$row->female</u></dd>";
             echo "<dd>Was our $row->relationship</dd>";
             echo "<dd>The relatives were born in <u>$row->country</u> in <u>$row->year</u></dd>";
             echo "<dd>The person we are related to (<u>$row->relative</u>) is our $row->level cousin</dd>";
             echo "<br>";
             echo "<dd>Additional information: $row->comment</dd>";
	         }
	      }
		}
	}

	public function namey()
	{
		$data = [
			'family' => htmlspecialchars(trim($this->input->post('family'))),
			'name' => htmlspecialchars(trim($this->input->post('name')))
		];
		$this->form_validation->set_rules('family', 'Family', 'required|alpha|max_length[9]');
		$this->form_validation->set_rules('name', 'Name', 'required|alpha|max_length{20}|is_unique[names.name]');
		if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('names', $data);
			echo "grand shit";
		}

	}
}//END OF CONTROLLER
/* End of file forms.php */
/* Location: ./application/controllers/forms.php */