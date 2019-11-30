<?php

class Login extends CI_Controller {
    public function index() {
        $this->load->view('partial');
        $this->load->view('login');
    }

    public function signin() {
        $username=$this->input->post('username',true);
        $password=$this->input->post('password',true);
        $validate=$this->AdminModel->validate($username,$password);
        if($validate->num_rows()==1){
            $data=$validate->row_array();
            $uname=$data['username'];
            $name=$data['name'];
            $dataSession = array (
                'username' => $uname,
                'name' => $name,
                'logged_in' => true
            );
            $this->session->set_userdata($dataSession);
            $this->session->set_flashdata('success','Login Berhasil');
            redirect('Home');
        } else {
            $this->session->set_flashdata('alert','Login Gagal!');
            redirect('Login');
        }
    }

    public function signout(){
        session_destroy();        
        redirect('Login');
        
    }
}

?>