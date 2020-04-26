<?php

    class Shoppingcart_model extends CI_Model{
    public function __construct(){
        $this->load->database();
}   

    public function get_items($shoppingcart = FALSE){
    if($shoppingcart === FALSE){
        $query = $this->db->get('products');
        return $query->result_array();

    }
    $query = $this->db->get_where('products', array('idProducts' => $idProducts ));
        return $query->row_array();
        
    }
  }

