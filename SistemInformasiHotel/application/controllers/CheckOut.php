<?php

class CheckOut extends CI_Controller {
    public function index() {
        $this->load->view('partial');
        $this->load->view('header');
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
        $this->load->view('partial');
        $this->load->view('header');
        if ($query->num_rows()==1) {
            $passdata['check']=true;
            $passdata['data']=$query->result();
            
        } else {
            $passdata['check']=false;
        }
        $this->load->view('detailData',$passdata);
    }
    public function docheckout($id) {
        $data = [
            'id' => $id,
            'id_fasilitas' => $this->input->post('fasilitas',true),
            'no_kamar' => $this->input->post('kamar',true),
            'nik' => $this->input->post('nik',true),
            'admin' => $_SESSION['username'],
            'tanggal' => date('Y-m-d')
        ];
        if ($this->CheckInModel->updatecheckin($id)) {
            $this->db->insert('check_out',$data);
            $this->KamarModel->updatekamar($data['no_kamar'],'check_out');
            $this->CheckOutModel->addkwitansi($id);
            
        } 
        redirect('CheckOut');
    }
}
