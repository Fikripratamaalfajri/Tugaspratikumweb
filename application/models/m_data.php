<?php

class M_data extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('user');
    }

    function tambah_data($data,$table)
    {
        $this->db->insert($data,$table);
    }
}
