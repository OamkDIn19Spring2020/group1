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

  public function view($idProducts = NULL){
    $data['items'] = $this->browse_model->get_items($idProducts);

    if(empty($data['items'])){
      $this->session->set_flashdata('empty_cart', 'Shopping cart is empty');
    }

    $data['title'] = $data['items']['title'];

    $this->load->view('layouts/header');
    $this->load->view('layouts/body');
    $this->load->view('browse/view', $data);
    $this->load->view('layouts/footer');

  }

  /*add products to cart*/
  public function add_to_cart(){

    $data = array(
        'idCustomers' => $this->input->post('idCustomers'),
        'idProducts' => $this->input->post('idProducts'),
        'totalPrice' => $this->input->post('totalPrice'),
    );

    $this->load->model('Browse_model');
    $this->browse_model->insert_to_cart($data);

    echo $this->show_cart();

    }

    public function show_cart(){

        $output = '';
        $no = 0;
    
        foreach ($this->cart->contents() as $items) {
        $no++;
        $output .='
                <tr>
                <td>'.$items['title'].'</td>
                <td>'.$items['idProducts'].'</td>
                <td>'.number_format($items['totalPrice']).'</td>
                <td><button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
                </tr>
        ';
    }

    $output .= '
            <tr>
            <th colspan="3">Total</th>
            <th colspan="2">'.'€ '.number_format($this->cart->total()).'</th>
            </tr>
    ';

    return $output;

    }

    function load_cart(){
    echo $this->show_cart();
    }

    public function delete_cart(){
    $data = array(
    'rowid' => $this->input->post('row_id'),
    );

    $this->cart->update($data);
    echo $this->show_cart();
    }
}