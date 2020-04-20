<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function addUser($insert_data){
    $this->db->db_debug=FALSE;
    $this->db->insert('user',$insert_data);
    return $this->db->affected_rows();
  }
  public function getPassword($given_username){
    $this->db->select('password');
    $this->db->from('user');
    $this->db->where('username',$given_username);
    return $this->db->get()->row('password');
  }
}
