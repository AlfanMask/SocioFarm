<?php

class Home extends CI_Controller{

  public function __construct(){
    parent::__construct();

    // load something

  }

  public function index(){
    // 0:proyek, 1:portfolio, 2:keunggulan, 3:mitra, 4:kontak
    $data['navFocus'] = ['', '', '', '', ''];

    // load ModelProjects
    $this->load->model('MProjects');
    $data['homeProjects'] = $this->MProjects->GetProjectsByLimit(4);

    $this->load->view('templates/header', $data);
    $this->load->view('home', $data);
    $this->load->view('templates/footer');
  }
}
