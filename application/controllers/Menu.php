<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function sayuran()
    {
        $data['data_sayur'] = [
            ['nama' => 'Brokoli', 'img' => 'brokoli.jpg', 'harga' => 30000],
            ['nama' => 'Buncis', 'img' => 'buncis.jpg', 'harga' => 7000],
            ['nama' => 'Kol', 'img' => 'kol.jpg', 'harga' => 12000],
            ['nama' => 'Sawi', 'img' => 'sawi.jpg', 'harga' => 6500],
            ['nama' => 'Lobak', 'img' => 'lobak.jpg', 'harga' => 4500],
        ];
        $this->load->view('list_sayuran', $data);
    }

    public function buah()
    {
        $data['data_sayur'] = [
            ['nama' => 'Apel', 'img' => 'apel.jpg', 'harga' => 25000],
            ['nama' => 'Pir', 'img' => 'pir.jpg', 'harga' => 30000],
            ['nama' => 'Naga', 'img' => 'naga.jpg', 'harga' => 20000],
            ['nama' => 'Pisang', 'img' => 'pisang.jpg', 'harga' => 15000],
            ['nama' => 'Durian', 'img' => 'durian.jpg', 'harga' => 55000],
        ];
        $this->load->view('list_buah', $data);
    }

    public function daging()
    {
        $data['data_sayur'] = [
            ['nama' => 'Sapi', 'img' => 'daging_sapi.jpg', 'harga' => 150000],
            ['nama' => 'Kambing', 'img' => 'daging_kambing.jpg', 'harga' => 139000],
            ['nama' => 'Ayam', 'img' => 'daging_ayam.jpg', 'harga' => 35000],
            ['nama' => 'Bebek', 'img' => 'daging_bebek.jpg', 'harga' => 43000],
            ['nama' => 'Babi', 'img' => 'daging_babi.jpg', 'harga' => 90000],
        ];
        $this->load->view('list_daging', $data);
    }

    public function ikan()
    {
        $data['data_sayur'] = [
            ['nama' => 'Patin', 'img' => 'ikan_patin.jpg', 'harga' => 34000],
            ['nama' => 'Nila', 'img' => 'ikan_nila.jpg', 'harga' => 26000],
            ['nama' => 'Kakap', 'img' => 'ikan_kakap.jpg', 'harga' => 90000],
            ['nama' => 'Gurame', 'img' => 'ikan_gurame.jpg', 'harga' => 60000],
            ['nama' => 'Tongkol', 'img' => 'ikan_tongkol.jpg', 'harga' => 34000],
        ];
        $this->load->view('list_ikan', $data);
    }

    public function jajanan()
    {
        $data['data_sayur'] = [
            ['nama' => 'Dadar Gulung', 'img' => 'dadar_gulung.jpg', 'harga' => 2000],
            ['nama' => 'Kue Lapis', 'img' => 'kue_lapis.jpg', 'harga' => 1000],
            ['nama' => 'Onde Onde', 'img' => 'ondeonde.jpg', 'harga' => 1000],
            ['nama' => 'Bacang', 'img' => 'bacang.jpg', 'harga' => 3000],
            ['nama' => 'Risoles', 'img' => 'risoles.jpg', 'harga' => 1000],
        ];
        $this->load->view('list_jajanan', $data);
    }
}
