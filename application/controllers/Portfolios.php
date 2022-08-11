<?php

class Portfolios extends CI_CONTROLLER{

    public function __construct(){
        parent::__construct();

        // load something

    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('portfolios');
        $this->load->view('templates/footer');
    }


}