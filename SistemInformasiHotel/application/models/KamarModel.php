<?php

class KamarModel extends CI_Model {
    public function updatekamar($kamar,$check) {
        if ($check == 'check_in') {
            $data = [
                'terisi' => '1'
            ];
        } else if ($check == 'check_out') {
            $data = [
                'terisi'=> '0'
            ];
        }
        $this->db->where('no_kamar',$kamar);
        $this->db->update('kamar',$data);
    }
    public function getallkamar() {
        $this->db->where('terisi','0');
        $result=$this->db->get('kamar');
        return $result;
    }
    public function getall() {
        $result=$this->db->get('kamar');
        return $result;
    }
    public function getkamar($nokamar) {
        $this->db->where('no_kamar',$nokamar);
        $result=$this->db->get('kamar');
        return $result;
    }
}
