<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelperexampleController extends CI_Controller {
     public function index(){
        
        $this->load->helper('array');
        $names = array("gaurav", "dahal", "Nagarjuna", "Random");
        $data['names']= random_element($names); 
        $this->load->view('Helpertest' ,$data);

     }

}