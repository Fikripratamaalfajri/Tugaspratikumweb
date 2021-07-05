<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    function index()
    {
        $data['user'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_tampil', $data);
    }

    function tambah_dat()
    {
        $nama = $this ->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');
        
        $data = array
    }
}

