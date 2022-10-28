<?php

class Auth extends CI_CONTROLLER
{

  public function __construct()
  {
    parent::__construct();

    // load something
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function daftar()
  {
    $name = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];
    $passconf = $_POST['inputPasswordConf'];
    $address = $_POST['inputAddress'];

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    $data = [
      'id' => '',
      'name' => $name,
      'password' => $hashed_pass,
      'email' => $email,
      'address' => $address,
      'role' => 1,
      'portfolio' => '',
      'img_url' => '',
      'pekerjaan' => '',
      'bank' => '',
      'norek' => '',
      'nama_bank' => ''
    ];

    $this->form_validation->set_rules('inputName', 'Nama', 'required');
    $this->form_validation->set_rules('inputEmail', 'Email', 'required|valid_email|is_unique[tbl_users.email]');
    $this->form_validation->set_rules('inputPassword', 'Password', 'required');
    $this->form_validation->set_rules('inputPasswordConf', 'Password Confirmation', 'required|matches[inputPassword]');
    $this->form_validation->set_rules('inputAddress', 'Address', 'required');

    // set error message
    $this->form_validation->set_message('required', 'Harus diisi');
    $this->form_validation->set_message('is_unique', 'Email tersebut telah digunakan');
    $this->form_validation->set_message('matches', 'Konfirmasi password tidak sesuai');

    if ($this->form_validation->run() == false) {
      // reload page with error validations
      $data['navFocus'] = ['', '', '', '', ''];
      $this->load->view('templates/header', $data);
      $this->load->view('auth/daftar');
      $this->load->view('templates/footer');
    } else {
      $this->load->model('MAuth');
      $this->MAuth->insertUser($data);

      $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Pendaftaran berhasil, silakan login</div>');
      redirect('masuk');
    }
  }


  public function masuk()
  {
    $email = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];

    $this->load->model('MAuth');
    $rowSelected = $this->MAuth->getMasuk($email);

    $data['error_masuk'] = 'Email atau password salah!';
    if (!empty($rowSelected)) {
      if (password_verify($pass, $rowSelected[0]['password'])) {
        // echo 'Sukses Masuk!';
        $this->session->set_userdata('userid', $rowSelected[0]['id']);
        $this->session->set_userdata('username', $rowSelected[0]['name']);
        $this->session->set_userdata('userole', $rowSelected[0]['role']);
        $this->session->set_userdata('pp_url', $rowSelected[0]['img_url']);

        redirect(base_url('home'));
        // $this->load->view('home');
      } else {
        $this->load->view('auth/masuk', $data);
      }
    } else {
      $this->load->view('auth/masuk', $data);
    }
  }


  public function unsetsession()
  {
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    unset($_SESSION['userole']);
    unset($_SESSION['pp_url']);

    redirect('home');
  }
}
