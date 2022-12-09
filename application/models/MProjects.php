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

  public function GetProjectsByLimit($limit){
    $query = $this->db->get('tbl_projects',$limit)->result_array();
    return $query;
  }

  public function inserProject($data){
    return $this->db->insert('tbl_projects',$data);

  }

  public function getProjectById($id){
    $query = $this->db->get_where('tbl_projects',['id' => $id])->result_array();
    return $query;

  }

  public function updateProject($data, $id){
    $this->db->where('id',$id);
    return $this->db->update('tbl_projects',$data);

  }

  public function deleteprojectById($id){
    return $this->db->delete('tbl_projects',['id' => $id]);
  }


}
