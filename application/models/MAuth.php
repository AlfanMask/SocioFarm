<?php

class MAuth extends CI_MODEL{

  public function __construct(){

    parent::__construct();

    // load something

  }

  public function insertUser($data){

    return $this->db->insert('tbl_users',$data);

  }

}