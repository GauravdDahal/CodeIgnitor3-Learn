<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomlibraryController extends CI_Controller {
     public function index(){
        $this->load-> library('Example');
        $this->example->test();

     }

} 
