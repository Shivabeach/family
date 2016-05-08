<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycal extends CI_Controller {

    public function index()
    {
        
    }
    public function display($year = null, $month = null) {
        if (!$year) {
           $year = date('Y');
        }
        if (!$month) {
           $month = date('m');
        }
        $this->load->model('mycal_model');
        if ($day = $this->input->post('day')) {
           $this->mycal_model->add_calendar_data(
           "$year-$month-$day",
            $this->input->post('data')
            );
        }
            $data1['title'] = 'Herbal Calendar';
            $data['calendar'] = $this->mycal_model->generate($year, $month);
            $this->load->view('head/headfam',$data1);
            $this->load->view('include/nav2');
            $this->load->view("pages/calendar",$data);
            $this->load->view("foot/footer");
        }


}

/* End of file mycal.php */
/* Location: ./application/controllers/mycal.php */
