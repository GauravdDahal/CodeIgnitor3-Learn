<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelperexampleController extends CI_Controller {
     public function index(){
        $this->load->Helper('text');//loads the text_helper.txt as a custom helper
        abc();//calls function named abc inside of text_helper.php
     }

} 
