<?php

class Daftar extends CI_CONTROLLER{

  public function __construct(){
    parent::__construct();

    // load something
    $this->load->library('form_validation');
    $this->load->helper('form');
    
  }

  public function index(){
    $data['navFocus'] = ['','','','',''];

    $this->load->view('templates/header',$data);
    $this->load->view('auth/daftar');
    $this->load->view('templates/footer');

  }

}