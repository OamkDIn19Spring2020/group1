<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppingcart extends CI_Controller {

    public function index(){
        $data['title'] = 'Shopping cart';
        $data['items'] = $this->shoppingcart_model->get_items();

       
        $this->load->view('layouts/header');
        $this->load->view('layouts/body');
        $this->load->view('shoppingcart/index', $data);
        $this->load->view('layouts/footer');
    }
    
    public function add_to_cart(){

        $data = array(
            'title' => $this->input->post('title'),
            'idProducts' => $this->input->post('idProducts'),
            'price' => $this->input->post('price'),
        );

        $this->cart->insert($data);
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
                    <td>'.number_format($items['price']).'</td>
                    <td>'.number_format($items['totalPrice']).'</td><br>
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
