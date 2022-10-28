<?php

class Admin extends CI_CONTROLLER{

  public function __construct() {
    parent::__construct();
    
    // load something
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function index(){
    if($_SESSION['userole'] == 2){
    // load recent activitie datas
    $this->load->model('MAct');
    $data['acts'] = $this->MAct->getAllActs();

    // load all projects
    $this->load->model('MProjects');
    $data['projects'] = $this->MProjects->GetAllProjects();

    $this->load->view('admin/header');
    $this->load->view('admin/admin',$data);
    $this->load->view('admin/footer');
    } else {
      redirect('home');
    }

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

  public function addproject(){
    $this->load->view('admin/header');
    $this->load->view('admin/addproject');
    $this->load->view('admin/footer');

  }

}