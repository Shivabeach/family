<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pass extends CI_Controller {

	public function index()
	{
		
	}

	function better_crypt($input, $rounds = 10)
	{
	  $crypt_options = array(
		'cost' => $rounds
	);
	  return password_hash($input, PASSWORD_BCRYPT, $crypt_options);
	  }

	  function verify($input)
	  {
	  	if(password_verify($password_entered, $password_hash)) {
	  }
}

/* End of file pass.php */
/* Location: ./application/controllers/pass.php */