<?php 
    class Model_Kategori extends CI_Model {
        // get_where digunakan data yang lebih spesifik dari suatu table, misal hanya menampilkan data yang kategori Bibit Tani
        public function data_pria(){
             return $this->db->get_where("tb_barang", array('kategori' => 'pria'));
        }

        public function data_wanita(){
             return $this->db->get_where("tb_barang", array('kategori' => 'wanita'));
        }

        public function data_aksesoris(){
             return $this->db->get_where("tb_barang", array('kategori' => 'aksesoris'));
        }

        public function data_buku(){
             return $this->db->get_where("tb_barang", array('kategori' => 'buku'));
        }
    }
?>