<?php

class Admin extends CI_CONTROLLER
{

  public function __construct()
  {
    parent::__construct();

    // load something
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->helper('file');
  }

  public function index()
  {
    if ($_SESSION['userole'] == 2) {
      // load recent activitie datas
      $this->load->model('MAct');
      $data['acts'] = $this->MAct->getAllActs();

      // load all projects
      $this->load->model('MProjects');
      $data['projects'] = $this->MProjects->GetAllProjects();

      $this->load->view('admin/header');
      $this->load->view('admin/admin', $data);
      $this->load->view('admin/footer');
    } else {
      redirect('home');
    }
  }

  public function projects()
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    // load all projects
    $this->load->model('MProjects');
    $data['projects'] = $this->MProjects->GetAllProjects();

    $this->load->view('admin/header');
    $this->load->view('admin/projects', $data);
    $this->load->view('admin/footer');
  }

  public function mitras()
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    // load all mitras
    $this->load->model('MMitra');
    $data['mitras'] = $this->MMitra->GetAllMitras();

    $this->load->view('admin/header');
    $this->load->view('admin/mitras', $data);
    $this->load->view('admin/footer');
  }

  public function addproject()
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    $this->load->view('admin/header');
    $this->load->view('admin/addproject');
    $this->load->view('admin/footer');
  }

  public function addprojectnow()
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    $nama_proyek = $_POST['nama_proyek'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $roi_top = $_POST['roi_top'];
    $roi_bot = $_POST['roi_bot'];
    // $img_file
    // $proposal_file

    $this->form_validation->set_rules('nama_proyek', 'Nama Proyek', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    $this->form_validation->set_rules('roi_top', 'ROI Top', 'required');
    $this->form_validation->set_rules('roi_bot', 'ROI Bot', 'required');

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

    // upload images
    $config['upload_path'] = 'uploads/proyek';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = '1024';

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('img_file')) {
      $data_img = $this->upload->data();
      $data['img_url'] = $data_img['file_name'];
    }

    if ($this->form_validation->run() == false) {
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

  public function editproject($id)
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    // load Model
    $this->load->model('MProjects');
    $project = $this->MProjects->getProjectById($id)[0];

    $data = [
      'id'          => $project['id'],
      'name'        => $project['name'],
      'price'       => $project['price'],
      'description' => $project['description'],
      'roi_bot'     => $project['roi_bot'],
      'roi_top'     => $project['roi_top'],
      'img_url'     => $project['img_url']
    ];

    $this->load->view('admin/header');
    $this->load->view('admin/editproject', $data);
    $this->load->view('admin/footer');
  }

  public function editprojectnow()
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    // load model
    $this->load->model('MProjects');
    $projectData = $this->MProjects->getProjectById($_POST['id']);

    // create array of input datas
    $data = [
      'id' => $_POST['id'],
      'name' => $_POST['nama_proyek'],
      'price' => $_POST['harga'],
      'value' => '0',
      'capacity_left' => $_POST['harga'],
      'project_return' => '',
      'open' => '1',
      'description' => $_POST['deskripsi'],
      'roi_bot' => $_POST['roi_bot'],
      'roi_top' => $_POST['roi_top'],
      'img_url' => $projectData[0]['img_url'],
      'proposal_url' => '',
      'video_url' => '#'
    ];

    // upload images
    $config['upload_path'] = 'uploads/proyek';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = '1024';

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('img_url')) {
      $data_img = $this->upload->data();
      $data['img_url'] = $data_img['file_name'];

      // delete old img
      unlink('uploads/proyek/' . $projectData[0]['img_url']);
    }

    // load model
    $this->load->model('MProjects');
    if ($this->MProjects->updateProject($data, $data['id'])) {
      // show success alert
      $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Edit Proyek Berhasil!</div>');
    } else {
      // show success alert
      $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Edit Proyek Gagal!</div>');
    }

    redirect('admin/projects');
  }

  public function deleteProject($id)
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    // load model
    $this->load->model('MProjects');
    $project = $this->MProjects->getProjectById($id);

    if ($this->MProjects->deleteprojectById($id)) {
      // delete old img
      unlink('uploads/proyek/' . $project[0]['img_url']);

      // show success alert
      $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Proyek Berhasil Dihapus!</div>');
    } else {
      $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Proyek Gagal Dihapus!</div>');
    }

    redirect('admin/projects');
  }

  public function addmitra()
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    $this->load->view('admin/header');
    $this->load->view('admin/addmitra');
    $this->load->view('admin/footer');
  }

  public function addmitranow()
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    $nama_mitra = $_POST['nama_mitra'];
    $alamat = $_POST['alamat'];
    $proyek = $_POST['proyek'];
    $deskripsi = $_POST['deskripsi'];

    $this->form_validation->set_rules('nama_mitra', 'Nama Mitra', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat Mitra', 'required');
    $this->form_validation->set_rules('proyek', 'Jumlah Proyek', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

    $data = [
      'id' => '',
      'nama' => $nama_mitra,
      'alamat' => $alamat,
      'proyek' => $proyek,
      'deskripsi' => $deskripsi,
      'img_url' => ''
    ];

    // upload images
    $config['upload_path'] = 'uploads/mitra';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = '1024';

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('img_url')) {
      $data_img = $this->upload->data();
      $data['img_url'] = $data_img['file_name'];
    }

    if ($this->form_validation->run() == false) {
      // show failed alert
      $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Penambahan Mitra Gagal! Harap masukkan semua informasi yang dibutuhkan.</div>');
      redirect('admin/addmitra');
    } else {
      // load model
      $this->load->model('MMitra');
      $this->MMitra->insertMitra($data);

      // show success alert
      $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Penambahan Mitra Berhasil!</div>');
      redirect('admin/mitras');
    }
  }

  public function editmitra($id)
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    // load Model
    $this->load->model('MMitra');
    $mitra = $this->MMitra->getMitraById($id)[0];

    $data = [
      'id'          => $mitra['id'],
      'nama_mitra'  => $mitra['nama'],
      'alamat'      => $mitra['alamat'],
      'proyek'      => $mitra['proyek'],
      'deskripsi'   => $mitra['deskripsi'],
      'img_url'     => $mitra['img_url']
    ];

    $this->load->view('admin/header');
    $this->load->view('admin/editmitra', $data);
    $this->load->view('admin/footer');
  }

  public function updatemitranow()
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    // load model
    $this->load->model('MMitra');
    $mitraData = $this->MMitra->getMitraById($_POST['id']);

    // create array of input datas
    $data = [
      'id' => $_POST['id'],
      'nama' => $_POST['nama_mitra'],
      'alamat' => $_POST['alamat'],
      'proyek' => $_POST['proyek'],
      'deskripsi' => $_POST['deskripsi'],
      'img_url' => $mitraData[0]['img_url']
    ];

    // upload images
    $config['upload_path'] = 'uploads/mitra';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = '1024';

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('img_url')) {
      $data_img = $this->upload->data();
      $data['img_url'] = $data_img['file_name'];

      // delete old img
      unlink('uploads/mitra/' . $mitraData[0]['img_url']);
    }

    // load model
    $this->load->model('MMitra');
    if ($this->MMitra->updateMitra($data, $data['id'])) {
      // show success alert
      $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Edit Mitra Berhasil!</div>');
    } else {
      // show success alert
      $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Edit Mitra Gagal!</div>');
    }

    redirect('admin/mitras');
  }

  public function deleteMitra($id)
  {
    // if not admin, then kick him to homepage
    if ($_SESSION['userole'] != 2) {
      redirect('home');
    }

    // load model
    $this->load->model('MMitra');
    $mitra = $this->MMitra->getMitraById($id);
    if ($this->MMitra->deleteMitraById($id)) {
      // delete old img
      unlink('uploads/mitra/' . $mitra[0]['img_url']);

      // show success alert
      $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Mitra Berhasil Dihapus!</div>');
    } else {
      $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Mitra Gagal Dihapus!</div>');
    }

    redirect('admin/mitras');
  }

  public function generateRandomString($length = 10)
  {
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
  }
}
