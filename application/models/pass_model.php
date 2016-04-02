<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pass_model extends CI_Model {

    public $variable;

    public function __construct()
    {
        parent::__construct();
        
    }
    function verify_signin($input)
    {
        if(password_verify($input, $password_hash))
        {
            return true;
        }
    }

}

/* End of file pass_model.php */
/* Location: ./application/models/pass_model.php */
