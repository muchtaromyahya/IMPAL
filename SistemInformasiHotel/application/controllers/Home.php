<?php

class Home extends CI_Controller {
    public function index() {
        if ($_SESSION['logged_in']) {
            $this->load->view('partial');
            $this->load->view('header');
            $this->load->view('home');
        } else {
            redirect('Forbidden');
        }
    }
}


?>