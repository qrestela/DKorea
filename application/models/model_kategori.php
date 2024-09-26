<?php 
    class Model_kategori extends CI_Model{

        public function data_blouse(){
            return $this->db->get_where("tb_barang", array('kategori' => 'blouse'));
        }

        public function data_rok(){
            return $this->db->get_where("tb_barang", array('kategori' => 'rok'));
        }

        public function data_sepatu(){
            return $this->db->get_where("tb_barang", array('kategori' => 'sepatu'));
        }

    }

?>