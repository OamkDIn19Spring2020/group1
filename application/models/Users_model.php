<?php 
    class Users_model extends CI_Model {
        public function register($enc_password){
                //Data array for cutomers
            $data = array(
                'firstname' => $this->input->post('name'),
                'lastname' => $this->input->post('lastname'),
                'date_of_birth' => $this->input->post('dateofbirth'),
                'streetaddress' => $this->input->post('streetaddress'),
                'zipcode' => $this->input->post('zipcode'),
                'city' => $this->input->post('city'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'password' => $enc_password
            );

            //Insert customer
            return $this->db->insert('customers', $data);
        }

        // Cheking if email exists
        public function check_email_exists($email){
            $query = $this->db->get_where('customers', array('email' => $email));

            if(empty($query->row_array())){
                return true;
            } else {
                return false;
            }
        }
    }