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

  public function addprojectnow(){
    $nama_proyek = $_POST['nama_proyek'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $roi_top = $_POST['roi_top'];
    $roi_bot = $_POST['roi_bot'];
    // $img_file
    // $proposal_file

    $this->form_validation->set_rules('nama_proyek','Nama Proyek','required');
    $this->form_validation->set_rules('harga','Harga','required');
    $this->form_validation->set_rules('deskripsi','Deskripsi','required');
    $this->form_validation->set_rules('roi_top','ROI Top','required');
    $this->form_validation->set_rules('roi_bot','ROI Bot','required');

    $data = [
      'id' => '',
      'name' => $nama_proyek,
      'price' => $harga,
      'value' => '0',
      'capacity_left' => $harga,
      'project_return' => '',
      'open' => '1',
      'description' => $deskripsi,
      'roi_bot' => $roi_bot,
      'roi_top' => $roi_top,
      'img_url' => '',
      'proposal_url' => '',
      'video_url' => '#'
    ];

    if($this->form_validation->run() == false){
      // show failed alert
      $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Penambahan Proyek Gagal! Harap masukkan semua informasi yang dibutuhkan.</div>');
      redirect('admin/addproject');
    } else {
      // load model
      $this->load->model('MProjects');
      $this->MProjects->inserProject($data);

      // show success alert
      $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Penambahan Proyek Berhasil!</div>');
      redirect('admin/projects');
    }


  }

}