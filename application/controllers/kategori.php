<?php 
    class Kategori extends CI_Controller{
        public function pria(){
            $data['pria']   = $this->model_kategori->data_pria()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pria', $data);
            $this->load->view('templates/footer');
        }

        public function wanita(){
            $data['wanita']   = $this->model_kategori->data_wanita()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('wanita', $data);
            $this->load->view('templates/footer');
        }

        public function aksesoris(){
            $data['aksesoris']   = $this->model_kategori->data_aksesoris()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('aksesoris', $data);
            $this->load->view('templates/footer');
        }

        public function buku(){
            $data['buku']   = $this->model_kategori->data_buku()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('buku', $data);
            $this->load->view('templates/footer');
        }
    }
?>