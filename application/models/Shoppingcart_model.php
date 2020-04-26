<?php

class Shoppingcart_model extends CI_Model{
    function get_all_product(){
    $result=$this->db->get('products');
    return $result;

/*class Shoppingcart_model extends CI_Model{
    public function __construct(){
        $this->load->database();
}   

    public function get_items($idProducts = FALSE){
    if($idProducts === FALSE){
        $query = $this->db->get('shoppingcart');
        return $query->result_array();

    }
    $query = $this->db->get_where('shoppingcart', array('idProducts' => $idProducts ));
        return $query->row_array();*/
        
        
    }
  }
