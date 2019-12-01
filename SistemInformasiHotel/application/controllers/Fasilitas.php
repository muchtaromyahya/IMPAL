<?php

class Fasilitas extends CI_Controller {
    public function index() {
        $this->load->view('partial');
        $this->load->view('header');
        $this->load->view('fasilitas');

    }
}

?>