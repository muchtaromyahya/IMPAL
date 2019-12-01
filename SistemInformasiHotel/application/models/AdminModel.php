<?php

class AdminModel extends CI_Model {
    public function validate($username,$password) {
       $password=md5($password);
        $query= $this->db->query("SELECT * FROM admin WHERE username = BINARY '$username' and password='$password'");
        return $query;
        
    }

    public function update() {
        $nama = $this->input->post('nama',true);
        $password = md5($this->input->post('password',true));
        $data = [
            'name' => $nama,
            'password' => $password
        ];
        $this->db->where('username',$_SESSION['username']);
        $this->db->update('admin',$data);
        $this->session->set_userdata('name', $data['name']);


    }

}

?>