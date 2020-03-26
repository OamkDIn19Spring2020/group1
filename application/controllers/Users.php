<?php
//Registeration function
class Users extends CI_Controller {
    public function register(){
        $data['title'] = 'Sign Up';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('layouts/header');
            $this->load->view('layouts/body');
            $this->load->view('users/register', $data);
            $this->load->view('layouts/footer');

        } else {
            // Password encryption

            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            //Message shown once singed up

            $this->session->set_flashdata('user_registered', 'Registartion succees you can now log in');

            redirect('home');

        }
    }

        //Login function

        public function login(){
        $data['title'] = 'Sing In';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('layouts/header');
            $this->load->view('layouts/body');
            $this->load->view('customers/login', $data);
            $this->load->view('layouts/footer');

        } else {

            //Message shown once singed up

            $this->session->set_flashdata('user_loggedin', 'Log in success');

            redirect('home');

        }
    }

    //cheking if email exsists
    function check_email_exists($email) {
        $this->form_validation->set_message('check_email_exists', 'This email has already been used.');
        
        if($this->customer_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    }
}
