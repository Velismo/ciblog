<?php
    class Category_model extends CI_Model{
        public __construct(){
            $this->load->database();
        }

        public function create_category(){
            $data = array(
                'name' => $this=>input->post('name')
            );
        }
    }