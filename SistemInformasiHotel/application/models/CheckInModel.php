<?php

class CheckInModel extends CI_Model {
    
    public function checkin($data) {
        $this->db->insert('check_in',$data);
    }
    public function updatecheckin($no_kamar) {
        $data = ['is_chechout' => '1'];
        $this->db->where('no_kamar',$no_kamar);
        $this->db->insert('check_in',$data);
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