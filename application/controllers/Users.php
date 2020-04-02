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
            $this->load->view('users/login', $data);
            $this->load->view('layouts/footer');

        } else {

            //Gets email for the login
            $email = $this->input->post('email');

            //Gets encrypted password for the login
            $password = md5($this->input->post('password'));

            //Login user
            $user_id = $this->User_model->login($email, $password);

            if($user_id){
                //Session in progress
                $user_data = array(
                    'user_id' => $user_id,
                    'email' => $email,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);

                //Login success message
                $this->session->set_flashdata('user_loggedin', 'Log in success');

                redirect('home');
            } else {

                //Login failure message
                $this->session->set_flashdata('login_failed', 'Log in failed');
                redirect('users/login');

            }
        }

    }

    //Logout user
    public function logout(){

        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');

        //Logout message
        $this->session->set_flashdata('user_loggedout', 'Logged out');

        redirect('users/login');
    }

    //cheking if email exsists
    public function check_email_exists($email) {
        $this->form_validation->set_message('check_email_exists', 'This email has already been used.');
        
        if($this->customer_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    }
}
