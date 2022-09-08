<?php

class Masuk extends CI_CONTROLLER{

  public function __construct(){
    parent::__construct();

    // load something
    $this->load->helper('form');

  }

  public function index(){
    $data['navFocus'] = ['','','','',''];
    $data['error_masuk'] = '';

    $this->load->view('templates/header', $data);
    $this->load->view('auth/masuk');
    $this->load->view('templates/footer');

  }


}