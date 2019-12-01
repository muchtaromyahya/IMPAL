<?php

class KamarModel extends CI_Model {
    public function updatekamar($kamar,$check) {
        if ($check == 'check_in') {
            $data = [
                'terisi' => '1'
            ];
        } else {
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
}
