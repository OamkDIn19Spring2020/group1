<?php
    class Home extends CI_Controller{
        public function index(){

            $data['title'] = 'Page content';

            $this->load->view('layouts/header');
            $this->load->view('layouts/body');
            $this->load->view('contents/index', $data);
            $this->load->view('layouts/footer');

        }
    }