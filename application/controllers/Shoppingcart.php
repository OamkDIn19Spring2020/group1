<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppingcart extends CI_Controller{
  
  public function index(){
    $data['title'] = 'Add listing';
    $data['items'] = $this->shoppingcart_model->get_items();
    
    $this->load->view('layouts/header');
    $this->load->view('layouts/body');
    $this->load->view('shoppingcart/index', $data);
    $this->load->view('layouts/footer');
  }

  public function delete_cart(){
    $id=$this->input->post('idShoppingCart');
    $this->shoppingcart_model->deleteCart($id);
    $this->session->set_flashdata('deleted', 'Product deleted successfully');
    redirect('shoppingcart/index');
  }

    public function addToCart(){
        $insert_data=array(
          'idShoppingCart'=>$this->input->post('idShoppingCart'),
          'idProducts'=>$this->input->post('idProducts'),
          //'idCustomers'=>$this->input->post('idCustomers'),
          'totalPrice'=>$this->input->post('price')
    );
    //$this->db->insert('shoppingcart', $data);
    $this->shoppingcart_model->addItem($insert_data);
    $this->session->set_flashdata('added', 'Product added successfully');
    redirect('shoppingcart/index');
  }

}