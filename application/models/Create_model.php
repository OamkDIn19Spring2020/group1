<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }
  
  public function get_items($idProducts = FALSE) {
    if($idProducts === FALSE) {
      $query = $this->db->get('products');
      return $query->result_array();
    }

    $query = $this->get_where('products', array('idProducts' => $idProducts));
    return $query->row_array();
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