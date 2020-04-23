<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_cart extends CI_Controller {

    function index()
    {
        $this->load->model("shopping_cart_model");
        $data['shoppingcart'] = $this->shopping_cart_model->fecth_all();
        $this->load->view('layouts/header');
        $this->load->view('layouts/body');
        $this->load->view('shopping_cart', $data);
        $this->load->view('layouts/footer');
    }
}