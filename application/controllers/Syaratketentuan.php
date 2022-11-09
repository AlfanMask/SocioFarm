<?php

class Syaratketentuan extends CI_CONTROLLER{

  public function __construct() {
    
    parent::__construct();

    // load something

  }

  public function index(){
    $data['navFocus'] = ['','','','',''];

    $this->load->view('templates/header',$data);
    $this->load->view('syarat-ketentuan');
    $this->load->view('templates/footer');

  }


}