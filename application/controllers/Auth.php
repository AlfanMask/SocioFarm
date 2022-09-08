<?php

class Auth extends CI_CONTROLLER{

  public function __construct(){
    parent::__construct();

    // load something
    $this->load->library('form_validation');
    $this->load->helper('form');

  }

  public function daftar(){
    $name = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];
    $passconf = $_POST['inputPasswordConf'];
    $address = $_POST['inputAddress'];

    $hashed_pass = password_hash($pass,PASSWORD_DEFAULT);

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

    $this->form_validation->set_rules('inputName','Nama','required');
    $this->form_validation->set_rules('inputEmail','Email','required|valid_email|is_unique[tbl_users.email]');
    $this->form_validation->set_rules('inputPassword','Password','required');
    $this->form_validation->set_rules('inputPasswordConf','Password Confirmation','required|matches[inputPassword]');
    $this->form_validation->set_rules('inputAddress','Address','required');

    if($this->form_validation->run() == false){
      echo "VALIDATION FALSE";
      echo validation_errors();

      $this->load->view('auth/daftar');
    } else {
      echo "VALIDATION TRUE";

      $this->load->model('MAuth');
      $this->MAuth->insertUser($data);
    }
    
    var_dump($name,$email,$pass,$passconf,$address);
  
  }


  public function masuk(){
    $email = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];

    $this->load->model('MAuth');
    $rowSelected = $this->MAuth->getMasuk($email);

    var_dump($rowSelected);

    $data['error_masuk'] = 'Email atau password salah!';
    if(!empty($rowSelected)){
      if(password_verify($pass,$rowSelected[0]['password'])){
        echo 'Sukses Masuk!';
      } else {
        $this->load->view('auth/masuk', $data);  
      }

    } else {
      $this->load->view('auth/masuk', $data);

    }



  }


}