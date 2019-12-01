<?php

class CheckOutModel extends CI_Model {
    public function detaildata($id) {
        $this->db->select('*');
        $this->db->from('check_in');
        $this->db->join('customer', 'check_in.nik = customer.nik');
        $this->db->where('id',$id);
        $this->db->where('is_checkout','0 ');
        $result = $this->db->get();
        return $result;
        
    }

}


?>