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

  public function insertMitra($data){
    return $this->db->insert('tbl_mitra',$data);

  }

  public function getMitraById($id){
    return $this->db->get_where('tbl_mitra',['id'=>$id])->result_array();
  }

  public function updateMitra($data, $id){
    return $this->db->update('tbl_mitra',$data,['id'=>$id]);
  }

  public function deleteMitraById($id){
    return $this->db->delete('tbl_mitra',['id'=>$id]);
  }


}