<?php

class Simulasi extends CI_CONTROLLER{

  public function __construct(){
    parent::__construct();

    // load something

  }

  public function index(){
    $data['navFocus'] = ['','','','',''];

    $this->load->view('templates/header',$data);
    $this->load->view('simulasi');
    $this->load->view('templates/footer');

  }


}