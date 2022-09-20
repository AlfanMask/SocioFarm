<?php

class MPortfolios extends CI_MODEL{

  public function __construct(){

    parent::__construct();

    // load something

  }

  public function GetALlPortfolios(){
    $query = $this->db->get('tbl_portfolios')->result_array();

    return $query;

  }


}