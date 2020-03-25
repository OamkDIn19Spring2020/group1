<?php

class Customers extends CI_Controller {
    public function register(){
        $data['title'] = 'Sign Up';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('layouts/header');
            $this->load->view('layouts/body');
            $this->load->view('customers/register', $data);
            $this->load->view('layouts/footer');

        } else {
            // Password encryption

            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            //Message once singed up

            $this->session->set_flashdata('user_registered', 'Registartion succees you can now log in');

            redirect('home');

        }
    }
    
}
