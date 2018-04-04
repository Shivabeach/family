<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

    public function van()//main vanhorn page
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

    public function dat() //feeds the 4 family names
    {
        $this->db->distinct();
        $fam = "VanHorn";
        $this->db->select("id, family, name")->from("names")->where("family", $fam)->order_by('id', 'asc');
        $query = $this->db->get();
        if ($query->result()) {
            $data1['folks'] = $query->result();
        }
        $this->db->distinct();
        $fam = "Hunt";
        $this->db->select("id, family, name")->from("names")->where("family", $fam)->order_by('id', 'asc');
        $query = $this->db->get();
        if ($query->result()) {
            $data1['hunt'] = $query->result();
        }
        $this->db->distinct();
        $fam = "Reed";
        $this->db->select("id, family, name")->from("names")->where("family", $fam)->order_by('id', 'asc');
        $query = $this->db->get();
        if ($query->result()) {
            $data1['reed'] = $query->result();
        }
        $this->db->distinct();
        $fam = "Bostick";
        $this->db->where("family", $fam);
        $query = $this->db->get('names');
        if ($query->result()) {
            $data1['bostick'] = $query->result();
        }

        $data['title'] = "Family Names";
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
        $data = [];
        $family = "VanHorn";
        $family2 = "Bostick";
        $this->db->select("family, rel_name, note, year")->where("family", $family)->group_by("year");
        $query = $this->db->get("notes");
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
        $this->db->distinct();
        $name = "VanHorn";
        $this->db->select("family, male, female, relationship, year")->where("family", $name)->order_by("year", "asc");
        $query = $this->db->get("primary");
        if ($query->result()) {
            $data1['folks'] = $query->result();
        }
        $data['title'] = "VanHorn Names";
        $this->load->view('head/headfam',$data);
        $this->load->view('include/nav2');
        $this->load->view("pages/vannames", $data1);
        $this->load->view("foot/footer");
    }
    public function bosdna() //Bostick DNA
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

    public function namer()
    {
        $data['title'] = "Family Names";
        $this->load->view('head/headfam',$data);
        $this->load->view('include/nav2');
        $this->load->view("admin/names");
        $this->load->view("foot/footer");
    }

    public function timeline()
    {
        $data['title'] = "Family Timeline";
        $this->load->view('head/headfam',$data);
        $this->load->view('include/nav2');
        $this->load->view("pages/time");
        $this->load->view("foot/footer");
    }
    public function datapages()
    {
        $data['title'] = "Family Timeline";
        $this->load->view('head/headfam',$data);
        $this->load->view('include/nav2');
        $this->load->view("pages/data_page");
        $this->load->view("foot/footer");
    }
    function style()
    {
        $this->load->view("pages/styleguide");
    }
    /**
     * undocumented function
     *
     * @return void
     * @author
     **/
    public function military()
    {
        $data['title'] = "Military Service";
        $query = $this->db->select("name,military,war,country")->from("military")->get();
        if ($query->result()) {
            $data['army'] = $query->result();
        }
        $this->table->set_heading('Name', 'Military', 'War', 'Country');
        $tmpl = array (
            'table_open' => '<table class="pure-table pure-table-bordered">',
            'heading_row_start'   => '<tr>',
            'heading_row_end'     => '</tr>',
            'heading_cell_start'  => '<th>',
            'heading_cell_end'    => '</th>',
            'table_close'         => '</table>'
            );
        $this->table->set_template($tmpl);
        $this->load->view("pages/military", $data);
    }

    public function code(){
        $data['title'] = "Codecourse colors";
        $this->load->view("code/head", $data);
        $this->load->view("code/code", $data);
    }
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
