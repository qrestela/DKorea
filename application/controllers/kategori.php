<?php

class Kategori extends CI_Controller{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login</div>');
            redirect('auth/login');

        }

    }

    public function blouse(){
        $data['blouse'] = $this->model_kategori->data_blouse()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('blouse', $data);
        $this->load->view('templates/footer');
    }

    public function rok(){
        $data['rok'] = $this->model_kategori->data_rok()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rok', $data);
        $this->load->view('templates/footer');
    }


    public function sepatu(){
        $data['sepatu'] = $this->model_kategori->data_sepatu()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sepatu', $data);
        $this->load->view('templates/footer');
    }

}
?>