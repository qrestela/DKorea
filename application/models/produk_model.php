<?php
class Produk_model extends CI_Model {
    public function cari_produk($keyword) {
        $this->db->like('nama_brg', $keyword);
        $query = $this->db->get('tb_barang');  // 'barang' adalah nama tabel produk Anda
        return $query->result();
    }
}


