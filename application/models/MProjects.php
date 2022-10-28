<?php

class MProjects extends CI_MODEL{

  public function __construct(){
    parent::__construct();

    // load something

  }

  public function GetAllProjects(){
    $query = $this->db->get('tbl_projects')->result_array();

    return $query;

    // return $this->db->get('tbl_projects')->result_array();
  }

  public function inserProject($data){
    return $this->db->insert('tbl_projects',$data);
  }

}
