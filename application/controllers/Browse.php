<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller{
  
  public function index(){
    $data['title'] = 'Browse Products';
    $data['items'] = $this->browse_model->get_items();
    
    $this->load->view('layouts/header');
    $this->load->view('layouts/body');
    $this->load->view('browse/index', $data);
    $this->load->view('layouts/footer');
  }
}