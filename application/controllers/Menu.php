<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function sayuran()
    {
        $data['data_sayur'] = $this->db->get('master_sayuran')->result_array();
        $this->load->view('list_sayuran', $data);
    }

    public function buah()
    {
        $data['data_sayur'] = $this->db->get('master_buah')->result_array();
        $this->load->view('list_buah', $data);
    }

    public function daging()
    {
        $data['data_sayur'] = $this->db->get('master_daging')->result_array();
        $this->load->view('list_daging', $data);
    }

    public function ikan()
    {
        $data['data_sayur'] = $this->db->get('master_ikan')->result_array();
        $this->load->view('list_ikan', $data);
    }

    public function jajanan()
    {
        $data['data_sayur'] = $this->db->get('master_jajanan')->result_array();
        $this->load->view('list_jajanan', $data);
    }
}
