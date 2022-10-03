<?php

class Profile extends CI_CONTROLLER{

  public function __construct(){
    parent::__construct();

    // load something
    $this->load->helper('file');

  }

  public function index(){
    $data['navFocus'] = ['','','','',''];

    // get user data
    $this->load->model('MAuth');
    $userData = $this->MAuth->getUser($_SESSION['userid'])[0];

    $data['userData'] = [
      'img_url'       => $userData['img_url'],
      'nama'          => $userData['name'],
      'telepon'       => $userData['telepon'],
      'ttl'           => $userData['ttl'],
      'gender'        => $userData['gender'],
      'pekerjaan'     => $userData['pekerjaan'],
      'nama_bank'     => $userData['nama_bank'],
      'norek'         => $userData['norek'],
      'nama_rekening' => $userData['nama_rekening'],
      'cabang_bank'   => $userData['cabang_bank'],
      'ktp_url'       => $userData['ktp_url']
    ];

    // nama bank option selected
    
    $data['banks'] = ['BRI','BNI','BCA'];
    $data['bankselected'] = ['','',''];

    // foreach($data['banks'] as $bank){
    //   if($userData['nama_bank'] == $bank){
    //     $bank = 'selected';
    //     break;
    //   }
    // }

    for($i = 0; $i < count($data['banks']); $i++){
      if($userData['nama_bank'] == $data['banks'][$i]){
        $data['bankselected'][$i] = 'selected';
        break;
      }
    }

    $this->load->view('templates/header',$data);
    $this->load->view('profile',$data);
    $this->load->view('templates/footer');

  }

  public function update(){
    $userid = $_SESSION['userid'];
    $this->load->model('MAuth');
    $userData = $this->MAuth->getUser($userid);

    $userUpdate = [
      'img_url'       => $userData[0]['img_url'],
      'name'          => $_POST['nama'],
      'telepon'       => $_POST['telepon'],
      'ttl'           => $_POST['ttl'],
      'gender'        => $_POST['gender'],
      'pekerjaan'     => $_POST['pekerjaan'],
      'nama_bank'     => $_POST['nama_bank'],
      'norek'         => $_POST['norek'],
      'nama_rekening' => $_POST['nama_rekening'],
      'cabang_bank'   => $_POST['cabang_bank'],
      'ktp_url'       => $userData[0]['ktp_url']
    ];

    // upload images
    $config['upload_path'] = 'uploads/pp';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = '1024';

    $this->load->library('upload',$config);

    // check image upload
    if(!$this->upload->do_upload('img_file')){
      $data['error_img'] = $this->upload->display_errors();
      var_dump('IMG ERROR: '. $data['error_img']);
    } else {
      $data_img = $this->upload->data();
      $userUpdate['img_url'] = $data_img['file_name'];
      
      // delete old img
      unlink('uploads/pp/'.$userData[0]['img_url']);
    }

    // check ktp_img upload
    if(!$this->upload->do_upload('ktp_file')){
      $data['error_ktp'] = $this->upload->display_errors();
      var_dump('KTP ERROR: '. $data['error_ktp']);
    } else {
      $data_ktp = $this->upload->data();
      $userUpdate['ktp_url'] = $data_ktp['file_name'];

      // delete old ktp
      unlink('uploads/pp/'.$userData[0]['ktp_url']);
    }

    $this->load->model('MAuth');
    $this->MAuth->updateUser($userUpdate,$userid);

    redirect('profile');

  }


}