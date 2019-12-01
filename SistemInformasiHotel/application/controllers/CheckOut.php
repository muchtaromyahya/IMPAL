<?php

class CheckOut extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('partial');
        $this->load->view('checkOut');
    }
    public function getDetail($id) {
        $query = $this->CheckOutModel->detaildata($id);
        // $data = [
        //     'id' => $query->id,
        //     'id_fasilitas' => $query->id_fasilitas,
        //     'no_kamar' => $query->no_kamar,
        //     'nik' => $query->nik,
        //     'admin'=> $_SESSION['username'],
        //     'tanggal' => $query->tanggal,
        //     'nama' => $query->nama,
        // ];
        $this->load->view('header');
        $this->load->view('partial');
        if ($query->num_rows()==1) {
            $passdata['check']=true;
            $passdata['data']=$query->result();
            
        } else {
            $passdata['check']=false;
        }
        $this->load->view('detailData',$passdata);
        
        


    }
}
