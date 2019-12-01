<?php

class CheckIn extends CI_Controller {
    public function __construct() {        
        parent::__construct();
    }

    public function index() {
        if (isset($_SESSION['logged_in'])) {
            $this->load->view('partial');
            $this->load->view('header');
            $this->load->view('checkIn');
        } else {
            redirect('Forbidden');
        }
    }
    public function ambilkamar() {
        if (isset($_SESSION['logged_in'])) {
            $nama = $this->input->post('nama',true);
            $nik = $this->input->post('nik',true);
            $this->PelangganModel->addPelanggan($nama,$nik);
            $data = [
                'id_fasilitas' => $this->input->post('fasilitas',true),
                'no_kamar' => $this->input->post('kamar',true),
                'nik'=> $nik,
                'admin' => $_SESSION['username'],
                'tanggal' => date('Y-m-d'),
                'is_checkout' => '0'
            ];
            $this->CheckInModel->checkin($data);
            $kamar = $this->input->post('kamar',true);
            $this->KamarModel->updatekamar($kamar,'check_in');
            redirect('Home');
        } else {
            redirect('Forbidden');
        }
    }
}
