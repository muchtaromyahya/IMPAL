<?php

class PelangganModel extends CI_Model {
    public function getAlldata() {
        $result=$this->db->get('customer');
        return $result;
    }    
}


?>
