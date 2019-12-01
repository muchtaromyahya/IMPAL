<?php

class Home extends CI_Controller
{
    public function index()
    {
        if (isset($_SESSION['logged_in'])) {
            $this->load->view('partial');
            $this->load->view('header');
            $this->load->view('home');
            $this->load->view('setting');

        } else {
            redirect('Forbidden');
        }
    }
    public function ganti()
    {
        if (isset($_SESSION['logged_in'])) {
        $this->AdminModel->update();
        redirect('Home');
        } else {
            redirect('Forbidden');
        } 
    }
}
