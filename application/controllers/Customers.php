<?php
//Registeration function
class Customers extends CI_Controller {
    public function register(){
        $data['title'] = 'Sign up as customer';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
        
        if($this->form_validation->run() === FALSE) {
            $this->load->view('layouts/header');
            $this->load->view('layouts/body');
            $this->load->view('customers/register', $data);
            $this->load->view('layouts/footer');

        } else {
            // Password encryption
            $enc_password = md5($this->input->post('password'));

            $this->customer_model->register($enc_password);

            //Message shown once singed up
            $this->session->set_flashdata('users_registered', 'Registration success, you can now login');

            redirect('login');

        }
    }
        //Login function
        public function login(){
        $data['title'] = 'Sign In';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('layouts/header');
            $this->load->view('layouts/body');
            $this->load->view('customers/login', $data);
            $this->load->view('layouts/footer');

        } else {

            //Gets customers email for the login
            $email = $this->input->post('email');

            //Gets customers encrypted password for the login
            $password = md5($this->input->post('password'));

            //Login customer
            $idCustomers = $this->customer_model->login($email, $password);

            if($idCustomers){
                //Session in progress
                $customer_data = array(
                    'customer_id' => $idCustomers,
                    'email' => $email,
                    'logged_in_customer' => true
                );

                $this->session->set_userdata($customer_data);
                //Login success message
                $this->session->set_flashdata('users_loggedin', 'Login success');
                
                redirect('login');
            } else {

                //Login failure message
                $this->session->set_flashdata('login_failed', 'Login failed');
                redirect('login');

            }
        }
    }

    //Logout user
    public function logout(){

        $this->session->unset_userdata('logged_in_customer');
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('email');

        //Logout message
        $this->session->set_flashdata('users_loggedout', 'Logged out');

        redirect('customers/login');
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
