<?php

class Kamar extends CI_Controller {
    public function index() {
        if (isset($_SESSION['logged_in'])) {
            $this->load->view('partial');
            $this->load->view('header');
            $this->load->view('kamar');
        } else {
            redirect('Forbidden');
        }
    }
}

?>