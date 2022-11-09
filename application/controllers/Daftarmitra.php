<?php

class Daftarmitra extends CI_CONTROLLER{

  public function __construct(){

    parent::__construct();

    // load something


  }

  public function index(){
    $this->load->model('MMitra');
    $data['navFocus'] = ['','','','',''];

    // load all mitra datas
    $data['mitras'] = $this->MMitra->GetAllMitras();

    $this->load->view('templates/header',$data);
    $this->load->view('daftarmitra');
    $this->load->view('templates/footer');


  }


}