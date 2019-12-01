<?php

class FasilitasModel extends CI_Model {
    public function getdata($id_fasilitas) {
        $this->db->where('id_fasilitas',$id_fasilitas);
        $result = $this->db->get('fasilitas');
        return $result;
    }
}

?>