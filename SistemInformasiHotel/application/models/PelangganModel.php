<?php

class PelangganModel extends CI_Model {
    public function addPelanggan($nama,$nik) {
        $cust = [
                'nik'  =>$nik,
                'nama' =>$nama
        ];
        

        $validate = $this->PelangganModel->validate($nik);
        if ($validate->num_rows()==1) {
            return $cust;
        } else {
            $this->db->insert('customer',$cust);
            return $cust;
        }
    }
    public function getAllData() {
        $result=$this->db->get('customer');
        return $result;
    }
    
    
    public function validate($nik) {
        # $password=md5($password);
         $query= $this->db->query("SELECT * FROM customer WHERE nik = '$nik' ");
         return $query;
         
     }
}


?>
