<?php

        Class login_database extends CI_Model {

               
                public function __construct() {
                        $this->load->database();
                }
                

                // Read data using username and password
                public function login($data) {
                        $condition = "weblogin =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'"; 
                        $this->db->select('*'); 
                        $this->db->from('usuarios'); 
                        $this->db->where($condition);
                        $this->db->limit(1);
                        $query = $this->db->get();

                        if ($query->num_rows() == 1) {//Existe el usuario en la base de datos
                                
                                return true;

                        } else {//No existe

                                return false;
                        }
                       
                }

                // Read data from database to show data in admin page
                public function read_user_information($username) {
                        
                        //select * from usuarios where weblogin='$username'
                        $condition = "weblogin =" . "'" . $username . "'"; 
                        $this->db->select('*');
                        $this->db->from('usuarios'); 
                        $this->db->where($condition);
                        $this->db->limit(1);
                        $query = $this->db->get();

                        if ($query->num_rows() == 1) {
                                return $query->result();
                        } else {
                                return false;
                        }
                }

        }

?>