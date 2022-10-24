<?php

class Admin extends CI_CONTROLLER{

  public function __construct() {
    parent::__construct();

  }

  public function index(){
    $this->load->view('admin/header');
    $this->load->view('admin/admin');
    $this->load->view('admin/footer');

  }

}