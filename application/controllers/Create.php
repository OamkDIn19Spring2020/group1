<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller{
  
  public function index(){
    $data['title'] = 'Create listing';
    $data['items'] = $this->create_model->get_items();
    
    $this->load->view('layouts/header');
    $this->load->view('layouts/body');
    $this->load->view('create/index', $data);
    $this->load->view('layouts/footer');
  }
    public function insert_item(){
      $this->load->helper('date');
      date_default_timezone_set('Europe/Helsinki');
        $currentDate =time();
        $datestring = '%Y-%m-%d - %h:%i %a';
        $time = time();
        $better_date= mdate($datestring, $time).'<br>';
        $c_date=date("Y-m-d H:i:s").'<br>';
        $insert_data=array(
          'title'=>$this->input->post('title'),
          'description'=>$this->input->post('description'),
          'price'=>$this->input->post('price'),
          'image'=>$this->input->post('image'),
	  'idSellers'=>$this->input->post('idSellers'),
          'created'=>$c_date
    );
    $this->db->set('created', 'NOW()', FALSE);
    $this->db->insert('products', $data);
    $this->create_model->addItem($insert_data);
    $this->session->set_flashdata('added', 'Product added successfully');
    redirect('create/index');
  }

  public function edit_item(){
    $id=$this->input->post('idProducts');
    $update_data=array(
      'title'=>$this->input->post('title'),
      'description'=>$this->input->post('description'),
      'price'=>$this->input->post('price')
    );
    $this->create_model->updateItem($id, $update_data);
    $this->session->set_flashdata('edited', 'Product edit successfully');
    redirect('create/index');
  }

  public function delete_item(){
    $id=$this->input->post('idProducts');
    $this->create_model->deleteItem($id);
    $this->session->set_flashdata('deleted', 'Product deleted successfully');
    redirect('create/index');
  }
}