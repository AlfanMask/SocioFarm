<?php

class Profile extends CI_CONTROLLER{

  public function __construct(){
    parent::__construct();

    // load something

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

    // $img_url = $_POST['img_url'];
    $userUpdate = [
      'img_url'       => 'test_img',
      // 'img_url' => $_POST['img_url'],
      'name'          => $_POST['nama'],
      'telepon'       => $_POST['telepon'],
      'ttl'           => $_POST['ttl'],
      'gender'        => $_POST['gender'],
      'pekerjaan'     => $_POST['pekerjaan'],
      'nama_bank'     => $_POST['nama_bank'],
      'norek'         => $_POST['norek'],
      'nama_rekening' => $_POST['nama_rekening'],
      'cabang_bank'   => $_POST['cabang_bank'],
      'ktp_url'       => 'test_ktp'
      // 'ktp_url' => $_POST['ktp_url']
    ];

    $this->load->model('MAuth');
    echo $this->MAuth->updateUser($userUpdate,$userid);

  }


}