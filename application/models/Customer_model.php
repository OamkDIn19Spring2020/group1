<?php 
    class Customer_model extends CI_Model {
        public function register($enc_password){
                //Data array for cutomer
            $data = array(
                'name' => $this->input->post('name'),
                'lastname' => $this->input->post('lastname'),
                'dateofbirth' => $this->input->post('dateofbirth'),
                'address' => $this->input->post('address'),
                'zipcode' => $this->input->post('zipcode'),
                'city' => $this->input->post('city'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'password' => $enc_password


            );

            //Insert customer
            return $this->db->insert('customer', $data);
        }
    }