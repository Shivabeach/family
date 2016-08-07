<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function __construct()
       {
            parent::__construct();
            $this->load->database();
            $this->load->library('table');
        }
    public function index()
    {
        $this->db->select('male, family2');
        $this->db->group_by("family2", "asc");
        $query = $this->db->get('history');
        if($query->result()){
            $data['testor'] = $query->result();
        }
        $data['title'] = "Test page";
        $this->table->set_heading('Male', 'Family2');
        $tmpl = array (
            'table_open' => '<table class="pure-table">',
            'heading_row_start'   => '<tr>',
            'heading_row_end'     => '</tr>',
            'heading_cell_start'  => '<th>',
            'heading_cell_end'    => '</th>',
            'table_close'         => '</table>'
            );
        $this->table->set_template($tmpl);
        $this->load->view("pages/test", $data);
    }

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */
