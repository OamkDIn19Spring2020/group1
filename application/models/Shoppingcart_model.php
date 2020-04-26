<?php

class Shoppingcart_model extends CI_Model{

     public function __construct(){
        $this->load->database();

     }
     
    function get_all_products(){
    $result=$this->db->get('shoppingcart');
    return $result;

/*class Shoppingcart_model extends CI_Model{
    public function __construct(){
        $this->load->database();
}   

    public function get_all_products($shoppingcart = FALSE){
    if($idProducts === FALSE){
        $query = $this->db->get('shoppingcart');
        return $query->result_array();

    }
    $query = $this->db->get_where('shoppingcart', array('idProducts' => $idProducts ));
        return $query->row_array();
        */
        
    }
  }

