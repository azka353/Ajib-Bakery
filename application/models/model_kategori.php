<?php

class model_kategori extends CI_Model
{
    public function data_roti()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'roti'));
    }

    public function data_cake()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'cake'));
    }

    public function data_minuman()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'minuman'));
    }
}
