<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerArithmetic extends CI_Controller {

	public function index(){
        $this->load->view('Header');
        $this->load->Model('ArithmeticModel');
        $data['sum']= $this->ArithmeticModel->sum();
        $data['sub']= $this->ArithmeticModel->sub();
        $this->load->view('OutputArithmetic', $data);
        $this->load->view('Footer');
    }
   
}

 
