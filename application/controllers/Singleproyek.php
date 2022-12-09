<?php

class Singleproyek extends CI_CONTROLLER{

  public function __construct(){
    
    parent::__construct();

    // load something

  }

  public function _remap($id){
    $this->index($id);
  }

  public function index ($id){
    // 0:proyek, 1:portfolio, 2:keunggulan, 3:mitra, 4:kontak
    $data['navFocus'] = ['active','','','',''];

    $this->load->model('MProjects');
    $data['project'] = $this->MProjects->getProjectById($id)[0];

    // var_dump($data['project']);
    // die;

    $this->load->view('templates/header',$data);
    $this->load->view('singleproyek',$data);
    $this->load->view('templates/footer');

  }


}