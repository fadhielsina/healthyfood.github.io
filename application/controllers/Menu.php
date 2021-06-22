<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    function tambah_keranjang()
    {
        $id_produk = $_POST['id_sayur'];
        $qty = $_POST['sayur'];
        $harga_sayur = $_POST['harga_sayur'];
        $i = 0;
        $arr = [];
        foreach ($id_produk as $data) {
            if ($qty[$i] != 0) {
                array_push(
                    $arr,
                    [
                        'user_id' => $this->session->userdata('id'),
                        'menu_id' => $data,
                        'qty' => $qty[$i],
                        'subtotal' => $qty[$i] * $harga_sayur[$i]
                    ]
                );
            }
            $i++;
        }
        $this->db->insert_batch('user_keranjang', $arr);
        redirect('menu/keranjang');
    }

    public function sayuran()
    {
        $login_act = 0;
        if ($this->session->userdata('email')) {
            $login_act = 1;
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'sayuran';
        $data['data_sayur'] = $this->db->get_where('master_menu', ['kategori' => 'sayur'])->result_array();
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
        $data['data_sayur'] = $this->db->get_where('master_menu', ['kategori' => 'buah'])->result_array();
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
        $data['data_sayur'] = $this->db->get_where('master_menu', ['kategori' => 'daging'])->result_array();
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
        $data['data_sayur'] = $this->db->get_where('master_menu', ['kategori' => 'ikan'])->result_array();
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
        $data['data_sayur'] = $this->db->get_where('master_menu', ['kategori' => 'jajanan'])->result_array();
        $this->load->view('list_jajanan', $data);
    }

    public function keranjang()
    {
        $login_act = 0;
        if ($this->session->userdata('email')) {
            $login_act = 1;
        } else {
            redirect('welcome/login');
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'keranjang';
        $data['data_sayur'] = $this->db->select('*')
            ->from('user_keranjang uk')
            ->join('master_menu menu', 'menu.id = uk.menu_id')
            ->where('uk.user_id', $this->session->userdata('id'))
            ->get()->result_array();
        $this->load->view('keranjang', $data);
    }

    public function checkout()
    {
        $login_act = 0;
        $pasar_id = null;
        if ($this->session->userdata('email')) {
            $login_act = 1;
            $pasar_id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row()->pasar_id;
        } else {
            redirect('welcome/login');
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'checkout';
        $data['data_sayur'] = $this->db->select('*')
            ->from('user_keranjang uk')
            ->join('master_menu menu', 'menu.id = uk.menu_id')
            ->where('uk.user_id', $this->session->userdata('id'))
            ->get()->result_array();
        $data['pasar'] = $this->db->get_where('master_pasar', ['id' => $pasar_id])->row();
        $this->load->view('checkout', $data);
    }

    public function pembayaran()
    {
        $login_act = 0;
        if ($this->session->userdata('email')) {
            $login_act = 1;
        } else {
            redirect('welcome/login');
        }
        $data['login_act'] = $login_act;
        $data['page'] = 'pembayaran';
        $data['total'] = $this->db->select_sum('subtotal')->where('user_id', $this->session->userdata('id'))->get('user_keranjang')->row();
        $this->load->view('pembayaran', $data);
    }
}
