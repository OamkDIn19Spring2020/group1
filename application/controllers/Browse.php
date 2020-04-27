<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('cart');
  }
  
  public function index(){
    $data['title'] = 'Browse Products';
    $data['items'] = $this->browse_model->get_items();    
    
    $this->load->view('layouts/header');
    $this->load->view('layouts/body');
    $this->load->view('browse/index', $data);
    $this->load->view('layouts/footer');
  }

    /*public function view($idProducts = NULL){
      $data['products'] = $this->browse_model->get_items();

    if(empty($data['products'])){
      $this->session->set_flashdata('empty_cart', 'Shopping cart is empty');
    }

    $data['title'] = $data['products'];

    $this->load->view('layouts/header');
    $this->load->view('layouts/body');
    $this->load->view('browse/view', $data);
    $this->load->view('layouts/footer');

  }*/

  /*add products to cart*/
  public function add_to_cart(){

    $insert_data = array( 'idProducts' => $this->input->post('idProducts'),
                          'idCustomers' => $this->input->post('idCustomers'),
                          'totalPrice' => $this->input->post('totalPrice'), 
    );

    //This function add items into cart.
    $this->cart->insert($insert_data);

    redirect('shoppingcart');

    }


    public function delete_cart($rowid){

      if($rowid == 'all'){
        $this->cart->destroy();
      }
      else
      {
        $data = array(
          'rowid' => $rowid,
          );

          $this->cart->update($data);
      }

    }

    function load_cart(){

      $cart_info = $_POST['cart'];
      
      foreach ($cart_info as $idProducts => $cart)
      {
          $rowid = $cart['rowid'];
          $idCustomers = $cart['idCustomers'];
          $idSellers = $cart['idSellers'];
          $totalPrice = $cart['totalPrice'];
      }
    }

    function update_cart(){
      // Recieve post values,calcute them and update
      $cart_info = $_POST['cart'] ;

      foreach( $cart_info as $id => $cart)
      {
      $rowid = $cart['rowid'];
      $totalPrice = $cart['totalPrice'];
      $idCustomers = $cart['idCustomers'];
      $idSellers = $cart['idSellers'];
      
      $data = array(
      'rowid' => $rowid,
      'totalPrice' => $totalPrice,
      'idCustomers' => $idCustomers,
      'idSellers' => $idSellers
      );
      
      $this->cart->update($data);
      }
      redirect('browse/view');
      }

      function cart_view(){
        // Load cart view
        $this->load->view('layouts/header');
        $this->load->view('layouts/body');
        $this->load->view('browse/view', $data);
        $this->load->view('layouts/footer');
        }
}