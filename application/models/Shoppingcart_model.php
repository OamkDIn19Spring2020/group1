<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppingcart_model extends CI_Model{

  
  public function get_items() {
    $this->db->select('*');
    $this->db->from('shoppingcart');
    return $this->db->get()->result_array();
  }

  /*public function get_items($idProducts = FALSE) {
    if($idProducts === FALSE) {
      $query = $this->db->get('products');
      return $query->result_array();
    }
    $query = $this->get_where('products', array('idProducts' => $idProducts));
    return $query->row_array();
  }*/
   
  public function addItem($insert_data){
    $this->db->insert('shoppingcart',$insert_data);
    return $this->db->affected_rows();
  }

  public function updateItem($id, $update_data){
      $this->db->where('idProducts',$id);
      $this->db->update('products', $update_data);
      return $this->db->affected_rows();
  }
  
  public function deleteCart($id){
    $this->db->where('idShoppingCart',$id);
    $this->db->delete('shoppingcart');
    return $this->db->affected_rows();
  }
}

