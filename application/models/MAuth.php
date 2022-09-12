<?php

class MAuth extends CI_MODEL{

  public function __construct(){

    parent::__construct();

    // load something

  }

  public function insertUser($data){
    return $this->db->insert('tbl_users',$data);

  }

  public function getMasuk($email){
    return $this->db->get_where('tbl_users',['email' => $email],1)->result_array();

  }

  public function getUser($id){
    return $this->db->get_where('tbl_users',['id' => $id],1)->result_array();
  
  }

  public function updateUser($data,$id){
    $this->db->where('id',$id);
    return $this->db->update('tbl_users',$data);
  }


}