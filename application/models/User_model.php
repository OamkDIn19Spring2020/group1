<?php 
    class User_model extends CI_Model {
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

            //Insert register data to customer or sellers,
            //Need to addd if else statement to determine wich tabel data will go into.

            return $this->db->insert('customers', $data);
        }

        //Log in user function
        public function longin($email, $password){

            //Validation process
            $this->db->where('email', $email);
            $this->db->where('password', $password);

            $result = $this->db->get('customers', 'sellers');

            if ($result->num_rows() === 1){
                return $result->row(0)->id;
            } else {
                return false;
            }

        }


        // Cheking if email exists
        public function check_email_exists($email){
            $query = $this->db->get_where('customers','sellers', array('email' => $email));

            if(empty($query->row_array())){
                return true;
            } else {
                return false;
            }
        }
    }