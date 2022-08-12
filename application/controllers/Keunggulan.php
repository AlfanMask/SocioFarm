<?php

class Keunggulan extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();

        // load something

    }

    public function index(){
        $data['navFocus'] = ['','','active','',''];

        $this->load->view('templates/header', $data);
        $this->load->view('keunggulan');
        $this->load->view('templates/footer');
        
    }


}