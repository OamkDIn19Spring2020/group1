<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppingcart extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Cart';
        $data['shoppingcart'] = $this->shoppingcart_model->get_items();
        
        $this->load->view('layouts/header');
        $this->load->view('layouts/body');
        $this->load->view('shoppingcart/index', $data);
        $this->load->view('layouts/footer');
    }

    public function add()
    {
        $data = array(
            'id' => $_POST['idProducts'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'price' => $_POST['price']
        );

        $this->cart->insert($data);
        echo $this->view();
    }

    public function view()
    {
        $output = '';
        $output .= '
            <h3><?= $title ?></h3><br />
            <div class="table-responsive">
                <div align="center">
                    <button type="button" id="clear_cart" class="btn btn-warning">
                </div>
                <br />
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Title</th>
                        <th width="15%">Price</th>
                        <th width="15%">Total</th>
                        <th width="15%">Action</th>
                    </tr>
            ';

            $count = 0;
            foreach($this->cart->contents() as $items)
            {
                $count++;
                $output .= '
                <tr>
                    <td>'.$items["Title"].'</td>
                    <td>'.$items["Price"].'</td>
                    <td>'.$items["subtotal"].'</td>
                    <td><button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory id" '.$items["rowid"].' "Remove</button></td>
                <tr>    
                ';
            

            $output .= '
                <tr>
                    <td colspan="4" aligh="center">Total</td>
                    <td>'.$this->cart->total().'</td>
                </tr>
                </table>
                
                </div>
            ';

            if($count == 0)
            {
                $output = '<h3 align="center">Cart is Empty</h3>'; 
            }
            return $output;
    }
  }
}