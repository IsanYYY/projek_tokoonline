<?php

class Registrasi extends CI_Controller{
    public function index()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password_1','Password','required|matches[passsword_2]');
        $this->form_validation->set_rules('password_2','Password','required|matches[passsword_1]');

        if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header');
        $this->load->view('registarsi');
        $this->load->view('templates/footer');
        } else {
            $data = array(
                'id'        => '',
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password_1'),
                'role_id'   => 2,
            );

            $this->db->insert('tb_user','$data');
            redirect('auth/login');
        }
    }
}