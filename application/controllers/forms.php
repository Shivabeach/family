<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forms extends CI_Controller {
	public function form1() //insert family ancestry
	{
		$this->load->database();
		$data = array (
			'family'        => htmlspecialchars($this->input->post('family')),
			'male'          => htmlspecialchars($this->input->post('male')),
			'female'        => htmlspecialchars($this->input->post('female')),
			'relation-ship' => htmlspecialchars($this->input->post('relation-ship')),
			'relative'      => htmlspecialchars($this->input->post('relative')),
			'level'         => htmlspecialchars($this->input->post('level')),
			'year'          => htmlspecialchars($this->input->post('year')),
			'branch2'       => htmlspecialchars($this->input->post('branch2')),
			'country'       => htmlspecialchars($this->input->post('country')),
			'comment'       => htmlspecialchars($this->input->post('comment'))

		);
		$this->form_validation->set_rules('family', 'Family', 'required|trim');
		$this->form_validation->set_rules('male', 'Male', 'required|trim');
		$this->form_validation->set_rules('female', 'Female', 'required|trim');
		$this->form_validation->set_rules('relation-ship', 'Relationship', 'required|trim');
		$this->form_validation->set_rules('relative', 'Relative', 'required|trim');
		$this->form_validation->set_rules('level', 'Level', 'required|trim|numeric');
		$this->form_validation->set_rules('year', 'Year', 'required|trim|numeric');
		$this->form_validation->set_rules('branch2', 'Branch 2', 'required|trim');
		$this->form_validation->set_rules('country', 'Country', 'required|trim');
		$this->form_validation->set_rules('comment', 'Comment', 'trim');
		if( $this->form_validation->run() == TRUE ) {
			$this->db->insert('primary', $data);
			echo "grand shit";
		}else
		{
			echo validation_errors();
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
}//END OF CONTROLLER
/* End of file forms.php */
/* Location: ./application/controllers/forms.php */