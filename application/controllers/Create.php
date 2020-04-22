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
    //print_r($this->input->post());
    $insert_data=array(
      'title'=>$this->input->post('title'),
      'description'=>$this->input->post('description'),
      'price'=>$this->input->post('price'),
      'image'=>$this->input->post('image')
    );
    $this->db->set('created', 'NOW()', FALSE);
    $this->db->insert('products', $data);
    $test=$this->create_model->addItem($insert_data);
    //echo 'inserted '.$test. 'items';
    redirect('create/index');
  }

  public function edit_item(){
    $id=$this->input->post('idProducts');
    $update_data=array(
      'title'=>$this->input->post('title'),
      'description'=>$this->input->post('description'),
      'price'=>$this->input->post('price')
    );
    $test=$this->create_model->updateItem($id, $update_data);
    if($test==0){
      $data['message']='You can not update this item';
      $data['return_url']='show';
      $data['page']='feedback/message_box';
      $this->load->view('layouts/header');
      $this->load->view('layouts/body');
      $this->load->view('create/index', $data);
      $this->load->view('layouts/footer');
    }
    else{
      $data['message']='Item updated succesfully';
      $data['return_url']='create/index';
      $data['page']='feedback/message_box';
      $this->load->view('layouts/header');
      $this->load->view('layouts/body');
      $this->load->view('create/index', $data);
      $this->load->view('layouts/footer');
    }
  }

  public function delete_item(){
    $id=$this->input->post('idProducts');
    $test=$this->create_model->deleteItem($id);
    if($test==0){
      $data['message']='You can not delete this product';
      $data['return_url']='create/index';
      $data['page']='feedback/message_box';
      $this->load->view('layouts/header');
      $this->load->view('layouts/body');
      $this->load->view('create/index', $data);
      $this->load->view('layouts/footer');
    }
    else{
      $data['message']='Product deleted succesfully';
      $data['return_url']='create/index';
      $data['page']='feedback/message_box';
      $this->load->view('layouts/header');
      $this->load->view('layouts/body');
      $this->load->view('create/index', $data);
      $this->load->view('layouts/footer');
      }
    }
}