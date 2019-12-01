<?php

class Fasilitas extends CI_Controller {
    public function index() {
        if (isset($_SESSION['logged_in'])) {
            $this->load->view('partial');
            $this->load->view('header');
            $this->load->view('fasilitas');
        } else {
            redirect('Forbidden');
        }
    }
}

?>