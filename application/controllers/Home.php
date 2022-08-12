<?php

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();

        // load something

    }

    public function index(){
        // 0:proyek, 1:portfolio, 2:keunggulan, 3:mitra, 4:kontak
        $data['navFocus'] = ['','','','',''];

        $this->load->view('templates/header', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');

    }


}