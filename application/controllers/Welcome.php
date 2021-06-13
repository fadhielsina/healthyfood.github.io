<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function login()
	{
		$this->load->view('login');
	}

	function register()
	{
		$this->load->view('register');
	}

	function pilihan_pasar()
	{
		$this->load->view('pilihan_pasar');
	}
}
