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
                $this->load->view('sellers/login', $data);
                $this->load->view('layouts/footer');
    
            } else {
    
                //Gets customers email for the login
                $email = $this->input->post('email');
    
                //Gets customers encrypted password for the login
                $password = md5($this->input->post('password'));
    
                //Login customer
                $idSellers = $this->seller_model->login($email, $password);
    
                if($idSellers){
                    //Session in progress
                    $seller_data = array(
                        'seller_id' => $idSellers,
                        'email' => $email,
                        'logged_in_seller' => true
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
    
            $this->session->unset_userdata('logged_in_seller');
            $this->session->unset_userdata('seller_id');
            $this->session->unset_userdata('email');
    
            //Logout message
            $this->session->set_flashdata('users_loggedout', 'Logged out');
    
            redirect('sellers/login');
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