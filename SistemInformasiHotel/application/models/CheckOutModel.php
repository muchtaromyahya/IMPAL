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
    public function gethari($date) {
        $datenow = date('Y-m-d');
        $hari = date_diff(date_create($datenow),date_create($date));
        if ($hari->format('%a')== '0') {
            return '1';
        }
        return $hari->format('%a');
    }
    public function getbiaya($data) {
        $hari = $this->CheckOutModel->gethari($data->tanggal);
        $kamar = $this->KamarModel->getkamar($data->no_kamar)->result();
        $fasilitas = $this->FasilitasModel->getdata($data->id_fasilitas)->result();
        $harga = (int)$hari * ((int)$kamar[0]->harga + (int)$fasilitas[0]->harga);

        return $harga;

    }
    public function addkwitansi($id) {
        $datacheckin = $this->CheckInModel->getdata($id)->result();
        
        $data = [
            'id' =>$datacheckin[0]->id,
            'nik'=>$datacheckin[0]->nik,
            'tanggal_checkin'=>$datacheckin[0]->tanggal,
            'tanggal_checkout'=>date('Y-m-d'),
            'total_biaya'=>$this->CheckOutModel->getbiaya($datacheckin[0]),
        ];
        $this->db->insert('kwitansi',$data);

    }

}


?>