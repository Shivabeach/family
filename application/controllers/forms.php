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
            'male_name'     => htmlspecialchars(trim($this->input->post('male_name'))),
            'female'        => htmlspecialchars(trim($this->input->post('female'))),
            'female_name'   => htmlspecialchars(trim($this->input->post('female_name'))),
            'relationship'  => htmlspecialchars(trim($this->input->post('relationship'))),
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
        $this->form_validation->set_rules('male_name', 'Male Name', 'required');
        $this->form_validation->set_rules('female_name', 'Female Name', 'required');
        $this->form_validation->set_rules('relationship', 'Relationship', 'required');
        $this->form_validation->set_rules('relative', 'Relative', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required|numeric');
        $this->form_validation->set_rules('year', 'Year', 'required|numeric');
        $this->form_validation->set_rules('branch2', 'Branch 2', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required|max_length[20]');
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
    /*
    search for relatives and their info on the name pages
     */
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
             echo "<article class='outline'>";
             echo "<li><strong>Relatives:</strong>  <u>$row->male</u> - <u>$row->female</u></li>";
             echo "<li>Was our $row->relationship</li>";
             echo "<li>The relatives were born in <u>$row->country</u> in <u>$row->year</u></li>";
             echo "<li>The person we are related to (<u>$row->relative</u>) is our $row->level cousin</li>";
             echo "<li><strong>Additional information:</strong><br> $row->comment</li>";
             echo "</article>";
             }
          }
        }
    }

    public function namey()
    {
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $data = [
            'family' => htmlspecialchars(trim($this->input->post('family'))),
            'name' => htmlspecialchars(trim($this->input->post('name')))
        ];
        $this->form_validation->set_rules('family', 'Family', 'required|alpha|max_length[9]');
        $this->form_validation->set_rules('name', 'Name', 'required|alpha|max_length{20}');
        if( $this->form_validation->run() == FALSE) {
            echo validation_errors();
        }else
        {
            $this->db->insert('names', $data);
            echo "grand shit";
        }
    }

    public function full_names()
    {
        $data = [
            'family'   => htmlspecialchars(trim($this->input->post('family'))),
            'man'      => htmlspecialchars(trim($this->input->post('man'))),
            'woman'    => htmlspecialchars(trim($this->input->post('woman'))),
            'year'     => htmlspecialchars(trim($this->input->post('year'))),
            'state'    => htmlspecialchars(trim($this->input->post('state'))),
            'kids'     => htmlspecialchars(trim($this->input->post('kids'))),
            'relation' => htmlspecialchars(trim($this->input->post('relation'))),
            'family2'  => htmlspecialchars(trim($this->input->post('family2'))),
            'male'  => htmlspecialchars(trim($this->input->post('male')))
        ];
        $this->form_validation->set_rules('family', 'Family', 'required');
        $this->form_validation->set_rules('man', 'Man', 'required');
        $this->form_validation->set_rules('woman', 'Woman', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required|numeric|max_length[4]');
        $this->form_validation->set_rules('state', 'State', 'required|max_length[15]');
        $this->form_validation->set_rules('kids', 'Kids', 'required|numeric');
        $this->form_validation->set_rules('relation', 'relation', 'max_length[50]');
        $this->form_validation->set_rules('family2', '2nd Family', 'max_length[80]');
        $this->form_validation->set_rules('male', 'Male', 'max_length[80]');
        if( $this->form_validation->run() == false) {
            echo validation_errors();
        }else {
            $this->db->insert('history', $data);
            echo $family   = htmlspecialchars(trim($this->input->post('family')));
            echo "<br>";
            echo $man      = htmlspecialchars(trim($this->input->post('man')));
            echo "<br>";
            echo $woman    = htmlspecialchars(trim($this->input->post('woman')));
            echo "<br>";
            echo $year     = htmlspecialchars(trim($this->input->post('year')));
            echo "<br>";
            echo $state    = htmlspecialchars(trim($this->input->post('state')));
            echo "<br>";
            echo $kids     = htmlspecialchars(trim($this->input->post('kids')));
            echo "<br>";
            echo $relation = htmlspecialchars(trim($this->input->post('relation')));
            echo "<br>";
            echo $family2  = htmlspecialchars(trim($this->input->post('family2')));
            echo "<br>";
            echo $family2  = htmlspecialchars(trim($this->input->post('male')));
        }
    }
}//END OF CONTROLLER
/* End of file forms.php */
/* Location: ./application/controllers/forms.php */
