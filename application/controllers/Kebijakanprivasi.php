<?php

class Kebijakanprivasi extends CI_CONTROLLER{

  public function __construct() {
    
    parent::__construct();

    // load someting

  }

  public function index(){
    $data['navFocus'] = ['','','','',''];

    $this->load->view('templates/header',$data);
    $this->load->view('kebijakan-privasi');
    $this->load->view('templates/footer');

  }

}