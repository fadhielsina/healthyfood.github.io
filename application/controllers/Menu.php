<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function sayuran()
    {
        $login_act = 0;
        if ($this->session->userdata('email')) {
            $login_act = 1;
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'sayuran';
        $data['data_sayur'] = $this->db->get('master_sayuran')->result_array();
        $this->load->view('list_sayuran', $data);
    }

    public function buah()
    {
        $login_act = 0;
        if ($this->session->userdata('email')) {
            $login_act = 1;
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'buah';
        $data['data_sayur'] = $this->db->get('master_buah')->result_array();
        $this->load->view('list_buah', $data);
    }

    public function daging()
    {
        $login_act = 0;
        if ($this->session->userdata('email')) {
            $login_act = 1;
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'daging';
        $data['data_sayur'] = $this->db->get('master_daging')->result_array();
        $this->load->view('list_daging', $data);
    }

    public function ikan()
    {
        $login_act = 0;
        if ($this->session->userdata('email')) {
            $login_act = 1;
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'ikan';
        $data['data_sayur'] = $this->db->get('master_ikan')->result_array();
        $this->load->view('list_ikan', $data);
    }

    public function jajanan()
    {
        $login_act = 0;
        if ($this->session->userdata('email')) {
            $login_act = 1;
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'jajanan';
        $data['data_sayur'] = $this->db->get('master_jajanan')->result_array();
        $this->load->view('list_jajanan', $data);
    }

    public function keranjang()
    {
        $login_act = 0;
        if ($this->session->userdata('email')) {
            $login_act = 1;
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'keranjang';
        $data['data_sayur'] = $this->db->get('master_jajanan')->result_array();
        $this->load->view('keranjang', $data);
    }
}
