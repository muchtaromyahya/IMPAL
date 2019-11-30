<?php

class AdminModel extends CI_Model {
    public function validate($username,$password) {
       # $password=md5($password);
        $query= $this->db->query("SELECT * FROM admin WHERE username = BINARY '$username' and password='$password'");
        return $query;
        
    }

}

?>