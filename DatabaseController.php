<!-- this form controller connects database, sets validation rules and performs  MySQl queries -->
 <!-- Form.ph is the form and this is the controller for creating connection towards database -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DatabaseController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();//loading database here
        $this->load->helper(array('form', 'url')); //form and URl helpers here
        $this->load->library('form_validation'); //session load and formvalidation rules load
        $this->load->model('SignupModel'); // model load containing query
    }

    public function index()
    {
        $this->load->view('form'); //loading view file
    }

    public function submit()
    {
        // Here Set_Rules Sets validation rules
        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('course', 'Course', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form');
        } else {
            // Here we are capturing data from the View i.e our web form
            $data = array(
                'full_name' => $this->input->post('fullname', TRUE),
                'password'  => password_hash($this->input->post('password'),  PASSWORD_BCRYPT),
                'course'    => $this->input->post('course', TRUE),
                'gender'    => $this->input->post('gender', TRUE)
            );

        // now captured data are sent Inserted into database using Model
            if ($this->SignupModel->insert_user($data)) {
                redirect('form'); //to reload page after data is sent through model to the database 
            }
        }
    }
}
