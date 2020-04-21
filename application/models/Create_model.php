<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function getItems(){
    $this->db->select('*');
    $this->db->from('products');
    return $this->db->get()->result_array();
  }
  public function addItem($insert_data){
    $this->db->insert('products',$insert_data);
    return $this->db->affected_rows();
  }

  public function updateItem($id, $update_data){
      $this->db->where('idProducts',$id);
      $this->db->update('products', $update_data);
      return $this->db->affected_rows();
  }
  
  public function deleteItem($id){
    $this->db->where('idProducts',$id);
    $this->db->delete('products');
    return $this->db->affected_rows();
  }
}
