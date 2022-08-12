<?php

class Proyek extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();

        // load something

    }

    public function index(){
        // 0:proyek, 1:portfolio, 2:keunggulan, 3:mitra, 4:kontak
        $data['navFocus'] = ['active','','','',''];

        $this->load->view('templates/header', $data);
        $this->load->view('proyek');
        $this->load->view('templates/footer');

    }

}