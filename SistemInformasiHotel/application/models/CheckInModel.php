<?php

class CheckInModel extends CI_Model {
    
    public function checkin($data) {
        $this->db->set('id','UUID()',FALSE);
        $this->db->insert('check_in',$data);
        
    }
    public function updatecheckin($id) {
        $data = ['is_checkout' => '1'];
        $this->db->where('id',$id);
        $this->db->update('check_in',$data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getalldata() {
        return true;
    }
    #ambil data checkin yang belum checkout
    public function getdatacheckin() {
        $this->db->select('*');
        $this->db->from('check_in');
        $this->db->join('customer', 'check_in.nik = customer.nik');
        $this->db->where('is_checkout','0');
        $result=$this->db->get();
        return $result;
    }
}

?>