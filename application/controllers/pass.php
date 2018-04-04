<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pass extends CI_Controller {

	public function index()
	{
		$this->load->model("pass_model");

	}

	function better_crypt($input)
	{
		return password_hash($input, PASSWORD_BCRYPT);
	}
	
	function verify($input)
	  {
	  	if() {
		
		}
	}

}

/* End of file pass.php */
/* Location: ./application/controllers/pass.php */
