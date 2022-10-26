<?php

class Admin extends CI_CONTROLLER{

  public function __construct() {
    parent::__construct();

  }

  public function index(){
    // load recent activitie datas
    $this->load->model('MAct');
    $data['acts'] = $this->MAct->getAllActs();

    // load all projects
    $this->load->model('MProjects');
    $data['projects'] = $this->MProjects->GetAllProjects();

    $this->load->view('admin/header');
    $this->load->view('admin/admin',$data);
    $this->load->view('admin/footer');

  }
  
  public function projects(){
    // load all projects
    $this->load->model('MProjects');
    $data['projects'] = $this->MProjects->GetAllProjects();

    $this->load->view('admin/header');
    $this->load->view('admin/projects',$data);
    $this->load->view('admin/footer');

  }

  public function mitras(){
    // load all mitras
    $this->load->model('MMitra');
    $data['mitras'] = $this->MMitra->GetAllMitras();

    $this->load->view('admin/header');
    $this->load->view('admin/mitras',$data);
    $this->load->view('admin/footer');

  }

}