<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function __construct()
       {
            parent::__construct();
            $this->load->database();
        }
    public function index()
    {
        $this->db->select('male');
        $this->db->where('family', 'VanHorn');
        $this->db->group_by('male', 'desc');
        $query = $this->db->get('primary');
        if($query->result()){
            $data['testor'] = $query->result();
        }
        $data['title'] = "Test page";
        $this->load->view('pages/test', $data);
    }

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */
