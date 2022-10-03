<?php

class MMitra extends CI_MODEL{

  public function __construct() {

    parent::__construct();

    // load something

  }

  public function GetAllMitras(){
    $query = $this->db->get('tbl_mitra')->result_array();
    return $query;

  }


}