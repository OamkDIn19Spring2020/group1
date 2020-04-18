<?php
//Registeration function
class Sellers extends CI_Controller {
    public function register(){
        $data['title'] = 'Sign up as seller';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
        

        if($this->form_validation->run() === FALSE) {
            $this->load->view('layouts/header');
            $this->load->view('layouts/body');
            $this->load->view('sellers/register', $data);
            $this->load->view('layouts/footer');

        } else {
            // Password encryption
            $enc_password = md5($this->input->post('password'));

            $this->seller_model->register($enc_password);

            //Message shown once singed up
            $this->session->set_flashdata('users_registered', 'Registartion succees you can now log in');

            redirect('login');

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
            $this->load->view('login', $data);
            $this->load->view('layouts/footer');

        } else {

            //Gets email for the login
            $email = $this->input->post('email');

            //Gets encrypted password for the login
            $password = md5($this->input->post('password'));

            //Login user
            $idSeller = $this->seller_model->login($email, $password);

            if($idSeller){
                //Session in progress
                $seller_data = array(
                    'seller_id' => $idSeller,
                    'email' => $email,
                    'seller_logged_in' => true
                );

                $this->session->set_userdata($seller_data);

                //Login success message
                $this->session->set_flashdata('users_loggedin', 'Log in success');

                redirect('login');
            } else {

                //Login failure message
                $this->session->set_flashdata('login_failed', 'Log in failed');
                redirect('login');

            }
        }

    }

    //Logout user
    public function logout(){

        $this->session->unset_userdata('sellers_logged_in');
        $this->session->unset_userdata('seller_id');
        $this->session->unset_userdata('email');

        //Logout message
        $this->session->set_flashdata('users_loggedout', 'Logged out');

        redirect('home');
    }

    //cheking if email exsists
    public function check_email_exists($email) {
        $this->form_validation->set_message('check_email_exists', 'This email has already been used.');
        
        if($this->seller_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    }
}