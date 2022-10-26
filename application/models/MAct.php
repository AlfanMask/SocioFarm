<?php

class MAct extends CI_MODEL{

  public function __construct() {

    parent::__construct();

    // load something

  }

  public function getAllActs(){
    $query = $this->db->get('tbl_recentact')->result_array();
    return $query;
  }

}