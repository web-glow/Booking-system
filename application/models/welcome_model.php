<?php

class Welcome_model extends CI_Model {



    public function first_query() {
        $query = $this->db->query('SELECT * FROM user');
        return $query->result();
    }

    public function retrieve_user_info() {
        //query: SQL code
        //return result
    }

    public function retrieve_images() {

    }

    public function simple_insert($username, $pw) {

        // $data = array(
        //     'username' => $username,
        //     'password' => $pw
        // );

        // $this->db->insert('user', $data);
    }

 
}


?>