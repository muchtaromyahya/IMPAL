<?php

class LaporanModel extends CI_Model {
    public function getdata($id) {
        $this->db->select('*');
        $this->db->from('kwitansi');
        $this->db->join('check_out','check_out.id=kwitansi.id');
        $this->db->join('customer','check_out.nik=customer.nik');
        $this->db->where('check_out.id',$id);
        $result = $this->db->get();
        return $result;
    }
    public function getalldata() {
        $this->db->select('*');
        $this->db->from('kwitansi');
        $this->db->join('check_out','check_out.id=kwitansi.id');
        $this->db->join('customer','check_out.nik=customer.nik');
        $result = $this->db->get();
        return $result;
    }
}

?>