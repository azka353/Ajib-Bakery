<?php

class kategori extends CI_Controller
{
    public function roti()
    {
        $data['roti'] = $this->model_kategori->data_roti()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('roti', $data);
        $this->load->view('templates/footer');
    }

    public function cake()
    {
        $data['cake'] = $this->model_kategori->data_cake()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cake', $data);
        $this->load->view('templates/footer');
    }

    public function minuman()
    {
        $data['minuman'] = $this->model_kategori->data_minuman()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman', $data);
        $this->load->view('templates/footer');
    }
}
