<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Create_model');
  }

  public function show_items(){
    $data['items']=$this->Create_model->getItems();
    //print_r($data);
    $data['page']='item/show';
    $this->load->view('menu/content',$data);
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
    $test=$this->Create_model->addItem($insert_data);
    //echo 'inserted '.$test. 'items';
    redirect('create/show_items');
  }

  public function edit_item(){
    $id=$this->input->post('idProducts');
    $update_data=array(
      'title'=>$this->input->post('title'),
      'description'=>$this->input->post('description'),
      'price'=>$this->input->post('price')
    );
    $test=$this->Create_model->updateItem($id, $update_data);
    if($test==0){
      $data['message']='You can not update this item';
      $data['return_url']='show_items';
      $data['page']='feedback/message_box';
      $this->load->view('menu/content',$data);
    }
    else{
      $data['message']='Item updated succesfully';
      $data['return_url']='show_items';
      $data['page']='feedback/message_box';
      $this->load->view('menu/content',$data);
    }
  }

  public function delete_item(){
    $id=$this->input->post('idProducts');
    $test=$this->Create_model->deleteItem($id);
    if($test==0){
      $data['message']='You can not delete this product';
      $data['return_url']='show_items';
      $data['page']='feedback/message_box';
      $this->load->view('menu/content',$data);
    }
    else{
      $data['message']='Product deleted succesfully';
      $data['return_url']='show_items';
      $data['page']='feedback/message_box';
      $this->load->view('menu/content',$data);
      }
    }
}